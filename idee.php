<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hotelss";

// Connexion à la base de données
$co = new mysqli($serveur, $utilisateur, $motdepasse, $base);

// Vérifier la connexions
if ($co->connect_error) {
    die("La connexion a échoué : " . $co->connect_error);
}

// Récupération des données du formulaire

$numero_telephone= $_POST["numero_telephone"];
$numero_dmoney= $_POST["numero_dmoney"];





// récupération du dernier date de reservation debut saisis
$requetedernierdate = "SELECT MAX(date_dbreservation ) as date_dbreservation FROM reservation";
$resultatdernierdate = $co->query($requetedernierdate); // Fix: Change $con to $co here
if ($resultatdernierdate->num_rows > 0) {
    $row = $resultatdernierdate->fetch_assoc();
    $dernierdatereservationdebut = $row['dernierdatereservationdebut'];

$DATEDEBUT =  $dernierdatereservationdebut+ 0;



// récupération du dernier date de reservation fin saisis
$requetedernierdatefn = "SELECT MAX(date_fnreservation) as date_fnreservation  FROM reservation";
$resultatdernierdatefn = $co->query($requetedernierdatefn); // Fix: Change $con to $co here
if ($resultatdernierdatefn->num_rows > 0) {
    $row = $resultatdernierdatefn->fetch_assoc();
    $dernierdatereservationfn = $row['dernierdatereservationfn'];
             
$DATEFIN =  $dernierdatereservationfn+ 0;

//pour obtenir la difference entre les 2 dates
$diff =  $DATEFIN ->diff( $DATEDEBUT);

//determination du prix
$prixpayer=$montant*$diff;


// récupération du dernier id existant
$requetedernierid = "SELECT MAX(id_client) as dernierid FROM paiement_dmoney";
$resultatdernierid = $co->query($requetedernierid); // Fix: Change $con to $co here
if ($resultatdernierid->num_rows > 0) {
    $row = $resultatdernierid->fetch_assoc();
    $dernierid = $row['dernierid'];
        
//incrementer le dernier id client
$nouveauid = $dernierid + 1;

    // Requête d'insertion dans la table paiement_dmoney
    $requete_insertion = "INSERT INTO paiement_dmoney (`numero_telephone`,`numero_dmoney`,`montant`, `id_client`)
                        VALUES ('$numero_telephone','$numero_dmoney',`$prixpayer`, '$nouveauid')";

    // Exécution de la requête
    if ($co->query($requete_insertion) === TRUE) {
        echo "Succès";
    } else {
        echo "Erreur: " . $requete_insertion . "<br>" . $co->error;
    }
} else {
    echo "Erreur lors de l'insertion du nouveau client : " . $co->error;
}}}
// Fermer la connexion
$co->close();
?>