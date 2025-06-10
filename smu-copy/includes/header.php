<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СМУ-1 - Группа компаний</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <?php if(basename($_SERVER['PHP_SELF']) == 'projects.php'): ?>
    <link rel="stylesheet" href="/css/projects.css">
    <?php endif; ?>
    <?php if(basename($_SERVER['PHP_SELF']) == 'contacts.php'): ?>
    <link rel="stylesheet" href="/css/contacts.css">
<?php endif; ?>
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__address">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="#0056B3">
                        <path d="M8 0C4.1 0 1 3.1 1 7c0 1.9.7 3.7 2 5l5 5 5-5c1.3-1.3 2-3.1 2-5 0-3.9-3.1-7-7-7zm0 10c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z"/>
                    </svg>
                    620102, г. Благеринбург, ул. Белореченская, д.15
                </div>
                
            </div>
        </div>

        <div class="header__main">
            <div class="container">
                <div class="header__main-inner">
                    <a href="/" class="header__logo">
                        <span class="header__logo-text">SMY-1</span>
                        <span class="header__logo-sublogo">АРХИВА, с. 8 отдыхать</span>
                    </a>

                    <nav class="header__nav">
                        <ul>
                            <li><a href="/about/indexs.php">О НАС</a></li>
                            <li><a href="/activity">ДЕЯТЕЛЬНОСТЬ</a></li>
                            <li><a href="/group-companies/index.php">КОМПАНИИ ГРУППЫ</a></li>
                            <li><a href="/news">НОВОСТИ</a></li>
                            <li><a href="/projects/projects.php">ПРОЕКТЫ</a></li>
                            <li><a href="/career">КАРЬЕРА</a></li>
                            <li><a href="/contacts/contacts.php">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>

                    <div class="header__phone">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="#0056B3">
                            <path d="M14.5 11.5c-.6.9-1.5 1.7-2.4 2.3-.4.2-.8.3-1.2.3-.4 0-.8-.1-1.1-.3l-1.5-.8c-1.2-.6-2.3-1.6-3.1-2.8-.8-1.1-1.4-2.3-1.8-3.6-.1-.4 0-.8.2-1.1.3-.5.6-1 .9-1.5.3-.5.7-.9 1.1-1.3.4-.4.9-.7 1.4-.9.4-.2.8-.2 1.2-.1.4.1.8.3 1.1.6l1.2 1.2c.3.3.5.7.5 1.1 0 .4-.2.8-.5 1.1l-.8.8c-.1.1-.1.3 0 .4.4.6.9 1.1 1.5 1.6.1.1.3.1.4 0 .5l-.8.8c-.3.3-.7.5-1.1.5-.4 0-.8-.2-1.1-.5l-1.2-1.2c-.1-.1-.3-.1-.4 0-.2.2-.3.4-.5.6-.1.2-.1.4 0 .5.6 1.1 1.4 2 2.3 2.8.1.1.3.1.4 0 .2-.2.4-.3.6-.5.1-.1.3-.1.4 0l1.2 1.2c.5.5 1.2.7 1.9.6.7-.1 1.3-.5 1.8-1z"/>
                            
                        </svg>
                        +7 (343) 300-77-88
                    </div>

                    <button class="header__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>