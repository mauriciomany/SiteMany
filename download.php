<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download da Apresentação - Many Tecnologia</title>
    <meta name="description" content="Faça o download da nossa apresentação completa sobre soluções de Business Intelligence e descubra como transformar dados em decisões estratégicas.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5YPH3KJZV3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-5YPH3KJZV3');
    </script>
</head>
<body class="landing-page">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php" class="btn-primary">Contato</a></li>
                </ul>
                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Landing Hero Section -->
    <section class="landing-hero">
        <div class="landing-container">
            <div class="landing-content">
                <h1>Transforme Dados em Decisões Estratégicas</h1>
                <p>Faça o download da nossa apresentação completa sobre Business Intelligence e descubra como podemos ajudar sua empresa a tomar decisões mais inteligentes baseadas em dados.</p>
                
                <div class="landing-features">
                    <div class="landing-feature">
                        <i class="fas fa-check-circle"></i>
                        <div class="landing-feature-text">
                            <h4>Ciclo Completo de BI</h4>
                            <p>Conheça todas as etapas do processo, desde a identificação de fontes até análises preditivas.</p>
                        </div>
                    </div>
                    <div class="landing-feature">
                        <i class="fas fa-check-circle"></i>
                        <div class="landing-feature-text">
                            <h4>Ferramentas e Tecnologias</h4>
                            <p>Descubra as principais ferramentas proprietárias e alternativas open source para cada etapa.</p>
                        </div>
                    </div>
                    <div class="landing-feature">
                        <i class="fas fa-check-circle"></i>
                        <div class="landing-feature-text">
                            <h4>Exemplos de Dashboards</h4>
                            <p>Veja exemplos práticos de dashboards para diferentes áreas de negócio.</p>
                        </div>
                    </div>
                    <div class="landing-feature">
                        <i class="fas fa-check-circle"></i>
                        <div class="landing-feature-text">
                            <h4>Diferenciais Competitivos</h4>
                            <p>Entenda como o BI pode se tornar uma vantagem competitiva para sua empresa.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="landing-form">
                <h3>Baixe Nossa Apresentação</h3>
                <p>Preencha o formulário abaixo para ter acesso imediato à apresentação completa.</p>
                
                <?php
                // Processar o formulário quando enviado
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Sanitizar entradas
                    $nome = sanitize($_POST['nome']);
                    $email = sanitize($_POST['email']);
                    $empresa = sanitize($_POST['empresa']);
                    $cargo = sanitize($_POST['cargo']);
                    
                    // Validar campos obrigatórios
                    $errors = [];
                    
                    if (empty($nome)) {
                        $errors[] = "Nome é obrigatório";
                    }
                    
                    if (empty($email)) {
                        $errors[] = "E-mail é obrigatório";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "E-mail inválido";
                    }
                    
                    if (empty($empresa)) {
                        $errors[] = "Empresa é obrigatória";
                    }
                    
                    if (empty($cargo)) {
                        $errors[] = "Cargo é obrigatório";
                    }
                    
                    // Se não houver erros, salvar no banco de dados
                    if (empty($errors)) {
                        $pdo = db_connect();
                        
                        if ($pdo) {
                            try {
                                // Verificar se a tabela existe, se não, criar
                                $pdo->exec("CREATE TABLE IF NOT EXISTS downloads (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    nome VARCHAR(255) NOT NULL,
                                    email VARCHAR(255) NOT NULL,
                                    empresa VARCHAR(255) NOT NULL,
                                    cargo VARCHAR(255) NOT NULL,
                                    data_download TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                                )");
                                
                                // Inserir dados
                                $stmt = $pdo->prepare("INSERT INTO downloads (nome, email, empresa, cargo) VALUES (?, ?, ?, ?)");
                                $stmt->execute([$nome, $email, $empresa, $cargo]);
                                
                                // Redirecionar para a página de download
                                $_SESSION['download_autorizado'] = true;
                                $_SESSION['nome_usuario'] = $nome;
                                redirect('download-file.php');
                                
                            } catch (PDOException $e) {
                                $errors[] = "Erro ao salvar dados: " . $e->getMessage();
                            }
                        } else {
                            $errors[] = "Erro de conexão com o banco de dados";
                        }
                    }
                    
                    // Exibir erros, se houver
                    if (!empty($errors)) {
                        echo '<div class="alert alert-danger">';
                        foreach ($errors as $error) {
                            echo '<p>' . $error . '</p>';
                        }
                        echo '</div>';
                    }
                }
                ?>
                
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nome">Nome Completo*</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail Corporativo*</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="empresa">Empresa*</label>
                        <input type="text" id="empresa" name="empresa" class="form-control" value="<?php echo isset($_POST['empresa']) ? htmlspecialchars($_POST['empresa']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cargo">Cargo*</label>
                        <input type="text" id="cargo" name="cargo" class="form-control" value="<?php echo isset($_POST['cargo']) ? htmlspecialchars($_POST['cargo']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn-primary">Baixar Apresentação</button>
                    </div>
                    
                    <p style="font-size: 0.8rem; color: #666; margin-top: 20px; text-align: center;">
                        Ao enviar este formulário, você concorda com nossa <a href="privacidade.php">Política de Privacidade</a>.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="images/logo_many.png" alt="Many Tecnologia Logo" class="footer-logo">
                    <p>Transformando dados em decisões estratégicas para impulsionar o crescimento do seu negócio.</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/manytecnologia/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="http://manytecnologia.com.br" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="http://manytecnologia.com.br" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="solucoes.php">Soluções</a></li>
                        <li><a href="ferramentas.php">Ferramentas</a></li>
                        <li><a href="cases.php">Cases</a></li>
                        <li><a href="sobre.php">Sobre Nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contato</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Sete de Setembro, 1289/302, Bairro Moinhos, Lajeado/RS - CEP 95900-832</p>
                    <p><i class="fas fa-phone"></i> (51) 98473-9881</p>
                    <p><i class="fas fa-envelope"></i> falecom@manytecnologia.com.br</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Many Tecnologia. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
