<!-- AFFICHE -->
<div class="flex flex-col">
  <div class="mx-4 mb-4 md:mx-12">
    <h1 class="flex pt-9 pb-3 font-bold text-3xl text-[#FFD447] uppercase">
      Films à l'affiche
    </h1>
    <span class="text-[#F5EDF0]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis nisl dictum, tincidunt mauris a, tempor ex. Cras dignissim luctus sem et consectetur.</span>
  </div>

      <div
        class="flex overflow-x-scroll pb-10 hide-scroll-bar"
      >
        <div
          class="flex flex-nowrap md:ml-8"
        >
          <div class="inline-block pl-4">
            <a href="./content/movies/avatar.php">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="./content/movies/starwars.php">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'starwars').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="./content/movies/interstellar.php">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'interstellar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="./content/movies/dune.php">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'dune').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block pl-4">
            <a href="">
              <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
              >
              <?php
              // Output the image
              echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
              ?>
              </div>
            </a>
          </div>
          
          <div class="inline-block px-4">
            <div
              class="w-32 h-48 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            >
            <?php
            // Output the image
            echo '<img src="data:image/jpeg;base64,'.getFilmPoster($pdo, 'avatar').'" class="h-full" alt="Avatar" />';
            ?>
            </div>
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