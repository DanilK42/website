<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/config.php';
$pageSpecificCSS = 'about/css/index.css';
include 'includes/header.php'; 
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Корпоративная культура</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Корпоративная культура</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php" class="active">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php">Партнеры</a></li>
                        <li><a href="/about/documentation.php">Документация</a></li>
                        <li><a href="/about/Special assessment of working conditions.php">Специальная оценка условий труда</a></li>
                        <li><a href="/about/presentation.php">Презентация</a></li>
                        <li><a href="/about/press.php">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Правый контент -->
            <div class="about-content">
                <div class="culture-content">
                    <div class="culture-section">
                        <h2 class="culture-title">Корпоративный дух</h2>
                        <img src="/images/logo-white.png" alt="Корпоративный дух" class="culture-image">
                        <h3>Только вперед!</h3>
                        <p>Настоящая команда не боится ни грязи, ни скорости! Жми на газ!</p>
                    </div>
                    
                    <div class="culture-section">
                        <h2 class="culture-title">Футбольный турнир</h2>
                        <img src="/images/logo-white.png" alt="Корпоративный дух" class="culture-image">
                        <h3>Спортивные традиции</h3>
                        <p>Регулярные корпоративные турниры по футболу укрепляют командный дух и здоровую конкуренцию.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Основные стили страницы */
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
    
    /* Расположение контента */
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
    
    /* Стили контента культуры */
    .culture-content {
        padding: 20px;
    }
    
    .culture-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .culture-section {
        margin-bottom: 40px;
    }
    
    .culture-section h3 {
        font-size: 20px;
        color: #333;
        margin: 15px 0 10px;
    }
    
    .culture-section p {
        line-height: 1.6;
        color: #555;
        margin-bottom: 15px;
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
    }

    .culture-image {
    max-width: 100%;
    height: auto;
    margin: 15px 0;
    border-radius: 4px;
}
</style>

<?php include 'includes/footer.php'; ?>