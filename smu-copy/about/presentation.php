<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pageSpecificCSS = 'about/css/index.css';

include(__DIR__ .'\..\includes\config.php');
include(__DIR__ . '\..\includes\header.php');

?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Презентация</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Презентация</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php">Партнеры</a></li>
                        <li><a href="/about/documentation.php">Документация</a></li>
                        <li><a href="/about/Special assessment of working conditions.php">Специальная оценка условий труда</a></li>
                        <li><a href="/about/presentation.php" class="active">Презентация</a></li>
                        <li><a href="/about/press.php">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Правый контент -->
            <div class="about-content">
                <div class="presentation-content">
                    <div class="presentation-section">
                        <h2 class="section-title">Презентация компании СМУ-1</h2>
                        
                        <div class="presentation-card">
                            <div class="presentation-preview">
                                <img src="/about/images/presentation/prez.png" alt="Превью презентации" class="preview-image">
                                <div class="presentation-info">
                                    <h3 class="presentation-title">Официальная презентация СМУ-1</h3>
                                    <p class="presentation-description">Полное описание деятельности компании, наших проектов и достижений</p>
                                    <div class="download-section">
                                        <a href="/about/docs/presentation/тема 2.1.pdf" class="download-button" download>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                            Скачать презентацию (PDF)
                                        </a>
                                        <span class="file-size">~15 MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    
    /* Стили для презентации */
    .section-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 25px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .presentation-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }
    
    .presentation-preview {
        display: flex;
        flex-direction: column;
    }
    
    .preview-image {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #eee;
    }
    
    .presentation-info {
        padding: 25px;
    }
    
    .presentation-title {
        font-size: 20px;
        color: #0056B3;
        margin-bottom: 10px;
    }
    
    .presentation-description {
        color: #555;
        line-height: 1.5;
        margin-bottom: 20px;
    }
    
    .download-section {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .download-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background-color: #0056B3;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    
    .download-button:hover {
        background-color: #003d7a;
    }
    
    .download-button svg {
        width: 16px;
        height: 16px;
    }
    
    .file-size {
        color: #777;
        font-size: 14px;
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
        
        .download-section {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<?php include (__DIR__ .'\..\includes/footer.php') ; ?>