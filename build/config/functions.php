<?php

require('pdo.php');

// FILM // FILM // FILM // FILM // FILM // FILM // FILM // FILM

function getFilmImage($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT img_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    // Get the image data from the result
    $image_data = $result['img_film'];

    // Encode the image data as base64 and return it
    return base64_encode($image_data);
}

function getFilmPoster($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT affiche_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    
    $result = $stmt->fetch();

    if ($result !== false) {
        // Get the image data from the result
        $image_data = $result['affiche_film'];
    
        // Encode the image data as base64 and return it
        return base64_encode($image_data);
    } else {
        // Handle the case where the film was not found
        return '';
    }    
}

function getFilmTitle($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT titre_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['titre_film'];
}

function getFilmDate($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT date_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['date_film'];
}

function getFilmGenre($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT genre_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['genre_film'];
}

function getFilmDuree($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT duree_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['duree_film'];
}

function getFilmSynopsis($pdo, $filmName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT synopsis_film FROM film WHERE nom_film = :name');
    $stmt->bindValue(':name', $filmName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['synopsis_film'];
}


// REALISATEUR // REALISATEUR // REALISATEUR // REALISATEUR // REALISATEUR

function getRealFname($pdo, $realisateurName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT prenom_realisateur FROM realisateur WHERE nom_realisateur = :name');
    $stmt->bindValue(':name', $realisateurName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['prenom_realisateur'];
}

function getRealLname($pdo, $realisateurName) {
    // Prepare and execute a SELECT statement to retrieve the image data
    $stmt = $pdo->prepare('SELECT nom_realisateur FROM realisateur WHERE nom_realisateur = :name');
    $stmt->bindValue(':name', $realisateurName);
    $stmt->execute();
    $result = $stmt->fetch();

    return $result['nom_realisateur'];
}


// ACTEUR // ACTEUR // ACTEUR // ACTEUR // ACTEUR // ACTEUR // ACTEUR

function getActorsFromMovie($pdo, $movieId) {
    // Prepare and execute a SELECT statement to retrieve the actors from a specified movie
    $stmt = $pdo->prepare('SELECT acteur.prenom_acteur, acteur.nom_acteur 
                           FROM acteur 
                           JOIN acteur_film ON acteur_film.id_acteur = acteur.id_acteur 
                           WHERE acteur_film.id_film = :movieId');
    $stmt->bindValue(':movieId', $movieId);
    $stmt->execute();

    // Fetch all rows and return them as an array
    return $stmt->fetchAll();
}


?>