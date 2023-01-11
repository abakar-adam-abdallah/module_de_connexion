<?php

// Dans cette page on fait deux codes différents qui nous serviront à
// nous connecter à notre base de données. Il suffira d'utiliser un include 
// pour utiliser ce code dans le reste des fichiers.

// Connexion à la base de données (pas pour Plesk)

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moduledeconnexion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Votre connexion ne pas prise " . $conn->connect_error);
}

?>