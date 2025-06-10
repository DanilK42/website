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
        <h1 class="page-title">История</h1>
        <p class="page-subtitle">СМУ-1 — О Нас — История</p>
        
        <div class="about-layout">
            <!-- Левое вертикальное меню -->
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
            
            <!-- Основной контент справа -->
            <div class="about-content">
                <div class="history-content">
                    <h2 class="history-title">Расширяя горизонты развития!</h2>
                    
                    <div class="history-year">
                        <h3>2024</h3>
                        <ul class="history-events">
                            <li>Реализован проект Локальные очистные сооружения на предприятии АО «Челябинский цинковый завод».</li>
                            <li>ООО «СЛК Цемент» - новый заказчик в портфеле нашей компании. Реализация проекта «Строительство новой сухой линии обжига КОЗБ».</li>
                            <li>Активно продолжается строительство Цинкового электролизного завода, г. Верхний Уфалей.</li>
                        </ul>
                    </div>
                    
                    <div class="history-year">
                        <h3>2023</h3>
                        <ul class="history-events">
                            <li>Команда «СМУ-1» приступила к новому масштабному проекту, комплекс строительно-монтажных работ по строительству здания цеха по производству отводов гнутых на территории АО «Грубодеталь» в Челябинске.</li>
                        </ul>
                    </div>
                    
                    <div class="history-year">
                        <h3>2022</h3>
                        <ul class="history-events">
                            <li>Реализован проект по техническому перевооружению сернокислотного цеха на территории АО «Карабашмедь».</li>
                            <li>Реализован проект строительства «Кислородная станция № 4, ВКЦА № 7» на территории АО «Карабашмедь».</li>
                        </ul>
                    </div>
                    
                    <div class="history-year">
                        <h3>2021</h3>
                        <ul class="history-events">
                            <li>Перспективный и масштабный инвестпроект для «СМУ-1». Начало строительства цинкового электропливного завода нового поколения.</li>
                            <li>В сфере гражданского строительства успешно начали работу с компанией «Синара-Девелопмент».</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    /* Основные стили для страницы */
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
    
    /* Стили для меню */
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
    
    /* Стили для истории */
    .history-title {
        font-size: 28px;
        color: #0056B3;
        margin-bottom: 30px;
    }
    
    .history-year {
        margin-bottom: 30px;
    }
    
    .history-year h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    .history-events {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    .history-events li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 12px;
        line-height: 1.5;
    }
    
    .history-events li:before {
        content: "•";
        position: absolute;
        left: 0;
        color: #0056B3;
        font-weight: bold;
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
</main>

<?php include 'includes/footer.php'; ?>