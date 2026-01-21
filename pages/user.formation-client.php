<?php
if($_a=='formation-confirm'){
    header('location:user?_s=formation-client&id='.$formation_id);
    exit;
}
$sql=<<<txt
SELECT c.*,confirm,formation_id,
(SELECT COUNT(*) FROM formation f WHERE f.id=fc.formation_id) nbr
FROM client c 
JOIN formation_client fc ON fc.client_id=c.id 
where formation_id=$id
txt;
$rows=$cn->query($sql,PDO::FETCH_OBJ)->fetchAll();
?>
<h2>Formation : <?= $cn->query("select lib from formation where id=$id")->fetch(PDO::FETCH_OBJ)->lib ?></h2>
<table class="table">
    <thead><tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Etat</th>
        <th width="1%">Formations</th>
        <th class="text-end">Actions</th>
    </tr></thead>
    <tbody><?= array_reduce($rows,function($carry,$item){
        $confirm=$item->confirm?'':'Confirmer';
        $confirm_etat=$item->confirm?'Confirmé':'En attente';
        $confirm_lnk=$item->confirm?'#':'user?_s=formation-client&_a=formation-confirm&formation_id='.$item->formation_id.'&client_id='.$item->id;
        $formations_lnk='user?_s=client-formation&id='.$item->id;
        return <<<item
        <tr>
            <td>$item->nom</td>
            <td>$item->email</td>
            <td><span class="badge">$confirm_etat</span></td>
            <td class="text-center"><a href="$formations_lnk">$item->nbr</a></td>
            <td class="text-end"><a class="badge text-warning" href="$confirm_lnk">$confirm</a>
        </tr>
item;
    }) ?></tbody>
</table>