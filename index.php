<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"  >
    <title>E-COMMERCE</title>
</head>
<body>
<?php 
    require("produits.php");
    require("session.php");
    require_once 'auth.php';
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="chercher d'un produit">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">chercher</button>
        </form>
    </div>
</nav>

<div class="container my-5">
    <div class="row">
  <?php foreach($products as $product ):?>
    <div class="col-md-6 col-lg-4">
    <div class="card">
      <img src="<?="images/".$product['type'].'/'.$product['photo']?>" class="card-img-top">
      <div class="card-body">
        <CENTER><h4 class="card-title" style="text-decoration: underline"> <?=$product['designation'] ?> </h4>
            <CENTER><p class="card-title""> <?=$product['reference'] ?> </p>
        <p class="card-text"><small class="text-muted outlined" style=" text-decoration: line-through"><?=$product['prixNormal'] ?> DH </small></p>
        <p class="card-text"><small class="text-muted" > <?= $product['prixPromo']?> DH </small> <br> <br><button> <a href="ajouteraupanier.php?reference=<?=$product['reference']?>" >Ajouter ce produit à votre panier</a></button></p></CENTER>
      </div>
    </div>
  </div>
  <?php endforeach?>
</div>
</div>
<br>
    <div class="container my-5">
        <fieldset>
            <legend>VOTRE PANIER</legend>
            <?php require("panier.php") ?>
        </fieldset>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="http://localhost/ecom1/"> E-commerce.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="node_modules/jquery/dist/jquery.slim.min.js" ></script>
<script src="node_modules/popper.js/dist/popper.min.js"  ></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>