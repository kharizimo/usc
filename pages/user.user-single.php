<?php 
if($_a=='insert'){
    $sql="insert into user(nom,email,etat,pwd) values('$nom','$email','$etat','1234')";
    $cn->exec($sql);
    header('location:user?_s=user');exit;
}
if($_a=='update'){
    $sql="update user set nom='$nom',email='$email',etat=$etat where id=$id";
    $cn->exec($sql);
    header('location:user?_s=user');exit;
}
if($_a=='init'){
    $sql="update user set pwd='1234',etat=true where id=$id";
    $cn->exec($sql);
    header('location:user?_s=user');exit;
}
$row=(object)[];
$action='insert';
if($id){
    $row=$cn->query("select * from user where id=$id",PDO::FETCH_OBJ)->fetch();
    $action='update';
}
$etat=[
    (object)['k'=>1,'v'=>'Actif'],
    (object)['k'=>0,'v'=>'Bloqué'],
]
?>
<form action="user?_s=user-single&id=<?= $id ?>&_a=<?= $action ?>" method="post">
    <div class="row g-3">
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="nom"
                    placeholder="Nom" value="<?= $row->nom??'' ?>">
                <label for="">Nom</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" name="email"
                    placeholder="Email" value="<?= $row->email??'' ?>">
                <label for="">Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="etat" class="form-control bg-secondary border-0"><?= array_reduce($etat,function($carry,$item){
                    global $row;
                    $selected='';
                    if(isset($row->etat)){if($row->etat==$item->k){$selected='selected';}}
                    return $carry.
                    <<<txt
                    <option value="$item->k" $selected>$item->v</option>
    txt;
                }) ?></select>
                <label for="">Etat</label>
            </div>
        </div>
        <div class="col-md-6">
            <a href="user?_s=user-single&_a=init&id=<?= $id ?>" class="btn btn-outline-primary border-2 w-100">Initialiser mot de passe</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Soumettre</button>
        </div>
    </div>
</form>