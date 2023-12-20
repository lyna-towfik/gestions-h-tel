<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reservation paiment</title>
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
	    	<a class="navbar-brand" href="index.html">Reservation<span>d'hotel</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Acceuil</a></li>
	        	<li class="nav-item"><a href="rooms.html" class="nav-link">Department Chambre</a></li>
				<li class="nav-item"><a href="../Propriatire/pages/samples/login.php" class="nav-link">Proprietaire</a></li>
             
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('pic7.jpg')" data-stellar-background-ratio="0.5";>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-7 ftco-animate">
				<marquee behavior="" direction="up"><h2 class="subheading">Bienvenue,vous êtes chez vous!</h2></marquee>
				<h1 class="mb-4"><span>Séjournez avec style,</span> soyez traité avec soins!</h1>
 <a href="#" class="btn btn-white">Contactez-nous</a></p>
			</div>
        </div>
      </div>
    </div>

   <!--   <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form action="#" class="appointment-form">
							<h3 class="mb-3">Book your apartment</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Full Name">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date-check-in" placeholder="Check-In">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date-check-out" placeholder="Check-Out">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Adults</option>
	                        <option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Children</option>
	                        <option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone number">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-ios-clock"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Book Appartment Now" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
							</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>-->
	<?php
    
    $hote = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "hootelss";
    $connexion = mysqli_connect($hote, $utilisateur, $mot_de_passe, $base_de_donnees);
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
   
    
    $requete = "SELECT * FROM hotels";
    $resultat = mysqli_query($connexion, $requete);
    while ($ligne = mysqli_fetch_row($resultat)) {
        echo "
		<section class='ftco-section ftco-services'>
    	<div class='container'>
    		<div class='row'>
          <div class='col-md-4 d-flex services align-self-stretch px-4 ftco-animate'>
            <div class='d-block services-wrap text-center'>
              <div class='img' style='background-image: url($ligne[1]);'></div>
              <div class='media-body py-4 px-3'>
                <h3 class='heading'>$ligne[2]</h3>
                <p>$ligne[5]</p>
				<form action='room.php' method='post'>
				<input type='hidden' name='numer' value='$ligne[0]'  >
				<button type='submit' class='bouton'>Voir</button> </form>  

				
              </div>
            </div>      
          </div>
		
	
		

            </div>      
          </div>
        </div>
    	</div>
	
    </section>
	";
        
        
    }

    mysqli_close($connexion);

    ?>
   

   <!--  
    <section class="ftco-section bg-light">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2> Chambres Department </h2>
          </div>
        </div>
				<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(pic23.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
								<ul class="list-accomodation">
	    							<li><span>Propritaire:</span>Kemps</li>
	    							<li><span>Hotel:</span> Djibouti Palace Kempenski</li>
	    						</ul>
								<h3 class="mb-3"><a href="rooms.html"> Chambre Suite</a></h3>
	    						<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Personnes</li>
	    							<li><span>Vue:</span>Vue de mer</li>
	    							<li><span>Lit:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="rooms.html" class="btn-custom px-3 py-2">Voir le chambres en detail <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(pic14.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<ul class="list-accomodation">
	    							<li><span>Propritaire:</span>Sherat</li>
	    							<li><span>Hotel:</span> Hotel Sheraton de Djibouti</li>
	    						</ul>
								<h3 class="mb-3"><a href="rooms2.html"> Chambre Suite</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Vue:</span> vue de la mer</li>
	    							<li><span>Lit:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="rooms2.html" class="btn-custom px-3 py-2">Voir le chambres en detail <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div><div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(pic55.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<ul class="list-accomodation">
	    							<li><span>Propritaire:</span>Auber</li>
	    							<li><span>Hotel:</span> Auberge Avenue 13</li>
	    						</ul>
								<h3 class="mb-3"><a href="rooms3.html"> Chambre Suite </a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 2 Personnes</li>
	    							
	    							<li><span>Lit:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="rooms3.html" class="btn-custom px-3 py-2">Voir le chambres en detail <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			</div>

    		</div>
			</div>



		</section>-->


		<footer class="footer">
			<div class="container">
			   <div class="row">
				 <div class="col-md-6 col-lg-8">
				   <p class="copyright mb-0">
					 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
				   </p>
				 </div>
				 <div class="col-md-6 col-lg-4">
				   <ul class="social-icon d-flex justify-content-between">
					 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
					 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
				   </ul>
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