<?php 
if($_a=='update'){
    $sql="update client set etat=$etat where id=$id";
    $cn->exec($sql);
    header("location:user?_s=client-single&id=$id");exit;
}
if($_a=='init'){
    $sql="update client set etat=true,pwd='1234' where id=$id";
    $cn->exec($sql);
    header("location:user?_s=client-single&id=$id");exit;
}
$row=$cn->query("select * from v_client where id=$id",PDO::FETCH_OBJ)->fetch();
$etat=[
    (object)['k'=>1,'v'=>'Actif'],
    (object)['k'=>0,'v'=>'Bloqué'],
];
?>
<form action="" method="post">
    <input type="hidden" name="_a" value="update">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="row g-3">
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->nom??'' ?>">
                <label for="subject">Nom</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->email??'' ?>">
                <label for="subject">Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->telephone??'' ?>">
                <label for="subject">Téléphone</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->create_at??'' ?>">
                <label for="subject">Date</label>
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
            <a href="user?_s=client-single&_a=init&id=<?= $id ?>" class="btn btn-outline-primary border-2 w-100">Initialiser mot de passe</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Soumettre</button>
        </div>
    </div>
</form>