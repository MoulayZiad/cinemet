<?php
session_start();
session_destroy();
header("Location:/cinemet/build/index.php");
?>