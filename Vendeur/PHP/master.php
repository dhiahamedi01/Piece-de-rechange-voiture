<?php
$nomserveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$bd="voiture";
$conn = new mysqli($nomserveur, $utilisateur,$motdepasse,$bd);
if ($conn->connect_error) {
  die("Echec de connexion: " . $conn->connect_error);
}
?>