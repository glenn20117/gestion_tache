<x-base-layout>
    <x-slot:title>
        services • sun work
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
                    <h3>Services</h3>
                    <P>
                        Chez <span style="color: #DECE31;">SUN WORK</span>, nous nous engageons à fournir des services de qualité supérieure qui répondent aux besoins spécifiques de nos chauffeurs et partenaires.
                        Notre mission est de créer un environnement où chaque chauffeur peut s'épanouir, en lui fournissant les outils, le soutien et les opportunités nécessaires à sa réussite.
                    </P>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a>Offre d'emploi</a></h4>
                    <p class="description">SUN WORK propose un service de recrutement pour les candidats souhaitant travailler dans divers domaines en Pologne ou dans l'Union européenne.</p>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-checkmark-circled" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a>Légalisation</a></h4>
                            <p class="description">SUN WORK accompagne les candidats souhaitant résider légalement en Pologne et dans toute l'Europe.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-home" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a>Aide au logement</a></h4>
                            <p class="description">Nous disposons d'un service d'aide au logement pour les candidats souhaitant louer ou acheter un appartement.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-settings" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a>Permis de travail</a></h4>
                        <p class="description">Nous accompagnons les candidats souhaitant travailler en Pologne avec nos partenaires officiels et dans les différents domaines que nous proposons.</p>
                     </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a>Accompagnement international</a></h4>
                                <p class="description">Nous disposons également d'un service qui accompagne les candidats internationaux souhaitant venir s'installer et travailler en Pologne.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-plus-outline" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a>Autres</a></h4>
                            <p class="description">Nous accompagnons nos clients dans diverses activités. Pour en savoir plus, consultez la page web consacrée à la légalisation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('components.ui-footer')

</x-base-layout>