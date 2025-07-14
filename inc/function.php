<?php
function insertUser($db ,$nom,$dateNaissance,$genre,$email,$ville,$mdp ,$image_profil){
$sql=sprintf("INSERT INTO exam_menbre(nom,date_naissance,genre,email,ville,mdp,image_profile) VALUES ('','','','','','','','')");
$statement=mysqli_query($db,$sql);
}


function listObject($db){
    $sql=sprintf("SELECT 
    exam_menbre.nom, 
    exam_object.nom_object, 
    exam_emprunt.date_emprunt, 
    exam_emprunt.date_retour
FROM exam_emprunt
JOIN exam_object 
    ON exam_object.id_object = exam_emprunt.idObject
JOIN exam_menbre 
ON exam_menbre.id_membre = exam_emprunt.idMembre 
WHERE exam_emprunt.date_retour > NOW();");

return $statement=mysqli_query($db,$sql);

}
?>