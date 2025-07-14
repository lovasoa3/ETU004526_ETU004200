<?php
include("connectionBD.php");
include("function.php");
$db=connectionDB();
if (
    isset($_POST['nom']) &&
    isset($_POST['date_naissance']) &&
    isset($_POST['genre']) &&
    isset($_POST['email']) &&
    isset($_POST['ville']) &&
    isset($_POST['mdp'])) {

    $nom = $_POST['nom'];
    $date = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $mdp = $_POST['mdp'];

    if(insertUser($db,$nom,$date,$genre,$email,$ville,$mdp,null)){
         header("location:../pages/login.php");
    }
}
?>