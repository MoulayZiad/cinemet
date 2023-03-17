<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body class="bg-[#191919]">

    <!-- INCLUDE NAV (0) -->
    <?php include("../include/nav.php") 
    ?> 

<!-- SLIDER -->
<div class="pt-16">
    <div
    id="carouselExampleIndicators"
    class="relative"
    data-te-carousel-init
    data-te-carousel-slide>
    <div
        class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        <div
        class="h-[240px] relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item
        data-te-carousel-active>
        <img
            src="../img/inception.jpg"
            class="block w-full object-cover"
            alt="Wild Landscape" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#191919]"></div>
        </div>
        <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
        <img
            src="../img/avatar.jpg"
            class="block w-full h-[240px] object-cover"
            alt="Camera" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#191919]"></div>
        </div>
        <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-te-carousel-item>
        <img
            src="../img/interstellar.jpg"
            class="block w-full h-[240px] object-cover"
            alt="Exotic Fruits" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#191919]"></div>
        </div>
    </div>
    </div>
</div>
<!-- SLIDER -->

<!-- PAGINATION -->
<div class="flex flex-col px-4 pb-8">
          <ul
    class="mb-4 flex list-none flex-row justify-between border-b-0 pl-0 md:flex-row"
    id="tabs-tab3"
    role="tablist"
    data-te-nav-ref>
    <li role="presentation">
      <a
        href="#tabs-home3"
        class="my-2 bg-[#406E8E]/50 rounded block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-[#F5EDF0] hover:isolate hover:border-transparent hover:bg-[#406E8E]/20 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
        id="tabs-home-tab3"
        data-te-toggle="pill"
        data-te-target="#tabs-home3"
        data-te-nav-active
        role="tab"
        aria-controls="tabs-home3"
        aria-selected="true"
        >Tous</a
      >
    </li>
    <li role="presentation">
      <a
        href="#tabs-profile3"
        class="focus:border-transparen my-2 bg-[#406E8E]/50 rounded block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-[#F5EDF0] hover:isolate hover:border-transparent hover:bg-[#406E8E]/20 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
        id="tabs-profile-tab3"
        data-te-toggle="pill"
        data-te-target="#tabs-profile3"
        role="tab"
        aria-controls="tabs-profile3"
        aria-selected="false"
        >Films</a
      >
    </li>
    <li role="presentation">
      <a
        href="#tabs-messages3"
        class="focus:border-transparen my-2 bg-[#406E8E]/50 rounded block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-medium uppercase leading-tight text-[#F5EDF0] hover:isolate hover:border-transparent hover:bg-[#406E8E]/20 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
        id="tabs-messages-tab3"
        data-te-toggle="pill"
        data-te-target="#tabs-messages3"
        role="tab"
        aria-controls="tabs-messages3"
        aria-selected="false"
        >Séries</a
      >
    </li>
  </ul>

  <div>
    <div
      class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
      id="tabs-home3"
      role="tabpanel"
      data-te-tab-active
      aria-labelledby="tabs-home-tab3">
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
        </div>
      </a>
    </div>
    <div
      class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
      id="tabs-profile3"
      role="tabpanel"
      aria-labelledby="tabs-profile-tab3">
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
        </div>
      </a>
    </div>
    <div
      class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
      id="tabs-messages3"
      role="tabpanel"
      aria-labelledby="tabs-profile-tab3">
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
          <div class="flex-shrink-0 w-full md:w-1/3">
            <a href="../content/movie.php">
                <div class="flex">
                <img src="../img/inception_poster" alt="Card image" class="w-1/3 h-auto rounded-md">
                <div class="px-4 py-2 text-[#F5EDF0]">
                    <h2 class="text-lg font-bold">Inception</h2>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eros nisl, volutpat vel imperdiet tincidunt</p>
                </div>
                </div>
            </a> 
          </div>
        </div>
      </a>
  </div>
</div> 
</div>

<script>
    window.addEventListener("load", function(event) {
  document.querySelector('[data-dropdown-toggle="dropdown"]').click();
});
</script>
<!-- PAGINATION -->

<!-- INCLUDE FOOTER (4) -->
<?php include("../include/footer.php") 
?> 

</body>
</html>