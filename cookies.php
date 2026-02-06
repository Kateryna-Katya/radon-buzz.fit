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
            <span class="section-tag">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашей платформой, обеспечить её корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                    Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия 
                    и предпочтения (например, настройки региона Англия, язык и параметры безопасности) 
                    в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют безопасно перемещаться по защищенным разделам <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют нашу цифровую инфраструктуру.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта взаимодействия с инновационными инструментами.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки предложений, соответствующих вашим интересам в сфере технологий.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы платформы 24/7.</li>
                    <li>Анализ пользовательского поведения для оптимизации работы AI-инструментов.</li>
                    <li>Персонализация контента для пользователей в Англии и странах ЕС.</li>
                    <li>Предоставление релевантных маркетинговых материалов о новых решениях.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых ключевых функций платформы.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах мы используем внешние сервисы для анализа и визуализации данных. Мы рекомендуем ознакомиться с их политиками конфиденциальности (например, Google Analytics).
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики использования cookie на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+442082970958">+44 20 8297 0958</a></li>
                        <li><strong>Адрес:</strong> 42 High St, London, SE13 5JZ, UK</li>
                    </ul>
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