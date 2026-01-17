<?php
$sql=<<<txt
select c.* from v_client c 
join formation_client f on f.client_id=c.id
where formation_id=$id
txt;
$rows=$cn->query($sql,PDO::FETCH_OBJ)->fetchAll();
?>
<h2>Formation : <?= $cn->query("select lib from formation where id=$id")->fetch(PDO::FETCH_OBJ)->lib ?></h2>
<table class="table">
    <thead><tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Formations</th>
        <th width="1%"></th>
    </tr></thead>
    <tbody><?= array_reduce($rows,function($carry,$item){
        return <<<item
        <tr>
            <td>$item->nom</td>
            <td>$item->email</td>
            <td class="text-center"><a href="user?_s=client-formation&id=$item->id">$item->nbr</a></td>
            <td><a href="user?_s=client-single&id=$item->id">Ouvrir</a>
        </tr>
item;
    }) ?></tbody>
</table>