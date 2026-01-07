<?php 
if($_a=='update'){
    $img_clause='';
    if($image){
        $img_clause=",img='$img'";
    }
    $sql="update blog set titre='$titre',texte='$texte',visible='$visible' $img_clause where id=$id";
    $cn->exec($sql);
    header('location:user?_s=blog');exit;
}
if($_a=='delete'){
    $cn->exec("delete from blog where id=$id");
    header('location:user?_s=blog');exit;
}
if($_a=='insert'){
    $sql="insert into blog(titre,texte,visible,img,user_id) values('$titre','$texte','$visible','blog.jpg',{$_SESSION['user-id']})";
    $id=$cn->exec($sql);
    if($image){
        $sql="update blog set img='$img' where id=$id";
        $cn->exec($sql);
    }
    header('location:user?_s=blog');exit;
}

$action='insert';
$row=(object)['img'=>'blog.jpg'];
if($id){
    $action='update';
    $row=$cn->query("select * from v_blog where id=$id",PDO::FETCH_OBJ)->fetch();
}

?>
<form action="user?_s=blog-single&id=<?= $id ?>&_a=<?= $action ?>" method="post">
    <input type="file" name="image" id="image" class="d-none">
    <div class="row g-3">
        <div class="col-md-12"><div class="form-floating">
            <img src="img/<?= $row->img ?>" style="max-height: 200px;" alt="">
        </div></div>
        <div class="col-12">
            <div class="form-floating">
                <button type="button" class="btn btn-primary" onclick="document.querySelector('#img').click()">Charger la photo</button>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="titre"
                    placeholder="" value="<?= $row->titre??'' ?>">
                <label for="">Titre</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" name="texte"
                    style="height: 150px"><?= $row->texte??'' ?></textarea>
                <label for="">Contenu</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="visible" class="form-control bg-secondary border-0">
                    <?= array_reduce([['k'=>1,'v'=>'Oui'],['k'=>0,'v'=>'Non']],function($carry,$item){
                        global $row;
                        $selected='';
                        if(isset($row->visible)){if($row->visible==$item['k']){$selected='selected';}}
                        return $carry."<option value=\"$item[k]\" $selected>$item[v]</option>";
                    }) ?>
                </select>
                <label for="">Visible</label>
            </div>
        </div>
        <div class="col-md-6">
            <a href="user?_s=blog-single&_a=delete&id=<?= $id ?>" class="btn btn-outline-primary border-2 w-100 <?= $id?'':'d-none' ?>">Supprimer</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Publier</button>
        </div>
    </div>
</form>