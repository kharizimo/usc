<?php 
$title='Sessions';
$criteria="Aucun critère";
$q??='';$id??='';
$clause='1=1';
if($q){
    $criteria="Mot clé : $q";
    $clause="lib like '%$q%' or categorie_lib like '%$q%'";
}
if($id){
    $cat=$cn->query("select lib from categorie where id=$id")->fetch(PDO::FETCH_NUM)[0];
    $criteria="Catégorie : $cat";
    $clause="categorie_id=$id";
}
$cats=$cn->query("select * from categorie")->fetchAll(PDO::FETCH_OBJ);
 ?>
<!-- Team Start -->
    <div class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Agenda</h5>
                        <h1>Sessions disponibles</h1>
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-4"><h4><?= $criteria ?></h4></div>
                <div class="col-md">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-dark" name="q" value="<?= $q ?>">
                                <label for="">Recherche</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="" id="" class="form-control bg-dark border-0" name="id" onchange="document.location=`?id=${this.value}`">
                                    <?= array_reduce($cats,function($carry,$item){
                                        global $id;
                                        $selected=$id==$item->id?'selected':'';
                                        return $carry."<option value=\"$item->id\" $selected>$item->lib</option>";
                                        },'<option value="0">Aucun critère</option>') ?>
                                </select>
                                <label for="">Liste categories</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div></div>
            <div class="row g-4">
                <?php 
                $sql="select * from v_formation where $clause";
                $rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
                foreach($rows as $row){
                    echo '<div class="col-md-4">';
                    echo formation_item($row);
                    echo '</div>';
                }
                 ?>
            </div>
        </div>
    </div>
    <!-- Team End -->