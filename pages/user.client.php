<table class="table">
    <thead><tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Formations</th>
        <th width="1%"></th>
    </tr></thead>
    <tbody><?= array_reduce($cn->query('select * from v_client',PDO::FETCH_OBJ)->fetchAll(),function($carry,$item){
        return $carry.<<<item
        <tr>
            <td>$item->nom</td>
            <td>$item->email</td>
            <td class="text-center"><a href="user?_s=client-formation&id=$item->id">$item->nbr</a></td>
            <td><a href="user?_s=client-single&id=$item->id">Ouvrir</a>
        </tr>
item;
    },'') ?></tbody>
</table>