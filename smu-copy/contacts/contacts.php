<?php
$title = "Контакты - СМУ-1";
include(__DIR__ .'\..\includes\config.php');
$root = $_SERVER['DOCUMENT_ROOT'];
require_once __DIR__ . '/../includes/header.php';
?>

<main class="contacts-page">
    <div class="container">
        <div class="contacts-header">
            <h1>Контакты</h1>
            <h2>СМУТ — Контакты</h2>
        </div>

        <div class="contacts-content">
            <div class="contacts-info">
                <!-- Блоки с контактной информацией остаются без изменений -->
                <div class="contact-block">
                    <svg class="contact-icon" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    <div>
                        <h3>Адрес</h3>
                        <p>620102, г. Екатеринбург, ул. Белореченская, д.15</p>
                    </div>
                </div>
                <!-- Остальные контактные блоки -->
            </div>

            <div class="contacts-map">
    <div id="map" style="width: 100%; height: 400px;"></div>
    <a href="#" class="map-link">Схема проезда</a>
    
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script>
    ymaps.ready(init);
    function init() {
        var map = new ymaps.Map('map', {
            center: [56.8378, 60.5974],
            zoom: 16
        });
        
        map.controls.remove('geolocationControl');
        map.controls.remove('searchControl');
        
        var placemark = new ymaps.Placemark([56.8378, 60.5974], {
            hintContent: 'СМУ-1',
            balloonContent: 'Екатеринбург, ул. Белореченская, 15'
        }, {
            preset: 'islands#blueDotIcon'
        });
        
        map.geoObjects.add(placemark);
    }
    </script>
</div>
        </div>
    </div>
</main>

<?php include (__DIR__ .'\..\includes/footer.php') ; ?>