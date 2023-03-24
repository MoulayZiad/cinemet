<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body class="bg-[#191919]">
    <!-- INCLUDE NAV (0) -->
    <?php 
    include("../../include/nav.php"); 
    require("../../config/pdo.php");
    require("../../config/functions.php");
    ?> 

    <div class="w-full">

        <div class="h-[400px] absolute w-full pt-16 z-0 md:h-[600px]">
            <?php
            // Output the image
            echo '<img src="data:image/jpeg;base64,'.getFilmImage($pdo, 'dune').'" class="block w-full h-[240px] rounded object-cover md:rounded-none md:h-[400px]" alt="dune" />';
            ?>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#191919] h-[305px] md:h-[465px]"></div>
        </div>

        <div class="flex flex-row items-end w-full md:px-8">

            <div class="hidden md:block px-4 z-10">
                <div class="w-48 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <?php
                // Output the image
                echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'dune').'" class="h-full w-full object-cover" alt="dune" />';
                ?>
                </div>
            </div>

            <div class="grow px-4 pt-72 relative z-1 -tracking-tight md:max-w-[800px]">
                <div class="my-4">
                    <h1 class="text-[#F5EDF0] font-bold text-xl uppercase md:text-2xl"><?php echo getFilmTitle($pdo, 'dune')?></h1>
                    <p class="text-[#F5EDF0] md:text-xl">
                        <?php echo getFilmDate($pdo, 'dune') . ', ' . getFilmDuree($pdo, 'dune') . ' - '?>
                        <span class="text-[#406E8E] font-bold"><?php echo getFilmGenre($pdo, 'dune') ?></span>
                    </p>
                    <p class="text-[#F5EDF0] md:text-xl">
                      <?php echo getFilmSynopsis($pdo, 'dune') ?>
                    </p>
                </div>

                <div class="my-4 md:text-xl">
                    <p class="text-[#F5EDF0] font-semibold">
                      Rélisateur : <span class="text-[#406E8E] font-bold">
                        <?php echo getRealFname($pdo, 'Villeneuve') . ' ' . getRealLname($pdo, 'Villeneuve') ?>
                      </span>
                    </p>
                    <p class="text-[#F5EDF0] font-semibold">
                      Acteurs : <span class="text-[#406E8E] font-bold">
                      <?php
                      // Call the getAllActors function to retrieve all actors
                      $actors = getActorsFromMovie($pdo, 5);

                      // Loop through the array and display each actor's name and first name
                      foreach ($actors as $actor) {
                        echo '<span class="text-[#406E8E] font-bold">' . $actor['prenom_acteur'] . ' ' . $actor['nom_acteur'] . ', </span>';
                      }
                      ?>

                      </span>
                    </p>
                </div>

                <a class="text-center bg-[#406E8E]/50 rounded block px-7 py-4 text-xl font-medium uppercase text-[#F5EDF0] hover:isolate hover:border-transparent hover:bg-[#406E8E]/20">
                <i class="bi bi-play text-2xl mr-2"></i>Bande-annonce
                </a>

            </div> 
            
        </div>

    </div>


    <div class="md:px-8 py-8 flex flex-col">

        <h1 class="px-4 text-[#FFD447] font-bold text-xl uppercase md:text-3xl">Où regarder <?php echo getFilmTitle($pdo, 'dune')?></h1>

        <div class="md:flex">
          <div class="flex flex-col text-xl px-4">
            <h2 class="text-[#F5EDF0] font-bold text-sm uppercase md:text-base mt-2">Services d'abonnements</h2>
            <a class="flex items-center bg-[#406E8E] rounded w-fit p-2 my-2" href="https://www.primevideo.com/detail/Inception/0HBUB1JMA08CJWY8V76RCRPTSP?_encoding=UTF8&language=fr_FR">
              <i class="fa-brands fa-amazon text-[#F5EDF0] my-2 rounded"></i>
              <span class="text-[#F5EDF0] uppercase text-xs font-bold px-4">Amazon prime</span>
            </a>
          </div> 

          <div class="flex flex-col text-xl px-4">
            <h2 class="text-[#F5EDF0] font-bold text-sm uppercase md:text-base mt-2">Services de location/achat</h2>
            <a class="flex items-center bg-[#406E8E] rounded w-fit p-2 my-2" href="https://play.google.com/store/movies/details/Inception?id=E1iqGiX0lSg">
            <i class="fa-brands fa-google-play text-[#F5EDF0] my-2 rounded"></i>
              <span class="text-[#F5EDF0] uppercase text-xs font-bold px-4">Google Play</span>
            </a>
          </div>
        </div>
         

        
    </div>

    <!-- AFFICHE -->
<div class="flex flex-col md:px-8">
<h1
        class="pl-4 flex pb-3 font-bold text-3xl text-[#FFD447] uppercase"
      >
        D'autres ont aimé
      </h1>
      <div
        class="flex overflow-x-scroll pb-10 hide-scroll-bar"
      >
        <div
          class="flex flex-nowrap"
        >
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block pl-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
          <div class="inline-block px-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            ><img src="../../img/inception_poster" class="h-full" alt=""></div>
          </div>
        </div>
      </div>
</div>
<style>
.hide-scroll-bar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
  display: none;
}
</style>
<!-- AFFICHE -->

<!-- INCLUDE FOOTER (4) -->
<?php include("../../include/footer.php") 
?> 
    
</body>
</html>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://kit.fontawesome.com/77aa9e7f49.js" crossorigin="anonymous"></script>