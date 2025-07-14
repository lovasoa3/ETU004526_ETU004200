<?php
include ("../inc/function.php") ;
include ("../inc/connectionBD.php") ;
$db = connectionDB();
$listeObjet = listObject($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<section>
    <h1>liste des objets emprunte en cours</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Membre</th>
      <th scope="col">Objet</th>
      <th scope="col">DateDebut</th>
      <th scope="col">DateRetour</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   while ($donne = mysqli_fetch_assoc($listeObjet))  {
    echo ' <tr>
      <th scope="row">'.$donne['nom'].'</th>
      <td>'.$donne['nom_object'].'</td>
     <td>'.$donne['date_emprunt'].'</td>
      <td>'.$donne['date_emprunt'].'</td>
    </tr>';
   } 
   ?>
   
  </tbody>
</table>
</section>
</body>
</html>