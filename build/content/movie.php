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
        </div>
        </div>
    </div>
    <!-- SLIDER --> 

</body>
</html>