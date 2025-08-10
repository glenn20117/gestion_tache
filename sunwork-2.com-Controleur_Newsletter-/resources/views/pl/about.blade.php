<x-base-layout>
    <x-slot:title>
        O nas• sun work
    </x-slot>

    @include('components.ui-header')
    <br><br>
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

        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>O nas</h3>
                </header>
                <br><br><br>
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <p>
                            <b>
                                Jesteśmy towarzyszami <one class="bolt">Bolt</one>, <two class="boltfood1">Bolt</two>
                                <three class="boltfood2">Food</three>, <four class="glovo">Glovo</four>,
                                <five class="uber">Uber<five>, <six class="ubereats1">Uber</six>
                                <seven class="ubereats2">Eats</seven> kag <eight class="freenow">FREENOW</eight> w Polsce.
                            
                            </b>
                            <br><br>
                            W <span style="color: #DECE31;">SUN WORK</span> z dumą współpracujemy z liderami rynku, takimi jak Uber, Bolt i FreeNow w Polsce. Od początku naszej działalności zajmowaliśmy kluczową pozycję w sektorze usług transportowych,
                            oferując niezrównane możliwości rozwoju taksówkarzom w całym kraju. Nasze zaangażowanie nie ogranicza się do świadczenia wysokiej jakości usług; zamierzamy również budować
                            silne relacje z naszymi kierowcami, zapewniając im stałe wsparcie w doskonaleniu umiejętności i maksymalizacji zarobków. Decydując się na współpracę z nami, kierowcy korzystają
                            z programów szkoleniowych, atrakcyjnych zachęt finansowych i dedykowanej obsługi klienta, co pozwala im rozwijać się w konkurencyjnym środowisku.
                        </p>
                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="img/about-img.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="img/about-extra-1.svg" class="img-fluid" alt="sun work">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 order-text">
                        <h4>Jesteśmy nadal mocno zaangażowani we współpracę z naszymi kierowcami-partnerami.</h4>

                        <p>Dzięki wsparciu naszych partnerów gwarantujemy kierowcom stabilny dzienny dochód. Niezależnie od tego, czy jeździsz dla Ubera we Wrocławiu lub innych miastach Polski, czy rozważasz dołączenie do floty taksówek Bolt i FreeNow
                        lub Ubera, jesteśmy tutaj, aby wspierać Cię w Twojej podróży.
                        </p>

                        <p>

                        Nasz rozwój był szybki i znaczący. Powiększyliśmy już naszą flotę i działamy obecnie w pięciu miastach w Polsce. Każdego dnia dołączają do nas nowi kierowcy, wzmacniając nasz zespół i wzmacniając nasze zaangażowanie
                        w budowanie silnej i dynamicznej społeczności.
                        </p>
                    
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <h4>W <span style="color: #DECE31;">SUN WORK</span> wierzymy w ścisłą współpracę z naszymi partnerami i partnerami, aby zapewnić naszym klientom wysokiej jakości usługi.</h4>
                        <p>

                        Uważamy naszych kierowców za filary naszego zespołu i jesteśmy zobowiązani do wspierania ich na każdym etapie kariery. Jako partner będziesz mieć dostęp nie tylko do zaufanej
                        i wydajnej platformy do rozwoju swojej firmy taksówkarskiej, ale także do opartego na współpracy i inkluzywnej atmosfery pracy, w której Twoje wysiłki są doceniane i doceniane. Jeśli jesteś
                        doświadczonym kierowcą lub chcesz dołączyć do naszej firmy po raz pierwszy, zapewnimy Ci zasoby i wsparcie niezbędne do osiągnięcia Twoich celów.<br>
                        #Razem, zapewniając naszym klientom niezrównaną obsługę.
                        </p>
                        
                        <p>
                           Dołącz do nas już dziś i dowiedz się, dlaczego tak wielu kierowców wybrało <span style="color: #DECE31;">SUN WORK</span> na swojego zaufanego partnera w polskim sektorze transportowym.
                        </p>
                        
                    </div>
                    <div class= "col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <picture>
                           <source srcset="img/webp/about-extra-3.webp" type="image/webp">
                           <img src="img/images/about-extra-3.jpg" class="img-fluid" alt="Image optimisée">
                      </picture>
                    </div>

                </div>

                <br><br>

            </div>
        </section><!-- #about -->
    </main>
    @include('components.ui-footer')

</x-base-layout>