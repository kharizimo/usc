<?php  
$sq="select * from session s join formation f on s.formation_id=f.id join classe c on c.client_id={$_SESSION['client-id']}";
$r=$cn->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table">
    <tr>
        <th>Formation</th>
        <th>Date</th>
        <th width="1%">Etat</th>
    </tr>
    <tr>
        <td>GDZHGHDJZHJDHZJ</td>
        <td>2025/12/11</td>
        <td><span class="badge badge-warning">En cours</span></td>
    </tr>
    <tr>
        <td>GDZHGHDJZHJDHZJ</td>
        <td>2025/12/11</td>
        <td><span class="badge badge-warning">En cours</span></td>
    </tr>
    <tr>
        <td>GDZHGHDJZHJDHZJ</td>
        <td>2025/12/11</td>
        <td><span class="badge badge-warning">En cours</span></td>
    </tr>
</table>