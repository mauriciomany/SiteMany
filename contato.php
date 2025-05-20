<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Many Tecnologia</title>
    <meta name="description" content="Entre em contato com a Many Tecnologia para soluções de Business Intelligence personalizadas para sua empresa.">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="solucoes.php">Soluções</a></li>
                    <li><a href="ferramentas.php">Ferramentas</a></li>
                    <li><a href="cases.php">Cases</a></li>
                    <li><a href="sobre.php">Sobre Nós</a></li>
                    <li><a href="contato.php" class="active btn-primary">Contato</a></li>
                </ul>
                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Page Banner -->
    <section class="page-banner" style="background-color: #f0f5ff; padding: 80px 0;">
        <div class="container">
            <h1>Entre em Contato</h1>
            <p>Estamos prontos para ajudar sua empresa a transformar dados em decisões estratégicas</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <p>Entre em contato conosco para saber como podemos ajudar sua empresa a implementar soluções de Business Intelligence que impulsionem seus resultados.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Endereço</h4>
                            <p>Av. Sete de Setembro, 1289/302, Bairro Moinhos, Lajeado/RS - CEP 95900-832</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telefone</h4>
                            <p>(51) 98473-9881</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>E-mail</h4>
                            <p>falecom@manytecnologia.com.br</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Horário de Atendimento</h4>
                            <p>Segunda a Sexta: 8h às 18h</p>
                        </div>
                    </div>
                    
                    <div class="social-icons" style="margin-top: 30px;">
                        <a href="https://www.instagram.com/manytecnologia/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="http://manytecnologia.com.br" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="http://manytecnologia.com.br" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Envie uma Mensagem</h3>
                    
                    <?php
                    // Processar o formulário quando enviado
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Sanitizar entradas
                        $nome = sanitize($_POST['nome']);
                        $email = sanitize($_POST['email']);
                        $telefone = sanitize($_POST['telefone']);
                        $assunto = sanitize($_POST['assunto']);
                        $mensagem = sanitize($_POST['mensagem']);
                        
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
                        
                        if (empty($assunto)) {
                            $errors[] = "Assunto é obrigatório";
                        }
                        
                        if (empty($mensagem)) {
                            $errors[] = "Mensagem é obrigatória";
                        }
                        
                        // Se não houver erros, salvar no banco de dados
                        if (empty($errors)) {
                            $pdo = db_connect();
                            
                            if ($pdo) {
                                try {
                                    // Verificar se a tabela existe, se não, criar
                                    $pdo->exec("CREATE TABLE IF NOT EXISTS contatos (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        nome VARCHAR(255) NOT NULL,
                                        email VARCHAR(255) NOT NULL,
                                        telefone VARCHAR(20),
                                        assunto VARCHAR(255) NOT NULL,
                                        mensagem TEXT NOT NULL,
                                        data_contato TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                                    )");
                                    
                                    // Inserir dados
                                    $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, telefone, assunto, mensagem) VALUES (?, ?, ?, ?, ?)");
                                    $stmt->execute([$nome, $email, $telefone, $assunto, $mensagem]);
                                    
                                    // Exibir mensagem de sucesso
                                    echo '<div class="alert alert-success">
                                        <p>Mensagem enviada com sucesso! Entraremos em contato em breve.</p>
                                    </div>';
                                    
                                    // Limpar os campos do formulário
                                    $nome = $email = $telefone = $assunto = $mensagem = '';
                                    
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
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nome">Nome Completo*</label>
                                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo isset($nome) ? htmlspecialchars($nome) : ''; ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" class="form-control" value="<?php echo isset($telefone) ? htmlspecialchars($telefone) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="assunto">Assunto*</label>
                            <input type="text" id="assunto" name="assunto" class="form-control" value="<?php echo isset($assunto) ? htmlspecialchars($assunto) : ''; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="mensagem">Mensagem*</label>
                            <textarea id="mensagem" name="mensagem" class="form-control" required><?php echo isset($mensagem) ? htmlspecialchars($mensagem) : ''; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="padding: 0; margin-top: 50px;">
        <div style="width: 100%; height: 400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3469.0358994796766!2d-51.9681245!3d-29.4669587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c61273a347c99%3A0x8a3f7457324a3009!2sAv.%20Sete%20de%20Setembro%2C%201289%20-%20Moinhos%2C%20Lajeado%20-%20RS%2C%2095900-832!5e0!3m2!1spt-BR!2sbr!4v1621436289012!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
