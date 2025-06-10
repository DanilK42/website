<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/config.php';
$pageSpecificCSS = 'about/css/index.css';
include 'includes/header.php'; 
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Пресса о нас</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Пресса</p>
        
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
                        <li><a href="/about/press.php" class="active">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Правый контент -->
            <div class="about-content">
                <div class="press-content">
                    <div class="press-section">
                        <h2 class="section-title">Публикации о компании</h2>
                        
                        <!-- Статья 1 -->
                        <div class="press-article">
                            <div class="article-header">
                                <div class="publication-logo">
                                    <img src="/images/shopping.png" alt="Деловая Россия">
                                </div>
                                <div class="article-meta">
                                    <h3 class="article-title">СМУ-1. Расширяем горизонты развития</h3>
                                    <p class="publication-name">Деловая Россия</p>
                                </div>
                            </div>
                            <div class="article-excerpt">
                                <p>Статья о новых проектах и перспективах развития компании СМУ-1 в промышленном строительстве Уральского региона.</p>
                            </div>
                            <a href="/docs/press/delovaya-rossiya-article.pdf" class="read-more" target="_blank">Читать статью →</a>
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
    
    /* Стили для прессы */
    .section-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 25px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .press-article {
        background: #fff;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .article-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .publication-logo {
        width: 60px;
        height: 60px;
        margin-right: 20px;
        flex-shrink: 0;
    }
    
    .publication-logo img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .article-meta {
        flex: 1;
    }
    
    .article-title {
        font-size: 18px;
        color: #0056B3;
        margin-bottom: 5px;
    }
    
    .publication-name {
        font-size: 14px;
        color: #777;
        font-weight: 500;
    }
    
    .article-excerpt {
        margin-bottom: 15px;
        color: #555;
        line-height: 1.6;
    }
    
    .read-more {
        color: #0056B3;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }
    
    .read-more:hover {
        text-decoration: underline;
    }
    
    .read-more::after {
        content: "→";
        margin-left: 5px;
        transition: transform 0.3s;
    }
    
    .read-more:hover::after {
        transform: translateX(3px);
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
        
        .article-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .publication-logo {
            margin-right: 0;
            margin-bottom: 15px;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>