<?php
$_SERVER="localhost";
$utilisateur="root";
$motDePasse="";
$base="gestion_hotel";
//connexion
$connection=new mysqli($_SERVER,$utilisateur,$motDePasse,$base);
//recuperation des donneés 

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numero=$_POST['numero'];
$addresse_email=$_POST['addresse_email'];
$password=$_POST['password'];

//recuperation du dernier id existant 
  $requetedernierid = "SELECT MAX(id_client) as dernierid FROM clients";
  $resultatdernierid = $connection->query( $requetedernierid);
if($resultatdernierid -> num_rows > 0){
    $row = $resultatdernierid -> fetch_assoc();
    $dernierid = $row['dernierid'];

//incrementer le nouveau idclient
$nouveauid = $dernierid + 1;

}
//Creation du requete
$resultatinsertion=("INSERT INTO clients(`id_client`,`nom`, `prenom`,`numero`,`addresse_email`, `password`) VALUES('$nouveauid','$nom','$prenom','$numero','$addresse_email','$password')");
  
if($connection->query($resultatinsertion )== TRUE){
header("location:reservationn.html");
 
 }
 else{
   echo"<br/><br/>les donneés ne sont pas bien enrigistrés!</br>";
  }

$connection->close();
?>
