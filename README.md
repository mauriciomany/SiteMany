# Many Tecnologia - Website Institucional

Este documento contém instruções para configuração, personalização e manutenção do site institucional da Many Tecnologia.

## Estrutura do Site

O site foi desenvolvido em PHP com banco de dados MySQL e inclui as seguintes funcionalidades:

- **Páginas Institucionais**: Home, Soluções, Ferramentas, Cases, Sobre Nós
- **Formulário de Contato**: Integrado ao banco de dados MySQL
- **Landing Page para Download**: Captura de leads com formulário para download da apresentação
- **Área Administrativa**: Dashboard para visualização de contatos e downloads
- **Integração com Google Analytics**: Monitoramento de tráfego e comportamento dos usuários

## Configuração Inicial

### 1. Configuração do Banco de Dados

O arquivo de configuração do banco de dados está localizado em:
```
/includes/config.php
```

Você deve atualizar as seguintes informações:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'u358394984_many');
define('DB_USER', 'u358394984_maudecastro');
define('DB_PASS', 'xxxxxx'); // Substitua pela senha real
```

### 2. Configuração do Administrador

Para acessar a área administrativa, você precisa criar um usuário administrador. Execute o seguinte SQL no seu banco de dados:

```sql
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Crie um usuário administrador (senha: admin123)
-- Recomendamos alterar essa senha imediatamente após o primeiro login
INSERT INTO admin_users (username, password, nome, email) 
VALUES ('admin', '$2y$10$8tGIXzJvYmm1zBdI.sMVnOQQJrGBn1nYA8mvUJEm3vgvMCZD4QKGe', 'Administrador', 'falecom@manytecnologia.com.br');
```

### 3. Arquivos da Apresentação

Para que a funcionalidade de download funcione corretamente, você deve colocar o arquivo PDF da apresentação em:

```
/files/apresentacao_many_bi.pdf
```

### 4. Imagens e Recursos

Certifique-se de que todas as imagens estejam no diretório `/images/`, incluindo:

- Logo da empresa (logo_many.png)
- Fluxogramas de BI
- Exemplos de dashboards
- Outras imagens institucionais

## Segurança

### Proteção da Área Administrativa

1. **Senhas Fortes**: Altere a senha padrão do administrador imediatamente após o primeiro login.

2. **Proteção .htaccess**: Adicione um arquivo .htaccess na pasta admin para restringir o acesso por IP:

```
# Permitir apenas IPs específicos (substitua pelos seus IPs)
<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteCond %{REMOTE_ADDR} !^123\.456\.789\.10$
  RewriteCond %{REMOTE_ADDR} !^111\.222\.333\.44$
  RewriteRule ^ - [F]
</IfModule>
```

3. **Implementação de CAPTCHA**: Considere adicionar CAPTCHA ao formulário de login administrativo para evitar ataques de força bruta.

### Proteção de Dados

1. **Sanitização de Entradas**: Todas as entradas de usuário já são sanitizadas, mas mantenha essa prática ao adicionar novos formulários.

2. **Preparação de Consultas SQL**: Todas as consultas SQL usam prepared statements para prevenir injeção SQL.

3. **HTTPS**: Certifique-se de que o site esteja configurado para usar HTTPS. Adicione o seguinte ao .htaccess na raiz:

```
# Forçar HTTPS
<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteCond %{HTTPS} off
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>
```

## Sugestões para Melhorias

### 1. Automação de Marketing

- **Email Marketing Automático**: Implemente um sistema de email marketing para enviar automaticamente emails para leads que baixaram a apresentação.
  
  ```php
  // Exemplo de código para integração com serviço de email marketing
  function enviarEmailAutomatico($nome, $email) {
      // Integração com serviço como Mailchimp, SendinBlue, etc.
  }
  ```

- **Segmentação de Leads**: Adicione campos adicionais ao formulário de download para melhor segmentação:
  - Tamanho da empresa
  - Setor de atuação
  - Interesse específico em BI

### 2. Integração com CRM

- **Webhook para CRM**: Implemente um webhook para enviar leads diretamente para seu CRM:

  ```php
  function enviarParaCRM($dados) {
      $url = 'https://seu-crm.com/api/leads';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
  }
  ```

### 3. SEO e Performance

- **Meta Tags Dinâmicas**: Implemente meta tags dinâmicas para cada página:

  ```php
  function gerarMetaTags($titulo, $descricao, $palavras_chave) {
      echo '<title>' . $titulo . ' - Many Tecnologia</title>';
      echo '<meta name="description" content="' . $descricao . '">';
      echo '<meta name="keywords" content="' . $palavras_chave . '">';
  }
  ```

- **Sitemap XML**: Crie um sitemap.xml para melhor indexação pelos motores de busca:

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
      <loc>http://manytecnologia.com.br/</loc>
      <lastmod>2025-05-20</lastmod>
      <changefreq>monthly</changefreq>
      <priority>1.0</priority>
    </url>
    <!-- Adicione outras URLs -->
  </urlset>
  ```

- **Otimização de Imagens**: Comprima todas as imagens para melhorar o tempo de carregamento.

- **Lazy Loading**: Implemente lazy loading para imagens:

  ```html
  <img src="placeholder.jpg" data-src="imagem-real.jpg" class="lazy" alt="Descrição">
  ```

  ```javascript
  document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    
    if ("IntersectionObserver" in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            let lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazy");
            lazyImageObserver.unobserve(lazyImage);
          }
        });
      });
      
      lazyImages.forEach(function(lazyImage) {
        lazyImageObserver.observe(lazyImage);
      });
    }
  });
  ```

### 4. Conteúdo e Engajamento

- **Blog**: Adicione uma seção de blog para compartilhar conteúdo relevante sobre BI e análise de dados:
  - Estudos de caso
  - Tutoriais
  - Tendências do mercado
  - Dicas de implementação

- **Calculadora de ROI**: Crie uma calculadora interativa que mostre o potencial retorno sobre investimento em soluções de BI.

- **Webinars e Eventos**: Adicione uma seção para inscrição em webinars e eventos.

- **Depoimentos de Clientes**: Adicione uma seção de depoimentos com fotos e vídeos de clientes satisfeitos.

### 5. Conversão e Leads

- **Chat ao Vivo**: Implemente um chat ao vivo para atendimento imediato aos visitantes.

- **Pop-up de Saída**: Adicione um pop-up quando o usuário estiver prestes a sair do site:

  ```javascript
  document.addEventListener('mouseleave', function(e) {
    if (e.clientY < 0 && !sessionStorage.getItem('popupShown')) {
      document.getElementById('exit-popup').style.display = 'block';
      sessionStorage.setItem('popupShown', true);
    }
  });
  ```

- **Botão de WhatsApp Flutuante**: Adicione um botão flutuante para contato via WhatsApp:

  ```html
  <a href="https://wa.me/5551984739881" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
  ```

  ```css
  .whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  ```

## Manutenção

### Backup Regular

Implemente um sistema de backup automático para o banco de dados:

```php
// Script de backup (backup.php)
<?php
$db_host = 'localhost';
$db_user = 'u358394984_maudecastro';
$db_pass = 'xxxxxx'; // Substitua pela senha real
$db_name = 'u358394984_many';
$backup_dir = '/path/to/backups/';

$date = date("Y-m-d-H-i-s");
$backup_file = $backup_dir . $db_name . '_' . $date . '.sql';

$command = "mysqldump -h $db_host -u $db_user -p$db_pass $db_name > $backup_file";
system($command);
?>
```

Configure um cron job para executar este script regularmente:

```
0 2 * * * php /path/to/backup.php
```

### Monitoramento

- **Uptime Monitoring**: Use serviços como UptimeRobot ou Pingdom para monitorar a disponibilidade do site.
- **Logs de Erro**: Verifique regularmente os logs de erro do PHP e do servidor web.
- **Análise de Tráfego**: Revise regularmente os dados do Google Analytics para identificar tendências e oportunidades.

## Contato para Suporte

Para qualquer dúvida ou suporte técnico, entre em contato:

- **Email**: suporte@manytecnologia.com.br
- **Telefone**: (51) 98473-9881

---

© 2025 Many Tecnologia. Todos os direitos reservados.
