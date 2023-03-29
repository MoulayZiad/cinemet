<?php

require('C:\wamp64\www\cinemet\build\config\pdo.php');




// Get the form data
$nom = $_POST['Nom'];
$titre = $_POST['Titre'];
$annee = $_POST['Date'];
$genre = $_POST['Genre'];
$duree = $_POST['Duree'];
$synopsis = $_POST['Synopsis'];
$bool = 'false';

// Process the image
if(isset($_FILES['affiche']['name']) && $_FILES['affiche']['error'] == 0)
{
    $nameFile = $_FILES['affiche']['name'];
    $typeFile = $_FILES['affiche']['type'];
    $tmpFile = $_FILES['affiche']['tmp_name'];
    $errorFile = $_FILES['affiche']['error'];
    $sizeFile = $_FILES['affiche']['size'];

    $extensions = ['png', 'jpg', 'jpeg', 'gif', 'jiff'];
    $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/jiff'];

    $extension = explode('.', $nameFile);

    $max_size =500000;

    $affiche = uniqid() . '.' . end($extension);
    var_dump($affiche);

    if(in_array($typeFile, $type))
    {
        if(count($extension) <=2 && in_array(strtolower(end($extension)), $extensions))
        {
            if($sizeFile <= $max_size && $errorFile == 0)
            {
                if(move_uploaded_file($tmpFile, $image = '../upload/' . $affiche) )
                {
                    echo "upload effectué !";
                    $bool = 'true';

                }
                else
                {
                    echo "Echec de l'upload de l'image !";
                }
            }
            else
            {
                echo "Erreur le poids de l'image est trop élevé !";
            }
        }
        else
        {
            echo "Merci d'upload une image !";
        }
    }
    else
    {
        echo "Type non autorisé !";
    }
} else { echo "T'es ici"; var_dump($_FILES['affiche']['error']); }

if ($bool == 'true') {
// Prepare and execute the SQL statement to insert the movie into the film table
$stmt = $pdo->prepare("INSERT INTO film (nom_film, titre_film, affiche_film, date_film, genre_film, duree_film, synopsis_film) VALUES (:Nom, :Titre, :Affiche, :Date, :Genre, :Duree, :Synopsis)");
$stmt->bindParam(':Nom', $nom);
$stmt->bindParam(':Titre', $titre);
$stmt->bindParam(':Affiche', $affiche);
$stmt->bindParam(':Date', $annee);
$stmt->bindParam(':Genre', $genre);
$stmt->bindParam(':Duree', $duree);
$stmt->bindParam(':Synopsis', $synopsis);
$stmt->execute();



// Get the ID of the last inserted movie
$film_id = $pdo->lastInsertId();

var_dump($film_id);

// Get the ID of the selected director from the form
$realisateur_id = $_POST['Realisateur'];

// Prepare and execute the SQL statement to insert the director ID and movie ID into the realisateur_film table
$stmt = $pdo->prepare("INSERT INTO realisateur_film (id_realisateur, id_film) VALUES (:realisateur_id, :film_id)");
$stmt->bindParam(':realisateur_id', $realisateur_id);
$stmt->bindParam(':film_id', $film_id);
$stmt->execute();

// Get the IDs of the selected actors from the form
$selected_acteurs = $_POST['Acteurs'];

// Loop through the selected actors and insert them into the acteur_film table
foreach ($selected_acteurs as $acteur_id) {
    // Prepare and execute the SQL statement to insert the actor ID and movie ID into the acteur_film table
    $stmt = $pdo->prepare("INSERT INTO acteur_film (id_acteur, id_film) VALUES (:acteur_id, :film_id)");
    $stmt->bindParam(':acteur_id', $acteur_id);
    $stmt->bindParam(':film_id', $film_id);
    $stmt->execute();
}

}


?>