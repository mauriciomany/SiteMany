<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferramentas de BI - Many Tecnologia</title>
    <meta name="description" content="Conheça as principais ferramentas de Business Intelligence utilizadas pela Many Tecnologia em seus projetos.">
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
                    <li><a href="ferramentas.php" class="active">Ferramentas</a></li>
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
            <h1>Ferramentas de Business Intelligence</h1>
            <p>Conheça as principais tecnologias que utilizamos para transformar dados em insights</p>
        </div>
    </section>

    <!-- Tools Intro Section -->
    <section class="section" style="padding: 80px 0; background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>Nossa Abordagem Tecnológica</h2>
                <div class="section-divider"></div>
                <p>Na Many Tecnologia, adaptamos nossa stack tecnológica às necessidades específicas de cada cliente, priorizando a utilização das ferramentas já existentes na empresa para minimizar custos de licenciamento e aproveitar investimentos já realizados.</p>
            </div>
            
            <div style="margin-top: 50px; display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
                <div style="flex: 1; min-width: 300px;">
                    <p style="margin-bottom: 20px; color: #555; line-height: 1.8;">
                        Nossa equipe possui expertise em uma ampla gama de ferramentas de Business Intelligence, desde soluções proprietárias líderes de mercado até alternativas open source robustas e eficientes.
                    </p>
                    <p style="margin-bottom: 20px; color: #555; line-height: 1.8;">
                        Para cada etapa do ciclo de BI, selecionamos as ferramentas mais adequadas considerando fatores como:
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Infraestrutura existente</strong> na empresa
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Complexidade e volume</strong> dos dados a serem processados
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Requisitos de segurança</strong> e governança de dados
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Orçamento disponível</strong> para investimento em tecnologia
                        </li>
                        <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                            <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                            <strong>Capacidade técnica</strong> da equipe interna do cliente
                        </li>
                    </ul>
                    <p style="color: #555; line-height: 1.8;">
                        Quando necessário, sugerimos alternativas em licença GPL ou similares, garantindo soluções de alta qualidade com custo reduzido.
                    </p>
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <img src="images/tools_overview.jpg" alt="Ferramentas de BI" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Tools Categories Section -->
    <section class="section" style="padding: 80px 0; background-color: #f9f9f9;">
        <div class="container">
            <div class="section-header">
                <h2>Ferramentas por Categoria</h2>
                <div class="section-divider"></div>
            </div>
            
            <!-- Data Integration Tools -->
            <div style="margin-top: 50px;">
                <h3 style="color: #0A2240; margin-bottom: 30px; text-align: center;">Integração de Dados</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <!-- Proprietary Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções Proprietárias</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Microsoft SSIS</strong> (SQL Server Integration Services)
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Informatica PowerCenter</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>IBM InfoSphere DataStage</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Oracle Data Integrator</strong> (ODI)
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Talend Data Integration</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Open Source Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Alternativas Open Source</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache NiFi</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Talend Open Studio</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Pentaho Data Integration</strong> (Kettle)
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache Airflow</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Meltano</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Cloud-based Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções em Nuvem</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>AWS Glue</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Google Cloud Dataflow</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Azure Data Factory</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Fivetran</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Stitch</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Data Warehousing Tools -->
            <div style="margin-top: 70px;">
                <h3 style="color: #0A2240; margin-bottom: 30px; text-align: center;">Armazenamento e Modelagem de Dados</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <!-- Proprietary Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções Proprietárias</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Microsoft SQL Server</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Oracle Database</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>IBM Db2 Warehouse</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Teradata</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>SAP HANA</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Open Source Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Alternativas Open Source</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>PostgreSQL</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>MySQL</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache Hadoop</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache Hive</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>ClickHouse</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Cloud-based Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções em Nuvem</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Amazon Redshift</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Google BigQuery</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Azure Synapse Analytics</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Snowflake</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Databricks</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Data Visualization Tools -->
            <div style="margin-top: 70px;">
                <h3 style="color: #0A2240; margin-bottom: 30px; text-align: center;">Visualização e Dashboards</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <!-- Proprietary Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções Proprietárias</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Microsoft Power BI</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Tableau</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Qlik Sense</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>IBM Cognos Analytics</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>SAP BusinessObjects</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Open Source Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Alternativas Open Source</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Metabase</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache Superset</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Redash</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Grafana</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>BIRT</strong> (Business Intelligence and Reporting Tools)
                            </li>
                        </ul>
                    </div>
                    
                    <!-- JavaScript Libraries -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Bibliotecas JavaScript</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>D3.js</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Chart.js</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Highcharts</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>ECharts</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Plotly.js</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Data Science and ML Tools -->
            <div style="margin-top: 70px;">
                <h3 style="color: #0A2240; margin-bottom: 30px; text-align: center;">Análise Preditiva e Machine Learning</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                    <!-- Proprietary Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções Proprietárias</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>SAS</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>MATLAB</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>IBM SPSS</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>RapidMiner</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Alteryx</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Open Source Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Alternativas Open Source</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Python</strong> (com bibliotecas como Scikit-learn, TensorFlow, PyTorch)
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>R</strong> (com pacotes como tidyverse, caret, mlr)
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Apache Spark MLlib</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>H2O.ai</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>KNIME</strong>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Cloud-based Tools -->
                    <div style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                        <h4 style="color: #0A2240; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #2A9D5C;">Soluções em Nuvem</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Amazon SageMaker</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Google Cloud AI Platform</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>Azure Machine Learning</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>DataRobot</strong>
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 30px; position: relative;">
                                <i class="fas fa-check" style="color: #2A9D5C; position: absolute; left: 0; top: 5px;"></i>
                                <strong>IBM Watson</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tool Selection Process -->
    <section class="section" style="padding: 80px 0; background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>Como Selecionamos as Ferramentas Ideais</h2>
                <div class="section-divider"></div>
            </div>
            
            <div style="margin-top: 50px; display: flex; flex-wrap: wrap; gap: 30px;">
                <div style="flex: 1; min-width: 300px; background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="width: 70px; height: 70px; background-color: rgba(42, 157, 92, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-search" style="font-size: 30px; color: #2A9D5C;"></i>
                    </div>
                    <h3 style="color: #0A2240; margin-bottom: 15px;">Análise de Requisitos</h3>
                    <p style="color: #555; line-height: 1.7;">
                        Realizamos um diagnóstico detalhado das necessidades de negócio, volume e complexidade dos dados, requisitos de segurança e infraestrutura existente.
                    </p>
                </div>
                
                <div style="flex: 1; min-width: 300px; background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="width: 70px; height: 70px; background-color: rgba(42, 157, 92, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-balance-scale" style="font-size: 30px; color: #2A9D5C;"></i>
                    </div>
                    <h3 style="color: #0A2240; margin-bottom: 15px;">Avaliação Comparativa</h3>
                    <p style="color: #555; line-height: 1.7;">
                        Comparamos diferentes ferramentas considerando funcionalidades, escalabilidade, facilidade de uso, suporte, comunidade e custo total de propriedade.
                    </p>
                </div>
                
                <div style="flex: 1; min-width: 300px; background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="width: 70px; height: 70px; background-color: rgba(42, 157, 92, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-flask" style="font-size: 30px; color: #2A9D5C;"></i>
                    </div>
                    <h3 style="color: #0A2240; margin-bottom: 15px;">Prova de Conceito</h3>
                    <p style="color: #555; line-height: 1.7;">
                        Implementamos provas de conceito com dados reais para validar a adequação das ferramentas selecionadas antes da implementação completa.
                    </p>
                </div>
                
                <div style="flex: 1; min-width: 300px; background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                    <div style="width: 70px; height: 70px; background-color: rgba(42, 157, 92, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-graduation-cap" style="font-size: 30px; color: #2A9D5C;"></i>
                    </div>
                    <h3 style="color: #0A2240; margin-bottom: 15px;">Capacitação</h3>
                    <p style="color: #555; line-height: 1.7;">
                        Desenvolvemos planos de capacitação para a equipe interna do cliente, garantindo autonomia na utilização e evolução das soluções implementadas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Quer saber quais ferramentas são ideais para sua empresa?</h2>
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
