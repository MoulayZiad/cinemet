<?php

require('C:\wamp64\www\cinemet\build\config\pdo.php');


// Prepare and execute the SQL statement
$stmt = $pdo->prepare("INSERT INTO film (nom_film, titre_film, affiche_film, date_film, genre_film, duree_film, synopsis_film, img_film) VALUES (:nom, :titre, :affiche, :date, :genre, :duree, :resume, :image)");
$stmt->bindParam(':nom', $_POST['Titre']);
$stmt->bindParam(':titre', $_POST['Titre']);
$stmt->bindParam(':affiche', $_POST['Affiche']);
$stmt->bindParam(':date', $_POST['Date']);
$stmt->bindParam(':genre', $_POST['Genre']);
$stmt->bindParam(':duree', $_POST['Durée']);
$stmt->bindParam(':resume', $_POST['Synopsis']);
$stmt->bindParam(':image', $_POST['Image']);
$stmt->execute();


?>