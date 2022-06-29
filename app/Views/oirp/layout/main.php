<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= @$title ?></title>
    <meta name="description" content="oirp est, une ong, pour la lutte en vue de promouvoir la paix. aupres de l onu, non-profit, fundraising, donation, volunteer.">
    <meta name="keywords" content="campaign, cause, charity, donate, donations, event, foundation, fund, fundraising, kids, oirp, non-profit, organization, volunteer">
    <meta name="author" content="oirp.com"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="/oirp/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="/oirp/assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/oirp/assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/oirp/assets/img/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
    <link rel="stylesheet" href="/oirp/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/oirp/assets/plugins/fontawesome-free/css/all.css">

	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/owl.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/bootstrap-dropdownhover.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="/oirp/assets/css/style.css" />
	<!--
    <script src="<?= base_url() ?>/oirp/assets/js/modernizr.min.js"></script>-->
 <style>
        /* #c31d33 */
        .hero-section{
          /*  background-color: #444;*/
            background-image: url(oirp/assets/img/image_oirp5.jpg);
            height: 100vh; /*Viewport Height*/
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            color: white;
            padding-top: 15rem;
        }
        .hero-section i {
            color: #3179a4;
        }
        .hero-section a:hover {
            color: white;
        }
        

        .hero-heading {
            font-size: 3.5rem;
            line-height: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .hero-sub-heading {
            font-size: 2.5rem;
            line-height: 2.5rem;
            margin-bottom: 1.5rem;
        }

       /* .navbar-main .dropdown-toggle::after {
            margin-left: 0.6em;
            color: #dc3545;#FF7000;
        }*/

        .middlebar {
            padding: 0 0;
            height: 90px;
        }
        
        .box-icon-1 .icon {
            color: #3179a4;
            background: #F8F8F8;
        }
        .contact-info > div {
            margin-right: 20px;
            margin-top: 6px;
        }
        
        .stiky .navbar-brand img {
            width: 60px;
        }
        .color-insta{
           color: rgb(348.66,75.23%,57.25%);
        }
        btn:not(:disabled):not(.disabled) {
        cursor: pointer;
        }
        .box-act a {
            margin-top: -20px;
        }
        .btn-ghost-don {
        background-color: #FF7000;
        color: #ffffff;
        }
        .navbar-nav > li > .dropdown-menu {
            margin-bottom: 0;
        }

        .dropdown-item:first-child {
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
        }
        
        .color-oirp-bgblue{
            background-color: #3179a4;
            color: #222222;
        }

        .color-oirp-bgdarklight{
            color: white;
            background: rgba(0,0,0,0.6);
        }
        .header-1 .navbar-main .navbar-brand {
            position: absolute;
            left: 40px;
            top: -110px;
        }
        .img-border {
            border: 2px solid #eeeeee;
            background-color: #eeeeee;
            /*margin-bottom: 10px;*/
        }
    </style>
</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">
    	<!-- TOPBAR -->
    	<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-md-6">
						<em>Organisation Non-Gouvernementale en soutien aux Objectifs et Initiatives de l'ONU</em>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="sosmed-icon float-right">
							<a href="#"><i class="fab text-white fa-facebook"></i></a> 
                                <!--<a href="#"><i class="fab text-white fa-twitter"></i></a> -->
                                <a href="#"><i class="fab text-white fa-instagram"></i></a> 
                                <a href="#"><i class="fab text-white fa-youtube"></i></a> 
						</div>
					</div>
				</div>
			</div>
		</div>

    	<!-- MIDDLE BAR -->
		<div class="middlebar" style="height: 130px;">
			<div class="container">
				<div class="contact-info" style="padding-left: 10px;">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope"></div>
						</div>
						<div class="body-content">
							<div class="heading">e-Mail:</div>
							info@oirp-ong.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Contactez nous :</div>
							+225 2735968565 / +225 0703080370
						</div>
					</div>
					<!-- INFO 3 -->
					<div class="box-act">
						<a href="<?= base_url() ?>/donate" class="btn btn-sm btn-danger">Faire un Don</a>
					</div>
                    
                    <div class="box-icon-1" style="margin-top: 10px;">
						<div class="body-content">
                            <a class="navbar-brand-" href="/">
                                <img src="/oirp/assets/img/logo_unicef.jpeg" alt="" class="pt-0" width="120">
                            </a>
						</div>
					</div>
                    
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="/">
						<img src="/oirp/assets/img/logo_oirp.png" alt="" width="120" class="pt-0"/>
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <!--<span class="navbar-toggler-icon"></span>-->
                        <i class="fa fa-2x fa-bars"></i>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <!--
			            <ul class="navbar-nav">
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          HOME
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="index.html">Home 1</a>
	          						<a class="dropdown-item" href="index-2.html">Home 2</a>
	          						<a class="dropdown-item" href="index-3.html">Home 3</a>
	          						<a class="dropdown-item" href="index-4.html">Home 4 - Onepage</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ABOUT
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="about.html">About Us</a>
	          						<a class="dropdown-item" href="faq.html">FAQ</a>
	          						<a class="dropdown-item" href="our-team.html">Our Team</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          CAUSES
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="cause.html">Causes</a>
	          						<a class="dropdown-item" href="cause-single.html">Single Causes</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          PAGES
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="404.html">404 Page</a>
	          						<a class="dropdown-item" href="gallery.html">Gallery</a>
	          						<a class="dropdown-item" href="testimonials.html">Testimonials</a>
	          						<a class="dropdown-item" href="news-grid.html">News Grid</a>
	          						<a class="dropdown-item" href="news-sidebar.html">News Sidebar</a>
	          						<a class="dropdown-item" href="news-detail.html">News Detail</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          EVENTS
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="events.html">Events</a>
	          						<a class="dropdown-item" href="events-single.html">Events Detail</a>
							    </div>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.html">CONTACT US</a>
			                </li>
			            </ul> -->
                         <?= $this->include('oirp/cmps/nav') ?>
			        </div>
			    </nav> 
			</div>
		</div>

    </div>
     <?= $this->renderSection('content') ?>

	<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
                                <h3>R&eacute;joignez la lutte pour le renforcement de la paix.</h3>
                            </div>
                            <div class="body-action">
                                <a href="<?= base_url() ?>/donate" class="btn btn-danger">Faire un Don aujourd'hui</a>
                            </div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer" data-background="/oirp/assets/img/bg-map-dot.jpg">
		<div class="content-wrap">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="footer-item">
                                <img src="/oirp/assets/img/logo_oirp.png" alt="logo bottom" width="120" class="logo-bottom">
                                <div class="spacer-20"></div>
                                <p>
                                    L'organisation Internationale Pour La Recherche de la Paix (O.I.R.P) est une Organisation Non-gouvernementale de soutien aux actions de Paix de l'ONU.
                                    Selon les Saintes Écritures :<br/>
                                    &laquo; Heureux sont ceux qui procurent la Paix!&raquo;.
                                </p>
                                <a href="#"><i class="fa fa-angle-right"></i>&nbsp;Lire la suite</a>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <div class="footer-item">
                                <div class="footer-title">
                                    Qui nous sommes
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list">
                                            <li><a href="<?= base_url()?>/apropos" title="About us">
                                                <i class="fa fa-angle-right"></i> A propos</a></li>
                                            <li><a href="<?= base_url()?>/ambassadeur" title="ambassadeurs de la paix">
                                                <i class="fa fa-angle-right"></i> Ambassadeurs</a></li>
                                            <li><a href="<?= base_url()?>/photos" title="Gallery">
                                                <i class="fa fa-angle-right"></i> Gall&eacute;rie</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list">
                                            <li><a href="<?= base_url()?>/team" title="Our Team">
                                                <i class="fa fa-angle-right"></i> L'&eacute;quipe</a></li>
                                            <li><a href="<?= base_url()?>/event" title="Events">
                                                <i class="fa fa-angle-right"></i> &Eacute;v&egrave;nements</a></li>
                                            <li><a href="<?= base_url()?>/contactus" title="Contact Us">
                                                <i class="fa fa-angle-right"></i> Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <div class="footer-item">
                                <div class="footer-title">
                                    Localisation
                                </div>
                                <ul class="list-info">
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="info-text">Riviera Faya - Carrefour Nouveau Goudron , Cocody abidjan</div> </li>
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="info-text">OIRP/CI : (+225) 27 359 68565 - 07 030 80370</div>
                                        <div class="info-text">OIRP/EUROPE : (+351) 936 886 760</div>
                                        <div class="info-text">OIRP/AMERIQUE : +1 (647) 219-6319</div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="info-text">info@oirp-ong.com</div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-clock-o"></span>
                                        </div>
                                        <!--<div class="info-text">Mon - Sat 09:00 - 17:00</div>-->
                                    </li>
                                </ul>

                            </div>
                        </div>
                        
                        <div class="col-sm-3 col-md-3">
                            <div class="footer-item">
                                <div class="footer-title">
                                    R&eacute;seaux sociaux
                                </div>
                                <p>Ne perdez aucun moment, suivez nous partout au travers des r&eacute;seaux sociaux</p>
                                <div class="sosmed-icon primary">
                                    <a href="#"><i class="fab text-white fa-facebook"></i></a> 
                                    <a href="#"><i class="fab text-white fa-instagram"></i></a> 
                                    <a href="#"><i class="fab text-white fa-youtube"></i></a> 
                                    <!--<a href="#"><i class="fa fa-twitter"></i></a> 
                                    <a href="#"><i class="fa fa-pinterest"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
		    </div>
		<!--
            <div class="fcopy">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="ftex">Copyright 2019 © <span class="color-primary">NGOO HTML Template</span>. Designed by <span class="color-primary">Rometheme.</span></p> 
                        </div>
                    </div>
                </div>
		    </div>-->
	</div>
	
	<!-- JS VENDOR -->
	<script src="/oirp/assets/js/jquery.min.js"></script>
	<script src="/oirp/assets/js/bootstrap.min.js"></script>
	<script src="/oirp/assets/js/owl.carousel.js"></script>
	<script src="/oirp/assets/js/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="/oirp/assets/js/validator.min.js"></script>
	<script src="/oirp/assets/js/form-scripts.js"></script>

	<script src="/oirp/assets/js/script.js"></script>

</body>
</html>