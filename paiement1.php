
<?php
    session_start();
    $serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "hotels";

// Connexion à la base de données
$co = new mysqli($serveur, $utilisateur, $motdepasse, $base);

 $numero_telephone= $_POST["numero_telephone"];
 $numero_dmoney= $_POST["numero_dmoney"];
 
    $typeChambre = $_SESSION['typeChambre']; 
    $nom_hotel=$_SESSION['nom_hotel']; 
    $date_dbreservation = $_SESSION['date_dbreservation'];  
    $date_fnreservation = $_SESSION['date_fnreservation']; 

//pour obtenir la difference entre les 2 dates
$diff = $date_fnreservation ->diff(  $date_dbreservation);

//determination du prix
$prixpayer=$montant*$diff;


    // Requête d'insertion dans la table paiement_dmoney
    $requete_insertion = "INSERT INTO paiement_dmoney (`numero_telephone`,`numero_dmoney`,`montant`)
                        VALUES ('$numero_telephone','$numero_dmoney',`$prixpayer`)";
if($nom_hotel="djibouti palace kempenski" && $type_Chambre="chambre luxe"){
    $montant=120000;
}
else{
    echo"erreur";
}
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
    

