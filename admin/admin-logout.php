<?php
include '../includes/config.php';

// Destruir a sessão
session_start();
session_unset();
session_destroy();

// Redirecionar para a página de login
redirect('admin-login.php');
?>
