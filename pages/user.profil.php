<?php
$data=$cn->query("select * from user where id={$_SESSION['user-id']}")->fetch(PDO::FETCH_OBJ);
if($_a=='action'){
    if($pwd==$confirm){
        $sql="update user set nom='$nom',email='$email',pwd='$pwd' where id={$_SESSION['user-id']}";
        $cn->exec($sql);
        header('location:user');
    }
    else{header('location:user?err');}
    exit;
}
?>
<p class="text-danger text-center fw-bold <?= isset($err)?'':'d-none' ?>">Echec confirmation mot de passe</p>
<form action="" method="post">
    <input type="hidden" name="_a" value="action">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom" value="<?= $data->nom ?>"
                    placeholder="Votre nom">
                <label for="email">Nom</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="email" class="form-control bg-secondary border-0" name="email" value="<?= $data->email ?>"
                    placeholder="Votre Email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="password" class="form-control bg-secondary border-0" name="pwd" value="<?= $data->pwd ?>"
                    placeholder="Mot de passe">
                <label for="password">Mot de passe</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="password" class="form-control bg-secondary border-0" name="confirm" value="<?= $data->pwd ?>"
                    placeholder="confirmation Mot de passe">
                <label for="confirm">Confirmation mot de passe</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Soumettre</button>
        </div>
    </div>
</form>