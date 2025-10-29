<?php
session_start();

class AuthSystem {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Аутентификация пользователя
    public function login($username, $password) {
        try {
            $stmt = $this->pdo->prepare("
                SELECT id, username, password_hash, full_name, role, is_active 
                FROM users 
                WHERE username = ? AND is_active = 1
            ");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password_hash'])) {
                // Создаем сессию
                $session_token = bin2hex(random_bytes(32));
                $expires_at = date('Y-m-d H:i:s', strtotime('+8 hours'));
                
                $stmt = $this->pdo->prepare("
                    INSERT INTO user_sessions (user_id, session_token, ip_address, user_agent, expires_at)
                    VALUES (?, ?, ?, ?, ?)
                ");
                $stmt->execute([
                    $user['id'],
                    $session_token,
                    $_SERVER['REMOTE_ADDR'],
                    $_SERVER['HTTP_USER_AGENT'],
                    $expires_at
                ]);
                
                // Обновляем время последнего входа
                $stmt = $this->pdo->prepare("
                    UPDATE users SET last_login = NOW() WHERE id = ?
                ");
                $stmt->execute([$user['id']]);
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['session_token'] = $session_token;
                
                return [
                    'success' => true,
                    'user' => [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'full_name' => $user['full_name'],
                        'role' => $user['role']
                    ]
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Неверное имя пользователя или пароль'
                ];
            }
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Ошибка аутентификации: ' . $e->getMessage()
            ];
        }
    }
    
    // Проверка авторизации
    public function checkAuth() {
        if (!isset($_SESSION['user_id'], $_SESSION['session_token'])) {
            return false;
        }
        
        try {
            $stmt = $this->pdo->prepare("
                SELECT us.*, u.role, u.is_active 
                FROM user_sessions us
                JOIN users u ON us.user_id = u.id
                WHERE us.user_id = ? AND us.session_token = ? AND us.expires_at > NOW() AND u.is_active = 1
            ");
            $stmt->execute([$_SESSION['user_id'], $_SESSION['session_token']]);
            $session = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($session) {
                // Обновляем время последнего действия
                $this->updateLastAction($_SESSION['user_id']);
                return true;
            }
        } catch (Exception $e) {
            error_log('Auth check error: ' . $e->getMessage());
        }
        
        $this->logout();
        return false;
    }
    
    // Выход из системы
    public function logout() {
        if (isset($_SESSION['session_token'])) {
            try {
                $stmt = $this->pdo->prepare("
                    DELETE FROM user_sessions WHERE session_token = ?
                ");
                $stmt->execute([$_SESSION['session_token']]);
            } catch (Exception $e) {
                error_log('Logout error: ' . $e->getMessage());
            }
        }
        
        session_destroy();
        session_start(); // Начинаем новую сессию для возможных сообщений
    }
    
    // Проверка прав доступа
    public function checkPermission($permission) {
        if (!$this->checkAuth()) {
            return false;
        }
        
        $role = $_SESSION['role'];
        $permissions = $this->getRolePermissions($role);
        
        return in_array($permission, $permissions);
    }
    
    // Получение прав для роли
    private function getRolePermissions($role) {
        $permissions_map = [
            'viewer' => ['view_schedule', 'generate_reports', 'print_reports'],
            'operator' => ['view_schedule', 'generate_reports', 'print_reports', 'input_actual_times', 'add_violation_reasons'],
            'admin' => ['view_schedule', 'generate_reports', 'print_reports', 'input_actual_times', 'add_violation_reasons', 'modify_existing_data', 'manage_operations', 'manage_trains', 'manage_users']
        ];
        
        return $permissions_map[$role] ?? [];
    }
    
    // Обновление времени последнего действия
    private function updateLastAction($user_id) {
        try {
            $stmt = $this->pdo->prepare("
                UPDATE users SET last_action = NOW() WHERE id = ?
            ");
            $stmt->execute([$user_id]);
        } catch (Exception $e) {
            error_log('Update last action error: ' . $e->getMessage());
        }
    }
    
    // Получение информации о текущем пользователе
    public function getCurrentUser() {
        if ($this->checkAuth()) {
            return [
                'id' => $_SESSION['user_id'],
                'username' => $_SESSION['username'],
                'full_name' => $_SESSION['full_name'],
                'role' => $_SESSION['role']
            ];
        }
        return null;
    }
}

// Функция для защиты страниц
function requireAuth($required_permission = null) {
    global $auth;
    
    if (!$auth->checkAuth()) {
        header('Location: login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
    
    if ($required_permission && !$auth->checkPermission($required_permission)) {
        http_response_code(403);
        die('Доступ запрещен. Недостаточно прав.');
    }
    
    return $auth->getCurrentUser();
}

// Инициализация системы аутентификации
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=train_schedule_control;charset=utf8mb4",
        "schedule_app", // Замените на ваши учетные данные
        "app_password"  // Замените на ваш пароль
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $auth = new AuthSystem($pdo);
} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}
?>