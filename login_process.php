<?php
require_once 'auth_system.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $redirect = $_POST['redirect'] ?? 'index.php';
    
    $result = $auth->login($username, $password);
    
    if ($result['success']) {
        header('Location: ' . $redirect);
        exit;
    } else {
        header('Location: login.php?error=auth&redirect=' . urlencode($redirect));
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>