<?php
require_once 'auth_system.php';

$auth->logout();

header('Location: login.php?logout=1');
exit;
?>