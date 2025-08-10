<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Favicons -->
    <link href="img/images/logo.png" rel="icon">
    <link href="img/favicon/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/faq.css" rel="stylesheet">
</head>
<footer>
    <section id="newsletter-section">
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 footer-info">
                            <div>
                                <a href="/">
                                  <picture>
                                      <source srcset="img/webp/icone.webp" type="image/webp">
                                      <img src="img/images/icone.png" alt="" class="img-fluid" style="width: 250px; height: 250px;">
                                  </picture>
                               </a>
                                <p><b>Collaborer avec nous est une porte vers votre développement</b></p>
                            </div>
                        </div>
    
                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Liens utiles</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about-us-sunwork">A propos de nous</a></li>
                                <li><a href="/services-sunwork">Nos Services</a></li>
                                <li><a href="/terms-of-service">Conditions d'utilisation</a></li>
                                <li><a href="/privacy-policy">Politique de confidentialité</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contacter Nous</h4>
                            <p>
                                <strong>Address:</strong> Antoniego Madalińskiego 3<br>
                                50-443 Wrocław, Poland<br>
                                <strong>Téléphone:</strong> +48 729 682 370<br>
                                <strong>Email:</strong> contact@thesunwork.com<br>
                            </p>

                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100087124640611" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/sunworks_pologne?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Notre Newsletter</h4>
                            <p>Restez informé(e) des dernières actualités, offres spéciales et tendances en vous abonnant à notre newsletter. Recevez du contenu exclusif et des avantages réservés aux abonnés directement dans votre boîte mail. Ne manquez rien de l'actualité de <span style="color: #DECE31;">SUN WORK</span>. Abonnez-vous dès maintenant pour rester connecté(e) !</p>
                            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                 <input type="email" name="email" required>
                                 <input type="submit" value="Subscribe">
                                </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; 2025 - Copyright <strong><span style="color: #DECE31;">SUN WORK</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Conçu par <strong><span style="color: teal;">gagnert</span></strong>
                </div>
            </div>
        </footer><!-- #footer -->
    </section>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
</footer>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script src="js/faq.js"></script>