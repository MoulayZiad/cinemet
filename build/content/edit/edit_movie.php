<?php

require('C:\wamp64\www\cinemet\build\config\pdo.php');


// Prepare and execute the SQL statement
$stmt = $pdo->prepare("UPDATE film SET nom_film=:nom, titre_film=:titre, affiche_film=:affiche, date_film=:date, genre_film=:genre, duree_film=:duree, synopsis_film=:resume, img_film=:image");
$stmt->bindParam(':nom', $_POST['Nom']);
$stmt->bindParam(':titre', $_POST['Titre']);
$stmt->bindParam(':affiche', $_POST['Affiche']);
$stmt->bindParam(':date', $_POST['Date']);
$stmt->bindParam(':genre', $_POST['Genre']);
$stmt->bindParam(':duree', $_POST['Durée']);
$stmt->bindParam(':resume', $_POST['Synopsis']);
$stmt->bindParam(':image', $_POST['Image']);
$stmt->execute();




?>