<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/kuvaa_icon.png" type="image/png">
        <title>Kuvaago - Annonces concernant le trajet Douala</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Loading custom CSS -->
    	<link href="css/site.css" rel="stylesheet">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between"  style="background-color:whitesmoke;border-bottom:2px solid #e5e5e5;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand d-none d-sm-inline-block logo_h" href="index.php">
                    	<img src="images/kuvaa_header.png" width="140" alt="logo kuvaago">
                    </a>

					<div class="form-inline">
						<!-- Select language button -->
						<div class="btn dropdown mr-1">
							<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="images/flag_france.png" alt="flag france" />
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a href="#" style="text-decoration:none;">
								  <img src="images/flag_usa_uk.jpg" class="ml-2" style="padding-top:10px;padding-bottom:10px;" alt="flag usa uk" /> English
								</a>
							</div>
						</div>

						<!-- New account button -->
						<a href="#" class="btn btn-info border-dark d-none mr-1 d-sm-inline-block flat-control">
							<i class="lnr lnr-user"></i>&nbsp;Créer un compte
						</a>

						<!-- Login button -->
						<div class="dropdown">
							<a class="btn btn-success flat-control dropdown-toggle d-none d-sm-inline-block" href="#" id="btnDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="lnr lnr-enter"></i>&nbsp;Se connecter
							</a>

							<!-- Signin dropdown form -->
							<form class="dropdown-menu dropdown-menu-right p-3" style="width:300px;">
								<div class="input-group w-100 mb-2">
								  <input type="email" class="form-control border-right-0 border" id="emailDropdown" placeholder="Email" />
								  <span class="input-group-append">
								      <a class="btn btn-light border-left-0 border" href="#">
								          <i class="lnr lnr-envelope"></i>
								      </a>
								  </span>
								</div>

								<div class="input-group w-100 mb-2">
								  <input type="password" class="form-control border-right-0 border" id="passwordDropdown" placeholder="Mot de passe" />
								  <span class="input-group-append">
								      <a class="btn btn-light border-left-0 border" href="#">
								          <i class="lnr lnr-lock"></i>
								      </a>
								  </span>
								</div>

								<div class="form-group mt-2 mb-2">
								  <input type="checkbox" class="form-check-input" id="rememDemo" style="position:relative;top:2px;">
								  <label class="form-check-label" for="rememDemo">
								      Se souvenir de moi
								  </label>
								</div>

								<div class="form-group mt-2 justify-content-between">
									<button type="submit" class="btn btn-success flat-control">
										<i class="lnr lnr-enter"></i> Connexion
									</button>
									<a href="#" class="btn-link mb-2" style="text-decoration:none;">Mot de passe oublié ?</a>
								</div>

								<div class="form-group mt-2 justify-content-between">
									<span>Toujours pas inscrit ? </span>
									<a href="#" class="" style="text-decoration:none;">Créer un compte</a>
								</div>

								<div class="form-group mt-5 justify-content-center">
									<a href="#" class="btn btn-info flat-control"><span class="fa fa-facebook-square"></span> Facebook &nbsp;</a>
								</div>
							</form>
						</div>
                    
	                    <button class="navbar-toggler d-block d-sm-none" type="button"  data-toggle="collapse" 
	                    	data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" style="position:absolute;left:90%;top:0.5%;">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
                    	

                </div>
                <!-- Collapse small media buttons -->
				<div class="collapse mt-2 text-center" id="navbarContent">
					<a href="#" class="btn btn-light border-dark mr-1 d-sm-none flat-control">
						<i class="lnr lnr-user"></i>&nbsp;Créer un compte
					</a>

					<a href="#" class="btn btn-success d-sm-none flat-control">
						<i class="lnr lnr-enter"></i>&nbsp;Se connecter
					</a>
				</div>
            </nav>
        </header>
        <!--================Header Area =================-->
        
        <!--================banner Area =================-->
        <section class="search_area d-flex text-center" style="margin-top:0px;">
        	<div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_content" style="margin:0 auto;">
                        	<input type="text" class="form-control flat-control mb-1" id="searchString" 
                            	placeholder="Entrez le trajet de votre colis.    Exemple : Douala - Paris" style="border-bottom:3px solid #e5e5e5;"/>

                            <div class="form-inline">
                                <input type="text" name="" value="Departure" class="form-control flat-control mr-1" style="width: 30%;">
                                <input type="text" name="" value="Arrival" class="form-control flat-control mr-1" style="width: 30%;">
                                <div class="row btn-group-toggle" data-toggle="buttons" style="margin-left: 0px;margin-right: 0px;width: 39%;">
                                    <div class="col-4 btn btn-info flat-control">
                                        <input type="radio" name="options" id="option2" autoComplete="off" /> <i class="lnr lnr-users"></i>
                                        <span class="mobile-hidden">&nbsp;Tous</span>
                                    </div>
                                    <div class="col-4 btn btn-info active flat-control">
                                        <input type="radio" name="options" id="option3" autoComplete="off" /> <i class="lnr lnr-user"></i>
                                        <span class="mobile-hidden">&nbsp;Spécialiste</span>
                                    </div>
                                    <div class="col-4 btn btn-info flat-control">
                                        <input type="radio" name="options" id="option4" autoComplete="off" /> <i class="lnr lnr-diamond"></i>
                                        <span class="mobile-hidden">&nbsp;Particulier</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================banner Area =================-->
        
        <!--================About Area =================-->
        <section class="about_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 border bg-info text-light">
                        <h6 style="margin-top: 5px;">Voyage numéro KUVAAGO0043 - Cyrille PENAYE</h6>
                        <ul style="line-height: 20px;">
                            <li>Départ : 08 mars 2019 à Garoua</li>
                            <li>Arrivée : 10 mars 2019 à Bruxelles</li>
                            <li>Type : Avion</li>
                            <li>Poids : 23 Kg</li>
                            <li>Tarif : 5$/Kg</li>
                            <li>Publié le : il y a 3 jours</li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-xs-12 border bg-info text-light">
                        Cool Raoul
                    </div>

                    <div class="col-md-6 col-xs-12 border">
                        Cool Raoul
                    </div>

                    <div class="col-md-6 col-xs-12 border">
                        Cool Raoul
                    </div>
                </div>
            </div>
        </section>
        <!--================About Area =================-->

        
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">A propos de Kuvaago</h6>
                            <p>Créée en 2014, Kuvaago est une plateforme révolutionnaire permettant l'envoi de colis entre particuliers 
                            àmoindre coût. Il rapproche les gens et les rapprochent de plus en plus chaque jour.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation</h6>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list_style">
                                        <li><a href="#">Comment ça marche ?</a></li>
                                        <li><a href="#">Conditions d'utilisation</a></li>
                                        <li><a href="#">Foire aux questions</a></li>
                                        <li><a href="#">Mentions légales</a></li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Recevez des alertes</h6>
                            <p>Souscrivez à notre newsletter pour être averti par mail à chaque fois qu'une annonce est effectuée sur le site.</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Adresse email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Contactez nous</h6>
                            <ul class="list_style">
                                <li>Email : contact@kuvaago.com</li>
                                <li>Phone : (+32)564276342</li>
                                <li>Adresse : Anvers, Belgique</li>
                            </ul>
                            <br>
                            <a href="#" class="btn btn_hover flat-control text-light">Poser une question</a>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> 
						Tous droits reservés | Conçu et développé avec <i class="fa fa-heart-o" aria-hidden="true"></i> par <a href="https://mboageek.com" target="_blank">MboaGeek</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
                    <div class="col-lg-4 col-sm-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/flipclock/timer.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>



