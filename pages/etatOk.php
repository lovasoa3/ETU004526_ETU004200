<?php
include ("../inc/function.php") ;
include ("../inc/connectionBD.php") ;
$db = connectionDB();
$etat="ok";
$listeObjet = listObjectOK($db,$etat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php
    include('navBar.php');
    ?>

<header>
        <div class= "shaky-text">
             <h1>Listes des objets retourner</h1>
         </div>
    </header>
    <div class="container my-4">
       
        <div class = "table-responsive">
    <table id="montableau" class="table table-bordered table-striped table-hover shadow rounded">
    <thead class = "table-dark text-center">
    <tr>
      <th>Objet</th>
      <th>DateDebut</th>
      <th>DateRetour</th>
      <th>etat</th>
    </tr>
  </thead>
 
  <tbody class = "text-center align-middle">
   <?php 
   while ($donne = mysqli_fetch_assoc($listeObjet))  {
    echo ' <tr>
      <td>'.$donne['nom_object'].'</td>
      <td>'.$donne['date_emprunt'].'</td>
      <td>'.$donne['date_retour'].'</td>
      <td>'.$donne['etat'].'</td>
    </tr>';
   } 
   ?>
   
  </tbody>
  
</table>
 <form action="emprunter.php" method="post">
  <button type="button">emprunter</button>
  </form>
<a href="ajouter_objet.php">Ajouter des objets</a>
  </div>
  </div>
  
<script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>