<?php
$sql=<<<txt
select f.*,c.confirm,c.formation_id,
(select count(*) from formation_client c where f.id=c.formation_id) nbr
from v_formation f 
join formation_client c on c.formation_id=f.id 
where c.client_id=$id
txt;
$rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
$ret=$cn->query("select nom,email from client where id=$id")->fetch(PDO::FETCH_OBJ)
?>
<h2>Client : <?= $ret->nom ?> (<?= $ret->email ?>)</h2>
<table class="table">
    <tr>
        <th>Formation</th>
        <th>Date</th>
        <th width="1%">Etat</th>
        <th width="1%">Participants</th>
        <th width="1%"></th>
    </tr>
    <?php 
    foreach($rows as $r):
        $confirm_etat=$r->confirm?'Confirmé':'En attente';
        $confirm_link=$r->confirm?'#':"?_s=client-formation&_a=formation-confirm&formation_id=$r->formation_id&client_id=$id";
        $confirm_text=$r->confirm?'':'Confirmer'
    ?>
    <tr>
        <td><?= $r->lib ?></td>
        <td><?= $r->formation_date ?></td>
        <td><span class="badge badge-warning"><?= $confirm_etat?></span></td>
        <td class="text-center"><a href="user?_s=formation-client&id=<?= $r->id ?>"><?= $r->nbr ?></a></td>
        <td><a href="<?= $confirm_link ?>"><?= $confirm_text ?></a></td>
    </tr>
    <?php endforeach?>
</table>