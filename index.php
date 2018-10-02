<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/kuvaa_icon.png" type="image/png">
        <title>Kuvaago - Expédiez vos colis en toute sécurité</title>
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
                    <a class="navbar-brand d-none d-sm-inline-block logo_h" href="index.html">
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
        <section class="banner_area d-flex text-center" style="margin-top:0px;">
        	<div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_content">
                        	<img src="images/kuvaa_header.png" class="mx-auto d-block mb-3" style="width:400px;display:inline;" alt="logo kuvaago" />
                        	<h1>Expédiez vos colis partout dans le monde à moindre coût</h1>
                            <input type="text" class="form-control flat-control" id="searchString" 
                            	placeholder="Entrez le trajet de votre colis.    Exemple : Douala - Paris" style="border-bottom:3px solid #e5e5e5;"/>
                            <a href="#" class="btn btn-success flat-control mt-2">Chercher une expédition</a>
                            <a href="#" class="btn btn-info flat-control mt-2">Recherche avancée</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================banner Area =================-->
        
        <!--================About Area =================-->
        <section class="about_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Comment ça marche ?</h2>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body" style="font-size:1.1em;">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.3em;">1</span> Publiez votre annonce
								</h5>
								<img src="images/icon-publish.png" class="img-responsive img-thumbnail"> <br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum sapien ut risus pulvinar, 
								quis porta lectus porta. Praesent non tristique leo. Pellentesque eu ipsum neque.
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body" style="font-size:1.1em;">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.3em;">2</span> Recevez des propositions
								</h5>
								<img src="images/receive.png" class="img-responsive img-thumbnail"> <br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum sapien ut risus pulvinar, 
								quis porta lectus porta. Praesent non tristique leo. Pellentesque eu ipsum neque.
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body" style="font-size:1.1em;">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.3em;">3</span> Validez les propositions
								</h5>
								<img src="images/validate.png" class="img-responsive img-thumbnail"> <br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum sapien ut risus pulvinar, 
								quis porta lectus porta. Praesent non tristique leo. Pellentesque eu ipsum neque.
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        <!--================About Area =================-->

        <!--================Features Area =================-->
        <section class="features_area">
        	<div class="section_title text-center">
                <h2>Pourquoi utiliser Kuvaago ? </h2>
                
            </div>

            <div class="row m0">
                <div class="col-md-3 features_item">
                    <h3>Economique</h3>
                     <p>Les tarifs des voyageurs sont beaucoup moins cher que ceux des agences habituelles.</p>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Social</h3>
                    <p>Viens en aide à ceux qui n'ont pas les moyens d'expédier leurs colis par les services postaux classiques.</p>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Pratique</h3>
                    <p>Négocie les termes de l'envoi et expédie tes colis dans les délais les plus courts possible.</p>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Convivial</h3>
                    <p>Rencontre de nouvelles personnes très aimables et de fait toi beaucoup d'amis sympathiques.</p>
                </div>
            </div>
        </section>
        <!--================Features Area =================-->
        
        <!--================Sermons work Area =================-->
        <section class="sermons_work_area section_gap ">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Quelques témoignages</h2>
                    
                </div>
                <div class="sermons_slider owl-carousel">
                    
                    <div class="item row">
                        <div class="col-lg-4">
                            <div class="sermons_image">
                                <img src="image/photo/joshua-krama.jpg" alt="photo">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="sermons_content">
                                <h3 class="title_color">Les raisons pour lesquelles j'utilise la plateforme Kuvaago</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Nom : </span><a href="#" class=""> Joshua Krama</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Type : </span> Utilisateur</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date : </span> 22 juillet 2018</li>
                                </ul>
                                <p style="font-size:1.2em;">
                                	Etre utilisateur Kuvaago m'aide vraiment beaucoup, je peux plus facilement envoyer des colis à ma famille à Bamako 
                                	car les prix des voyageurs sont très bas. De plus, je gagne en temps car c'est plus facile pour moi de m'entendre 
                                	avec des voyageurs sympas que de gérer ça avec les agences qui sont souvent très lentes dans les procédures. Merci Kuvaago !
                                </p>
                                <a href="#" class="btn btn-success btn-lg flat-control">CREER UN COMPTE UTILISATEUR</a>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-4">
                            <div class="sermons_image">
                                <img src="image/photo/cyrille-penaye.jpg" alt="photo">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="sermons_content">
                                <h3 class="title_color">Mon expérience de transporteur de colis avec Kuvaago</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Nom : </span><a href="#" class=""> Cyrille Penaye</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Type : </span> Transporteur particulier</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date : </span> 12 juin 2018</li>
                                </ul>
                                <p style="font-size:1.2em;">
                                	Depuis que je suis transporteur avec Kuvaago, j'arrive à remplir mes valises plus facilement lors de mes voyages, 
                                	je rencontre des personnes géniales qui paient très bien. Ca m'aide vraiment à payer mes factures chaque mois et 
                                	j'ai également davantage de plaisir à voyager plus souvent et je peux passer plus de temps avec ma famille à Paris. 
                                </p>
                                <a href="#" class="btn btn-success btn-lg flat-control">DEVENIR TRANSPORTEUR PARTICULIER</a>
                            </div>
                        </div>
                    </div>

                    <div class="item row">
                        <div class="col-lg-4">
                            <div class="sermons_image">
                                <img src="image/photo/terricks-noah.jpg" alt="photo">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="sermons_content">
                                <h3 class="title_color">Les raisons pour lesquelles j'utilise la plateforme Kuvaago</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Nom : </span><a href="#" class=""> Terricks Noah</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Type : </span> Transporteur professionnel</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date : </span> 04 juillet 2018</li>
                                </ul>
                                <p style="font-size:1.2em;">
                                	Je suis agent commercial à UnusedKilos, entreprise spécialisée dans le transport de colis. Avant, j'avais souvent beaucoup 
                                	de mal à réunir suffisament de commandes et il m'arrivait d'avoir beaucoup d'espace libre et de devoir faire attendre 
                                	mes clients plus d'une semaine pour le transport de leurs colis. Désormais, grâce à la plateforme Kuvaago, tous ces problèmes
                                	font partie du passé.
                                </p>
                                <a href="#" class="btn btn-success btn-lg flat-control">DEVENIR TRANSPORTEUR PROFESSIONNEL</a>
                            </div>
                        </div>
                    </div>                    

                </div>
            </div>
        </section>
        <!--================Sermons work Area=================-->
        
        <!--================Donate Area=================-->
        <section class="donate_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 align-self-center">
                        <div class="donate_content ">
                            <h2>Envoyer des colis à ses proches partout dans le monde n'a jamais été aussi simple</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="images/colis-prendre.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <!--================Donate Area=================-->
        
        <!--================Event Blog Area=================-->
        <section class="event_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Trajets les plus populaires</h2>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/paris.jpg" alt="image paris">
                            <a href="#"><h2 class="event_title">Douala - Paris</h2></a>
                            <ul class="list_style sermons_category event_category">
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/bruxelles.jpg" alt="image brussels">
                            <a href="#"><h2 class="event_title">Bruxelles - Yaoundé</h2></a>
                            <ul class="list_style sermons_category event_category">
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/bamako.jpg" alt="image bamako">
                            <a href="#"><h2 class="event_title">New York - Bamako</h2></a>
                            <ul class="list_style sermons_category event_category">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area=================-->
        
        
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



