<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему контроля технологических операций</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h1 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: #7f8c8d;
            font-size: 1rem;
        }
        
        .login-form .form-group {
            margin-bottom: 20px;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 14px;
        }
        
        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e4e7eb;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .login-form input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            outline: none;
        }
        
        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .login-btn:hover {
            background: linear-gradient(135deg, #2980b9 0%, #2573a7 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .user-accounts {
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            font-size: 13px;
        }
        
        .user-accounts h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
            font-size: 16px;
        }
        
        .account-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 8px;
            background: white;
            border-radius: 8px;
        }
        
        .account-username {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .account-role {
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
        }
        
        .role-viewer { background: #e8f4fc; color: #2980b9; }
        .role-operator { background: #fff9c6; color: #f39c12; }
        .role-admin { background: #d5f4e6; color: #27ae60; }
        
        .message {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }
        
        .message.error {
            background: #fdedec;
            color: #e74c3c;
            border: 1px solid #fadbd8;
        }
        
        .message.success {
            background: #d5f4e6;
            color: #27ae60;
            border: 1px solid #c8e6c9;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1><i class="fas fa-chart-line"></i> Вход в систему</h1>
            <p>Контроль технологических операций</p>
        </div>
        
        <?php if (isset($_GET['logout'])): ?>
        <div class="message success">
            Вы успешно вышли из системы
        </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['error'])): ?>
        <div class="message error">
            <?php 
            $errors = [
                'auth' => 'Неверное имя пользователя или пароль',
                'session' => 'Сессия истекла. Войдите снова.',
                'permission' => 'Доступ запрещен'
            ];
            echo $errors[$_GET['error']] ?? 'Произошла ошибка';
            ?>
        </div>
        <?php endif; ?>
        
        <form class="login-form" action="login_process.php" method="POST">
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <input type="hidden" name="redirect" value="<?php echo $_GET['redirect'] ?? 'index.php'; ?>">
            
            <button type="submit" class="login-btn">Войти в систему</button>
        </form>
        
        <div class="user-accounts">
            <h3>Тестовые учетные записи</h3>
            <div class="account-item">
                <span class="account-username">viewer</span>
                <span class="account-role role-viewer">Только просмотр</span>
            </div>
            <div class="account-item">
                <span class="account-username">operator</span>
                <span class="account-role role-operator">Оператор</span>
            </div>
            <div class="account-item">
                <span class="account-username">admin</span>
                <span class="account-role role-admin">Администратор</span>
            </div>
            <div style="text-align: center; margin-top: 10px; color: #7f8c8d; font-size: 12px;">
                Пароль для всех учетных записей: <strong>password</strong>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>