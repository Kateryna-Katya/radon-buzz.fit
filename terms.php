<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%238b5cf6'/%3E%3Cpath d='M30 30 L70 30 L70 70 L50 70 L50 50 L30 50 Z' fill='white'/%3E%3C/svg%3E">
    <title><?= $domainTitle ?> — Инновации на пальцах</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="bg-canvas"></canvas>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="main-nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="./#hero" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="./#solutions" class="nav__link">Решения</a></li>
                    <li class="nav__item"><a href="./#how-it-works" class="nav__link">Как это работает</a></li>
                    <li class="nav__item"><a href="./#benefits" class="nav__link">Преимущества</a></li>
                    <li class="nav__item"><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Terms & Conditions</span>
            <h1>Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent">
                    <p>
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт, вы подтверждаете свое полное согласие с данными Условиями.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным материалам, аналитическим инструментам, программным решениям 
                        и другим сервисам технологического развития. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li>Предпринимать действия, которые могут нарушить стабильную работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты (боты, парсеры) для сбора информации без письменного разрешения.</li>
                        <li>Предоставлять заведомо недостоверную контактную информацию при запросе доступа.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <i data-lucide="copyright"></i>
                        <p>
                            Весь контент на <strong><?= $fullDomain ?></strong> (тексты, программный код, графика, уникальные алгоритмы и логотипы) является исключительной собственностью Компании. 
                            Вам предоставляется ограниченная неисключительная лицензия для личного использования в целях изучения инноваций. Любое коммерческое копирование материалов запрещено.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block">
                        <p>
                            Услуги и доступ к данным предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые прямые или косвенные убытки, 
                            возникшие в результате использования или временной невозможности доступа к платформе <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять настоящие Условия в любое время. Все споры подлежат разрешению путем переговоров. 
                        В случае невозможности мирного урегулирования, споры рассматриваются в соответствии с законодательством Англии по месту регистрации Компании.
                    </p>
                </div>

                <div class="contact-footer-policy">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__tagline">Технологии, которые работают на вас. Платформа уже доступна в Европе.</p>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#solutions">Решения</a></li>
                    <li><a href="./#how-it-works">Методология</a></li>
                    <li><a href="./#contact">Запросить доступ</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li><i data-lucide="phone"></i> +442082970958</li>
                    <li><i data-lucide="mail"></i> hello@<?= $fullDomain ?></li>
                    <li><i data-lucide="map-pin"></i> 42 High St, London, SE13 5JZ, UK</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
        </div>
    </footer>
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon">
                <i data-lucide="cookie"></i>
            </div>
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>