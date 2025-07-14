<?php
include("connectionBD.php");
include("function.php");
$db=connectionDB();
if (isset($_POST['email']) && $_POST['email']!=null && isset($_POST['mdp']) && $_POST['mdp']!=null){
    $nom = $_POST['email'];
    $mdp = $_POST['mdp'];
    if(selectuser($db,$nom,$mdp)){
        header("location:../pages/listobject.php");
    }else{
        header("location:../pages/inscription.php");
    }
}
?>