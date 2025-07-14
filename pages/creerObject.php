<?php
include ("../inc/function.php") ;
include ("../inc/connectionBD.php") ;
$db = connectionDB();
$categories=selectCategorie($db);
session_start();

if (!isset($_SESSION['id_membre'])) {
    header("Location: login.php");
    exit();
}

$idMembre = $_SESSION['id_membre'];
$nomMembre = $_SESSION['nom'];
$emailMembre = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="creerObject.css">
</head>
<body class="bg-light">
   <?php
    include('navBar.php');
    ?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Ajouter un objet</h4>
        </div>
        <div class="card-body">

          <form action="traitement_object.php" method="post">
          
            <div class="mb-3">
              <label for="nom_object" class="form-label">Nom de l'objet</label>
              <input type="text" class="form-control" id="nom_object" name="nom_object" placeholder="Nom de l'objet" required>
            </div>

      
            <div class="mb-3">
              <label for="idCategorie" class="form-label">Catégorie</label>
              <select class="form-select" id="idCategorie" name="idCategorie" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <?php while ($cat = mysqli_fetch_assoc($categories)) { ?>
                  <option value="<?= $cat['id_categorie'] ?>"><?= htmlspecialchars($cat['nom_categorie']) ?></option>
                <?php } ?>
              </select>
            </div>

          
            <div class="mb-3">
              <label for="idMembre" class="form-label">Membre propriétaire</label>
              <select class="form-select" id="idMembre" name="idMembre" required>
                <?php while ($mem = mysqli_fetch_assoc($membres)) { ?>
                  <option value="<?= $idMembre ?>">
                    <?= htmlspecialchars($nomMembre) ?> 
                  </option>
                <?php } ?>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success">Ajouter l'objet</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>