<?php 
if($_a=='update'){
    if($pwd==$confirm){
        $sql="update client set nom='$nom',telephone='$telephone',email='$email',pwd='$pwd' where id={$_SESSION['client-id']}";
        $cn->exec($sql);
        header('location:client');
        exit;

    }
}


$r=$cn->query("select * from client where id={$_SESSION['client-id']}")->fetch();
?>
<?= isset($err)?'<p class="text-center text-danger text-bold">Mot de passe incorrect</p>':'' ?>
<form action="client">
    <input type="hidden" name="_a" value="update">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom"
                    placeholder="Prénom" value="<?= $r['nom'] ?>">
                <label for="email">Prénom</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom"
                    placeholder="Nom" value="<?= $r['nom'] ?>">
                <label for="email">Nom</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom"
                    placeholder="Post-nom" value="<?= $r['nom'] ?>">
                <label for="email">Post-nom</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0"><?= array_reduce(['M','F'],function($carry,$item){
                    return $carry.'<option value="'.$item.'">'.$item.'</option>';
                }) ?></select>
                <label for="email">Sexe</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0"><?= array_reduce(['Célibataire','MArié'],function($carry,$item){
                    return $carry.'<option value="'.$item.'">'.$item.'</option>';
                }) ?></select>
                <label for="email">Etat-Civil</label>
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
            <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Mettre à jour</button>
        </div>
    </div>
</form>