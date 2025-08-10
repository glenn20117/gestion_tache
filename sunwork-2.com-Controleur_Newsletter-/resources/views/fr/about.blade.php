<x-base-layout>
    <x-slot:title>
        A propos de nous • sun work
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
                    <h3> A propos de nous</h3>
                </header>
                <br><br><br>
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <p>
                            <b>
                                Nous sommes partenaires de <one class="bolt">Bolt</one>, <two class="boltfood1">Bolt</two>
                                <three class="boltfood2">Food</three>, <four class="glovo">Glovo</four>,
                                <five class="uber">Uber<five>, <six class="ubereats1">Uber</six>
                                        <seven class="ubereats2">Eats</seven> et <eight class="freenow">FREENOW</eight> en Pologne.
                            </b>
                            <br><br>
                            At <span style="color: #DECE31;">SUN WORK</span>, Nous sommes fiers de collaborer avec des leaders du marché tels qu'Uber, Bolt et FreeNow en Pologne. Depuis notre création, nous avons occupé une place clé dans le secteur des services de transport, offrant des opportunités inégalées aux chauffeurs de taxi à travers le pays. Notre engagement ne se limite pas à fournir des services de qualité; nous visons également à établir des relations solides avec nos chauffeurs, en leur offrant un accompagnement continu pour améliorer leurs compétences et maximiser leurs revenus. En choisissant de travailler avec nous, les chauffeurs bénéficient de programmes de formation, d'avantages financiers attractifs et d'un service client dédié, leur permettant de prospérer dans un environnement concurrentiel.
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
                        <h4>Nous restons fermement engagés envers nos partenaires chauffeurs.</h4>
                        <p>
                           Grâce au soutien de nos partenaires, nous garantissons aux chauffeurs un revenu stable au quotidien. Que vous conduisiez pour Uber à Wroclaw ou dans d'autres villes de Pologne, ou que vous envisagiez de rejoindre la flotte de taxis Bolt et FreeNow ou Uber, nous sommes là pour vous accompagner tout au long de votre trajet.
                        </p>
                        <p>
                            Notre croissance a été rapide et significative. Nous avons déjà agrandi notre flotte et sommes désormais présents dans cinq villes de Pologne. Chaque jour, de nouveaux chauffeurs rejoignent nos rangs, renforçant ainsi notre équipe et consolidant notre engagement à bâtir une communauté forte et dynamique.
                        </p>
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <h4>A <span style="color: #DECE31;">SUN WORK</span> , nous croyons en une coopération étroite avec nos partenaires et collaborateurs pour fournir un service de qualité à nos clients.</h4>
                        <p>
                           Nous considérons nos chauffeurs comme des piliers de notre équipe et nous nous engageons à les accompagner à chaque étape de leur carrière. En tant que partenaire, vous aurez non seulement accès à une plateforme fiable et efficace pour développer votre activité de taxi, mais aussi à un environnement de travail collaboratif et inclusif où vos efforts sont reconnus et valorisés. Que vous soyez chauffeur expérimenté ou que vous souhaitiez rejoindre notre entreprise pour la première fois, nous vous fournirons les ressources et le soutien nécessaires pour atteindre vos objectifs.<br>
                           #Ensemble, offrons à nos clients un service inégalé.
                        </p>
                        <p>
                            Rejoignez-nous aujourd'hui et découvrez pourquoi de nombreux conducteurs font <span style="color: #DECE31;">SUN WORK</span> leur partenaire de confiance dans le secteur des transports en Pologne.
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