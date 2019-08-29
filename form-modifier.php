<?php
$id=$_GET["id"];?>
<form action='modifierProduit.php?id=<?php echo $id ?>' method="post">
<p>
   Type:<input type="text" name="type" /><br>
    designation:<input type="text" name="designation" /><br>
    prixNormal:<input type="number" name="prixNormal" /><br>
    prixPromo:<input type="number" name="prixPromo" /><br>
    <input type="submit" value="Valider" />
</p>
</form>