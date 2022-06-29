<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  -->
    <link rel="stylesheet" href="<?= base_url() ?>/oirp/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/oirp/assets/plugins/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/oirp/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/oirp/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/oirp/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/oirp/assets/css/animate.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/oirp/assets/css/style.css">

    <title><?= @$title ?></title>
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
        .contact-info {
            float: right;
            margin-top: 5px;
        }
        .contact-info > div {
        display: inline-block;
        margin-right: 40px;
        margin-top: 6px;
        }
        .contact-info > div:last-child {
         margin-right: 0;
        }
        .box-icon-1 .icon {
            color: #3179a4;
            background: #F8F8F8;
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
        .btn-primary {
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
        
    </style>
  </head>
  <body>

       <section class="header header-1">
           <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-7">
                            <p><em>Organisation Non-gouvernementale de soutien aux actions de Paix de l'ONU</em></p>
                        </div>
                        <div class="col-sm-5 col-md-5">
                            <div class="sosmed-icon float-right">
                                <a href="#"><i class="fab text-white fa-facebook"></i></a> 
                                <a href="#"><i class="fab text-white fa-twitter"></i></a> 
                                <a href="#"><i class="fab text-white fa-instagram"></i></a> 
                                <a href="#"><i class="fab text-white fa-youtube"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middlebar">
                <div class="container">
                    
                    
                    <div class="contact-info">
                        <!-- INFO 1 -->
                        <div class="box-icon-1">
                            <div class="icon">
                                <div class="fa fa-envelope"></div>
                            </div>
                            <div class="body-content">
                                <div class="heading">E-Mail :</div>
                                info@oirp.com
                            </div>
                        </div>
                        <!-- INFO 2 -->
                        <div class="box-icon-1">
                            <div class="icon">
                                <div class="fa fa-phone"></div>
                            </div>
                            <div class="body-content">
                                <div class="heading">Contactez-nous :</div>
                                (+225) 00-0000-0000
                            </div>
                        </div>
                        <!-- INFO 3 -->
                        <div class="box-act">
                            <a href="#" class="btn btn-ghost-don">JE FAIS UN DON</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			               <?= $this->include('oirp/cmps/nav') ?><!--Nav -->
			        </div>
			    </nav>  

			</div>
		</div>
           <!-- <div class="navbar-main">
                <div class="container">
                 
                </div>
            </div>-->
       </section>

         <?= $this->renderSection('content') ?>
<!--
        <div class="section">
                <div class="content-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <h2 class="section-heading center">
                                    Our <span>Partners</span>
                                </h2>
                                <p class="subheading text-center">
                                    Nos partenaires officiels .</p>
                            </div>
                            
                        </div>
                        <div class="row gutter-5">
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client1.png" alt="" class="img-fluid img-border"></a>
                            </div>
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client2.png" alt="" class="img-fluid img-border"></a>
                            </div>
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client3.png" alt="" class="img-fluid img-border"></a>
                            </div>
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client4.png" alt="" class="img-fluid img-border"></a>
                            </div>
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client5.png" alt="" class="img-fluid img-border"></a>
                            </div>
                            <div class="col-6 col-md-2">
                                <a href="#"><img src="images/client6.png" alt="" class="img-fluid img-border"></a>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    -->
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
                                    <a href="#" class="btn btn-danger">Faites un Don aujourd'hui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>

        <div class="footer" data-background="images/bg-map-dot.jpg" style="background-image: url(&quot;images/bg-map-dot.jpg&quot;);">

            <div class="content-wrap">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="footer-item">
                                <img src="oirp/assets/img/logo_oirp.jpeg" alt="logo bottom" width="100" class="logo-bottom">
                                <div class="spacer-30"></div>
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
                                            <li><a href="about.html" title="About us">A propos</a></li>
                                            <li><a href="couses.html" title="Couses">Causes</a></li>
                                            <li><a href="testimonials.html" title="Testimonials">T&eacute;moignages</a></li>
                                            <li><a href="gallery.html" title="Gallery">Gall&eacute;rie</a></li>
                                            <li><a href="faq.html" title="Faq">Faq</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list">
                                            <li><a href="our-team.html" title="Our Team">Notre &eacute;quipe</a></li>
                                            <li><a href="events.html" title="Events">&Eacute;v&egrave;nements</a></li>
                                            <li><a href="contact.html" title="Contact Us">Contacts</a></li>
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
                                            <span class="fab fa-map-marker"></span>
                                        </div>
                                        <div class="info-text">Riviera 3 , Cocody abidjan</div> </li>
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="info-text">(+225) 00-0000-00</div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="info-text">info@oirp.com</div>
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
		
            <div class="fcopy">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="ftex">Copyright 2019 © <span class="color-primary">NGOO HTML Template</span>. Designed by <span class="color-primary">Rometheme.</span></p> 
                        </div>
                    </div>
                </div>
		    </div>

		</div>
            <!-- Optional JavaScript; choose one of the two! -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

       <!-- <script src="oirp/assets/js/jquery.min.js"></script>
        <script src="oirp/assets/js/bootstrap.min.js"></script> -->
        <script src="oirp/assets/js/script.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        -->
    </body>
</html>
