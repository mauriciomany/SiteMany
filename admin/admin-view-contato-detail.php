<?php
include '../includes/config.php';

// Verificar se o usuário está logado
if (!is_logged_in()) {
    redirect('admin-login.php');
}

// Verificar se o ID foi fornecido
if (!isset($_GET['id']) || empty($_GET['id'])) {
    redirect('admin-view-contato.php');
}

$id = (int)$_GET['id'];
$contato = null;

// Buscar contato do banco de dados
$pdo = db_connect();

if ($pdo) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = ?");
        $stmt->execute([$id]);
        $contato = $stmt->fetch();
        
        if (!$contato) {
            redirect('admin-view-contato.php');
        }
    } catch (PDOException $e) {
        $error = 'Erro no banco de dados: ' . $e->getMessage();
    }
} else {
    $error = 'Erro de conexão com o banco de dados.';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato - Many Tecnologia</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .admin-container {
            padding: 20px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .admin-title {
            margin: 0;
        }
        .admin-nav {
            background-color: #f5f5f5;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .admin-nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .admin-nav li {
            margin-right: 20px;
        }
        .admin-nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        .admin-nav a.active {
            color: #2A9D5C;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #0A2240;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .contact-detail {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .contact-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .contact-header h2 {
            margin: 0;
            color: #0A2240;
        }
        .contact-header .date {
            color: #666;
            font-size: 0.9rem;
        }
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .info-item label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
            color: #0A2240;
        }
        .info-item p {
            margin: 0;
            color: #555;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message-content h3 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #0A2240;
        }
        .message-content p {
            margin: 0;
            color: #555;
            line-height: 1.6;
        }
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        .action-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0A2240;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
        .action-btn.primary {
            background-color: #2A9D5C;
        }
        .action-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1 class="admin-title">Painel Administrativo</h1>
            <div>
                <span>Olá, <?php echo htmlspecialchars($_SESSION['admin_nome']); ?></span>
                <a href="admin-logout.php" style="margin-left: 15px; color: #0A2240;"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
        </div>
        
        <nav class="admin-nav">
            <ul>
                <li><a href="admin-dashboard.php">Dashboard</a></li>
                <li><a href="admin-view-contato.php" class="active">Contatos</a></li>
                <li><a href="admin-view-downloads.php">Downloads</a></li>
                <li><a href="admin-settings.php">Configurações</a></li>
            </ul>
        </nav>
        
        <a href="admin-view-contato.php" class="back-link"><i class="fas fa-arrow-left"></i> Voltar para lista de contatos</a>
        
        <div class="contact-detail">
            <div class="contact-header">
                <h2>Detalhes do Contato #<?php echo htmlspecialchars($contato['id']); ?></h2>
                <div class="date">
                    <i class="far fa-calendar-alt"></i> <?php echo date('d/m/Y H:i', strtotime($contato['data_contato'])); ?>
                </div>
            </div>
            
            <div class="contact-info">
                <div class="info-item">
                    <label>Nome</label>
                    <p><?php echo htmlspecialchars($contato['nome']); ?></p>
                </div>
                
                <div class="info-item">
                    <label>Email</label>
                    <p><?php echo htmlspecialchars($contato['email']); ?></p>
                </div>
                
                <div class="info-item">
                    <label>Telefone</label>
                    <p><?php echo !empty($contato['telefone']) ? htmlspecialchars($contato['telefone']) : 'Não informado'; ?></p>
                </div>
                
                <div class="info-item">
                    <label>Assunto</label>
                    <p><?php echo htmlspecialchars($contato['assunto']); ?></p>
                </div>
            </div>
            
            <div class="message-content">
                <h3>Mensagem</h3>
                <p><?php echo nl2br(htmlspecialchars($contato['mensagem'])); ?></p>
            </div>
            
            <div class="action-buttons">
                <a href="mailto:<?php echo htmlspecialchars($contato['email']); ?>" class="action-btn primary">
                    <i class="fas fa-reply"></i> Responder por Email
                </a>
                
                <?php if (!empty($contato['telefone'])): ?>
                <a href="tel:<?php echo htmlspecialchars($contato['telefone']); ?>" class="action-btn">
                    <i class="fas fa-phone"></i> Ligar
                </a>
                <?php endif; ?>
                
                <?php if (!empty($contato['telefone'])): ?>
                <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $contato['telefone']); ?>" target="_blank" class="action-btn" style="background-color: #25D366;">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
