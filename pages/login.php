<?php 
// engine
if($_a=='action'){
    $sql="select id from client where email='$email' and pwd='$pwd' and etat=true";
    $id=$cn->query($sql)->fetch(PDO::FETCH_OBJ)->id;
    if($id){
        $_SESSION['client-id']=$id;
        $_l='';
    }else{$_l='login?err';}
}

if(isset($_l)){
    header("location:../$_l");
    exit;
}

$title="Login"
?>
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-left">
                        <h5>Connexion</h5>
                        <h1>Espace client</h1>
                    </div>
                </div>
                <h4 class="lh-base mb-4">Vous n'êtes pas encore membre ? Inscrivez-vous dès maintenant ! <a href="register">Cliquez ici pour nous rejoindre</a></h4>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-secondary border-0" id="email"
                                    placeholder="Votre Email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control bg-secondary border-0" id="password"
                                    placeholder="Mot de passe">
                                <label for="password">Mot de passe</label>
                                <!-- <input type="password" name="password" id="Mot de passe"> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->