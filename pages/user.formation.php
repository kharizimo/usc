<?php
$sql="select *,(select count(*) from formation_client c where f.id=c.formation_id) nbr from v_formation f";
$rows=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table">
    <tr>
        <th>Formation</th>
        <th>Date</th>
        <th width="1%">Participants</th>
        <th width="1%">Etat</th>
        <th width="1%"><a href="user?_s=formation-single">Ajouter</a></th>
    </tr>
    <?php foreach($rows as $r): ?>
    <tr>
        <td><?= $r->lib ?></td>
        <td><?= $r->formation_date ?></td>
        <td class="text-center"><?= $r->nbr ?></td>
        <td><span class="badge badge-warning"><?= $r->etat ?></span></td>
        <td><a href="user?_s=formation-single&id=<?= $r->id ?>">Ouvrir</a></td>
    </tr>
    <?php endforeach?>
</table>