<table class="table">
    <thead><tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Etat</th>
        <th width="1%"><a href="user?_s=user-single">Ajouter</a></th>
    </tr></thead>
    <tbody><?= array_reduce($cn->query('select * from user',PDO::FETCH_OBJ)->fetchAll(),function($carry,$item){
        $etat=$item->etat?'Actif':'Bloqué';
        return $carry.<<<item
        <tr>
            <td>$item->nom</td>
            <td>$item->email</td>
            <td>$etat</td>
            <td><a href="user?_s=user-single&id=$item->id">Ouvrir</a>
        </tr>
item;
    }) ?></tbody>
</table>