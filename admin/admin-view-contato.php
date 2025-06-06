<?php
include '../includes/config.php';

// Verificar se o usuário está logado
if (!is_logged_in()) {
    redirect('admin-login.php');
}

// Inicializar variáveis
$contatos = [];
$total_contatos = 0;
$filtro = '';
$data_inicio = '';
$data_fim = '';

// Processar filtros
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['filtrar'])) {
    $filtro = isset($_GET['filtro']) ? sanitize($_GET['filtro']) : '';
    $data_inicio = isset($_GET['data_inicio']) ? sanitize($_GET['data_inicio']) : '';
    $data_fim = isset($_GET['data_fim']) ? sanitize($_GET['data_fim']) : '';
}

// Buscar contatos do banco de dados
$pdo = db_connect();

if ($pdo) {
    try {
        // Verificar se a tabela existe
        $pdo->exec("CREATE TABLE IF NOT EXISTS contatos (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            telefone VARCHAR(20),
            assunto VARCHAR(255) NOT NULL,
            mensagem TEXT NOT NULL,
            data_contato TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
        
        // Construir a consulta SQL com filtros
        $sql = "SELECT * FROM contatos WHERE 1=1";
        $params = [];
        
        if (!empty($filtro)) {
            $sql .= " AND (nome LIKE ? OR email LIKE ? OR assunto LIKE ? OR mensagem LIKE ?)";
            $filtro_param = "%$filtro%";
            $params = array_merge($params, [$filtro_param, $filtro_param, $filtro_param, $filtro_param]);
        }
        
        if (!empty($data_inicio)) {
            $sql .= " AND data_contato >= ?";
            $params[] = $data_inicio . ' 00:00:00';
        }
        
        if (!empty($data_fim)) {
            $sql .= " AND data_contato <= ?";
            $params[] = $data_fim . ' 23:59:59';
        }
        
        $sql .= " ORDER BY data_contato DESC";
        
        // Executar a consulta
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $contatos = $stmt->fetchAll();
        
        // Contar total de contatos
        $stmt = $pdo->query("SELECT COUNT(*) FROM contatos");
        $total_contatos = $stmt->fetchColumn();
        
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
    <title>Visualizar Contatos - Many Tecnologia</title>
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
        .filter-form {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .filter-form .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: flex-end;
        }
        .filter-form .form-group {
            flex: 1;
            min-width: 200px;
        }
        .filter-form label {
            display: block;
            margin-bottom: 5px;
        }
        .filter-form input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .filter-form button {
            padding: 8px 15px;
            background-color: #0A2240;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .filter-form button:hover {
            background-color: #071830;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .data-table th, .data-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .data-table th {
            background-color: #f2f2f2;
            font-weight: 600;
        }
        .data-table tr:hover {
            background-color: #f9f9f9;
        }
        .data-table .actions {
            display: flex;
            gap: 10px;
        }
        .data-table .actions a {
            color: #0A2240;
            text-decoration: none;
        }
        .data-table .actions a:hover {
            text-decoration: underline;
        }
        .export-btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #2A9D5C;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }
        .export-btn:hover {
            background-color: #238c4f;
        }
        .stats-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-card {
            flex: 1;
            min-width: 200px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #0A2240;
        }
        .stat-card p {
            font-size: 24px;
            font-weight: 600;
            margin: 0;
            color: #2A9D5C;
        }
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a {
            display: block;
            padding: 5px 10px;
            background-color: #f2f2f2;
            color: #333;
            text-decoration: none;
            border-radius: 3px;
        }
        .pagination a.active {
            background-color: #0A2240;
            color: white;
        }
        .empty-state {
            text-align: center;
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .empty-state i {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 20px;
        }
        .empty-state h3 {
            margin-top: 0;
            color: #666;
        }
        .empty-state p {
            color: #888;
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
        
        <div class="stats-container">
            <div class="stat-card">
                <h3>Total de Contatos</h3>
                <p><?php echo $total_contatos; ?></p>
            </div>
            
            <?php if (!empty($contatos)): ?>
            <div class="stat-card">
                <h3>Último Contato</h3>
                <p><?php echo date('d/m/Y', strtotime($contatos[0]['data_contato'])); ?></p>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="filter-form">
            <form method="get" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label for="filtro">Buscar</label>
                        <input type="text" id="filtro" name="filtro" placeholder="Nome, email, assunto..." value="<?php echo htmlspecialchars($filtro); ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_inicio">Data Início</label>
                        <input type="date" id="data_inicio" name="data_inicio" value="<?php echo htmlspecialchars($data_inicio); ?>">
                    </div>
                    <div class="form-group">
                        <label for="data_fim">Data Fim</label>
                        <input type="date" id="data_fim" name="data_fim" value="<?php echo htmlspecialchars($data_fim); ?>">
                    </div>
                    <div class="form-group" style="flex: 0 0 auto;">
                        <button type="submit" name="filtrar" value="1">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div style="margin-bottom: 20px;">
            <a href="admin-export.php?type=contatos" class="export-btn"><i class="fas fa-file-excel"></i> Exportar para Excel</a>
            <a href="admin-export.php?type=contatos&format=csv" class="export-btn"><i class="fas fa-file-csv"></i> Exportar para CSV</a>
        </div>
        
        <?php if (!empty($contatos)): ?>
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
                            <td><?php echo htmlspecialchars($contato['id']); ?></td>
                            <td><?php echo htmlspecialchars($contato['nome']); ?></td>
                            <td><?php echo htmlspecialchars($contato['email']); ?></td>
                            <td><?php echo htmlspecialchars($contato['telefone']); ?></td>
                            <td><?php echo htmlspecialchars($contato['assunto']); ?></td>
                            <td><?php echo date('d/m/Y H:i', strtotime($contato['data_contato'])); ?></td>
                            <td class="actions">
                                <a href="admin-view-contato-detail.php?id=<?php echo $contato['id']; ?>" title="Ver detalhes"><i class="fas fa-eye"></i></a>
                                <a href="mailto:<?php echo htmlspecialchars($contato['email']); ?>" title="Enviar email"><i class="fas fa-envelope"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <h3>Nenhum contato encontrado</h3>
                <p>Não há contatos registrados no sistema ou que correspondam aos filtros aplicados.</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
