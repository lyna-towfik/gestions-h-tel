<?php
session_start(); // Démarre la session

// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hootelss";

// Connexion à la base de données
$co = new mysqli($serveur, $utilisateur, $motdepasse, $base);

// Vérifier la connexions
if ($co->connect_error) {
    die("La connexion a échoué : " . $co->connect_error);
}

// Récupération des données du formulaire

$id_paiement= $_POST["id_paiement"];
$numero_carte= $_POST["numero_carte"];
$nom_carte= $_POST["nom_carte"];
$date_expiration= $_POST["date_expiration"];
$code_cv= $_POST["code_cv"];
$id_client= $_POST["id_client"];


    // Récupération de l'ID client pour l'insertion
    $requetedernierid = "SELECT MAX(id_client) as dernierid FROM paiement_dmoney";
    $resultatdernierid = $con->query($requetedernierid);

    if ($resultatdernierid && $resultatdernierid->num_rows > 0) {
        $row = $resultatdernierid->fetch_assoc();
        $dernierid = $row['dernierid'];
        $nouveauid = $dernierid + 1;
    } else {
        $nouveauid = 1; // Si aucun ID client n'est trouvé, définir à 1
    }

    // Requête d'insertion dans la table paiement_dmoney
    $requete_insertion = "INSERT INTO paiement_dmoney (`id_paiement`,`numero_carte`,`nom_carte`,`date_expiration`,`code_cv`,`id_client`)
                        VALUES ('$id_paiement','$numero_carte', '$$nom_carte','$date_expiration','$code_cv', '$nouveauid')";

    // Exécution de la requête
    if ($co->query($requete_insertion) === TRUE) {
        echo "Succès";
    } else {
        echo "Erreur: " . $requete_insertion . "<br>" . $co->error;
    }
 else {
    echo "Erreur lors de l'insertion du nouveau client : " . $co->error;
}

// Fermer la connexion
$co->close();
?>