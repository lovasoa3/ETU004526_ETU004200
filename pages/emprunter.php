<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme d'Emprunt d'Objets</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<header>
        <div class= "shaky-text">
             <h1>Choisir le delai de l'emprunt </h1>
         </div>
    </header>
 
     <div class="mb-md-5 mt-md-4 pb-5">
      <form action="traitement.php" method="post">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Veuillez donner le delai d'emprunt</p>

                  <div class="form-outline form-white mb-4">
                    <input type="number" id="delai" name="delai" class="form-control form-control-lg" required />
                    <label class="form-label" for="delai">Je voudrais l'emprunter pour </label>
                  </div>

                  <div class="form-outline form-white mb-3">
                  <select id="genreSelect" name="genre" class="form-control" required>
                    <option value="femme">heure(s)</option>
                    <option value="homme">jour(s)</option>
                    <option value="femme">mois</option>
                    <option value="femme">an(s)</option>
                  </select>
                </div>
            </form>
      </div>

  <footer class="footer mt-auto">
    <div class="container text-center">
        <p>&copy; <?= date('Y') ?> Plateforme d’Emprunt d’Objets. Tous droits réservés.</p>
        <p>
            <a href="mailto:contact@emprunt-objets.com"><i class="fas fa-envelope"></i> Contact</a> |
            <a href="#"><i class="fas fa-info-circle"></i> À propos</a>
        </p>
    </div>
</footer>

</body>
</html>
