<!DOCTYPE html>
<html lang="pl">

<head>
  <title>sunwork</title>
  <meta name="description" content="Join SUN WORK for a rewarding career as a driver. Earn up to 10,000 zł/month with flexible hours and a supportive community.">
  <meta name="keywords" content="Working in Poland, driver job Poland, earn money driving, SUN WORK, career Poland, flexible jobs Poland, international job support">
  <meta name="author" content="SUN WORK">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <!-- <link href="img/images/icone.png" rel="icon"> -->
  <!-- <link href="img/favicon/apple-touch-icon.png" rel="apple-touch-icon"> --> 

  <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png') }}" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicon/favicon.svg') }}" />
  <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}" />
  <meta name="apple-mobile-web-app-title" content="sunwork" />
  <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}" />

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
  <link href="css/alert.css" rel="stylesheet">
</head>

<body>
  @include('components.ui-header')

  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/By-my-car-pana.svg" alt="Working in Poland with SUN WORK - driver earning money" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Zarabiaj do 10 000 zł miesięcznie dołączając do naszego zespołu jako<br><span><a href="#partners" style="color: #DECE31;">driver</a></span></h2>
        <a href="#why-us" class="btn-get-started scrollto">Kontynuować <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
      </div>

    </div>
  </section>

  <div class="alert-container">
    <div class="alert-wrapper">
      @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible text-center slide-down" role="alert" id="alert">
        {{ Session::get('success') }}
      </div>
      @elseif (Session::has('error'))
      <div class="alert alert-danger alert-dismissible text-center slide-down" role="alert" id="alert">
        {{ Session::get('error') }}
      </div>
      @endif
    </div>
  </div>

  <main id="main">
    <br>
    <!--==========================
    Why Us Section
  ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Dlaczego warto nas wybrać?</h3>
          <p><span style="color: #DECE31;">SUN WORK</span>
            JDołącz do nas i zdobądź satysfakcjonującą karierę! Ciesz się wyjątkową elastycznością, wspierającą społecznością i wieloma korzyściami. Dowiedz się, dlaczego warto wybrać nas jako zaufanego partnera!
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title text-white">Usługi wysokiej jakości</h5>
                    <p class="card-text">Oferujemy usługi wysokiej jakości we wszystkich Twoich procedurach, od poszukiwania pracy po procedury administracyjne.</p>
                <!-- <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title text-white">Międzynarodowy</h5>
                <p class="card-text">Dzięki swojej międzynarodowej ofercie SUN WORK oferuje Państwu wsparcie nie tylko w Polsce, ale także za granicą.</p>
                <!-- <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title text-white">Poufność</h5>
                <p class="card-text">Szanując Twoją prywatność, gwarantujemy całkowitą poufność wszystkich Twoich procedur.</p>
                <!-- <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Klienci</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">95</span>
            <p>Klienci</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2,500</span>
            <p>zł / tydzień</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>kraje</p>
          </div>

        </div>

      </div>
    </section><br>

    <!--==========================
    Team Section
  ============================-->
    <!-- <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>
            Meet the faces behind <span style="color: #DECE31;">SUN WORK</span>! Meet our passionate and dedicated professionals, working together to offer you the best.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <picture>
                <source srcset="img/webp/gael-sunwork-team.webp" type="image/webp">
                <img src="img/images/gael-sunwork-team.jpg" class="img-fluid" alt="">
              </picture>

              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gael Belfils koumba</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/gael-belfils-koumba-2833131a1?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <picture>
                  <source srcset="img/webp/gerard-sunwork-team.webp" type="image/webp">
                  <img src="img/images/gerard-sunwork-team.jpg" class="img-fluid" alt="">
              </picture>

              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jean Gerald Bouilama</h4>
                  <span>Financial Director and External and Internal Cooperation</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/jean-gerard-bouilama-47a424225?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <picture>
                <source srcset="img/webp/exauce-sunwork-team.webp" type="image/webp">
                <img src="img/images/exauce-sunwork-team.jpg" class="img-fluid" alt="">
              </picture>

              <div class="member-info">
                <div class="member-info-content">
                  <h4>Exaucé appolinaire koubemba</h4>
                  <span>Marketing and sales director</span>
                  <div class="social">
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>--> <!-- #team -->

    <!--==========================
    Partners Section
  ============================-->
    <section id="partners" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Nasi partnerzy</h3>
          <p>
            Jesteśmy dumni ze współpracy z zaufanymi partnerami, którzy podzielają naszą wizję i wartości. Dzięki ich wiedzy i wsparciu poprawiamy
            doświadczenia naszych użytkowników i wzmacniamy nasze zaangażowanie w dążenie do doskonałości. Poznaj naszych partnerów i dołącz do nas w naszej misji
            dostarczania najlepszych produktów i usług naszej społeczności.
          </p>
        </div>

        <div class="row no-gutters partners-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <picture>
                <source srcset="img/webp/partner-Bolt.webp" type="image/webp">
                <img src="img/images/partner-Bolt.png" class="img-fluid" alt="Working as a driver for Bolt">
              </picture>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <picture>
                <source srcset="img/webp/partner-Bolt_Food.webp" type="image/webp">
                <img src="img/images/partner-Bolt_Food.png" class="img-fluid" alt="Working as a delivery driver for Bolt Food">
             </picture>
           </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <picture>
               <source srcset="img/webp/partner-Freenow.webp" type="image/webp">
               <img src="img/image/partner-Freenow.jpeg" class="img-fluid" alt="Working as a driver for FREENOW">
             </picture>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <picture>
                <source srcset="img/webp/partner-Glovo.webp" type="image/webp">
                <img src="img/images/partner-Glovo.png" class="img-fluid" alt="Working as a delivery driver for Glovo">
              </picture>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
           <div class="client-logo">
             <picture>
               <source srcset="img/webp/partner-Uber.webp" type="image/webp">
               <img src="img/images/partner-Uber.png" class="img-fluid" alt="Working as a driver for Uber">
              </picture>
           </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <picture>
                <source srcset="img/webp/partner-Uber-Eats.webp" type="image/webp">
                <img src="img/images/partner-Uber-Eats.png" class="img-fluid" alt="Working as a delivery driver for Uber Eats">
             </picture>
           </div>
          </div>

          <!-- <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo">
            <picture>
              <source srcset="img/webp/client-7.webp" type="image/webp">
              <img src="img/images/client-7.png" class="img-fluid" alt="">
            </picture>
         </div>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo">
            <picture>
              <source srcset="img/webp/client-8.webp" type="image/webp">
              <img src="img/images/client-8.png" class="img-fluid" alt="">
            </picture>
         </div>
        </div> -->

        </div>

      </div>

    </section>

    <section id="faq">
      <div class="accordion">
        <div class="image-box img-fluid">
         <picture>
            <source srcset="img/faq.webp" type="image/webp">
            <img src="img/faq.png" alt="working in poland" class="img-fluid">
         </picture>
       </div>

        <div class="accordion-text">
          <div class="title">
            <h3> <b>Często zadawane pytania</b> </h3>
          </div>
          <ul class="faq-text">
            <li>
              <div class="question-arrow">
                <span class="question">Czym zajmuje się SUN WORK?</span>
                <i class="bx bxs-chevron-down arrow"></i>
              </div>
              <p>SUN WORK jest w 100% polską firmą, która udzieli Państwu wsparcia w procesie poszukiwania pracy oraz w procedurach administracyjnych.</p>
              <span class="line"></span>
            </li>
            <li>
              <div class="question-arrow">
                <span class="question">Jakie wymagania Bolt/Uber musimy spełnić?</span>
                <i class="bx bxs-chevron-down arrow"></i>
              </div>
              <p>
                <strong>Pojazd</strong>: Mniej niż 10 lat, 4 drzwi (sedan lub SUV), w dobrym stanie.</br>
                <strong>Dokumenty pojazdu:</strong> Dowód rejestracyjny, ubezpieczenie OC, aktualny przegląd techniczny.</br>
                <strong>Kierowca</strong>: Ważne prawo jazdy, czysta kartoteka kryminalna.</br>
                <strong>Licencja</strong>: Licencja taksówkarska.</br>
                <strong>Opodatkowanie</strong>:Rejestracja podatkowa jako przedsiębiorca lub za pośrednictwem spółki partnerskiej (którą jesteśmy).
                </p>
              <span class="line"></span>
            </li>
            <li>
              <div class="question-arrow">
                <span class="question">Jaka będzie moja pensja i kiedy ją otrzymam?</span>
                <i class="bx bxs-chevron-down arrow"></i>
              </div>
              <p>Twoja pensja jest w dużym stopniu uzależniona od Twojego sposobu pracy i może sięgać nawet 10 tys. złotych miesięcznie.</p>
              <span class="line"></span>
            </li>
            <li>
              <div class="question-arrow">
                <span class="question">Jestem studentem. Czy mogę pracować w SUN WORK?</span>
                <i class="bx bxs-chevron-down arrow"></i>
              </div>
              <p>Oczywiście, że możemy być partnerem.</p>
              <span class="line"></span>
            </li>
            <li>
              <div class="question-arrow">
                <span class="question">Czy praca za pośrednictwem aplikacji jest legalna?</span>
                <i class="bx bxs-chevron-down arrow"></i>
              </div>
              <p>Pracujemy całkowicie legalnie.</p>
              <span class="line"></span>
            </li>
          </ul>
          <div class="col-lg-5 mb-4">
            <div class="card wow bounceInUp">
              <div class="card-body">
                <a href="/faq-sunwork" class="readmore">Przeczytaj więcej<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  </main>

  @include('components.ui-footer')

</body>
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
<script src="js/alert.js"></script>

</html>