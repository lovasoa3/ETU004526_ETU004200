<?php

function insertUser($db, $nom, $dateNaissance, $genre, $email, $ville, $mdp, $image_profil) {
    $sql = sprintf("INSERT INTO exam_membre(nom, date_naissance, genre, email, ville, mdp, image_profile) 
        VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
        $nom, $dateNaissance, $genre, $email, $ville, $mdp, $image_profil);
    
    return mysqli_query($db, $sql);
}


function selectuser($db, $email, $mdp) {
    $sql = sprintf("SELECT * FROM exam_membre WHERE email='%s' AND mdp='%s'", $email, $mdp);
    return mysqli_query($db, $sql);
}


function selectCategorie($db) {
    $sql = "SELECT * FROM exam_categorie_object";
    return mysqli_query($db, $sql);
}


function listObjectOK($db, $etat) {
    $sql = sprintf("SELECT 
        exam_membre.nom, 
        exam_object.nom_object, 
        exam_emprunt.date_emprunt, 
        exam_emprunt.date_retour
    FROM exam_emprunt
    JOIN exam_object ON exam_object.id_object = exam_emprunt.idObject
    JOIN exam_membre ON exam_membre.id_membre = exam_emprunt.idMembre 
    WHERE exam_emprunt.date_retour < NOW() AND exam_emprunt.etat = '%s'",
    $etat);

    return mysqli_query($db, $sql);
}
function listObject($db) {
    $sql = "SELECT 
        exam_membre.nom, 
        exam_object.nom_object, 
        exam_emprunt.date_emprunt, 
        exam_emprunt.date_retour
    FROM exam_emprunt
    JOIN exam_object ON exam_object.id_object = exam_emprunt.idObject
    JOIN exam_membre ON exam_membre.id_membre = exam_emprunt.idMembre 
    WHERE exam_emprunt.date_retour > NOW()";

    return mysqli_query($db, $sql);
}


function monEmprent($db, $id) {
    $sql = sprintf("SELECT 
        exam_membre.nom, 
        exam_object.nom_object, 
        exam_emprunt.date_emprunt, 
        exam_emprunt.date_retour
    FROM exam_emprunt
    JOIN exam_object ON exam_object.id_object = exam_emprunt.idObject
    JOIN exam_membre ON exam_membre.id_membre = exam_emprunt.idMembre 
    WHERE exam_emprunt.date_retour > NOW() AND exam_membre.id_membre = %d",
    $id);

    return mysqli_query($db, $sql);
}
?>
