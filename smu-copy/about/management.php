<?php 
// Включение отображения ошибок
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/config.php';
$pageSpecificCSS = 'about/css/index.css'; // Правильный путь к CSS
include 'includes/header.php'; 
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Образование руководства компании</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Образование руководства</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php" class="active">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php">Партнеры</a></li>
                        <li><a href="/about/documentation.php">Документация</a></li>
                        <li><a href="/about/Special assessment of working conditions.php">Специальная оценка условий труда</a></li>
                        <li><a href="/about/presentation.php">Презентация</a></li>
                        <li><a href="/about/press.php">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Основной контент -->
            <div class="about-content">
                <div class="management-content">
                    <h2 class="management-title">Наша команда руководителей</h2>
                    
                    <div class="management-section">
                        <h3>Профессиональное образование</h3>
                        <p>Дорогие коллеги, уважаемые партнеры и заказчики! Компания "СМУ-1" вот уже много лет работает над сохранением и укреплением своих лидирующих позиций на рынке промышленного строительства Урала.</p>
                    </div>
                    
                    <div class="management-section">
                        <h3>Опыт работы</h3>
                        <p>Последние три года "СМУ-1" пришлось действовать не в самых простых условиях. Свои коррективы в рабочие процессы внесли пандемия, осложнение внешнеполитической обстановки, экономические трудности.</p>
                    </div>
                    
                    <div class="management-section">
                        <h3>Текущие проекты</h3>
                        <p>В штатном режиме, точно по плану реализуются текущие проекты. В 2022 году компания "СМУ-1" завершила работы на нескольких ключевых объектах.</p>
                    </div>
                    
                    <div class="management-section">
                        <h3>Перспективы развития</h3>
                        <p>Наша компания заинтересована в расширении географии производства работ и внедрении новых передовых технологий в сфере промышленного производства.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Основные стили страницы (аналогичные предыдущей) */
    .about-page {
        padding: 30px 0 60px;
    }
    
    .page-title {
        font-size: 32px;
        color: #0056B3;
        margin-bottom: 10px;
    }
    
    .page-subtitle {
        color: #666;
        margin-bottom: 30px;
    }
    
    .about-layout {
        display: flex;
        gap: 40px;
    }
    
    .about-sidebar {
        width: 280px;
        flex-shrink: 0;
    }
    
    .about-content {
        flex: 1;
    }
    
    /* Стили меню */
    .about-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .about-menu li {
        margin-bottom: 15px;
    }
    
    .about-menu a {
        display: block;
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        border-left: 3px solid transparent;
        transition: all 0.3s;
    }
    
    .about-menu a:hover,
    .about-menu a.active {
        border-left: 3px solid #0056B3;
        color: #0056B3;
        background: #f5f9ff;
    }
    
    /* Стили контента управления */
    .management-title {
        font-size: 28px;
        color: #0056B3;
        margin-bottom: 30px;
    }
    
    .management-section {
        margin-bottom: 40px;
    }
    
    .management-section h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .management-section p {
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>