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
        if (isset($_SESSION['usermail'])) {
            // USER ALREADY LOGGED IN
            echo "Vous êtes déjà connecté en tant que ".$_SESSION['usermail'];
        } else if (isset($_POST['email'])) {
            // USER NOT LOGGED IN - PROCESS LOGIN FORM
            // RECUPERER ELEMENTS FORM
            $usermail = htmlspecialchars($_POST['email']);
            $userpassword = htmlspecialchars($_POST['password']);

            // RETRIEVE PASSWORD FROM DATABASE
            $stmt = $pdo->prepare("SELECT * FROM user WHERE email_user = ?");
            $stmt->execute([$usermail]);

            $user = $stmt->fetch();

            if(!$user) {
                // SI EMAIL INEXISTANT = MESSAGE D'ERREUR
                echo "L'adresse mail $usermail n'existe pas.";
            } else {
                // CHECK PASSWORD USING password_verify()
                if(password_verify($userpassword, $user['password_user'])) {
                    // START SESSION 
                    $_SESSION['usermail'] = $user['email_user'];
                    $_SESSION['username'] = $user['nom_user'];
                    $_SESSION['userID'] = $user['id_user'];
                    $_SESSION['user_role'] = $user['id_role'];

                    // REDIRECT TO ACCOUNT PAGE
                    echo "Connexion réussie, $usermail";
                } else {
                    // SI MOT DE PASSE INCORRECT = MESSAGE D'ERREUR
                    echo "Le mot de passe est incorrect.";
                }
            }
        } else {
            // USER NOT LOGGED IN - NO FORM SUBMITTED YET
            echo "Vous n'êtes pas connecté.";
        }
        ?>

        <br><a href="logout.php">Se deconnecter</a><br>
        <a href="/cinemet/build/index.php">Retourner à l'accueil</a>
        
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://kit.fontawesome.com/77aa9e7f49.js" crossorigin="anonymous"></script>


</body>
</html>