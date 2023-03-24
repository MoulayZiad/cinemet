<?php session_start(); ?>
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
<body class="bg-white w-full h-full m-0 p-0">
    
    <?php
    require('../config/pdo.php');

    var_dump( $_SESSION['usermail']);
    var_dump( $_SESSION['username']);
    var_dump( $_SESSION['userID']);
    ?>

    <a href="logout.php">Se deconnecter</a><br>
    <a href="/cinemet/build/index.php">Retourner à l'accueil</a><br>
    <a href="../content/crud.php">Interface administrateur</a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://kit.fontawesome.com/77aa9e7f49.js" crossorigin="anonymous"></script>


</body>
</html>