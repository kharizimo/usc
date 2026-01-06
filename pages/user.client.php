<table class="table">
    <thead><tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Formations</th>
        <th width="1%"></th>
    </tr></thead>
    <tbody><?= array_reduce($cn->query('select * from v_client',PDO::FETCH_OBJ)->fetchAll(),function($carry,$item){
        return <<<item
        <tr>
            <td>$item->nom</td>
            <td>$item->email</td>
            <td class="text-center">$item->nbr</td>
            <td><a href="user?_s=client-single&id=$item->id">Ouvrir</a>
        </tr>
item;
    }) ?></tbody>
</table>