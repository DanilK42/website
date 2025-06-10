<?php 
$pageTitle = "Компании группы";
include(__DIR__ .'\..\includes\config.php');
include(__DIR__ . '\..\includes\header.php');
?>

<main class="group-companies-page">
    <section class="companies-group">
        <div class="container">
            <h1>Компании группы</h1>
            <h2>СМУ-1 — компания группы</h2>
                       
            
            <div class="company-card">
                <div class="company-card-inner">
                    <img src="/group-companies/images/shopping.png" alt="IN ONE BURO" class="company-logo">
                    <div class="company-info">
                        <h2>IN ONE BURO</h2>
                        <p>InOne Buro - это современная инжиниринговая компания, которая специализируется на промышленном проектировании в соответствии с международными стандартами качества.</p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            
            <div class="company-card">
                <div class="company-card-inner">
                    <img src="/group-companies/images/shopping.png" alt="CK CMY-1" class="company-logo">
                    <div class="company-info">
                        <h2>CK «CMY-1» строительная компания</h2>
                        <p>CK «CMY-1» - это молодая компания на рынке строительных услуг, которая специализируется на выполнении комплекса общестроительных и отделочных работ объектов промышленного и гражданского назначения.</p>
                        <a href="#" class="company-link">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<link rel="stylesheet" href="/css/group-companies.css">

<?php include (__DIR__ .'\..\includes/footer.php') ; ?>
