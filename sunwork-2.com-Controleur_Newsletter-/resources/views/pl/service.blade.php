<x-base-layout>
    <x-slot:title>
        usługi • sun work
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
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Usługi</h3>
                    <P>
                       W <span style="color: #DECE31;">SUN WORK</span> dokładamy wszelkich starań, aby świadczyć najwyższej jakości usługi, które odpowiadają specyficznym potrzebom naszych kierowców i partnerów.
                       Naszą misją jest stworzenie środowiska, w którym każdy kierowca może się rozwijać, zapewniając mu narzędzia, wsparcie i możliwości niezbędne do osiągnięcia sukcesu.
                    </P>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a>oferta pracy</a></h4>
                            <p class="description">SUN WORK prowadzi rekrutację kandydatów, którzy chcą pracować w różnych branżach w Polsce lub Unii Europejskiej</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-checkmark-circled" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a>Legalizacja</a></h4>
                            <p class="description">SUN WORK wspiera kandydatów pragnących legalnie przebywać w Polsce i całej Europie.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-home" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a>Pomoc w zakwaterowaniu</a></h4>
                            <p class="description">Posiadamy dział wsparcia w zakresie zakwaterowania dla kandydatów chcących wynająć lub kupić mieszkanie.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-settings" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a>Zezwolenie na pracę</a></h4>
                            <p class="description">Wspieramy kandydatów pragnących podjąć pracę w Polsce u naszych oficjalnych partnerów i w różnych dziedzinach, które oferujemy.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a>Wsparcie międzynarodowe</a></h4>
                            <p class="description">Mamy również dział wspierający kandydatów zagranicznych, którzy chcą przyjechać, osiedlić się i pracować w Polsce.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-plus-outline" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a>Inni</a></h4>
                            <p class="description">Wspieramy naszych klientów w różnych działaniach. Aby dowiedzieć się więcej, odwiedź stronę Legalizacja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('components.ui-footer')

</x-base-layout>