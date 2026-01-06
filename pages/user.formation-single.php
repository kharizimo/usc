<?php
$row=(object)['img'=>'formation.jpg'];
$action='insert';
if($id){
    $row=$cn->query("select * from v_formation where id=$id")->fetch(PDO::FETCH_OBJ);
}
?>
<form>
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
                        if(isset($row->categorie->id)){if($row->categorie_id==$item->id){$selected='selected';}}
                        return $carry."<option value=\"$item->id\" $selected>$item->lib";
                    },'')?>
                </select>
                <label for="subject">Catégorie</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->lib??'' ?>">
                <label for="subject">Titre</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" id="message"
                    style="height: 300px"><?= $row->texte ?></textarea>
                <label for="message">Contenu</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0">
                    <?= array_reduce(['Disponible','En cours','Terminé','Annulé'],function($carry,$item){
                        global $row;
                        $selected='';
                        if(isset($row->id)){if($row->categorie_etat==$item){$selected='selected';}}
                        return $carry."<option>$item</option>";
                    }) ?>
                </select>
                <label for="subject">Etat</label>
            </div>
        </div>
        <div class="col-md-6">
            <button class="btn btn-outline-primary border-2 w-100" type="submit">Supprimer</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Publier</button>
        </div>
    </div>
</form>