<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


$pageSpecificCSS = 'about/css/index.css';

include(__DIR__ .'\..\includes\config.php');
include(__DIR__ . '\..\includes\header.php');
?>

<main class="about-page">
    <div class="container">
        <h1 class="page-title">Партнеры</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — Партнеры</p>
        
        <div class="about-layout">
            <!-- Левое меню -->
            <aside class="about-sidebar">
                <nav class="about-menu">
                    <ul>
                        <li><a href="/about/management.php">Образование руководства компании</a></li>
                        <li><a href="/about/culture.php">Корпоративная культура</a></li>
                        <li><a href="/about/partners.php" class="active">Партнеры</a></li>
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
                <div class="partners-content">
                    <div class="partners-section">
                        <h2 class="section-title">Наши партнеры</h2>
                        <p class="section-text">В ряду постоянных заказчиков «СМУ-1» — крупнейшие российские холдинги, в том числе и стратегические компании с государственным участием. 

Многолетнее и плодотворное сотрудничество с лидерами рынка, а также рост числа совместных проектов — еще одно подтверждение высокого уровня качества предоставляемых предприятием услуг.

У «СМУ-1» есть опыт выполнения работ в интересах «Русской медной компании», «Уральской горно-металлургической компании», группы «НЛМК», группы «СИНАРА», группы «ТМК», компании «ЕВРАЗ», «Роснефти», «Татнефти», группы «УЗТМ-КАРТЭКС», «ОМК» и ряда других крупных заказчиков.</p>
                    </div>
                    
                    
                    
                    <div class="partners-section">
                        <h3 class="section-subtitle">Ключевые заказчики</h3>
                        <div class="partners-list">
                            <div class="partner-card">
                                <div class="partner-logo-container">
                                    <img src="/about/images/partners/aspek.png" alt="Русская медная компания" class="partner-logo">
                                </div>
                                <p class="partner-name">Русская медная компания</p>
                            </div>
                            
                            <div class="partner-card">
                                <div class="partner-logo-container">
                                    <img src="/about/images/partners/bp.png" alt="УГМК" class="partner-logo">
                                </div>
                                <p class="partner-name">Уральская горно-металлургическая компания</p>
                            </div>
                            
                            <!-- Добавьте других партнеров по аналогии -->
                        </div>
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
    
    /* Стили для контента партнеров */
    .partners-section {
        margin-bottom: 40px;
    }
    
    .section-title {
        font-size: 24px;
        color: #0056B3;
        margin-bottom: 20px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .section-subtitle {
        font-size: 20px;
        color: #333;
        margin: 25px 0 15px;
    }
    
    .section-text {
        line-height: 1.6;
        color: #555;
        margin-bottom: 15px;
    }
    
    .partners-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 20px;
    }
    
    .partner-card {
        background: #fff;
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .partner-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }
    
    .partner-logo-container {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }
    
    .partner-logo {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }
    
    .partner-name {
        text-align: center;
        font-weight: 600;
        color: #333;
        margin-top: 10px;
    }
    
    /* Адаптация для мобильных */
    @media (max-width: 768px) {
        .about-layout {
            flex-direction: column;
        }
        
        .about-sidebar {
            width: 100%;
        }
        
        .partners-list {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<?php include (__DIR__ .'\..\includes/footer.php') ; ?>