<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
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
							<i class="fa fa-user"></i>&nbsp;Créer un compte
						</a>

						<!-- Login button -->
						<div class="dropdown">
							<a class="btn btn-success flat-control dropdown-toggle d-none d-sm-inline-block" href="#" id="btnDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-sign-in"></i>&nbsp;Se connecter
							</a>

							<!-- Signin dropdown form -->
							<form class="dropdown-menu dropdown-menu-right p-3" style="width:300px;">
								<div class="input-group w-100 mb-2">
								  <input type="email" class="form-control border-right-0 border" id="emailDropdown" placeholder="Email" />
								  <span class="input-group-append">
								      <a class="btn btn-light border-left-0 border" href="#">
								          <i class="fa fa-envelope"></i>
								      </a>
								  </span>
								</div>

								<div class="input-group w-100 mb-2">
								  <input type="password" class="form-control border-right-0 border" id="passwordDropdown" placeholder="Mot de passe" />
								  <span class="input-group-append">
								      <a class="btn btn-light border-left-0 border" href="#">
								          <i class="fa fa-lock"></i>
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
										<i class="fa fa-sign-in"></i> Connexion
									</button>
									<a href="#" class="btn-link mb-2" style="text-decoration:none;">Mot de passe oublié ?</a>
								</div>

								<div class="form-group mt-2 justify-content-between">
									<span>Toujours pas inscrit ? </span>
									<a href="#" class="" style="text-decoration:none;">Créer un compte</a>
								</div>

								<div class="form-group mt-5 justify-content-center">
									<a href="#" class="btn btn-info flat-control">Facebook &nbsp;<span class="fui-facebook"></span> </a>
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
						<i class="fa fa-user"></i>&nbsp;Créer un compte
					</a>

					<a href="#" class="btn btn-success d-sm-none flat-control">
						<i class="fa fa-sign-in"></i>&nbsp;Se connecter
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
                    <p>Découvrez le mode de fonctionnement de Kuvaago qui vous permet d'expédier vos colis dans le monde entier à moindre coût</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.2em;">1</span> Sélectionner une région
								</h5>
								This is some text within a card body.
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.2em;">2</span> Sélectionner une région
								</h5>
								This is some text within a card body.
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                    	<div class="card bg-info text-light">
							<div class="card-body">
								<h5 class="card-title">
									<span class="badge badge-pill badge-primary" style="font-size:1.2em;">3</span> Sélectionner une région
								</h5>
								This is some text within a card body.
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        <!--================About Area =================-->

        <!--================Event Date Area =================-->
        <section class="event_date_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex">
                        <div class="evet_location flex">
                            <h3>Spreading the faith to all</h3>
                            <p><span class="lnr lnr-calendar-full"></span>5th may, 2018</p>
                            <p><span class="lnr lnr-clock"></span>Saturday, 09.00 am to 05.00 pm</p>
                        </div>
                    </div>
                    <div class="col-md-6 event_time">
                        <h4>Our Next Event Starts in</h4>
                        <div id="timer" class="timer">
                            <div class="timer__section days">
                                <div class="timer__number"></div>
                                <div class="timer__label">days</div>
                            </div>
                            <div class="timer__section hours">
                                <div class="timer__number"></div>
                                <div class="timer__label">hours</div>
                            </div>
                            <div class="timer__section minutes">
                                <div class="timer__number"></div>
                                <div class="timer__label">Minutes</div>
                            </div>
                            <div class="timer__section seconds">
                                <div class="timer__number"></div>
                                <div class="timer__label">seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Event Date Area =================-->
        
        <!--================Features Area =================-->
        <section class="features_area">
            <div class="row m0">
                <div class="col-md-3 features_item">
                    <h3>Spreading Light to world</h3>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                    <a href="#" class="btn_hover view_btn">View Details</a>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Spreading Light to world</h3>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                    <a href="#" class="btn_hover view_btn">View Details</a>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Spreading Light to world</h3>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                    <a href="#" class="btn_hover view_btn">View Details</a>
                </div>
                <div class="col-md-3 features_item">
                    <h3>Spreading Light to world</h3>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
                    <a href="#" class="btn_hover view_btn">View Details</a>
                </div>
            </div>
        </section>
        <!--================Features Area =================-->
        
        <!--================Sermons work Area =================-->
        <section class="sermons_work_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Sermons This Week</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from</p>
                </div>
                <div class="sermons_slider owl-carousel">
                    <div class="item row">
                        <div class="col-lg-8">
                            <div class="sermons_image">
                                <img src="image/sermns.jpg" alt="">
                                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sermons_content">
                                <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                                </ul>
                                <a href="#" class="btn_hover">View More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-lg-8">
                            <div class="sermons_image">
                                <img src="image/sermns.jpg" alt="">
                                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sermons_content">
                                <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                                </ul>
                                <a href="#" class="btn_hover">View More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-lg-8">
                            <div class="sermons_image">
                                <img src="image/sermns.jpg" alt="">
                                <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sermons_content">
                                <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                                <ul class="list_style sermons_category">
                                    <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                                    <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                                    <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                                </ul>
                                <a href="#" class="btn_hover btn_hover_two">View More Details</a>
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
                    <div class="col-md-6 d-flex align-self-center">
                        <div class="donate_content ">
                            <h2>Your donation can save <br>many lives</h2>
                            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="donation_form">
                            <h3>How much would you like to donate?</h3>
                            <div class="form-group">
                                <input type='text' class="form-control" placeholder="$5"/>
                            </div>
                            <div class="form-group">
                                <input type='text' class="form-control" placeholder="$5"/>
                            </div>
                            <div class="form-group">
                                <input type='text' class="form-control" placeholder="$5"/>
                            </div>
                            <div class="form-group">
                                <input type='text' class="form-control" placeholder="Any"/>
                            </div>
                            <a href="#" class="btn_hover btn_hover_two">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Donate Area=================-->
        
        <!--================Event Blog Area=================-->
        <section class="event_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Upcoming Events</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/blog1.jpg" alt="">
                            <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                            <ul class="list_style sermons_category event_category">
                                <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                                <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                                <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                            </ul>
                            <a href="#" class="btn_hover">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/blog2.jpg" alt="">
                            <a href="#"><h2 class="event_title">Spread Happyness to world</h2></a>
                            <ul class="list_style sermons_category event_category">
                                <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                                <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                                <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                            </ul>
                            <a href="#" class="btn_hover">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_post">
                            <img src="image/blog3.jpg" alt="">
                            <a href="#"><h2 class="event_title">Spreading Light to world</h2></a>
                            <ul class="list_style sermons_category event_category">
                                <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                                <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                                <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                            </ul>
                            <a href="#" class="btn_hover">View Details</a>
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
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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