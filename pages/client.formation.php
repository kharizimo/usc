<?php  
$sql="SELECT * from v_formation f JOIN formation_client c ON c.formation_id=f.id WHERE c.client_id={$_SESSION['client-id']}";

$r=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table">
    <tr>
        <th>Formation</th>
        <th>Date</th>
        <th width="1%">Etat</th>
    </tr>
    <?php foreach($r as $item): ?>
    <tr>
        <td><a href="session-single?id=<?= $item->id ?>" target="_blank"><?= $item->lib ?></a></td>
        <td><?= $item->formation_date ?></td>
        <td><span class="badge badge-warning"><?= $item->confirm?'Accepté':'En cours' ?></span></td>
    </tr>
    <?php endforeach ?>
</table>