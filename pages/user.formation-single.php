<?php
if($_a=='update'){
    $img=upload_image($_FILES['image']);
    $clause_img=($img)?$clause_img=",img='$img'":'';
    $sql="update formation set categorie_id=$categorie_id,lib='$lib',formation_date='$formation_date',texte='$texte',prix='$prix',etat='$etat' $clause_img where id=$id";
    $cn->query($sql);
    header('location:user?_s=formation');exit;
}
if($_a=='insert'){
    $img=upload_image($_FILES['image']);
    $clause_img=($img)?$clause_img="'$img'":"'formation.jpg'";
    $sql="insert into formation(categorie_id,lib,formation_date,texte,prix,etat,img) values('$categorie_id','$lib','$formation_date','$texte','$prix','$etat','$img')";
    $cn->exec($sql);
    header('location:user?_s=formation');exit;
}
if($_a=='delete'){
    $img=$cn->query('select img from formation where id=$id',PDO::FETCH_OBJ)->fetch()->img;
    unlink($root.$img);
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

<form enctype="multipart/form-data" action="user?_s=formation-single&_a=<?= $action ?>&id=<?= $id ?>" method="post">
    <input type="file" name="image" id="image" class="d-none">
    <div class="row g-3">
        <div class="col-md-6"><div class="form-floating">
            <img id="preview" src="img/<?= $row->img ?>" style="max-height: 200px;" alt="">
        </div></div>
        <div class="col-12">
            <div class="form-floating">
                <button type="button" onclick="document.querySelector('#image').click()" class="btn btn-primary">Charger la photo</button>
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
                    placeholder="" value="<?= $row->prix??'0' ?>">
                <label for="lib">Prix</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="date" class="form-control bg-secondary border-0" name="formation_date"
                    placeholder="" value="<?= $row->formation_date??'' ?>">
                <label for="lib">Date début</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" name="texte"
                    style="height: 300px"><?= $row->texte??'' ?></textarea>
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
            <a class="btn btn-outline-primary border-2 w-100 <?= $id?'':'d-none' ?>" href="user?_s=formation-single&_a=delete&id=<?= $id ?>">Supprimer</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Publier</button>
        </div>
    </div>
</form>
<script>
    
</script>