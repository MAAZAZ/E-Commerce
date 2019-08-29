<?php
//session_start();
if(isset($_POST['submit'])) {
    $email = $_POST['user'];
    $pass = $_POST['pass'];
}

$bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM users');


while ($donnees=$reponse->fetch())
{

    if($donnees['email']==$email && $donnees['password']==$pass){

        $_SESSION["admin"]=$donnees['level'];
        if($_SESSION["admin"]==0){
            header('location:indexAdmine.php');
        }else{
            header('location:index.php');
        }

    }

}
$reponse->closeCursor();

?>


