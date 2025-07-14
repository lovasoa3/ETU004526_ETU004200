<?php
if (
    isset($_POST['nom_object']) &&
    isset($_POST['idCategorie']) &&
    isset($_POST['idMenbre']) &&
    isset($_FILES['fichier']) && $_FILES['fichier']['error'] === 0
) {

    $nomObject=$_POST['nom_object'];
    $idcate=$_POST['idCategorie'];
    $idMembre=$_POST['idMenbre'];

    $uploadDir = __DIR__ . '/photo/';
$maxSize = 2 * 1024 * 1024;
$allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf'];


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
 $file = $_FILES['fichier'];
 if ($file['error'] !== UPLOAD_ERR_OK) {
 die('Erreur lors de l’upload : ' . $file['error']);
 }

 if ($file['size'] > $maxSize) {
 die('Le fichier est trop volumineux.');
 }

 $finfo = finfo_open(FILEINFO_MIME_TYPE);
 $mime = finfo_file($finfo, $file['tmp_name']);
 finfo_close($finfo);

 if (!in_array($mime, $allowedMimeTypes)) {
 die('Type de fichier non autorisé : ' . $mime);
 }

 $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
 $newName = $originalName . '_' . uniqid() . '.' . $extension;

 if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {
 } else {
 echo "Échec du déplacement du fichier.";
 }

} else {
 echo "Aucun fichier reçu.";
}
}





?>
