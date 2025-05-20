// JavaScript principal para o site da Many Tecnologia

document.addEventListener('DOMContentLoaded', function() {
    // Menu mobile
    const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
    const navMenu = document.querySelector('nav ul');
    
    if (mobileMenuIcon) {
        mobileMenuIcon.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
    
    // Fechar menu ao clicar fora
    document.addEventListener('click', function(event) {
        if (!event.target.closest('nav') && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
        }
    });
    
    // Tabs na seção de áreas de negócio
    const tabItems = document.querySelectorAll('.tab-item');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabItems.length > 0) {
        tabItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remover classe active de todas as tabs
                tabItems.forEach(tab => tab.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Adicionar classe active na tab clicada
                this.classList.add('active');
                
                // Mostrar conteúdo correspondente
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    }
    
    // Animação de scroll suave para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animação de elementos ao scroll
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.service-card, .differential-card, .about-image, .hero-image');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Inicializar elementos com opacidade 0
    const elementsToAnimate = document.querySelectorAll('.service-card, .differential-card, .about-image, .hero-image');
    elementsToAnimate.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    
    // Executar animação no carregamento e no scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
    
    // Validação de formulários
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                    
                    // Adicionar mensagem de erro se não existir
                    let errorMessage = field.nextElementSibling;
                    if (!errorMessage || !errorMessage.classList.contains('error-message')) {
                        errorMessage = document.createElement('div');
                        errorMessage.classList.add('error-message');
                        errorMessage.textContent = 'Este campo é obrigatório';
                        field.parentNode.insertBefore(errorMessage, field.nextSibling);
                    }
                } else {
                    field.classList.remove('error');
                    
                    // Remover mensagem de erro se existir
                    const errorMessage = field.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('error-message')) {
                        errorMessage.remove();
                    }
                }
            });
            
            // Validação específica para email
            const emailField = form.querySelector('input[type="email"]');
            if (emailField && emailField.value.trim()) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailField.value)) {
                    isValid = false;
                    emailField.classList.add('error');
                    
                    // Adicionar mensagem de erro se não existir
                    let errorMessage = emailField.nextElementSibling;
                    if (!errorMessage || !errorMessage.classList.contains('error-message')) {
                        errorMessage = document.createElement('div');
                        errorMessage.classList.add('error-message');
                        errorMessage.textContent = 'Por favor, insira um email válido';
                        emailField.parentNode.insertBefore(errorMessage, emailField.nextSibling);
                    } else {
                        errorMessage.textContent = 'Por favor, insira um email válido';
                    }
                }
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
    
    // Remover classe de erro ao digitar
    document.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('input', function() {
            this.classList.remove('error');
            
            // Remover mensagem de erro se existir
            const errorMessage = this.nextElementSibling;
            if (errorMessage && errorMessage.classList.contains('error-message')) {
                errorMessage.remove();
            }
        });
    });
    
    // Botão de WhatsApp flutuante
    const whatsappButton = document.createElement('a');
    whatsappButton.href = 'https://wa.me/5551984739881';
    whatsappButton.className = 'whatsapp-float';
    whatsappButton.target = '_blank';
    whatsappButton.innerHTML = '<i class="fab fa-whatsapp"></i>';
    whatsappButton.style.position = 'fixed';
    whatsappButton.style.width = '60px';
    whatsappButton.style.height = '60px';
    whatsappButton.style.bottom = '40px';
    whatsappButton.style.right = '40px';
    whatsappButton.style.backgroundColor = '#25d366';
    whatsappButton.style.color = '#FFF';
    whatsappButton.style.borderRadius = '50px';
    whatsappButton.style.textAlign = 'center';
    whatsappButton.style.fontSize = '30px';
    whatsappButton.style.boxShadow = '2px 2px 3px #999';
    whatsappButton.style.zIndex = '100';
    whatsappButton.style.display = 'flex';
    whatsappButton.style.alignItems = 'center';
    whatsappButton.style.justifyContent = 'center';
    
    document.body.appendChild(whatsappButton);
});
