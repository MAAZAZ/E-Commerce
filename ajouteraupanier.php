<?php

$db = new PDO('mysql:host=localhost;dbname=ecom;charser=UTF8', "root", "");
$reference=$_GET['reference'];
$sql='SELECT reference FROM produits WHERE reference=?';
if(isset($reference)){
$stmt=$db->prepare($sql);
$stmt->bindValue(1,$reference,PDO::PARAM_STR);
$stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['panier'][$reference]=1;
    die("vous avez ajoute le produit à ajouter au panier : <a href=\"javascript:history.back()\">retourner</a>");
}
else{
    die("vous n'avez pas selectionne le produit à ajouter au panier");
}

//var_dump($_GET);
//header("location:index.php");
?>