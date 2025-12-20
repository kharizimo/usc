<?php 
$title="Services";
$img=[
    'gestion_projet'=>'img/about-1.jpg',
    'voyage'=>'img/about-1.jpg',
    'logement'=>'img/about-1.jpg',
    'logiciel'=>'img/about-1.jpg',
    'siteweb'=>'img/about-1.jpg',
    'coaching'=>'img/about-1.jpg',
];
?>
<div class="container-fluid bg-secondary px-0">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid" src="<?= $img[$_s] ?>" alt="">
            </div>
            <div class="col-lg-7 pb-0 pb-lg-5 py-5">
                <div class="pb-0 pb-lg-5 py-5">
                    <?php if($_s=='gestion_projet'): ?>
                    <h3 class="text-uppercase">Gestion des projet</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='voyage'): ?>
                    <h3 class="text-uppercase">Assistance voyage</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='logement'): ?>
                    <h3 class="text-uppercase">Logement</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='logiciel'): ?>
                    <h3 class="text-uppercase">Developpement logiciel</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='siteweb'): ?>
                    <h3 class="text-uppercase">Création sites web</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='coaching'): ?>
                    <h3 class="text-uppercase">Coaching Business</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>