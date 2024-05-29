<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// on demande à mysqli de rapporter toutes les erreurs
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// on tente de se connecter
// si on arrive à se connecter 
// alors $mysqli contient un objet de classe MySQLi
// représentant la connexion
// 4 paramètres d'entrée : 
// 1- l'hôte, 2- l'utilisateur, 3- le mot de passe, 
// 4- le nom de la base de données
$mysqli = mysqli_connect('localhost', '22306298t', 'SGBD-Blois', '22306298t');

//echo "INSERT INTO notes (module, note, commentaire, enseignant) VALUES ('$module', $note, '$commentaire', '$enseignant'";

$res = mysqli_query($mysqli, "SELECT * FROM notes");

if ($res == false) {
    echo "error";
}
else {
    $notes = mysqli_fetch_all($res, MYSQLI_ASSOC);

    echo "<table>";
    echo "<tr><th>Module</th><th>Note</th><th>COmmentaire</th><th>Enseignant</th></tr>";
    foreach ($notes as $note) {
        echo "<tr><td>" . $note["module"] . "</td><td>" . $note["note"] . "</td><td>" . $note["commentaire"] . "</td><td>" . $note["enseignant"] .  "</td></tr>";
    }

    echo "</table>";
}
?>
</body>
</html>