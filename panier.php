<?php

$db = new PDO('mysql:host=localhost;dbname=ecom;charser=UTF8', "root", "");
$sql = "SELECT * FROM produits ";
$stmt = $db->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    .table tr , .table td {
       border: 1px solid gray;
        padding : 6px;
    }

</style>

<table class="table">
    <tr>
        <th>Reference</th>
        <th>Designation</th>
        <th>La quantité commandée</th>
        <th>Prix de Promotion en DH</th>
        <th>Prix Normale en DH</th>
    </tr>
    <?php $ids= array_keys($_SESSION['panier']);
    $produits=$db->query('SELECT produits WHERE reference IN ('.implode(',',$ids).')');
    //var_dump($ids);

    ?>

    <?php foreach($products as $row) :?>
            <tr>
                <td><?=$row["reference"]?></td>
                <td><?=$row["designation"]?></td>
                <td><input type="text" id="produit" value="0" style="text-align: center"></td>
                <td><?=$row["prixPromo"]?></td>
                <td><?=$row["prixNormal"]?></td>
            </tr>
        <?php  endforeach;?>
</table>
