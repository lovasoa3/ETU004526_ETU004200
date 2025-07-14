<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="vh-70 gradient-custom">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Inscription</h2>
              <form action="traitement.php" method="post">
               <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="text" id="nom" name="nom" placeholder="nom" class="form-control form-control-lg" />
              </div>
               <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="date" id="typeEmailX" name="date_naissance" placeholder="date de naissance" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <select id="genreSelect" class="form-control form-control-lg">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                </select>
                </div>
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name="email" placeholder="email" class="form-control form-control-lg" />
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="text" id="typePasswordX" name="ville" placeholder="ville" class="form-control form-control-lg" />
              </div>

                 <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="mdp" placeholder="mot de passe" class="form-control form-control-lg" />
              </div>
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="file" name="fichier" id="fichier" placeholder="image" class="form-control form-control-lg" />
              </div>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">s'inscrire</button>

            </div>
            </form>

            <div>
              <p class="mb-0"><a href="login.php" class="text-white-50 fw-bold">login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>