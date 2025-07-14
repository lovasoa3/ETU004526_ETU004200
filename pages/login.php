<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <!-- ✅ Formulaire corrigé -->
              <form action="../inc/logintraitrement.php" method="post">

                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Veuillez entrer votre email et mot de passe</p>

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="password" name="mdp" class="form-control form-control-lg" required />
                    <label class="form-label" for="password">Mot de passe</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#">Mot de passe oublié ?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Se connecter</button>
                </div>

                <div>
                  <p class="mb-0">Pas encore inscrit ? 
                    <a href="inscription.php" class="text-white-50 fw-bold">Créer un compte</a>
                  </p>
                </div>

              </form>
              <!-- ✅ Fin formulaire -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
