<?php
$sql=<<<txt
select f.*,
(select count(*) from formation_client c where f.id=c.formation_id) nbr
from v_formation f 
join formation_client fc on fc.formation_id=f.id 
where fc.client_id=$id
txt;
$rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
$ret=$cn->query("select nom,email from client where id=$id")->fetch(PDO::FETCH_OBJ)
?>
<h2>Client : <?= $ret->nom ?> (<?= $ret->email ?>)</h2>
<table class="table">
    <tr>
        <th>Formation</th>
        <th>Date</th>
        <th width="1%">Participants</th>
        <th width="1%">Etat</th>
        <th width="1%"></th>
    </tr>
    <?php foreach($rows as $r): ?>
    <tr>
        <td><?= $r->lib ?></td>
        <td><?= $r->formation_date ?></td>
        <td class="text-center"><a href="user?_s=formation-client&id=<?= $r->id ?>"><?= $r->nbr ?></a></td>
        <td><span class="badge badge-warning"><?= $r->etat ?></span></td>
        <td><a href="user?_s=formation-single&id=<?= $r->id ?>">Ouvrir</a></td>
    </tr>
    <?php endforeach?>
</table>