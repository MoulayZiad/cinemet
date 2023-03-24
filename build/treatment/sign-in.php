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
    ?>
    
    <div class="treatment-margin">
        <?php

        // RECUPERER ELEMENTS FORM
        $username = htmlspecialchars($_POST['name']);
        $usermail = htmlspecialchars($_POST['email']);
        $userpassword = htmlspecialchars($_POST['password']);
        $userverifypassword = htmlspecialchars($_POST['password_confirmation']);

        if ($userpassword !== $userverifypassword) {
            // add a meta tag to redirect to the homepage after 3 seconds
            echo '<meta http-equiv="refresh" content="1;url=/cinemet/build/index.php">';
            // display an alert box with the "Login failed" message
            echo '<script>alert("Les mots de passe ne correspondent pas. Vous allez être redirigé vers la page d\'accueil.");</script>';
        } else {

        //  COUNT = NOMBRE DE ACCOUNTS DANS LA TABLE "ACCOUNT" AVEC L'EMAIL ENTRÉ
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email_user = ?");
        $stmt->execute([$usermail]);

        $count = $stmt->fetch();

        if($count) {
            // SI EMAIL EXISTANT = MESSAGE D'ERREUR
            echo "L'adresse mail $usermail est déjà utilisée. <br> Veuillez en choisir une autre";
        } else {

            // SI EMAIL NON EXISTANT = INSERT TO DATABASE
            $hashed_password = password_hash($userpassword, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO user (nom_user, email_user, password_user, id_role) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $usermail, $hashed_password, 1]);

            echo "$usermail, votre compte a bien été crée.";
        }            
        }
        ?>
        <br>
        <a href="/cinemet/build/index.php">Retourner à l'accueil</a>
    </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://kit.fontawesome.com/77aa9e7f49.js" crossorigin="anonymous"></script>


</body>
</html>