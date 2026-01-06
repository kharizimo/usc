<?php 
$row=(object)['img'=>'blog.jpg'];
if($id){
    $row=$cn->query("select * from v_blog where id=$id",PDO::FETCH_OBJ)->fetch();
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
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet" value="<?= $row->titre??'' ?>">
                <label for="subject">Titre</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" id="message"
                    style="height: 150px"><?= $row->texte ?></textarea>
                <label for="message">Contenu</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0">
                    <?= array_reduce([['k'=>1,'v'=>'Oui'],['k'=>0,'v'=>'Non']],function($carry,$item){
                        global $row;
                        $selected='';
                        if(isset($row->visible)){if($row->visible==$$item['k']){$selected='selected';}}
                        return $carry."<option value=\"$item[k]\" $selected>$item[v]</option>";
                    }) ?>
                </select>
                <label for="subject">Visible</label>
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