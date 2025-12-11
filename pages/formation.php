<?php 
$title="Formations";
$img=[
    'init_info'=>'img/about.png',
    'bureautique'=>'img/about.png',
    'secretariat'=>'img/about.png',
    'management'=>'img/about.png',
    'logiciel'=>'img/about.png',
    'web'=>'img/about.png',
    'mobile'=>'img/about.png',
    'database'=>'img/about.png',
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
                    <?php if($_s=='init_info'): ?>
                    <h3 class="text-uppercase">Initiation à l'informatique</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='bureautique'): ?>
                    <h3 class="text-uppercase">Bureautique</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='secretariat'): ?>
                    <h3 class="text-uppercase">Secrétariat</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='management'): ?>
                    <h3 class="text-uppercase">Management</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='logiciel'): ?>
                    <h3 class="text-uppercase">Programmation logiciel</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='web'): ?>
                    <h3 class="text-uppercase">Programmation web</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='mobile'): ?>
                    <h3 class="text-uppercase">Programmation mobile</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php elseif($_s=='database'): ?>
                    <h3 class="text-uppercase">Administration Bases de données</h3>
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Tempor erat elitr rebum at clita. Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet. Stet no et lorem dolor et diam, amet duo
                        ut dolore vero eos.</p>
                    <?php endif ?>
                    <div class="text-center mt-5">
                        <a href="agenda?_s=<?= $_s ?>" class="btn btn-outline-primary px-5 py-3">Voir les sessions disponibles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>