<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <section class="vh-70 gradient-custom">
    <div class="container py-2 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-4 text-center">
              <h2 class="fw-bold mb-3 text-uppercase">Inscription</h2>

              <form action="../inc/traitement.php" method="post" enctype="multipart/form-data">

                <div class="form-outline form-white mb-3">
                  <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control" required />
                </div>

                <div class="form-outline form-white mb-3">
                  <input type="date" id="date_naissance" name="date_naissance" class="form-control" required />
                </div>

                <div class="form-outline form-white mb-3">
                  <select id="genreSelect" name="genre" class="form-control" required>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                  </select>
                </div>

                <div class="form-outline form-white mb-3">
                  <input type="email" id="email" name="email" placeholder="Email" class="form-control" required />
                </div>

                <div class="form-outline form-white mb-3">
                  <input type="text" id="ville" name="ville" placeholder="Ville" class="form-control" required />
                </div>

                <div class="form-outline form-white mb-3">
                  <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" class="form-control" required />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="file" name="fichier" id="fichier" class="form-control" />
                </div>

                <button class="btn btn-outline-light btn-sm px-4" type="submit">S'inscrire</button>
              </form>

              <p class="mt-3 mb-0">
                <a href="login.php" class="text-white-50 fw-bold">Déjà inscrit ? Se connecter</a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
