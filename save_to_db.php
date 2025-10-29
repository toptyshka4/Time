<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Подключение системы аутентификации
require_once 'auth_system.php';

// Проверка авторизации
if (!$auth->checkAuth()) {
    echo json_encode(['success' => false, 'message' => 'Неавторизованный доступ']);
    exit;
}

// Получение текущего пользователя
$currentUser = $auth->getCurrentUser();

// Конфигурация базы данных
$db_config = [
    'host' => 'localhost',
    'dbname' => 'train_schedule_control',
    'username' => 'schedule_app', // Замените на ваше имя пользователя
    'password' => 'app_password'  // Замените на ваш пароль
];

// Функция для подключения к базе данных
function connectDB($config) {
    try {
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
        $pdo = new PDO($dsn, $config['username'], $config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        error_log('Database connection failed: ' . $e->getMessage());
        return null;
    }
}

// Функция для проверки прав доступа
function checkOperationPermission($user, $operationData, $pdo) {
    if ($user['role'] === 'viewer') {
        return ['success' => false, 'message' => 'Недостаточно прав для внесения данных'];
    }
    
    if ($user['role'] === 'operator') {
        // Проверяем, есть ли уже запись для этой операции
        $date = date('Y-m-d', $operationData['timestamp'] / 1000);
        $stmt = $pdo->prepare("
            SELECT COUNT(*) FROM operation_actual_times 
            WHERE operation_date = ? AND operation_id = ? AND train_id = ?
        ");
        $stmt->execute([
            $date,
            $operationData['operation_id'],
            $operationData['param_id']
        ]);
        $exists = $stmt->fetchColumn();
        
        if ($exists > 0) {
            return ['success' => false, 'message' => 'Оператор не может изменять существующие записи'];
        }
    }
    
    return ['success' => true];
}

// Функция для сохранения одной операции
function saveSingleOperation($pdo, $operationData, $user) {
    // Проверка прав
    $permissionCheck = checkOperationPermission($user, $operationData, $pdo);
    if (!$permissionCheck['success']) {
        return $permissionCheck;
    }
    
    try {
        $date = date('Y-m-d', $operationData['timestamp'] / 1000);
        $fact_start = $operationData['fact_start'] ? date('H:i:s', $operationData['fact_start'] / 1000) : null;
        $fact_end = $operationData['fact_end'] ? date('H:i:s', $operationData['fact_end'] / 1000) : null;
        
        // Устанавливаем ID пользователя для аудита
        $pdo->exec("SET @current_user_id = " . $user['id']);
        
        $stmt = $pdo->prepare("
            INSERT INTO operation_actual_times (operation_date, train_id, operation_id, fact_start_time, fact_end_time, skipped, created_by) 
            VALUES (?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE 
                fact_start_time = VALUES(fact_start_time),
                fact_end_time = VALUES(fact_end_time),
                skipped = VALUES(skipped),
                updated_at = CURRENT_TIMESTAMP,
                updated_by = ?
        ");
        
        $stmt->execute([
            $date,
            $operationData['operation_id'],
            $operationData['param_id'],
            $fact_start,
            $fact_end,
            $operationData['skipped'] ? 1 : 0,
            $user['id'],
            $user['id']
        ]);
        
        return ['success' => true, 'message' => 'Operation saved'];
    } catch (Exception $e) {
        error_log('Error saving operation: ' . $e->getMessage());
        return ['success' => false, 'message' => 'Error saving operation: ' . $e->getMessage()];
    }
}

// Функция для сохранения причины нарушения
function saveViolationReason($pdo, $violationData, $user) {
    try {
        $date = date('Y-m-d', $violationData['timestamp'] / 1000);
        
        // Устанавливаем ID пользователя для аудита
        $pdo->exec("SET @current_user_id = " . $user['id']);
        
        $stmt = $pdo->prepare("
            INSERT INTO violations (operation_date, train_id, operation_id, reason, created_by) 
            VALUES (?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE 
                reason = VALUES(reason),
                updated_at = CURRENT_TIMESTAMP,
                updated_by = ?
        ");
        
        $stmt->execute([
            $date,
            $violationData['operation_id'],
            $violationData['param_id'],
            $violationData['reason'],
            $user['id'],
            $user['id']
        ]);
        
        return ['success' => true, 'message' => 'Violation reason saved'];
    } catch (Exception $e) {
        error_log('Error saving violation reason: ' . $e->getMessage());
        return ['success' => false, 'message' => 'Error saving violation reason: ' . $e->getMessage()];
    }
}

// Функция для сохранения настроек
function saveSetting($pdo, $key, $value, $user) {
    try {
        // Устанавливаем ID пользователя для аудита
        $pdo->exec("SET @current_user_id = " . $user['id']);
        
        $stmt = $pdo->prepare("
            INSERT INTO system_settings (setting_key, setting_value, created_by) 
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE 
                setting_value = VALUES(setting_value),
                updated_at = CURRENT_TIMESTAMP,
                updated_by = ?
        ");
        
        $stmt->execute([$key, $value, $user['id'], $user['id']]);
        
        return ['success' => true, 'message' => 'Setting saved'];
    } catch (Exception $e) {
        error_log('Error saving setting: ' . $e->getMessage());
        return ['success' => false, 'message' => 'Error saving setting: ' . $e->getMessage()];
    }
}

// Основная логика обработки запроса
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON data']);
        exit;
    }
    
    $pdo = connectDB($db_config);
    if (!$pdo) {
        echo json_encode(['success' => false, 'message' => 'Database connection failed']);
        exit;
    }
    
    $type = $data['type'] ?? '';
    $result = ['success' => false, 'message' => 'Unknown operation type'];
    
    switch ($type) {
        case 'operation':
            $result = saveSingleOperation($pdo, $data['data'], $currentUser);
            break;
            
        case 'violation_reason':
            // Проверка прав для причин нарушений
            if (!$auth->checkPermission('add_violation_reasons')) {
                $result = ['success' => false, 'message' => 'Недостаточно прав для внесения причин нарушений'];
                break;
            }
            $result = saveViolationReason($pdo, $data['data'], $currentUser);
            break;
            
        case 'setting':
            // Только администратор может менять настройки
            if ($currentUser['role'] !== 'admin') {
                $result = ['success' => false, 'message' => 'Недостаточно прав для изменения настроек'];
                break;
            }
            $result = saveSetting($pdo, $data['key'], $data['value'], $currentUser);
            break;
            
        case 'batch_operations':
            // Проверка прав для пакетных операций
            if (!$auth->checkPermission('modify_existing_data') && $currentUser['role'] !== 'admin') {
                $result = ['success' => false, 'message' => 'Недостаточно прав для пакетных операций'];
                break;
            }
            // Пакетное сохранение операций (для начальной синхронизации)
            $savedCount = 0;
            $errors = [];
            foreach ($data['operations'] as $operation) {
                $opResult = saveSingleOperation($pdo, $operation, $currentUser);
                if ($opResult['success']) {
                    $savedCount++;
                } else {
                    $errors[] = $opResult['message'];
                }
            }
            $result = [
                'success' => count($errors) === 0,
                'message' => "Saved $savedCount operations",
                'errors' => $errors
            ];
            break;
    }
    
    echo json_encode($result);
    
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
}
?>