<?php

require "auth.php";

if(!isset($_SESSION['panier']))
    $_SESSION['panier']=array();

?>