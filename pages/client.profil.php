<?php 
if($_a=='update'){
    if($pwd==$confirm){
        $sql="update client set nom='$nom',telephone='$telephone',email='$email',pwd='$pwd' where id={$_SESSION['client-id']}";
        $cn->exec($sql);
        $_l='client';

    }else{$_l='client?err';}
}
if(isset($_l)){
    header("location:../$_l");
    exit;
}


$r=$cn->query("select * from client where id={$_SESSION['client-id']}")->fetch();
?>
<?= isset($err)?'<p class="text-center text-danger text-bold">Mot de passe incorrect</p>':'' ?>
<form action="client/update">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom"
                    placeholder="Votre nom" value="<?= $r['nom'] ?>">
                <label for="email">Nom</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="tel" class="form-control bg-secondary border-0" name="telephone"
                    placeholder="Votre Téléphone" value="<?= $r['telephone'] ?>">
                <label for="phone">Téléphone</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="email" class="form-control bg-secondary border-0" name="email"
                    placeholder="Votre Email" value="<?= $r['email'] ?>">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="password" class="form-control bg-secondary border-0" name="pwd"
                    placeholder="Mot de passe" value="<?= $r['pwd'] ?>">
                <label for="password">Mot de passe</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="password" class="form-control bg-secondary border-0" name="confirm"
                    placeholder="confirmation Mot de passe" value="<?= $r['pwd'] ?>">
                <label for="confirm">confirmation Mot de passe</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Connecter</button>
        </div>
    </div>
</form>