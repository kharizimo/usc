<?php
if($_a=='update'){
    $sql="update formation set categorie_id=$categorie_id,lib='$lib',texte='$texte',prix='$prix',etat='$etat' where id=$id";
    $cn->query($sql);
    header('location:user?_s=formation');exit;
}
if($_a=='insert'){
    $sql="insert into formation(categorie_id,lib,texte,prix,etat) values(categorie_id='$categorie_id',lib='$lib',texte='$texte',prix='$prix',etat='$etat')";
    $cn->exec($sql);
    header('location:user?_s=formation');exit;
}
if($_a=='delete'){
    $cn->exec("delete from formation where id=$id");
    header('location:user?_s=formation');exit;
}

$row=(object)['img'=>'formation.jpg'];
$action='insert';
if($id){
    $row=$cn->query("select * from v_formation where id=$id")->fetch(PDO::FETCH_OBJ);
    $action='update';
}
?>
<form action="user?_s=formation-single&_a=<?= $action ?>&id=<?= $id ?>" method="post">
    <div class="row g-3">
        <div class="col-md-6"><div class="form-floating">
            <img src="img/<?= $row->img ?>" style="max-height: 200px;" alt="">
        </div></div>
        <div class="col-12">
            <div class="form-floating">
                <button class="btn btn-primary">Charger la photo</button>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="categorie_id" class="form-control bg-secondary border-0">
                    <?= array_reduce($cn->query('select * from categorie', PDO::FETCH_OBJ)->fetchAll(),function($carry,$item){
                        global $row;
                        $selected='';
                        if(isset($row->categorie_id)){if($row->categorie_id==$item->id){$selected='selected';}}
                        return $carry."<option value=\"$item->id\" $selected>$item->lib";
                    },'')?>
                </select>
                <label>Catégorie</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="lib"
                    placeholder="" value="<?= $row->lib??'' ?>">
                <label for="lib">Titre</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="prix"
                    placeholder="" value="<?= $row->prix??'' ?>">
                <label for="lib">Prix</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" name="texte"
                    style="height: 300px"><?= $row->texte ?></textarea>
                <label for="">Contenu</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="etat" id="" class="form-control bg-secondary border-0">
                    <?= array_reduce(['Disponible','En cours','Terminé','Annulé'],function($carry,$item){
                        global $row;
                        $selected='';
                        if(isset($row->id)){if($row->etat==$item){$selected='selected';}}
                        return $carry."<option>$item</option>";
                    }) ?>
                </select>
                <label for="">Etat</label>
            </div>
        </div>
        <div class="col-md-6">
            <a class="btn btn-outline-primary border-2 w-100 <?= $id?'':'d-none' ?>" href="user?_s=formatiob-single&_a=delete&id=<?= $id ?>">Supprimer</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Publier</button>
        </div>
    </div>
</form>