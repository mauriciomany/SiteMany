<?php
include '../includes/config.php';

// Verificar se o usuário já está logado
if (is_logged_in()) {
    redirect('admin-dashboard.php');
}

// Processar o formulário de login
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = 'Por favor, preencha todos os campos.';
    } else {
        $pdo = db_connect();
        
        if ($pdo) {
            try {
                // Verificar se a tabela existe, se não, criar
                $pdo->exec("CREATE TABLE IF NOT EXISTS admin_users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    nome VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )");
                
                // Verificar se existe algum usuário admin, se não, criar o padrão
                $stmt = $pdo->query("SELECT COUNT(*) FROM admin_users");
                $count = $stmt->fetchColumn();
                
                if ($count == 0) {
                    // Criar usuário admin padrão (senha: admin123)
                    $hashed_password = password_hash('admin123', PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("INSERT INTO admin_users (username, password, nome, email) VALUES (?, ?, ?, ?)");
                    $stmt->execute(['admin', $hashed_password, 'Administrador', 'falecom@manytecnologia.com.br']);
                }
                
                // Verificar credenciais
                $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
                $stmt->execute([$username]);
                $user = $stmt->fetch();
                
                if ($user && password_verify($password, $user['password'])) {
                    // Login bem-sucedido
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_id'] = $user['id'];
                    $_SESSION['admin_username'] = $user['username'];
                    $_SESSION['admin_nome'] = $user['nome'];
                    
                    redirect('admin-dashboard.php');
                } else {
                    $error = 'Usuário ou senha incorretos.';
                }
            } catch (PDOException $e) {
                $error = 'Erro no banco de dados: ' . $e->getMessage();
            }
        } else {
            $error = 'Erro de conexão com o banco de dados.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo - Many Tecnologia</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-logo">
            <img src="../images/logo_many.png" alt="Many Tecnologia Logo">
        </div>
        
        <div class="login-form">
            <h2>Área Administrativa</h2>
            
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            
            <form method="post" action="">
                <div class="form-group">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-primary">Entrar</button>
                </div>
            </form>
        </div>
        
        <div class="login-footer">
            <p>&copy; <?php echo date('Y'); ?> Many Tecnologia. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
