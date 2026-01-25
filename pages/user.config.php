<?php
if($_a=='action'){
    $st=$cn->prepare('update config set value=:value where key=:key');
    $array=['email','telephone','adresse','facebook','x','linkedin','youtube','master'];
    foreach($array as $row){
        $st->bindValue(':key',$row);
        $st->bindValue(':value',$$row);
        $st->execute();
        echo $$row;
    }
}
?>
<form action="" method="post">
    <input type="hidden" name="_a" value="action">
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="email" value="<?= $app->email ?>"
                    placeholder="Adresse mail">
                <label for="email">Adresse mail</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="telephone" value="<?= $app->telephone ?>"
                    placeholder="Téléphone">
                <label for="email">Téléphone</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="adresse" value="<?= $app->adresse ?>"
                    placeholder="Adresse du siège">
                <label for="email">Adresse du siège</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="facebook" value="<?= $app->facebook ?>"
                    placeholder="Lien facebook">
                <label for="email">Lien facebook</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="x" value="<?= $app->x ?>"
                    placeholder="Lien X">
                <label for="email">Lien X</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="linkedin" value="<?= $app->linkedin ?>"
                    placeholder="Lien Linkedin">
                <label for="email">Lien Linkedin</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="youtube" value="<?= $app->youtube ?>"
                    placeholder="Lien Youtube">
                <label for="email">Lien Youtube</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="master" value="<?= $app->master ?>"
                    placeholder="Master Login">
                <label for="email">Master Login</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">Soumettre</button>
        </div>
    </div>
</form>