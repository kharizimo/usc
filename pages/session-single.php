<?php 
if($_a=='action'){
    $client_id=$_SESSION['client-id'];
    $formation_id=$id;
    $sql="insert into formation_client(formation_id,client_id) values($formation_id,$client_id)";
    $cn->exec($sql);
    header("location:sessions");
}
$title="Sessions";
$sql="select * from v_formation where id=$id";
$r=$cn->query($sql)->fetch(PDO::FETCH_OBJ);
$screenshots=explode(';',$r->screenshot);

$suscrib_url="login?f_id=$id";
$suscrib_value='Soucrire à la formation';
if(isset($_SESSION['client-id'])){
    $sql="select * from formation_client where client_id={$_SESSION['client-id']} and formation_id=$id";
    $suscrib_url="session-single?_a=action&id=$id";
    if($rs=$cn->query($sql)->fetch(PDO::FETCH_OBJ)){
        $suscrib_url='#';
        $suscrib_value='En attente de confirmation';
        if($rs->confirm){
            $suscrib_url='#';
            $suscrib_value='Souscription confirmé';
        }
    }
}

?>
<div class="container my-5"><div class="row">
    <div class="col-md-6">
        <img src="img/<?=$r->img?>" alt="" class="w-100 rounded">
        <p class="lead text-muted fw-bold mt-3"><?=$r->categorie_lib?> </p>
        <h2><?=$r->prix?> USD</h2>
        <hr>
        <table class="table">
            <tr><td>Début de formation</td><td class="text-end"><?=$r->formation_date?></td></tr>
            <tr><td>Etat</td><td class="text-end fw-bold text-warning"><?=$r->etat?></td></tr>
        </table>
        
        <div class="mt-4 text-end">
            <a href="<?=$suscrib_url?>" class="btn btn-success"><?=$suscrib_value?></a>
        </div>
    </div>
    <div class="col-md">
        <h2><?=$r->lib?></h2>
        <p class=""><?=$r->texte?></p>
    </div>
</div></div>
