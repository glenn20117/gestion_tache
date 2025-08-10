<html>
<head>
    <meta charset="utf-8">
</head>

<header id="header" class="fixed-top">
    <div class="container">
        <!-- <div class="logo float-left">
           <a href="/" class="scrollto">
              <img src="{{ asset('img/logo.svg') }}" alt="SUN WORK logo" class="img-fluid" style="height: 40px; width: auto;">
           </a>
        </div> -->
        <nav class="main-nav float-right d-none d-lg-block">
            <ul style="display: flex; justify-content: flex-end;">
                  <li class="{{ Request::is('/') ? 'active' : '' }}">
                     <a href="{{ route('chemin', ['page' => 'welcome', 'langue' => request('langue', 'en')]) }}">
                     <strong>SUN WORK</strong>
                        </a>
                </li>
                
                <li class="{{ Request::is('about-us-sunwork') ? 'active' : '' }}">
                    <a href="{{ route('chemin', ['page' => 'about', 'langue' => request('langue', 'en')]) }}">
                    <strong>About Us</strong>
                    </a>
                </li>

                <li class="{{ Request::is('services-sunwork') ? 'active' : '' }}">
                     <a href="{{ route('chemin', ['page' => 'service', 'langue' => request('langue', 'en')]) }}">
                     <strong>Services</strong>
                     </a>
                </li>

                <li class="{{ Request::is('sunwork-for-drivers') ? 'active' : '' }}">
                    <a href="{{ route('chemin', ['page' => 'conducteur', 'langue' => request('langue', 'en')]) }}">
                    <strong>For Drivers</strong>
                    </a>
                </li>

                <li class="{{ Request::is('investment-sunwork') ? 'active' : '' }}">
                    <a href="{{ route('chemin', ['page' => 'Investissement', 'langue' => request('langue', 'en')]) }}">
                    <strong>Investment</strong>
                    </a>
                </li>
                <li class="{{ Request::is('legalization-sunwork') ? 'active' : '' }}">
                    <a href="{{ route('chemin', ['page' => 'legalisation', 'langue' => request('langue', 'en')]) }}">
                    <strong>Legalization</strong>
                    </a>
                </li>
                <li class="drop-down">
                    <a > <strong> Phone Numbers </strong> </a>
                    <ul>
                        <li><a href="tel:+48729682370">+48 729 682 370</a></li>
                    </ul>
                </li>

                <li class="{{ Request::is('faq-sunwork') ? 'active' : '' }}">
                   <a href= "{{ route('chemin', ['page' => 'FAQ', 'langue' => request('langue', 'en')]) }}">
                     <strong>FAQ</strong>
                    </a>
                </li>

               <li class="{{ Request::is('contact-sunwork') ? 'active' : '' }}">
                    <a href="{{ route('chemin', ['page' => 'contact', 'langue' => request('langue', 'en')]) }}">
                <strong>Contact</strong>
                </a>
                </li>            
@php
$drapeau = [
    'en' => 'https://flagcdn.com/w40/gb.png',
    'fr' => 'https://flagcdn.com/w40/fr.png',
    'pl' => 'https://flagcdn.com/w40/pl.png',
];

$langueNom = [
    'en' => 'EN',
    'fr' => 'FR',
    'pl' => 'PL',
];

$lan = request('langue', 'en');
@endphp


<li class="drop-down">
    <a href="#">
        <img src="{{ $drapeau[$lan] }}" alt="{{ $lan }}" style="width: 20px; vertical-align: middle; margin-right: 5px;">
        {{ $langueNom[$lan] ?? 'Unknown' }}
    </a>
    <ul>
       
<li>
    <a href="{{ route('chemin', ['page' => request('page', 'welcome'), 'langue' => 'en']) }}">
        <img src="https://flagcdn.com/w40/gb.png" alt="English" style="width: 20px; vertical-align: middle; margin-right: 5px;">
        English
    </a>
</li>
        
<li>
    <a href="{{ route('chemin', ['page' => request('page', 'welcome'), 'langue' => 'fr']) }}">
        <img src="https://flagcdn.com/w40/fr.png" alt="French" style="width: 20px; vertical-align: middle; margin-right: 5px;">
        French
    </a>
</li>
        
<li>
    <a href="{{ route('chemin', ['page' => request('page', 'welcome'), 'langue' => 'pl']) }}">
        <img src="https://flagcdn.com/w40/pl.png" alt="Polski" style="width: 20px; vertical-align: middle; margin-right: 5px;">
        Polish
    </a>
</li>
</li>

   <script>
    //  La page HTML doit etre chargée
    document.addEventListener('DOMContentLoaded', function () {

        // On veut l'élément id 'language-selector' qui est le choix de language
        const selector = document.getElementById('language-selector');
        
        // Si l'élément existe, on ajoute le code qui change
        selector?.addEventListener('change', function () {
        ``
            // Quand on change la
            // on va vers l'URL demandé 
            window.location.href = this.value;
        });
    });
</script>

                </ul>
                </li>

            </ul>
        </nav>
    </div>
</header>

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

</html>