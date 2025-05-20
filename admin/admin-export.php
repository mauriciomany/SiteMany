<?php
include '../includes/config.php';

// Verificar se o usuário está logado
if (!is_logged_in()) {
    redirect('admin-login.php');
}

// Verificar parâmetros
$type = isset($_GET['type']) ? sanitize($_GET['type']) : '';
$format = isset($_GET['format']) ? sanitize($_GET['format']) : 'excel';

// Validar tipo
if (!in_array($type, ['contatos', 'downloads'])) {
    die('Tipo de exportação inválido.');
}

// Conectar ao banco de dados
$pdo = db_connect();
if (!$pdo) {
    die('Erro de conexão com o banco de dados.');
}

// Definir cabeçalhos baseados no tipo
$headers = [];
$data = [];
$filename = '';

try {
    if ($type === 'contatos') {
        $headers = ['ID', 'Nome', 'Email', 'Telefone', 'Assunto', 'Mensagem', 'Data'];
        $stmt = $pdo->query("SELECT * FROM contatos ORDER BY data_contato DESC");
        $data = $stmt->fetchAll();
        $filename = 'contatos_' . date('Y-m-d');
    } else if ($type === 'downloads') {
        $headers = ['ID', 'Nome', 'Email', 'Empresa', 'Cargo', 'Data'];
        $stmt = $pdo->query("SELECT * FROM downloads ORDER BY data_download DESC");
        $data = $stmt->fetchAll();
        $filename = 'downloads_' . date('Y-m-d');
    }
    
    // Exportar para o formato solicitado
    if ($format === 'csv') {
        // Configurar cabeçalhos para download de CSV
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $filename . '.csv"');
        
        // Criar arquivo CSV
        $output = fopen('php://output', 'w');
        
        // Adicionar BOM para UTF-8
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Escrever cabeçalhos
        fputcsv($output, $headers);
        
        // Escrever dados
        foreach ($data as $row) {
            $row_data = [];
            foreach ($row as $key => $value) {
                if (!is_numeric($key)) {
                    $row_data[] = $value;
                }
            }
            fputcsv($output, $row_data);
        }
        
        fclose($output);
        exit;
    } else {
        // Exportar para Excel (formato padrão)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '.xls"');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        echo '<table border="1">';
        
        // Cabeçalhos
        echo '<tr>';
        foreach ($headers as $header) {
            echo '<th>' . htmlspecialchars($header) . '</th>';
        }
        echo '</tr>';
        
        // Dados
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $key => $value) {
                if (!is_numeric($key)) {
                    echo '<td>' . htmlspecialchars($value) . '</td>';
                }
            }
            echo '</tr>';
        }
        
        echo '</table>';
        exit;
    }
} catch (PDOException $e) {
    die('Erro no banco de dados: ' . $e->getMessage());
}
?>
