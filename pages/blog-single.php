<?php 
$title='Blog';
$r=$cn->query("select * from v_blog where id=$id")->fetch(PDO::FETCH_OBJ);
 ?>
<div class="container my-5"><div class="row">
    <div class="col-md-6">
        <img src="img/<?=$r->img?>" alt="" class="w-100 rounded">
        <p class="lead text-muted fw-bold mt-3 text-end">Par <?=$r->auteur?> </p>
    </div>
    <div class="col-md">
        <h2><?=$r->titre?></h2>
        <p class="text-sm"><?=$r->create_at?></p>
        <p class=""><?=$r->texte?></p>
    </div>
</div></div>