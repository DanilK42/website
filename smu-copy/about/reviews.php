<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pageSpecificCSS = 'about/css/index.css';

include(__DIR__ .'\..\includes\config.php');
include(__DIR__ . '\..\includes\header.php');
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Отзывы клиентов</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Отзывы</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php">Партнеры</a></li>
                        <li><a href="/about/docs.php">Документация</a></li>
                        <li><a href="/about/sout.php">Специальная оценка условий труда</a></li>
                        <li><a href="/about/presentation.php">Презентация</a></li>
                        <li><a href="/about/press.php">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php" class="active">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Правый контент -->
            <div class="about-content">
                <div class="reviews-content">
                    <div class="reviews-section">
                        <h2 class="section-title">Благодарности от наших клиентов</h2>
                        
                        <!-- Отзыв 1 -->
                        <div class="review-card">
                            <div class="review-header">
                                <div class="company-logo">
                                    <img src="/images/reviews/evraz-logo.png" alt="АО «ЕВРАЗ КГОК»">
                                </div>
                                <div class="review-meta">
                                    <h3 class="company-name">АО «ЕВРАЗ КГОК»</h3>
                                    <p class="review-date">15 марта 2023 года</p>
                                </div>
                            </div>
                            <div class="review-text">
                                <p>ООО «СМУ-1» зарекомендовало себя как надежный подрядчик, выполняющий работы в установленные сроки и с надлежащим качеством. Благодарим за профессиональный подход и ответственность!</p>
                            </div>
                            <a href="/docs/reviews/evraz-letter.pdf" class="review-link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                                Смотреть оригинал письма
                            </a>
                        </div>
                        
                        
</main>

<style>
    /* Основные стили страницы (как на предыдущих) */
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
    
    /* Стили для отзывов */
    .section-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 25px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .review-card {
        background: #fff;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .review-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .company-logo {
        width: 60px;
        height: 60px;
        margin-right: 20px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f9f9f9;
        border-radius: 4px;
        padding: 5px;
    }
    
    .company-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    
    .review-meta {
        flex: 1;
    }
    
    .company-name {
        font-size: 18px;
        color: #0056B3;
        margin-bottom: 5px;
    }
    
    .review-date {
        font-size: 14px;
        color: #777;
    }
    
    .review-text {
        margin-bottom: 15px;
        color: #555;
        line-height: 1.6;
    }
    
    .review-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #0056B3;
        text-decoration: none;
        font-weight: 500;
    }
    
    .review-link:hover {
        text-decoration: underline;
    }
    
    .review-link svg {
        width: 16px;
        height: 16px;
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
        
        .review-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .company-logo {
            margin-right: 0;
            margin-bottom: 15px;
        }
    }
</style>

<?php include (__DIR__ .'\..\includes/footer.php') ; ?>