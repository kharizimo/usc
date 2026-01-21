<?php 
if($_a=='submit'){
    if($pwd==$confirm){
        $sql="insert into client (email,pwd) values('$email','$pwd')";
        $cn->exec($sql);
        header('location:register-success');
    }
    else{header('location:register?err=confirrm');}
    exit;
}

$title="Inscription"
?>
<!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Inscription</h5>
                            <h1>Espace client</h1>
                        </div>
                    </div>
                    <h4 class="lh-base mb-4">Vous êtes déjà membre ? Connectez-vous dès maintenant ! <a href="login">Cliquez ici pour vous connecter</a></h4>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="?_a=submit">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-secondary border-0" name="email"
                                        placeholder="Votre Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-secondary border-0" name="pwd"
                                        placeholder="Mot de passe">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-secondary border-0" name="confirm"
                                        placeholder="confirmation Mot de passe">
                                    <label for="confirm">confirmation Mot de passe</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">S'inscrire</button>
                            </div>
                            <div class="col-12">
                                <a href="login" class="btn btn-primary border-2 w-100 py-3">Connexion</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->