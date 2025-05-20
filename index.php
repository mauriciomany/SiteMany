<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Tecnologia - Soluções de Business Intelligence</title>
    <meta name="description" content="A Many Tecnologia oferece soluções completas de Business Intelligence, transformando dados em decisões estratégicas para o seu negócio.">
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
                    <li><a href="contato.php" class="btn-primary">Contato</a></li>
                </ul>
                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Transformando Dados em Decisões Estratégicas</h1>
                <p>Soluções completas de Business Intelligence para impulsionar o crescimento do seu negócio</p>
                <div class="hero-buttons">
                    <a href="solucoes.php" class="btn-primary">Nossas Soluções</a>
                    <a href="contato.php" class="btn-secondary">Fale Conosco</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="images/dashboard_financeiro.png" alt="Dashboard de Business Intelligence">
            </div>
        </div>
    </section>

    <!-- Sobre Nós Section -->
    <section class="about">
        <div class="container">
            <div class="section-header">
                <h2>Quem Somos</h2>
                <div class="section-divider"></div>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>A <strong>Many Tecnologia</strong> é uma empresa especializada em soluções completas de Business Intelligence, atuando em todas as etapas do processo de transformação de dados em insights estratégicos para negócios.</p>
                    <p>Nossa equipe é formada por profissionais com dupla competência: profundo conhecimento em gestão empresarial e expertise técnica em análise de dados e tecnologia da informação.</p>
                    <p>Acreditamos que a abordagem data-driven não é apenas uma tendência, mas um diferencial competitivo essencial para empresas que buscam excelência em seus processos decisórios.</p>
                    <a href="sobre.php" class="btn-text">Saiba mais sobre nós <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="about-image">
                    <img src="images/fluxograma_completo_bi.png" alt="Ciclo de Business Intelligence">
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços Section -->
    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>Nossas Soluções</h2>
                <div class="section-divider"></div>
                <p>Oferecemos um ciclo completo de Business Intelligence para transformar seus dados em vantagem competitiva</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Integração de Dados</h3>
                    <p>Conectamos todas as suas fontes de dados, desde sistemas internos até fontes externas, criando uma visão unificada e consistente.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Modelagem de Dados</h3>
                    <p>Desenvolvemos modelos dimensionais otimizados para análise, garantindo performance e flexibilidade.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>ETL/ELT</h3>
                    <p>Implementamos processos robustos de extração, transformação e carga, garantindo qualidade e consistência dos dados.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Dashboards</h3>
                    <p>Criamos visualizações interativas e intuitivas que permitem explorar os dados e identificar insights rapidamente.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Análise Preditiva</h3>
                    <p>Utilizamos machine learning para antecipar tendências, identificar padrões ocultos e otimizar processos de negócio.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Governança de Dados</h3>
                    <p>Implementamos práticas e ferramentas que garantem segurança, privacidade e qualidade das informações.</p>
                </div>
            </div>
            <div class="services-cta">
                <a href="solucoes.php" class="btn-primary">Ver todas as soluções</a>
            </div>
        </div>
    </section>

    <!-- Áreas de Negócio Section -->
    <section class="business-areas">
        <div class="container">
            <div class="section-header">
                <h2>Soluções por Área de Negócio</h2>
                <div class="section-divider"></div>
                <p>Nossas soluções são adaptadas para atender às necessidades específicas de cada área da sua empresa</p>
            </div>
            <div class="tabs">
                <div class="tabs-header">
                    <div class="tab-item active" data-tab="financeiro">Financeiro</div>
                    <div class="tab-item" data-tab="marketing">Marketing</div>
                    <div class="tab-item" data-tab="operacoes">Operações</div>
                    <div class="tab-item" data-tab="rh">RH</div>
                    <div class="tab-item" data-tab="preditivo">Análise Preditiva</div>
                </div>
                <div class="tabs-content">
                    <div class="tab-content active" id="financeiro">
                        <div class="tab-image">
                            <img src="images/dashboard_financeiro.png" alt="Dashboard Financeiro">
                        </div>
                        <div class="tab-text">
                            <h3>Gestão Financeira</h3>
                            <p>Nossas soluções para a área financeira permitem monitoramento em tempo real de indicadores críticos, análise detalhada de rentabilidade, otimização de fluxo de caixa e simulação de cenários para planejamento orçamentário.</p>
                            <ul>
                                <li>Análise de rentabilidade por produto, cliente, região ou canal</li>
                                <li>Gestão de custos com metodologias avançadas como custeio ABC</li>
                                <li>Previsão de fluxo de caixa com modelos preditivos</li>
                                <li>Análise de investimentos e cálculo de ROI</li>
                                <li>Gestão orçamentária com acompanhamento em tempo real</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="marketing">
                        <div class="tab-image">
                            <img src="images/dashboard_marketing.png" alt="Dashboard de Marketing">
                        </div>
                        <div class="tab-text">
                            <h3>Marketing e Vendas</h3>
                            <p>Transformamos dados de marketing e vendas em insights acionáveis, permitindo campanhas mais eficientes, melhor segmentação de clientes e otimização do funil de conversão.</p>
                            <ul>
                                <li>Segmentação avançada de clientes com técnicas como RFM e clustering</li>
                                <li>Cálculo de Customer Lifetime Value (CLV)</li>
                                <li>Análise detalhada do funil de vendas</li>
                                <li>Marketing Attribution para otimização de investimentos em canais</li>
                                <li>Análise de sentimento e monitoramento de marca em redes sociais</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="operacoes">
                        <div class="tab-image">
                            <img src="images/dashboard_operacional.png" alt="Dashboard Operacional">
                        </div>
                        <div class="tab-text">
                            <h3>Operações e Produção</h3>
                            <p>Nossas soluções para operações permitem otimizar processos produtivos, reduzir custos operacionais e melhorar a qualidade dos produtos e serviços.</p>
                            <ul>
                                <li>Gestão integrada da cadeia de suprimentos</li>
                                <li>Monitoramento em tempo real de indicadores de qualidade</li>
                                <li>Manutenção preditiva para redução de downtime</li>
                                <li>Otimização de processos com metodologias Lean e Six Sigma</li>
                                <li>Planejamento de capacidade produtiva baseado em previsão de demanda</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="rh">
                        <div class="tab-image">
                            <img src="images/dashboard_rh.png" alt="Dashboard de RH">
                        </div>
                        <div class="tab-text">
                            <h3>Gestão de Pessoas</h3>
                            <p>Transformamos dados de RH em insights estratégicos para atração, desenvolvimento e retenção de talentos, criando ambientes de trabalho mais produtivos e engajados.</p>
                            <ul>
                                <li>People Analytics para decisões baseadas em evidências</li>
                                <li>Análise de desempenho individual e de equipes</li>
                                <li>Modelos preditivos para prevenção de turnover</li>
                                <li>Correlação entre engajamento e indicadores de negócio</li>
                                <li>Mapeamento e gestão de competências alinhadas à estratégia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="preditivo">
                        <div class="tab-image">
                            <img src="images/dashboard_preditivo.png" alt="Dashboard de Análise Preditiva">
                        </div>
                        <div class="tab-text">
                            <h3>Análise Preditiva e Machine Learning</h3>
                            <p>Implementamos soluções avançadas de análise preditiva e machine learning para antecipar tendências, otimizar processos e criar vantagens competitivas sustentáveis.</p>
                            <ul>
                                <li>Previsão de demanda e vendas</li>
                                <li>Segmentação avançada de clientes</li>
                                <li>Detecção de fraudes e anomalias</li>
                                <li>Sistemas de recomendação personalizados</li>
                                <li>Otimização de preços e inventário</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diferenciais Section -->
    <section class="differentials">
        <div class="container">
            <div class="section-header">
                <h2>Nossos Diferenciais</h2>
                <div class="section-divider"></div>
                <p>O que nos torna a escolha ideal para suas necessidades de Business Intelligence</p>
            </div>
            <div class="differentials-grid">
                <div class="differential-card">
                    <div class="differential-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Equipe com Dupla Competência</h3>
                    <p>Nossa equipe combina profundo conhecimento em gestão empresarial com expertise técnica em análise de dados e TI.</p>
                </div>
                <div class="differential-card">
                    <div class="differential-icon">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3>Abordagem End-to-End</h3>
                    <p>Oferecemos soluções completas, desde a identificação de fontes de dados até a implementação de dashboards e modelos preditivos.</p>
                </div>
                <div class="differential-card">
                    <div class="differential-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Adaptabilidade Tecnológica</h3>
                    <p>Trabalhamos com as ferramentas já existentes na empresa, minimizando custos de licenciamento.</p>
                </div>
                <div class="differential-card">
                    <div class="differential-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Foco em Resultados Mensuráveis</h3>
                    <p>Definimos KPIs claros para cada projeto, garantindo que as soluções implementadas gerem valor mensurável para o negócio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Pronto para transformar seus dados em vantagem competitiva?</h2>
                <p>Entre em contato conosco para uma consultoria inicial sem compromisso</p>
                <a href="contato.php" class="btn-primary">Fale com um especialista</a>
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
