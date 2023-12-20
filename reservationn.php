<?php
session_start(); // Démarre la session

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hootelss";
$con = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// Vérification de l'existence des données POST
if (isset($_POST["date_dbreservation"], $_POST["date_fnreservation"], $_POST["nbres_personnes"])) {
    $date_dbreservation = $_POST["date_dbreservation"];
    $date_fnreservation = $_POST["date_fnreservation"];
    $nbres_personnes = $_POST["nbres_personnes"];

    // Échappement pour prévenir les injections SQL
    $date_dbreservation = mysqli_real_escape_string($con, $date_dbreservation);
    $date_fnreservation = mysqli_real_escape_string($con, $date_fnreservation);
    $nbres_personnes = mysqli_real_escape_string($con, $nbres_personnes);

    // Récupération de l'ID client pour l'insertion
    $requetedernierid = "SELECT MAX(id_client) as dernierid FROM reservation";
    $resultatdernierid = $con->query($requetedernierid);

    if ($resultatdernierid && $resultatdernierid->num_rows > 0) {
        $row = $resultatdernierid->fetch_assoc();
        $dernierid = $row['dernierid'];
        $nouveauid = $dernierid + 1;
    } else {
        $nouveauid = 1; // Si aucun ID client n'est trouvé, définir à 1
    }

    // Requête d'insertion avec la colonne id_chambre NULL
    $resultatt = "INSERT INTO `reservation` (`date_dbreservation`, `date_fnreservation`, `nbres_personnes`, `id_client`, `id_chambre`)
                  VALUES ('$date_dbreservation', '$date_fnreservation', '$nbres_personnes', '$nouveauid', NULL)";

    if ($con->query($resultatt) === TRUE) {
        $_SESSION['message'] = 'Les données ont été enregistrées avec succès.';
        header("location: paiment3.html");
    } else {
        $_SESSION['message'] = 'Erreur lors de l\'enregistrement des données : ' . mysqli_error($con);
        echo "Les données ne sont pas bien enregistrées! Erreur : " . mysqli_error($con);
    }
} else {
    echo "Certains champs requis ne sont pas définis.";
}

$con->close();
?>
