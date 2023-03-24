<?php

    $host = '127.0.0.1';
    $db   = 'cinemet';
    $user = 'root';
    $pass = '';
    $port = "3306";
    $charset = 'utf8mb4';
    
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

// PHP ESSAIE LES INSTRUCTIONS DANS LE BLOC TRY
try {
    $pdo = new \PDO($dsn, $user, $pass, $options);
}

// CATCH = SI ERREUR
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if($pdo) {
    echo '<span class="text-blue-500">CONNEXION AU SERVEUR RÉUSSIE</span>';
}
else {
    echo "CONNEXION AU SERVEUR ÉCHOUÉE";
}
?>