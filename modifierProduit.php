<?php
header("Access-Control-Allow-Origin: *");
$id=$_GET["id"];
$designation=$_POST["designation"];
$type=$_POST["type"];
$prixNormal=$_POST["prixNormal"];
$prixPromo=$_POST["prixPromo"];
$hn      = 'localhost';
$un      = 'root';
$pwd     = '';
$db      = 'ecom';
$cs      = 'utf8';

$dsn  = "mysql:host=" . $hn . ";port=3306;dbname=" . $db . ";charset=" . $cs;
$opt  = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
);

$pdo  = new PDO($dsn, $un, $pwd, $opt);
$data    = array();


// Attempt to query database table and retrieve data
try {
    $stmt    = $pdo->query('UPDATE produits set designation="'.$designation.'",type="'.$type.'",prixNormal="'.$prixNormal.'",prixPromo="'.$prixPromo.'" WHERE reference="'.$id.'"');
    while($row  = $stmt->fetch(PDO::FETCH_OBJ))
    {
        $data[] = $row;
    }

    // Return data as JSON
    echo json_encode($data);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>