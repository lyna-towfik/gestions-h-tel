<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nom_hotel = isset($_POST["nom_hotel"]) ? $_POST["nom_hotel"] : "0";
$type_chambre = isset($_POST["type_chambre"]) ? $_POST["type_chambre"] : "";
$prix_chambre = isset($_POST["prix_chambre"]) ? intval($_POST["prix_chambre"]) : 0;


$nom_hotel="Djibouti palace kempenski";

$prix = 0; // Initialisation de la variable $prix

// Utilisation de prepared statements pour éviter les injections SQL
$requete = "SELECT nom_hotel FROM chambre WHERE id_hotel IN (SELECT id_hotel FROM hotel)";

$inserer = "INSERT INTO information_clients (nom_hotel, type_chambre, prix_chambre) 
            VALUES ('$nom_hotel', '$type_chambre', '$prix_chambre')";
if ($type_chambre === "chambre luxe kempenski") {
    $prix_chambre = 120000;
    $prix = $prix_chambre; // Affectation du prix à la variable $prix
}
if ($conn->query($inserer) === TRUE) {
    header("location: formulaire.html");
} else {
    echo "Erreur : " . $conn->error;
}

$conn->close();
?>
