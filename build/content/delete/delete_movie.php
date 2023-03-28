<?php
require('C:\wamp64\www\cinemet\build\config\pdo.php');

// Get the ID of the movie to delete from the POST request
$movie_id = $_POST['movie_id'];

// Delete related records in the realisateur_film table
$stmt = $pdo->prepare('DELETE FROM realisateur_film WHERE id_film = :id');
$stmt->execute(['id' => $movie_id]);

// Delete related records in the acteur_film table
$stmt = $pdo->prepare('DELETE FROM acteur_film WHERE id_film = :id');
$stmt->execute(['id' => $movie_id]);

// Delete the movie from the database
$stmt = $pdo->prepare('DELETE FROM film WHERE id_film = :id');
$stmt->execute(['id' => $movie_id]);

// Redirect to the CRUD page with a success message
header("Location: ../crud.php?success=Movie%20deleted%20successfully");
exit();
?>