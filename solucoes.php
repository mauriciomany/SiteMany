<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluções de Business Intelligence - Many Tecnologia</title>
    <meta name="description" content="Conheça nossas soluções completas de Business Intelligence, desde a integração de dados até análises preditivas e dashboards interativos.">
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
                    <li><a href="solucoes.php" class="active">Soluções</a></li>
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

    <!-- Page Banner -->
    <section class="page-banner" style="background-color: #f0f5ff; padding: 80px 0;">
        <div class="container">
            <h1>Nossas Soluções</h1>
            <p>Oferecemos um ciclo completo de Business Intelligence para transformar seus dados em vantagem competitiva</p>
        </div>
    </section>

    <!-- Ciclo BI Section -->
    <section class="section" style="padding: 80px 0; background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>Ciclo Completo de Business Intelligence</h2>
                <div class="section-divider"></div>
                <p>A Many Tecnologia oferece soluções para todas as etapas do ciclo de Business Intelligence, garantindo uma abordagem integrada e coerente.</p>
            </div>
            
            <div style="text-align: center; margin-bottom: 50px;">
                <img src="images/fluxograma_completo_bi.png" alt="Ciclo Completo de BI" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
            </div>
            
            <div class="services-grid" style="margin-top: 50px;">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Identificação e Integração de Fontes de Dados</h3>
                    <p>Trabalhamos com uma ampla variedade de fontes de dados, desde sistemas transacionais internos (ERP, CRM, etc.) até fontes externas (redes sociais, dados de mercado, APIs de parceiros).</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Modelagem Dimensional de Dados</h3>
                    <p>Desenvolvemos modelos dimensionais otimizados para análise, garantindo performance e flexibilidade. Utilizamos técnicas como modelagem estrela, floco de neve ou constelação.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Processamento e Transformação de Dados</h3>
                    <p>Implementamos processos robustos de ETL (Extração, Transformação e Carga) ou ELT (Extração, Carga e Transformação), garantindo a qualidade, consistência e atualidade dos dados.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Visualização e Dashboards</h3>
                    <p>Criamos dashboards interativos e intuitivos, permitindo que usuários de todos os níveis explorem os dados de forma autônoma e identifiquem insights rapidamente.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Análise Preditiva e Machine Learning</h3>
                    <p>Vamos além da análise descritiva, implementando modelos preditivos e prescritivos que permitem antecipar tendências, identificar padrões ocultos e otimizar processos.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Governança de Dados</h3>
                    <p>Implementamos práticas e ferramentas de governança de dados, garantindo segurança, privacidade, conformidade regulatória e qualidade das informações.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ETL Section -->
    <section class="section" style="padding: 80px 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="section-header">
                <h2>Extração, Transformação e Carregamento de Dados</h2>
                <div class="section-divider"></div>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; margin-top: 30px;">
                <div style="flex: 1; min-width: 300px;">
                    <img src="images/fluxograma_etl.png" alt="Processo ETL" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <h3 style="color: #0A2240; margin-bottom: 20px;">Integração de Dados Eficiente e Escalável</h3>
                    <p style="margin-bottom: 20px;">Nossa abordagem para integração de dados garante que todas as suas fontes de informação sejam conectadas de forma eficiente e confiável, criando uma base sólida para análises precisas.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Conectores Pré-construídos</strong>: Integramos com mais de 100 fontes de dados diferentes, desde sistemas legados até aplicações em nuvem.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Processamento em Tempo Real</strong>: Além de processamento em lote, oferecemos soluções para streaming de dados em tempo real.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Qualidade de Dados</strong>: Implementamos regras de validação, limpeza e enriquecimento para garantir dados confiáveis.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Escalabilidade</strong>: Nossas soluções são projetadas para crescer com seu negócio, processando desde megabytes até petabytes de dados.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Modelagem Section -->
    <section class="section" style="padding: 80px 0; background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>Modelagem Dimensional de Dados</h2>
                <div class="section-divider"></div>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; margin-top: 30px;">
                <div style="flex: 1; min-width: 300px; order: 2;">
                    <img src="images/fluxograma_modelagem.png" alt="Modelagem Dimensional" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
                <div style="flex: 1; min-width: 300px; order: 1;">
                    <h3 style="color: #0A2240; margin-bottom: 20px;">Modelagem Dimensional para Análises Eficientes</h3>
                    <p style="margin-bottom: 20px;">Desenvolvemos modelos de dados otimizados para análise, permitindo consultas rápidas e flexíveis que respondem às perguntas de negócio mais importantes.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Modelo Estrela</strong>: Implementamos modelos dimensionais que facilitam a navegação intuitiva pelos dados.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Hierarquias e Agregações</strong>: Criamos estruturas que permitem análises em diferentes níveis de granularidade.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Dimensões Lentamente Mutáveis</strong>: Implementamos técnicas para rastrear mudanças históricas em seus dados.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Otimização de Performance</strong>: Projetamos modelos que garantem consultas rápidas mesmo com grandes volumes de dados.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboards Section -->
    <section class="section" style="padding: 80px 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="section-header">
                <h2>Visualização e Dashboards</h2>
                <div class="section-divider"></div>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; margin-top: 30px;">
                <div style="flex: 1; min-width: 300px;">
                    <img src="images/fluxograma_dashboards.png" alt="Implementação de Dashboards" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <h3 style="color: #0A2240; margin-bottom: 20px;">Dashboards Interativos e Intuitivos</h3>
                    <p style="margin-bottom: 20px;">Transformamos dados complexos em visualizações claras e interativas que permitem identificar tendências, anomalias e oportunidades rapidamente.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Design Centrado no Usuário</strong>: Criamos interfaces intuitivas que facilitam a exploração dos dados.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Interatividade</strong>: Implementamos filtros, drill-downs e análises ad-hoc para exploração profunda dos dados.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Responsividade</strong>: Dashboards acessíveis em qualquer dispositivo, do desktop ao smartphone.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Alertas e Notificações</strong>: Configuração de alertas automáticos para métricas críticas.
                        </li>
                    </ul>
                </div>
            </div>
            
            <div style="margin-top: 50px; text-align: center;">
                <h3 style="color: #0A2240; margin-bottom: 30px;">Exemplos de Dashboards por Área</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 30px;">
                    <div style="text-align: center;">
                        <img src="images/dashboard_financeiro.png" alt="Dashboard Financeiro" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                        <h4 style="margin-top: 15px; color: #0A2240;">Dashboard Financeiro</h4>
                    </div>
                    <div style="text-align: center;">
                        <img src="images/dashboard_marketing.png" alt="Dashboard de Marketing" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                        <h4 style="margin-top: 15px; color: #0A2240;">Dashboard de Marketing</h4>
                    </div>
                    <div style="text-align: center;">
                        <img src="images/dashboard_operacional.png" alt="Dashboard Operacional" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                        <h4 style="margin-top: 15px; color: #0A2240;">Dashboard Operacional</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Análise Preditiva Section -->
    <section class="section" style="padding: 80px 0; background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>Análise Preditiva e Machine Learning</h2>
                <div class="section-divider"></div>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px; margin-top: 30px;">
                <div style="flex: 1; min-width: 300px; order: 2;">
                    <img src="images/fluxograma_preditivo.png" alt="Implementação de Modelos Preditivos" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
                <div style="flex: 1; min-width: 300px; order: 1;">
                    <h3 style="color: #0A2240; margin-bottom: 20px;">Antecipando Tendências e Comportamentos</h3>
                    <p style="margin-bottom: 20px;">Implementamos soluções avançadas de análise preditiva e machine learning para antecipar tendências, otimizar processos e criar vantagens competitivas sustentáveis.</p>
                    
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Previsão de Demanda</strong>: Modelos que antecipam tendências de vendas e demanda com alta precisão.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Segmentação de Clientes</strong>: Algoritmos avançados para identificar grupos de clientes com comportamentos similares.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Detecção de Anomalias</strong>: Identificação automática de padrões incomuns que podem indicar problemas ou oportunidades.
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Manutenção Preditiva</strong>: Previsão de falhas em equipamentos antes que ocorram, reduzindo custos e tempo de inatividade.
                        </li>
                    </ul>
                    
                    <div style="margin-top: 30px;">
                        <img src="images/dashboard_preditivo.png" alt="Dashboard de Análise Preditiva" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                    </div>
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
