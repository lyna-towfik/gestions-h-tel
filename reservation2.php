<?php
$_SERVER = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hotels";
$con = mysqli_connect($_SERVER, $utilisateur, $motdepasse, $base);

$date_dbreservation = $_POST["date_dbreservation"];
$date_fnreservation = $_POST["date_fnreservation"];
$nbres_personnes = $_POST["nbres_personnes"];
// récupération du dernier id existant
$requetedernierid = "SELECT MAX(id_client) as dernierid FROM reservation";
$resultatdernierid = $con->query($requetedernierid);
if ($resultatdernierid->num_rows > 0) {
    $row = $resultatdernierid->fetch_assoc();
    $dernierid = $row['dernierid'];
    
//incrementer le dernier id client
$nouveauid = $dernierid + 1;

}

// Correction: Remove parentheses from $resultat
$resultat = "INSERT INTO reservation (`date_dbreservation`,`date_fnreservation`,`nbres_personnes`,`id_client`)
VALUES('$date_dbreservation','$date_fnreservation','$nbres_personnes','$nouveauid')";


if ($con->query($resultat) == TRUE) {
    header("location:paiement.html");
} else {
    echo "les données ne sont pas bien enregistrées!";
}

$con->close();
?>