<?php
// Configurações do banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'u358394984_many');
define('DB_USER', 'u358394984_maudecastro');
define('DB_PASS', 'Mdc93022@'); // Substitua pela senha real quando for implantar

// Configurações do site
define('SITE_NAME', 'Many Tecnologia');
define('SITE_URL', 'http://manytecnologia.com.br');
define('ADMIN_EMAIL', 'falecom@manytecnologia.com.br');

// Configurações de sessão
session_start();

// Função para conexão com o banco de dados
function db_connect() {
    try {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        // Em produção, você deve registrar o erro em um arquivo de log
        // e exibir uma mensagem genérica para o usuário
        error_log('Erro de conexão: ' . $e->getMessage());
        return false;
    }
}

// Função para sanitizar entradas
function sanitize($input) {
    if (is_array($input)) {
        foreach ($input as $key => $value) {
            $input[$key] = sanitize($value);
        }
    } else {
        $input = htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
    return $input;
}

// Função para verificar se o usuário está logado
function is_logged_in() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// Função para redirecionar
function redirect($url) {
    header('Location: ' . $url);
    exit;
}
?>
