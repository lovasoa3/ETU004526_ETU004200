<?php
session_start();
include('inc/db.php');

// connexion utilisateur
if (!isset($_SESSION['id_membre'])) {
    header("Location: index.php");
    exit();
}

// Recuperer ategorie
$categories = $conn->query("SELECT * FROM categorie_objet");

// Si categorie choisi
$id_categorie = isset($_GET['id']) ? intval($_GET['id']) : 0;

$objets = [];
if ($id_categorie > 0) {
    $stmt = $conn->prepare("SELECT * FROM objet WHERE id_categorie = ?");
    $stmt->bind_param("i", $id_categorie);
    $stmt->execute();
    $objets = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Recherche par catégorie</h2>

    <!-- Formulaire de sélection -->
    <form method="get" class="mb-4">
        <label for="id" class="form-label">Choisir une catégorie :</label>
        <div class="input-group">
            <select name="id" id="id" class="form-select" onchange="this.form.submit()">
                <option value="0">-- Sélectionner une catégorie --</option>
                <?php while ($cat = $categories->fetch_assoc()): ?>
                    <option value="<?= $cat['id_categorie'] ?>" <?= ($id_categorie == $cat['id_categorie']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cat['nom_categorie']) ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
    </form>

    <!-- Affichage des objets -->
    <?php if ($id_categorie > 0): ?>
        <h4>Objets dans la catégorie sélectionnée :</h4>
        <div class="row">
            <?php while ($obj = $objets->fetch_assoc()): ?>
                <?php
                $id_objet = $obj['id_objet'];
                $img = $conn->query("SELECT nom_image FROM images_objet WHERE id_objet = $id_objet LIMIT 1")->fetch_assoc();
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php if ($img): ?>
                            <img src="assets/images/<?= $img['nom_image'] ?>" class="card-img-top" alt="Image de l'objet">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Image par défaut">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($obj['nom_objet']) ?></h5>
                            <a href="fiche_objet.php?id=<?= $obj['id_objet'] ?>" class="btn btn-outline-primary btn-sm">Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <h5 class="text-muted">Veuillez choisir une catégorie pour afficher ses objets.</h5>
    <?php endif; ?>

</body>
</html>