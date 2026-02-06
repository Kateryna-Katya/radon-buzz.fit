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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей Великобритании.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <i data-lucide="file-warning"></i>
                        <h3>Несоответствие услуге</h3>
                        <p>Если функционал платформы существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <i data-lucide="server-off"></i>
                        <h3>Технические сбои</h3>
                        <p>Критические ошибки на <strong><?= $fullDomain ?></strong>, которые не позволяют использовать инструменты и не были устранены в срок.</p>
                    </div>
                    <div class="refund-card">
                        <i data-lucide="calendar-days"></i>
                        <h3>Период охлаждения</h3>
                        <p>Отказ в течение 14 дней с момента активации доступа при условии отсутствия значительной активности.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Тема: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span>3</span> Данные: ФИО, Email, выбранный тариф</div>
                        <div class="step-mini"><span>4</span> Подробное описание причины запроса</div>
                    </div>
                </div>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка в Англии или стране вашего пребывания.
                </p>

                <div class="warning-block">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Было совершено более 30% целевых действий или загрузок данных на платформе.</li>
                        <li>Технические проблемы вызваны оборудованием или ПО на стороне пользователя.</li>
                        <li>Нарушение условий Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам, связанным с возвратом средств, обращайтесь в нашу службу поддержки:</p>
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