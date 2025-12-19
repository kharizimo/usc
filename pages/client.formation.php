<?php  
$sql=<<<SQL
select 
s.lib session_lib
 from formation f 
join session s on f.id=s.formation_id 
join classe c on s.id=c.session_id 
where c.client_id={$_SESSION['client-id']}
SQL;
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
        <td><a href="" target="_blank"><?= $item->session_lib ?></a></td>
        <td>2025/12/11</td>
        <td><span class="badge badge-warning">En cours</span></td>
    </tr>
    <?php endforeach ?>
</table>