<?php
$title = "Проекты - СМУ-1";

$root = $_SERVER['DOCUMENT_ROOT'];
require_once __DIR__ . '/../includes/header.php';
include(__DIR__ .'\..\includes\config.php');

?>

<main class="projects-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Проекты</h1>
            <h2 class="page-subtitle">СМУТ — Проекты</h2>
        </div>

        <div class="projects-grid">
            <a href="#" class="project-card">
                <img src="/images/projects/cembit.jpg" alt="ЦЕМБИТ" class="project-image">
                <div class="project-title">ООО «СПК ЦЕМБИТ»</div>
            </a>
            
            <a href="#" class="project-card">
                <img src="/images/projects/gruzovik.jpg" alt="Грузовик" class="project-image">
                <div class="project-title">АО «Грузовик»</div>
            </a>
            
            <a href="#" class="project-card">
                <img src="/images/projects/evraz.jpg" alt="ЕВРАЗ" class="project-image">
                <div class="project-title">АО «ЕВРАЗ МТОК»</div>
            </a>
            
            <a href="#" class="project-card">
                <img src="/images/projects/zink.jpg" alt="Цинковый завод" class="project-image">
                <div class="project-title">АО «Челябинский цинковый завод»</div>
            </a>
            
            <a href="#" class="project-card">
                <img src="/images/projects/chel-equiv.jpg" alt="Челябинский эквивалент" class="project-image">
                <div class="project-title">АО «Челябинский эквивалент/файл №2»</div>
            </a>
        </div>
    </div>
</main>

<?php
require_once $root . '/includes/footer.php';
?>