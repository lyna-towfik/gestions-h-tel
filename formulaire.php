<?php
session_start(); // Démarre la session

$_SERVER = "localhost";
$utilisateur = "root";
$motDePasse = "";
$base = "hootelss";

//connexion
$connection = mysqli_connect($_SERVER, $utilisateur, $motDePasse, $base);

//recuperation des donneés 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$addresse_email = $_POST['addresse_email'];
$password = $_POST['password'];

//CHIFFREMENT DE MOT DE PASSE
$motdepassecrypter = password_hash($password, PASSWORD_DEFAULT);

//Creation du requete
$resultat = "INSERT INTO clients(`nom`, `prenom`,`numero`,`addresse_email`, `password`) VALUES('$nom','$prenom','$numero','$addresse_email','$motdepassecrypter')";

if ($connection->query($resultat) == TRUE) {
    $_SESSION['message'] = 'Les données ont été enregistrées avec succès.';
    header("location: reservationn.html");
} else {
    $_SESSION['message'] = 'Erreur lors de l\'enregistrement des données.';
    echo "<br/><br/>Les données ne sont pas bien enregistrées!<br>";
}

$connection->close();
?>
