-- DDL (Data Definition Language) para o banco de dados da Many Tecnologia
-- Nome do banco: u358394984_many
-- Usuário: u358394984_maudecastro
-- Senha: (a ser definida pelo usuário)

-- Tabela de contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(20),
  `assunto` VARCHAR(255) NOT NULL,
  `mensagem` TEXT NOT NULL,
  `data_contato` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_email` (`email`),
  INDEX `idx_data_contato` (`data_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabela de downloads (para landing page)
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `empresa` VARCHAR(255) NOT NULL,
  `cargo` VARCHAR(255) NOT NULL,
  `data_download` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_email` (`email`),
  INDEX `idx_empresa` (`empresa`),
  INDEX `idx_data_download` (`data_download`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabela de usuários administrativos
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `ultimo_acesso` TIMESTAMP NULL,
  UNIQUE KEY `username_unique` (`username`),
  INDEX `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserir usuário administrativo padrão (senha: admin123)
-- Recomendação: alterar esta senha após o primeiro acesso
INSERT INTO `admin_users` (`username`, `password`, `nome`, `email`) 
VALUES ('admin', '$2y$10$qJxFPrFP0Yl0.7HFcIQ.NeHIwMtXMaC5UZpLcGy5UfQsWNR.wXUHe', 'Administrador', 'falecom@manytecnologia.com.br')
ON DUPLICATE KEY UPDATE `id` = `id`;

-- Tabela de configurações do site (para futuras expansões)
CREATE TABLE IF NOT EXISTS `configuracoes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `chave` VARCHAR(255) NOT NULL,
  `valor` TEXT,
  `descricao` VARCHAR(255),
  `data_atualizacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `chave_unique` (`chave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserir configurações padrão
INSERT INTO `configuracoes` (`chave`, `valor`, `descricao`) VALUES
('site_titulo', 'Many Tecnologia - Business Intelligence', 'Título do site'),
('site_descricao', 'Transformando dados em decisões estratégicas para impulsionar o crescimento do seu negócio.', 'Descrição do site'),
('email_contato', 'falecom@manytecnologia.com.br', 'Email principal de contato'),
('telefone_contato', '(51) 98473-9881', 'Telefone principal de contato'),
('endereco', 'Av. Sete de Setembro, 1289/302, Bairro Moinhos, Lajeado/RS - CEP 95900-832', 'Endereço da empresa')
ON DUPLICATE KEY UPDATE `id` = `id`;

-- Tabela de logs de atividades (para auditoria)
CREATE TABLE IF NOT EXISTS `logs` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT,
  `acao` VARCHAR(255) NOT NULL,
  `descricao` TEXT,
  `ip` VARCHAR(45),
  `data_hora` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX `idx_usuario_id` (`usuario_id`),
  INDEX `idx_data_hora` (`data_hora`),
  FOREIGN KEY (`usuario_id`) REFERENCES `admin_users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
