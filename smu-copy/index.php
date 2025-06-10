<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<main>
 
 <section class="hero-banner">
    <?php 
        $banner_image = "images/logo-white.png"; // Путь к большому изображению
        echo '<img src="' . $banner_image . '" alt="Промышленные объекты" class="hero-image">';
    ?>
    
    <div class="hero-text-container">
        <div class="hero-text-content">
            <h1 class="hero-title">ГЕНЕРАЛЬНЫЙ ПОДРЯД</h1>
            <h2 class="hero-subtitle">И ПРОЕКТИРОВАНИЕ</h2>
            <p class="hero-description">
                ОБЪЕКТОВ ПРОМЫШЛЕННОГО<br>
                И ГРАЖДАНСКОГО НАЗНАЧЕНИЯ
            </p>
        </div>
    </div>
</section>
    

<!-- Approach Section -->
<section class="approach-section">
    <div class="container">
        <h2 class="section-title">ИНТЕЛЛЕКТУАЛЬНЫЙ ПОДХОД</h2>
        <h3 class="section-subtitle">ПЕРЕДОВЫЕ ТЕХНОЛОГИИ</h3>
        
        <div class="approach-content-wrapper">
            <div class="approach-text">
                <p>В арсенале СМУ-1 многолетний опыт строительства и реконструкции объектов черной и цветной металлургии, горной промышленности, нефтегазовой, химической, энергетической отраслей, а также производства стройматериалов.</p>
                
                <p>В рамках ключевых направлений своей деятельности компании с 2009 года возводит новые объекты, участвует в техническом перевооружении предприятий металлургии, ведет капитальный ремонт.</p>
                
                <p>В пул основных партнеров входят лидеры российской промышленности, включая ведущих игроков рынка металлургии.</p>
            </div>
            
            <div class="approach-image">
                <?php 
                    $image_path = "images/logo-white.png"; 
                    echo '<img src="' . $image_path . '" alt="Передовые технологии">';
                ?>
                <a href="/about" class="about-button" style="display: inline-block; padding: 12px 25px; background-color: #1E90FF; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: background-color 0.3s; margin-top: 15px;">о компании</a>
            </div>
        </div>
    </div>
</section>


<!-- Partners Slider Section -->
<section class="partners-slider">
    <div class="container">
        <h2 class="section-title">НАШИ ПАРТНЁРЫ</h2>
        
        <div class="slider-container">
            <button class="slider-arrow prev-arrow" id="partnersPrevBtn">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
                </svg>
            </button>
            
            <div class="slider-track" id="partnersSliderTrack">
                <?php
                $partners = [
                    'amazon.png' => 'СЕВЕРСКИЙ ТРУБНЫЙ ЗАВОД',
                    'bp.png' => 'НЛМК',
                    'cHA.png' => 'РОСНЕФТЬ',
                    'Fed.png' => 'ТАТНЕФТЬ',
                    'nofi.png' => 'ТМК',
                    'vkys.png' => 'assad',
                    'aspek.png' => 'asdasd',
                    'abra.png' => 'sdfsdf'
                ];
                
                foreach ($partners as $image => $alt) {
                    echo '<div class="slider-slide">
                        <img src="images/partners/'.$image.'" alt="'.$alt.'">
                    </div>';
                }
                ?>
            </div>
            
            <button class="slider-arrow next-arrow" id="partnersNextBtn">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
            </button>
        </div>
    </div>

        

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title">СОБЫТИЯ КОМПАНИИ</h1>
            <h2 class="section-subtitle">АКТУАЛЬНЫЕ НОВОСТИ</h2>
        </div>
        
        <div class="news-grid">
            <!-- Новость 1 -->
            <a href="/news/1" class="news-card">
                <div class="news-image">
                    <img src="images/logo-white.png" alt="Новость 1">
                </div>
                <div class="news-date">3 мая 2025</div>
                <h3 class="news-title">ООО «СМУ-1» (мы открываем завесу)</h3>
            </a>
            
            <!-- Новость 2 -->
            <a href="/news/2" class="news-card">
                <div class="news-image">
                    <img src="images/logo-white.png" alt="Новость 2">
                </div>
                <div class="news-date">28 апреля 2025</div>
                <h3 class="news-title">Охрана труда глазами детей</h3>
            </a>
            
            <!-- Новость 3 -->
            <a href="/news/3" class="news-card">
                <div class="news-image">
                    <img src="images/logo-white.png" alt="Новость 3">
                </div>
                <div class="news-date">21 февраля 2025</div>
                <h3 class="news-title">В завершающей стадии строительство проекта «Развитие обручения и аэропорта хозяйства ЕВРАЗА КПОК» размещена инвестиционного проекта «Развитие ЦХХ2 очереди»</h3>
            </a>
            
            <!-- Новость 4 -->
            <a href="/news/4" class="news-card">
                <div class="news-image">
                    <img src="images/logo-white.png" alt="Новость 4">
                </div>
                <div class="news-date">20 февраля 2025</div>
                <h3 class="news-title">С Днем Защитника Отечества!</h3>
            </a>
        </div>
        
        <div class="load-more">
            <button class="load-more-btn">Загрузить еще</button>
        </div>
    </div>
</section>

<!-- Management Section -->
<section class="management-section">
    <div class="container">
        <h2 class="section-title">ГРАМОТНОЕ УПРАВЛЕНИЕ ПРОЦЕССАМИ</h2>
        
        <div class="management-wrapper">
            <div class="management-content">
                <p>Количество аттестованных специалистов в предприятии превышает <strong>400 человек</strong>.<br>
                При выполнении функций Генерального подряда есть опыт привлечения до <strong>1 000 человек</strong>.</p>
                
                <p>Основная часть работ выполняется собственными силами. У специалистов компании есть опыт работ по монтажу сложных и уникальных объектов (монтаж конструкций весом до <strong>120 тонн</strong>)</p>
            </div>
            
            <div class="management-image">
                <img src="images/logo-white.png" alt="Управление процессами">
            </div>
        </div>
    </div>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <h2 class="section-title">ЕЖЕГОДНЫЙ ОБЪЕМ СТРОИТЕЛЬНО-МОНТАЖНЫХ РАБОТ</h2>
        
        <div class="stats-grid">
            <!-- Статистика 1 -->
            <div class="stat-item">
                <div class="stat-image">
                    <img src="images/logo-white.png" alt="Фундаменты">
                    <div class="stat-overlay">
                        <div class="stat-value">10 000 м²</div>
                        <div class="stat-desc">устройства различных монолитных фундаментов и конструкций</div>
                    </div>
                </div>
            </div>
            
            <!-- Статистика 2 -->
            <div class="stat-item">
                <div class="stat-image">
                    <img src="images/logo-white.png" alt="Металлоконструкции">
                    <div class="stat-overlay">
                        <div class="stat-value">19 000 тонн</div>
                        <div class="stat-desc">монтажа металлоконструкций</div>
                    </div>
                </div>
            </div>
            
            <!-- Статистика 3 -->
            <div class="stat-item">
                <div class="stat-image">
                    <img src="images/logo-white.png" alt="Оборудование">
                    <div class="stat-overlay">
                        <div class="stat-value">12 000 тонн</div>
                        <div class="stat-desc">монтажа оборудования</div>
                    </div>
                </div>
            </div>
            
            <!-- Статистика 4 -->
            <div class="stat-item">
                <div class="stat-image">
                    <img src="images/logo-white.png" alt="Изготовление">
                    <div class="stat-overlay">
                        <div class="stat-value">6 000 тонн</div>
                        <div class="stat-desc">изготовления металлоконструкций</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activity Section - 4 Columns -->
<section class="activity-section columns-4">
    <div class="container">
        <h2 class="section-title">ДЕЯТЕЛЬНОСТЬ</h2>
        
        <div class="activity-content">
            <p class="activity-description">В арсенале СМУ1 многолетний опыт строительства и реконструкции объектов черной и цветной металлургии, горная промышленность, нефтегазовая, химическая, энергетический отраслей, а также производства стройматериалов.</p>
            
            <div class="activity-grid">
                <!-- Все элементы в одной сетке 4 колонки -->
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Генеральный подряд">
                    </div>
                    <h3 class="activity-title">Генеральный подряд</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Металлоконструкции">
                    </div>
                    <h3 class="activity-title">Металлоконструкции</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Реконструкция">
                    </div>
                    <h3 class="activity-title">Реконструкция</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Резервуары">
                    </div>
                    <h3 class="activity-title">Резервуары</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Антикоррозийная защита">
                    </div>
                    <h3 class="activity-title">Антикоррозийная защита</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Фундаменты">
                    </div>
                    <h3 class="activity-title">Фундаменты</h3>
                </div>
                
                <div class="activity-item">
                    <div class="activity-image">
                        <img src="images/shopping.png" alt="Демонтаж">
                    </div>
                    <h3 class="activity-title">Демонтаж</h3>
                </div>
            </div>
        </div>
    </div>

  

</main>

<?php include 'includes/footer.php'; ?>