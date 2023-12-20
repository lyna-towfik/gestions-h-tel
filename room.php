<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reservation et Paiement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">Reservation<span>d'hotel</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Acceuil</a></li>
	<li class="nav-item active"><a href="rooms.html" class="nav-link">Department Chambre</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	<?php
    
    $hote = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "hootelss";
    $connexion = mysqli_connect($hote, $utilisateur, $mot_de_passe, $base_de_donnees);
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
   
    $num=$_POST['numer'];
	
    $requete = "SELECT * FROM hotels where id_hotel=$num";
    $resultat = mysqli_query($connexion, $requete);
    while ($ligne = mysqli_fetch_row($resultat)) {
		echo"<section class='hero-wrap hero-wrap-2' style='background-image: url(pic67.jpg)' data-stellar-background-ratio='0.5'>
		<div class='overlay'></div>
		<div class='container'>
		  <div class='row no-gutters slider-text align-items-center justify-content-center'>
			<div class='col-md-9 ftco-animate text-center'>
			  <h1 class='mb-0 bread'>$ligne[2]</h1>
			</div>
		  </div>
		</div>
	  </section>";
    $requete = "SELECT * FROM chambres where id_hotel=$ligne[0]";
    $resultat = mysqli_query($connexion, $requete);
    while ($lig = mysqli_fetch_row($resultat)) {
        echo "
    <section class='ftco-section bg-light ftco-no-pt ftco-no-pb'>
			<div class='container-fluid px-md-0'>
				<div class='row no-gutters'>
    			<div class='col-lg-6'>
    				<div class='room-wrap d-md-flex'>
    					<a href='#' class='img' style='background-image: url($lig[1]);'></a>
    					<div class='half left-arrow d-flex align-items-center'>
    						<div class='text p-4 p-xl-5 text-center'>
    							
	    						<h3 class='mb-3'><a href='rooms.html'>$lig[0]</a></h3>
	    						<ul class='list-accomodation'>
	    							
	    							
	    							<li><span>Type:</span> $lig[2]</li>
	    							<li><span>Prix:</span> $lig[3]</li>
	    						</ul>
								
				
				<form action='formulaire.html' method='post'>
				<input type='hidden' name='numer' value='$lig[0]'  >
				<button type='submit' class='bouton'>Reserver</button> </form>  
			

	    						
    						</div>
    					</div>
    				</div>
    			</div>
	";
        
        
    }
}

    mysqli_close($connexion);

    ?>
   
    		
    <footer class="footer">
			
				</div>
			</div>
			<div class="w-100 mt-5 border-top py-5">
				<div class="container">
					<div class="row">
	          <div class="col-md-6 col-lg-8">

	            <p class="copyright mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	          
	        </div>
				</div>
			</div>
			
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>