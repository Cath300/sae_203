<?php

//print_r($_POST);

$module = $_POST['module'];
$note = $_POST['note'];
$commentaire = $_POST['commentaire'];
$enseignant = $_POST['enseignant'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// on demande à mysqli de rapporter toutes les erreurs


// on tente de se connecter
// si on arrive à se connecter 
// alors $mysqli contient un objet de classe MySQLi
// représentant la connexion
// 4 paramètres d'entrée : 
// 1- l'hôte, 2- l'utilisateur, 3- le mot de passe, 
// 4- le nom de la base de données
$mysqli = mysqli_connect('iutb-wetu1-p22.si.univ-tours.fr', '22306298t', 'SGBD-Blois!', '22306298t');

//echo "INSERT INTO notes (module, note, commentaire, enseignant) VALUES ('$module', $note, '$commentaire', '$enseignant'";

$res = mysqli_query($mysqli, "INSERT INTO notes (module, note, commentaire, enseignant) VALUES ('$module', $note, '$commentaire', '$enseignant')");

//$res = mysqli_query($mysqli, "INSERT INTO produits (id_categorie,nom,prix) VALUES ('$id_categorie', $nom, '$prix')");


if ($res == false) {
    echo "error";
}
else {
    echo "requête ok, ligne affectée :" . mysqli_affected_rows($mysqli);
}
?>

