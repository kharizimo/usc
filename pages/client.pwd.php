<?php 
if($_a=='action'){
    if($pwd==$confirm){
        $sql="update client set email='$email',pwd='$pwd' where id={$_SESSION['client-id']}";
        $cn->exec($sql);
        header('location:client');
        exit;

    }
}


$r=$cn->query("select * from client where id={$_SESSION['client-id']}")->fetch();
?>
<?= isset($err)?'<p class="text-center text-danger text-bold">Mot de passe incorrect</p>':'' ?>
<form action="client">
    <input type="hidden" name="_a" value="action">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="email" class="form-control bg-secondary border-0" name="email"
                    placeholder="Email" value="<?= $r['email'] ?>">
                <label for="password">Email</label>
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