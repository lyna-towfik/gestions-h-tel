<?php
session_start();
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hotels";

// Connexion à la base de données
$co = new mysqli($serveur, $utilisateur, $motdepasse, $base);

$numero_telephone = $_POST["numero_telephone"];
$numero_dmoney = $_POST["numero_dmoney"];

$type_chambre = $_SESSION['type_chambre'];
$nom_hotel = $_SESSION['nom_hotel'];
$date_dbreservation = $_SESSION['date_dbreservation'];
$date_fnreservation = $_SESSION['date_fnreservation'];

// Pour obtenir la différence entre les 2 dates
$date_db = new DateTime($date_dbreservation);
$date_fn = new DateTime($date_fnreservation);
$diff = $date_fn->diff($date_db);
$diffDays = $diff->days; // Obtention du nombre de jours de différence

// Initialisation de $montant et calcul du prix à payer
$montant = 0;
if ($nom_hotel === "djibouti palace kempenski" && $type_chambre === "chambre luxe") {
    $montant = 120000;
    $prixpayer = $montant * $diffDays;
} else {
    echo "Erreur : Chambre ou hôtel non reconnu.";
}

// Requête d'insertion dans la table paiement_dmoney
$requete_insertion = "INSERT INTO paiement_dmoney (`numero_telephone`, `numero_dmoney`, `montant`)
                        VALUES ('$numero_telephone', '$numero_dmoney', '$prixpayer')";

// Exécution de la requête
if ($montant > 0) {
    if ($co->query($requete_insertion) === TRUE) {
        echo "Succès";
    } else {
        echo "Erreur : " . $requete_insertion . "<br>" . $co->error;
    }
} else {
    echo "Erreur lors de l'insertion du nouveau client : chambre ou hôtel non reconnu.";
}

// Fermer la connexion
$co->close();
?>