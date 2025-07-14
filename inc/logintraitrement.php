<?php
include("connectionBD.php");
include("function.php");
$db=connectionDB();
if (isset($_POST['email']) && $_POST['email']!=null && isset($_POST['mdp']) && $_POST['mdp']!=null){
    $nom = $_POST['email'];
    $mdp = $_POST['mdp'];
    if($user=selectuser($db,$nom,$mdp)){
        $donne=mysqli_fetch_assoc($user);
        session_start();
         $_SESSION['id_membre'] = $donne['id_membre'];
            $_SESSION['nom'] = $donne['nom'];
            $_SESSION['email'] = $donne['email'];
            $_SESSION['image_profile'] = $donne['image_profile'];
        header("location:../pages/listobject.php");
    }else{
        header("location:../pages/inscription.php");
    }
}
?>