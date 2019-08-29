<?php
$db = new PDO('mysql:host=localhost;dbname=ecom;charser=UTF8', "root", "");
 $sql = "SELECT * FROM produits ";
 $stmt = $db->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
 ?>