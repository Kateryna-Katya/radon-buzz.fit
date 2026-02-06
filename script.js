document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Анимированный фон (Canvas)
    const canvas = document.getElementById('bg-canvas');
    const ctx = canvas.getContext('2d');
    let particles = [];

    function initCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    class Particle {
        constructor() { this.reset(); }
        reset() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 0.5;
            this.speedX = Math.random() * 0.5 - 0.25;
            this.speedY = Math.random() * 0.5 - 0.25;
            this.opacity = Math.random() * 0.5;
        }
        update() {
            this.x += this.speedX; this.y += this.speedY;
            if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) this.reset();
        }
        draw() {
            ctx.fillStyle = `rgba(139, 92, 246, ${this.opacity})`;
            ctx.beginPath(); ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx.fill();
        }
    }

    for (let i = 0; i < 40; i++) particles.push(new Particle());
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(animate);
    }
    initCanvas(); animate();
    window.addEventListener('resize', initCanvas);

    // 3. Мобильное меню
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    burger.addEventListener('click', () => {
        burger.classList.toggle('burger--active');
        nav.classList.toggle('nav--active');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('burger--active');
            nav.classList.remove('nav--active');
        });
    });

    // 4. Скролл-эффекты для Хедера
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.style.background = window.scrollY > 50 ? 'rgba(15, 15, 17, 0.95)' : 'rgba(15, 15, 17, 0.8)';
    });

    // 5. Аккордеон FAQ
    document.querySelectorAll('.faq-item__trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const parent = trigger.parentElement;
            const wasActive = parent.classList.contains('faq-item--active');
            document.querySelectorAll('.faq-item').forEach(item => item.classList.remove('faq-item--active'));
            if (!wasActive) parent.classList.add('faq-item--active');
        });
    });

    // 6. Форма контактов и Капча
    const phoneInput = document.getElementById('phone');
    if(phoneInput) phoneInput.addEventListener('input', (e) => e.target.value = e.target.value.replace(/[^\d]/g, ''));

    let captchaResult;
    const captchaLabel = document.getElementById('captcha-question');
    if(captchaLabel) {
        const a = Math.floor(Math.random() * 10) + 1;
        const b = Math.floor(Math.random() * 10) + 1;
        captchaResult = a + b;
        captchaLabel.innerText = `${a} + ${b}`;
    }

    const contactForm = document.getElementById('main-form');
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const answer = parseInt(document.getElementById('captcha-answer').value);
            if (answer !== captchaResult) {
                alert('Ошибка капчи'); return;
            }
            const btn = document.getElementById('submit-btn');
            btn.innerText = 'Отправка...'; btn.disabled = true;
            setTimeout(() => {
                document.getElementById('form-success').style.display = 'flex';
                lucide.createIcons();
            }, 1500);
        });
    }

    // 7. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('cookie-popup--show'), 2000);
    }

    cookieBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('cookie-popup--show');
    });

    // 8. Intersection Observer для анимации появления
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.solution-card, .step-item, .benefit-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
});