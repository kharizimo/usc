<table class="table">
    <tr>
        <th>Titre</th>
        <th>Date</th>
        <th width="1%">Visible</th>
        <th width="1%"><a href="user?_s=blog-single">Ajouter</a></th>
    </tr>
    <?= array_reduce($cn->query('select * from v_blog order by create_at',PDO::FETCH_OBJ)->fetchAll(),function($carry,$item){
        $visible=$item->visible?'Oui':'Non';
        return $carry.
        <<<eot
        <tr>
            <td>$item->titre</td>
            <td>$item->create_at</td>
            <td><span class="badge badge-warning">$visible</span></td>
            <td><a href="user?_s=blog-single&id=$item->id">Ouvrir</a></td>
        </tr>
eot;
    }) ?>
</table>