<!-- SLIDER -->
<div class="px-4 pt-16 md:px-0">
    <div
    id="carouselExampleIndicators"
    class="relative h-96"
    data-te-carousel-init
    data-te-carousel-slide>
    <div
        class="absolute right-0 left-0 bottom-2 z-[2] flex list-none justify-start p-0 md:left-[700px] md:justify-end md:pr-12"
        data-te-carousel-indicators>
        <button
        type="button"
        data-te-target="#carouselExampleIndicators"
        data-te-slide-to="0"
        data-te-carousel-active
        class="mx-[3px] box-content h-[8px] w-[8px] flex-initial cursor-pointer border-0 rounded-full border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-current="true"
        aria-label="Slide 1"></button>
        <button
        type="button"
        data-te-target="#carouselExampleIndicators"
        data-te-slide-to="1"
        class="mx-[3px] box-content h-[8px] w-[8px] flex-initial cursor-pointer border-0 rounded-full border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide 2"></button>
        <button
        type="button"
        data-te-target="#carouselExampleIndicators"
        data-te-slide-to="2"
        class="mx-[3px] box-content h-[8px] w-[8px] flex-initial cursor-pointer border-0 rounded-full border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide 3"></button>
        <button
        type="button"
        data-te-target="#carouselExampleIndicators"
        data-te-slide-to="3"
        class="mx-[3px] box-content h-[8px] w-[8px] flex-initial cursor-pointer border-0 rounded-full border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide 4"></button>
    </div>
    <div
        class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">

        <div
        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item
        data-te-carousel-active>
            <a href="./content/movies/avatar.php">
                <?php
                // Output the image
                echo '<img src="data:image/jpeg;base64,'.getFilmImage($pdo, 'avatar').'" class="block w-full h-[240px] rounded object-cover md:rounded-none md:h-[400px]" alt="Avatar" />';
                ?>

                <div class="py-2 text-[#F5EDF0] md:hidden">
                    <h2 class="text-lg font-bold"><?php echo getFilmTitle($pdo, 'avatar')?></h2>
                    <p class="text-sm"><?php echo getFilmDate($pdo, 'avatar') . ' - ' . getFilmGenre($pdo, 'avatar') ?></p>
                </div>
            </a>

            <div class="hidden absolute inset-0 bg-gradient-to-b from-transparent to-[#191919] md:block"></div>
        </div>


        <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
            <a href="./content/movies/starwars.php">
                <?php
                // Output the image
                echo '<img src="data:image/jpeg;base64,'.getFilmImage($pdo, 'starwars').'" class="block w-full h-[240px] rounded object-cover md:rounded-none md:h-[400px]" alt="Avatar" />';
                ?>

                <div class="py-2 text-[#F5EDF0] md:hidden">
                    <h2 class="text-lg font-bold"><?php echo getFilmTitle($pdo, 'starwars')?></h2>
                    <p class="text-sm"><?php echo getFilmDate($pdo, 'starwars') . ' - ' . getFilmGenre($pdo, 'avatar') ?></p>
                </div>
            </a>
            <div class="hidden absolute inset-0 bg-gradient-to-b from-transparent to-[#191919] md:block"></div>
        </div>


        <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
            <a href="./content/movies/interstellar.php">
                <?php
                // Output the image
                echo '<img src="data:image/jpeg;base64,'.getFilmImage($pdo, 'interstellar').'" class="block w-full h-[240px] rounded object-cover md:rounded-none md:h-[400px]" alt="Avatar" />';
                ?>

                <div class="py-2 text-[#F5EDF0] md:hidden">
                    <h2 class="text-lg font-bold"><?php echo getFilmTitle($pdo, 'interstellar')?></h2>
                    <p class="text-sm"><?php echo getFilmDate($pdo, 'interstellar') . ' - ' . getFilmGenre($pdo, 'avatar') ?></p>
                </div>
            </a>

            <div class="hidden absolute inset-0 bg-gradient-to-b from-transparent to-[#191919] md:block"></div>
        </div>


        <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
            <a href="./content/movies/dune.php">
                <?php
                // Output the image
                echo '<img src="data:image/jpeg;base64,'.getFilmImage($pdo, 'dune').'" class="block w-full h-[240px] rounded object-cover md:rounded-none md:h-[400px]" alt="Avatar" />';
                ?>

                <div class="py-2 text-[#F5EDF0] md:hidden">
                    <h2 class="text-lg font-bold"><?php echo getFilmTitle($pdo, 'dune')?></h2>
                    <p class="text-sm"><?php echo getFilmDate($pdo, 'dune') . ' - ' . getFilmGenre($pdo, 'avatar') ?></p>
                </div>
            </a>

            <div class="hidden absolute inset-0 bg-gradient-to-b from-transparent to-[#191919] md:block"></div>
        </div>


    </div>
    </div>
</div>
<!-- SLIDER -->