<?php
include 'includes/config.php';

// Verificar se o usuário está logado
if (!is_logged_in()) {
    redirect('admin-login.php');
}

// Inicializar variáveis para paginação
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

// Conectar ao banco de dados
$pdo = db_connect();

// Verificar conexão
if (!$pdo) {
    die("Erro de conexão com o banco de dados");
}

// Obter contagens para estatísticas
try {
    // Total de contatos
    $stmt = $pdo->query("SELECT COUNT(*) FROM contatos");
    $total_contatos = $stmt->fetchColumn();
    
    // Total de downloads
    $stmt = $pdo->query("SELECT COUNT(*) FROM downloads");
    $total_downloads = $stmt->fetchColumn();
    
    // Contatos dos últimos 7 dias
    $stmt = $pdo->query("SELECT COUNT(*) FROM contatos WHERE data_contato >= DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY)");
    $contatos_recentes = $stmt->fetchColumn();
    
    // Downloads dos últimos 7 dias
    $stmt = $pdo->query("SELECT COUNT(*) FROM downloads WHERE data_download >= DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY)");
    $downloads_recentes = $stmt->fetchColumn();
} catch (PDOException $e) {
    // Se as tabelas não existirem ainda
    $total_contatos = 0;
    $total_downloads = 0;
    $contatos_recentes = 0;
    $downloads_recentes = 0;
}

// Processar ações
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = (int)$_GET['id'];
    
    if ($action === 'delete_contato') {
        try {
            $stmt = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
            $stmt->execute([$id]);
            $success_message = "Contato excluído com sucesso!";
        } catch (PDOException $e) {
            $error_message = "Erro ao excluir contato: " . $e->getMessage();
        }
    } elseif ($action === 'delete_download') {
        try {
            $stmt = $pdo->prepare("DELETE FROM downloads WHERE id = ?");
            $stmt->execute([$id]);
            $success_message = "Registro de download excluído com sucesso!";
        } catch (PDOException $e) {
            $error_message = "Erro ao excluir registro: " . $e->getMessage();
        }
    }
}

// Obter dados de contatos para a tabela com paginação
try {
    $stmt = $pdo->prepare("SELECT * FROM contatos ORDER BY data_contato DESC LIMIT ? OFFSET ?");
    $stmt->bindValue(1, $per_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $offset, PDO::PARAM_INT);
    $stmt->execute();
    $contatos = $stmt->fetchAll();
    
    // Total de páginas para contatos
    $stmt = $pdo->query("SELECT COUNT(*) FROM contatos");
    $total_rows = $stmt->fetchColumn();
    $total_pages = ceil($total_rows / $per_page);
} catch (PDOException $e) {
    // Se a tabela não existir ainda
    $contatos = [];
    $total_pages = 1;
}

// Obter dados de downloads
try {
    $stmt = $pdo->prepare("SELECT * FROM downloads ORDER BY data_download DESC LIMIT ? OFFSET ?");
    $stmt->bindValue(1, $per_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $offset, PDO::PARAM_INT);
    $stmt->execute();
    $downloads = $stmt->fetchAll();
    
    // Total de páginas para downloads
    $stmt = $pdo->query("SELECT COUNT(*) FROM downloads");
    $total_rows_downloads = $stmt->fetchColumn();
    $total_pages_downloads = ceil($total_rows_downloads / $per_page);
} catch (PDOException $e) {
    // Se a tabela não existir ainda
    $downloads = [];
    $total_pages_downloads = 1;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Many Tecnologia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo_many.png" alt="Many Tecnologia Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Voltar ao Site</a></li>
                    <li><a href="admin-logout.php" class="btn-primary">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Admin Dashboard -->
    <section class="admin-dashboard">
        <div class="container">
            <div class="admin-header">
                <h2>Painel Administrativo</h2>
                <a href="admin-logout.php" class="admin-logout">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </a>
            </div>
            
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
            
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            
            <!-- Stats Cards -->
            <div class="admin-stats">
                <div class="stat-card primary">
                    <h4>Total de Contatos</h4>
                    <div class="stat-value"><?php echo $total_contatos; ?></div>
                </div>
                <div class="stat-card secondary">
                    <h4>Total de Downloads</h4>
                    <div class="stat-value"><?php echo $total_downloads; ?></div>
                </div>
                <div class="stat-card primary">
                    <h4>Contatos (7 dias)</h4>
                    <div class="stat-value"><?php echo $contatos_recentes; ?></div>
                </div>
                <div class="stat-card secondary">
                    <h4>Downloads (7 dias)</h4>
                    <div class="stat-value"><?php echo $downloads_recentes; ?></div>
                </div>
            </div>
            
            <!-- Contatos Table -->
            <div class="admin-card">
                <h3>Contatos Recentes</h3>
                
                <?php if (empty($contatos)): ?>
                    <p>Nenhum contato registrado ainda.</p>
                <?php else: ?>
                    <div style="overflow-x: auto;">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Assunto</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contatos as $contato): ?>
                                    <tr>
                                        <td><?php echo $contato['id']; ?></td>
                                        <td><?php echo htmlspecialchars($contato['nome']); ?></td>
                                        <td><?php echo htmlspecialchars($contato['email']); ?></td>
                                        <td><?php echo htmlspecialchars($contato['telefone']); ?></td>
                                        <td><?php echo htmlspecialchars($contato['assunto']); ?></td>
                                        <td><?php echo date('d/m/Y H:i', strtotime($contato['data_contato'])); ?></td>
                                        <td>
                                            <a href="admin-view-contato.php?id=<?php echo $contato['id']; ?>" class="action-btn" title="Ver detalhes">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="admin-dashboard.php?action=delete_contato&id=<?php echo $contato['id']; ?>" class="action-btn" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este contato?');">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination for Contatos -->
                    <?php if ($total_pages > 1): ?>
                        <div class="pagination">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <a href="?page=<?php echo $i; ?>" <?php echo ($page == $i) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            
            <!-- Downloads Table -->
            <div class="admin-card">
                <h3>Downloads da Apresentação</h3>
                
                <?php if (empty($downloads)): ?>
                    <p>Nenhum download registrado ainda.</p>
                <?php else: ?>
                    <div style="overflow-x: auto;">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Empresa</th>
                                    <th>Cargo</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($downloads as $download): ?>
                                    <tr>
                                        <td><?php echo $download['id']; ?></td>
                                        <td><?php echo htmlspecialchars($download['nome']); ?></td>
                                        <td><?php echo htmlspecialchars($download['email']); ?></td>
                                        <td><?php echo htmlspecialchars($download['empresa']); ?></td>
                                        <td><?php echo htmlspecialchars($download['cargo']); ?></td>
                                        <td><?php echo date('d/m/Y H:i', strtotime($download['data_download'])); ?></td>
                                        <td>
                                            <a href="admin-dashboard.php?action=delete_download&id=<?php echo $download['id']; ?>" class="action-btn" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este registro?');">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination for Downloads -->
                    <?php if ($total_pages_downloads > 1): ?>
                        <div class="pagination">
                            <?php for ($i = 1; $i <= $total_pages_downloads; $i++): ?>
                                <a href="?page_downloads=<?php echo $i; ?>" <?php echo (isset($_GET['page_downloads']) && $_GET['page_downloads'] == $i) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            
            <!-- Export Options -->
            <div class="admin-card">
                <h3>Exportar Dados</h3>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="admin-export.php?type=contatos" class="btn-secondary">
                        <i class="fas fa-file-export"></i> Exportar Contatos (CSV)
                    </a>
                    <a href="admin-export.php?type=downloads" class="btn-secondary">
                        <i class="fas fa-file-export"></i> Exportar Downloads (CSV)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Many Tecnologia. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
