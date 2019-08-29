<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"  >
    <title>Document</title>
</head>
<body>
<a href="ajouter-produit.php"><button>Ajouter ce produit au panier</button></a>
<?php


$bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM produits');
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">type</th>
        <th scope="col">reference</th>
        <th scope="col">designation</th>
        <th scope="col">prixNormal</th>
        <th scope="col">prixPromo</th>
    </tr>
    </thead>
    <tbody><?php
    while ($donnees = $reponse->fetch())
    {
        ?>

        <tr>
            <td><?php echo $donnees['type']; ?> </td>
            <td><?php echo $donnees['reference']; ?> </td>
            <td><?php echo $donnees['designation']; ?> </td>
            <td><?php echo $donnees['prixNormal']; ?> </td>
            <td><?php echo $donnees['prixPromo']; ?> </td>
            <td><a href="form-supprimer.php?id=<?php echo $donnees['reference']; ?>"><input type="submit" value="supprimer" /></a> </td></form>

            <td><a href="form-modifier.php?id=<?php echo $donnees['reference']; ?>"><input type="submit" value="modifier" /></a> </td>
        </tr>

        <?php
    } ?>
    </tbody>
</table>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

?>


</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js" ></script>
<script src="node_modules/popper.js/dist/popper.min.js"  ></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
