<?php 
$title="Espace Admin";
$_s??='profil';
if($_a=='logout'){
    unset($_SESSION['user-id']);
    header('location:login-user');
}

$email_current=$cn->query("select email from user where id={$_SESSION['user-id']}")->fetch(PDO::FETCH_OBJ)->email;
$is_master=($app->master!=$email_current)?'d-none':'';
?>
<!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Admin</h5>
                            <h1>Panneau de contrôle</h1>
                        </div>
                    </div>
                    <table class="table table-dark mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        <tr><td><a href="user">Profil</a></td></tr>
                        <tr><td><a href="user?_s=formation">Mes Formations</a></td></tr>
                        <tr><td><a href="user?_s=blog">Mes blogs</a></td></tr>
                        <tr><td><a href="user?_s=client">Clients</a></td></tr>
                        <tr class="<?= $is_master ?>"><td><a href="user?_s=user">Utilisateurs</a></td></tr>
                        <tr><td><a href="user?_a=logout">Deconnexion</a></td></tr>
                    </table>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <?php require "user.$_s.php" ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->