<!DOCTYPE html>
<html class="w-full h-full m-0 p-0" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-[#191919] w-full h-full m-0 p-0">

<?php 
require('../config/pdo.php');
require('../config/functions.php');
?>

<!-- INCLUDE NAV (0) -->
<?php include("../include/nav.php") 
?> 
    

    <section class="p-3 mt-12 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Affiche</th>
                        <th scope="col" class="px-4 py-3">Titre</th>
                        <th scope="col" class="px-4 py-3">Date</th>
                        <th scope="col" class="px-4 py-3">Genre</th>
                        <th scope="col" class="px-4 py-3">Réalisateur</th>
                        <th scope="col" class="px-4 py-3">Acteurs</th>
                        <th scope="col" class="px-4 py-3">Details</th>
                        <th scope="col" class="px-4 py-3">Actions</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $stmt = $pdo->query('SELECT f.*, r.nom_realisateur, r.prenom_realisateur, GROUP_CONCAT(CONCAT(a.prenom_acteur, " ", a.nom_acteur) SEPARATOR ", ") AS noms_acteurs
                                        FROM film f
                                        JOIN realisateur_film rf ON f.id_film = rf.id_film
                                        JOIN realisateur r ON r.id_realisateur = rf.id_realisateur
                                        JOIN acteur_film af ON f.id_film = af.id_film
                                        JOIN acteur a ON a.id_acteur = af.id_acteur
                                        GROUP BY f.id_film');

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3"> <img src="upload/<?=$row['affiche_film']?>" alt="Affiche" /></td>
                    <td class="px-4 py-3"><?=$row['titre_film']?></td>
                    <td class="px-4 py-3"><?=$row['date_film']?></td>
                    <td class="px-4 py-3"><?=$row['genre_film']?></td>
                    <td class="px-4 py-3"><?=$row['prenom_realisateur'].' '.$row['nom_realisateur']?></td>
                    <td class="px-4 py-3"><?=$row['noms_acteurs']?></td>
                    <?php var_dump($row['affiche_film']); ?>
                    <td class="px-4 py-3 text-center">
                        <button class="text-blue-500 hover:text-blue-700 my-4" onclick="toggleDetails(this)">Show More</button>
                    <div class="hidden">
                    <p class="my-4">Durée : <?=$row['duree_film']?></p>
                    <p class="my-4">Résumé : <?=$row['synopsis_film']?></p>
                    <p class="my-4">Image : </p><img src="upload/<?=$row['img_film']?>" alt="Affiche" />
                    </div></td> 

                    <td class="px-4 py-3">
                        <div class="text-center">
                            <!-- Modal toggle -->
                            <button data-modal-target="editModal<?=$row['id_film']?>" data-modal-toggle="editModal<?=$row['id_film']?>" class="my-4 text-yellow-500 hover:text-yellow-700">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <br>
                            <!-- Modal toggle -->
                            <button data-modal-target="deleteModal<?=$row['id_film']?>" data-modal-toggle="deleteModal<?=$row['id_film']?>" class="my-4 text-yellow-500 hover:text-yellow-700">
                                <i class="bi bi-trash my-4 text-red-500 hover:text-red-700"></i>
                            </button>
                        </div>
                        
                        <!-- Edit modal -->
                        <div id="editModal<?=$row['id_film']?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full hidden">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Modifier un film
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal<?=$row['id_film']?>">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                    <form method="POST" action="../content/edit/edit_movie.php">
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Titre">
                                            Titre
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Titre" id="Titre" type="text" required placeholder="Titre" value="<?= $row['titre_film']?>">
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Affiche">
                                            Affiche
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Affiche" id="Affiche" type="file" required placeholder="Affiche">
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Date">
                                            Date
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="Date" id="">
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Genre">
                                            Genre
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Genre" id="Genre" type="text" required placeholder="Genre" value="<?=$row['genre_film']?>">
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Realisateur">
                                            Realisateur
                                        </label>
                                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Realisateur" id="Realisateur" required>
                                            <option value="">Choisir un réalisateur</option>
                                            <?php
                                                // Prepare and execute a SQL query to retrieve realisateurs from the database
                                                $query = $pdo->prepare('SELECT * FROM realisateur');
                                                $query->execute();
                                                $realisateurs = $query->fetchAll(PDO::FETCH_ASSOC);
                                                
                                                // Loop through the realisateurs and create an option for each one
                                                foreach ($realisateurs as $realisateur) { ?>
                                                    <option value="<?=$realisateur['id_realisateur']?>"><?=$realisateur['nom_realisateur']?></option>';
                                                <?php }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Durée">
                                            Durée
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Durée" id="Durée" type="text" required placeholder="Durée" value="<?=$row['duree_film']?>">
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Synopsis">
                                            Synopsis
                                        </label>
                                        <textarea class="overflow-scroll shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Synopsis" id="Synopsis" type="text" required placeholder="Synopsis"><?=$row['synopsis_film']?></textarea>
                                        </div>
                                        <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Image">
                                            Image
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Image" id="Image" type="file" required placeholder="Image">
                                        </div>
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete modal -->
                        <div id="deleteModal<?=$row['id_film']?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full hidden">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Confirmez la suppression de ce film : <?= $row['titre_film']?> 
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteModal<?=$row['id_film']?>">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                    <form method="POST" action="../content/delete/delete_movie.php">
                                        <input type="hidden" name="movie_id" value="<?=$row['id_film']?>">
                                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Supprimer</button>
                                    </form>
                                    <button data-modal-hide="deleteModal<?=$row['id_film']?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>

                    <?php
                    echo '</tr>';
                    }
                    ?>


                    <td class="px-4 py-3">
                        <!-- Modal toggle -->
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    <i class="bi bi-plus-circle mx-4"></i>Ajouter film
                    </button>

                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full hidden">
                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Ajoutez un film
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                <form enctype="multipart/form-data" method="POST" action="../content/add/add_movie.php">
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Nom">
                                        Nom
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Nom" id="Nom" type="text" required placeholder="Nom">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Titre">
                                        Titre
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Titre" id="Titre" type="text" required placeholder="Titre">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="affiche">
                                        affiche
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="affiche" id="affiche" type="file" required placeholder="affiche">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Date">
                                        Date
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Date" id="Date" type="date" required placeholder="Date">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Genre">
                                        Genre
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Genre" id="Genre" type="text" required placeholder="Genre">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Realisateur">
                                        Realisateur
                                    </label>
                                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Realisateur" id="Realisateur" required>
                                        <option value="">Choisir un réalisateur</option>
                                        <?php
                                            // Prepare and execute a SQL query to retrieve realisateurs from the database
                                            $query = $pdo->prepare('SELECT * FROM realisateur');
                                            $query->execute();
                                            $realisateurs = $query->fetchAll(PDO::FETCH_ASSOC);
                                            
                                            // Loop through the realisateurs and create an option for each one
                                            foreach ($realisateurs as $realisateur) { ?>
                                                <option value="<?=$realisateur['id_realisateur']?>"><?=$realisateur['prenom_realisateur'] . ' ' . $realisateur['nom_realisateur']?></option>';
                                            <?php }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="Acteurs">
                                            Acteurs
                                        </label>
                                        <?php
                                            // Prepare and execute a SQL query to retrieve acteurs from the database
                                            $query = $pdo->prepare('SELECT * FROM acteur');
                                            $query->execute();
                                            $acteurs = $query->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="flex flex-col max-h-36 overflow-auto">
                                            <?php foreach ($acteurs as $acteur) { ?>
                                                <label class="inline-flex items-center mt-3">
                                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="Acteurs[]" value="<?=$acteur['id_acteur']?>">
                                                    <span class="ml-2"><?=$acteur['prenom_acteur'] . ' ' . $acteur['nom_acteur']?></span>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Duree">
                                        Duree
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Duree" id="Duree" type="text" required placeholder="Duree">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Synopsis">
                                        Synopsis
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Synopsis" id="Synopsis" type="text" required placeholder="Synopsis">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="Image">
                                        Image
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Image" id="Image" type="file" required placeholder="Image">
                                    </div>
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </td>



                

                </tbody>
            </table>

            </div>
        </div>
    </div>
    </section>


    <script>
        
    function toggleDetails(button) {
    var details = button.nextElementSibling;
    if (details.classList.contains('hidden')) {
        details.classList.remove('hidden');
        button.innerHTML = 'Show Less';
    } else {
        details.classList.add('hidden');
        button.innerHTML = 'Show More';
    }
    }

    function toggleDetails(button) {
    var details = button.nextElementSibling;
    details.classList.toggle("hidden");
    if (button.textContent === "Show More") {
        button.textContent = "Show Less";
    } else {
        button.textContent = "Show More";
    }
    }

    function editFilm(id_film) {
    var form = document.getElementById("editForm" + id_film);
    form.classList.toggle("hidden");
    }

    </script>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://kit.fontawesome.com/77aa9e7f49.js" crossorigin="anonymous"></script>


</body>
</html>