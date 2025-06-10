<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/config.php';
$pageSpecificCSS = 'about/css/index.css';
include 'includes/header.php'; 
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Документы</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Документы</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php">Партнеры</a></li>
                        <li><a href="/about/docs.php" class="active">Документация</a></li>
                        <li><a href="/about/Special assessment of working conditions.php">Специальная оценка условий труда</a></li>
                        <li><a href="/about/presentation.php">Презентация</a></li>
                        <li><a href="/about/press.php">Пресса о нас</a></li>
                        <li><a href="/about/reviews.php">Отзывы</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Правый контент -->
            <div class="about-content">
                <div class="docs-content">
                    <div class="docs-section">
                        <h2 class="section-title">Сертификаты</h2>
                        
                        <div class="documents-grid">
                            <!-- Документ 1 -->
                            <div class="document-card">
                                <div class="doc-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0056B3">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                                        <path d="M7 12h2v5H7zm4-7h2v12h-2zm4 4h2v8h-2z"/>
                                    </svg>
                                </div>
                                <div class="doc-info">
                                    <h3 class="doc-title">Лицензия МЧС</h3>
                                    <p class="doc-desc">Лицензия на осуществление деятельности по монтажу, техническому обслуживанию и ремонту средств обеспечения пожарной безопасности зданий и сооружений</p>
                                    <p class="doc-number">№ 1703.1/6</p>
                                    <a href="/about/docs/licenses/тема 2.1.pdf" class="doc-link" target="_blank">Скачать PDF</a>
                                </div>
                            </div>
                            
                            <!-- Документ 2 -->
                            <div class="document-card">
                                <div class="doc-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0056B3">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                                        <path d="M7 12h2v5H7zm4-7h2v12h-2zm4 4h2v8h-2z"/>
                                    </svg>
                                </div>
                                <div class="doc-info">
                                    <h3 class="doc-title">Сертификат ISO</h3>
                                    <p class="doc-desc">Сертификат соответствия системы менеджмента качества</p>
                                    <p class="doc-number">№ 3.4:N6</p>
                                    <a href="/about/docs/certificates/Для отработки.pdf" class="doc-link" target="_blank">Скачать PDF</a>
                                </div>
                            </div>
                            
                            <!-- Документ 3 -->
                            <div class="document-card">
                                <div class="doc-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0056B3">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                                        <path d="M7 12h2v5H7zm4-7h2v12h-2zm4 4h2v8h-2z"/>
                                    </svg>
                                </div>
                                <div class="doc-info">
                                    <h3 class="doc-title">Сертификат OHSAS</h3>
                                    <p class="doc-desc">Сертификат соответствия системы менеджмента охраны труда и промышленной безопасности</p>
                                    <p class="doc-number">№ 10:N6</p>
                                    <a href="/about/docs/certificates/Для отработки.pdf" class="doc-link" target="_blank">Скачать PDF</a>
                                </div>
                            </div>
                            
                            <!-- Документ 4 -->
                            <div class="document-card">
                                <div class="doc-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0056B3">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                                        <path d="M7 12h2v5H7zm4-7h2v12h-2zm4 4h2v8h-2z"/>
                                    </svg>
                                </div>
                                <div class="doc-info">
                                    <h3 class="doc-title">Свидетельство НКС</h3>
                                    <p class="doc-desc">Свидетельство Национального контроля сварки с готовности к использованию аттестованной технологии сварки</p>
                                    <p class="doc-number">№ 79.1/6</p>
                                    <a href="/about/docs/certificates/Для отработки.pdf" class="doc-link" target="_blank">Скачать PDF</a>
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
    
    /* Стили для документов */
    .section-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 25px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .documents-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
    }
    
    .document-card {
        display: flex;
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .document-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .doc-icon {
        flex: 0 0 50px;
        margin-right: 20px;
    }
    
    .doc-icon svg {
        width: 40px;
        height: 40px;
    }
    
    .doc-info {
        flex: 1;
    }
    
    .doc-title {
        font-size: 18px;
        color: #0056B3;
        margin-bottom: 8px;
    }
    
    .doc-desc {
        font-size: 14px;
        color: #555;
        line-height: 1.5;
        margin-bottom: 10px;
    }
    
    .doc-number {
        font-size: 13px;
        color: #777;
        margin-bottom: 10px;
    }
    
    .doc-link {
        display: inline-block;
        color: #0056B3;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        border-bottom: 1px dashed #0056B3;
        transition: all 0.2s;
    }
    
    .doc-link:hover {
        border-bottom-color: transparent;
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
        
        .documents-grid {
            grid-template-columns: 1fr;
        }
        
        .document-card {
            flex-direction: column;
        }
        
        .doc-icon {
            margin-right: 0;
            margin-bottom: 15px;
            text-align: center;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>