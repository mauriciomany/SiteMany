<?php
include 'includes/config.php';

// Verificar se o usuário está autorizado a fazer o download
if (!isset($_SESSION['download_autorizado']) || $_SESSION['download_autorizado'] !== true) {
    // Redirecionar para a página de download se não estiver autorizado
    redirect('download.php');
}

// Limpar a flag de autorização para evitar downloads repetidos
$_SESSION['download_autorizado'] = false;

// Obter o nome do usuário para personalização
$nome = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : 'visitante';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Concluído - Many Tecnologia</title>
    <meta name="description" content="Obrigado por baixar nossa apresentação sobre soluções de Business Intelligence.">
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
    <script>
        // Iniciar o download automaticamente após 2 segundos
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('download-link').click();
            }, 2000);
        }
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

    <!-- Thank You Section -->
    <section class="landing-hero">
        <div class="container" style="text-align: center; max-width: 800px; padding: 50px 20px;">
            <div class="alert alert-success">
                <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 20px;"></i>
                <h1>Obrigado, <?php echo htmlspecialchars($nome); ?>!</h1>
                <p>Seu download está começando automaticamente. Se não iniciar, clique no botão abaixo.</p>
            </div>
            
            <div style="margin: 40px 0;">
                <a id="download-link" href="files/apresentacao_many_bi.pdf" download class="btn-primary" style="padding: 15px 40px;">
                    <i class="fas fa-download"></i> Baixar Apresentação
                </a>
            </div>
            
            <div style="margin-top: 50px;">
                <h3>Próximos Passos</h3>
                <p>Agora que você tem nossa apresentação, que tal conhecer mais sobre nossas soluções?</p>
                
                <div style="display: flex; justify-content: center; gap: 20px; margin-top: 30px; flex-wrap: wrap;">
                    <a href="solucoes.php" class="btn-secondary">
                        <i class="fas fa-chart-bar"></i> Nossas Soluções
                    </a>
                    <a href="contato.php" class="btn-primary">
                        <i class="fas fa-phone"></i> Agendar uma Demonstração
                    </a>
                </div>
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
