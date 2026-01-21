<?php 
$title="Espace client";
$_s??='index';
if($_a=='logout'){
    unset($_SESSION['client-id']);
    header('location:login');
}

if(!isset($_SESSION['client-id'])){header('location:login-user');exit;}
?>
<!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Profil</h5>
                            <h1>Espace client</h1>
                        </div>
                    </div>
                    <table class="table table-dark mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        <tr><td><a href="?_s=index">Information personnelles</a></td></tr>
                        <tr><td><a href="?_s=pwd">Information personnelles</a></td></tr>
                        <tr><td><a href="?_s=formation">Mes Formations</a></td></tr>
                        <tr><td><a href="?_a=logout">Deconnexion</a></td></tr>
                    </table>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <?php require "client.$_s.php" ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->