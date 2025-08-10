<x-base-layout>
    <x-slot:title>
        Investissement • sun work
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
                <div class="text-center">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                </div>
                <header class="section-header">
                    <h3>Investissement</h3>
                    <p>Nous offrons des opportunités d’emploi tout en facilitant l’augmentation du capital des investisseurs.</p>
                </header>

                <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2" style="text-align: justify;">
                        <h5><b>Gagnez à partir de 2 500 zł par semaine en taxi ou en livraison.</b></h5>
                        <p>
                            Travaillez sur votre propre véhicule ou sur des voitures de luxe modernes, telles que des véhicules haut de gamme ou des voitures de collection, sans avoir à payer de caution. En tant que professionnel de l'automobile, vous aurez l'opportunité d'effectuer une variété de tâches, des réparations mécaniques de base aux ajouts de fonctionnalités haut de gamme, en passant par des services d'entretien avancés tels que la mise au point du moteur et les diagnostics électroniques. De plus, en travaillant sur ces véhicules prestigieux, vous développerez une expertise précieuse et une compréhension approfondie des technologies automobiles modernes.
                        </p>
                        
                        <p>
                            De plus, en tant que technicien automobile indépendant, vous bénéficierez d'une rémunération régulière et prévisible, avec des versements hebdomadaires.
                            Cette stabilité financière vous permettra de planifier et de gérer plus facilement vos finances personnelles. Vous pourrez également profiter de la flexibilité offerte par ce métier, en adaptant votre emploi du temps à vos besoins et préférences.
                        </p>
                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp text-center">
                       <picture>
                         <source srcset="img/webp/investment.webp" type="image/webp">
                         <img src="img/images/investment.jpg" class="img-fluid" alt="Investment Image">
                       </picture>
                   </div>

                </div>

                <div class="container">
                    <div class="row">
                        <!-- Première colonne -->
                        <div class="col-lg-4">
                            <div class="row about-container">
                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px; flex-shrink: 0;">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Retour sur investissement après 15 à 18 mois.</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px; flex-shrink: 0;">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Your car will be insured and registered in your name.</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px; flex-shrink: 0;">
                                            <i class="fa" style="font-size: 24px;"><b>zł</b></i>
                                        </div>
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Bénéfices mensuels stables.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="justify-content-start">
                        <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Soumettez votre candidature<i class="fa fa-window-restore" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.ui-footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Modal Submit your Application -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="{{ route('email-procedure') }}" method="post">
                        @csrf
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Faire une demande</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- Chosir la ville --</option>
                                <option value="Varsovie">Varsovie</option>
                                <option value="Cracovie">Cracovie</option>
                                <option value="Wrocław">Wrocław</option>
                                <option value="Gdańsk">Gdańsk</option>
                                <option value="Poznań">Poznań</option>
                                <option value="Others">Others</option>
                                <option value="International">International</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="first_name" class="form-label"> Prénom <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Nom <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Numéro de téléphone <one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option value="" disabled>-- Choisis le service --</option>
                                <option value="Job offer">Offre d'emploi</option>
                                <option value="Légalisation">Légalisation</option>
                                <option value="Aide au logement">Aide au logement</option>
                                <option value="Investissement" selected>Investissement</option>
                                <option value="Permis de travail">Permis de travail</option>
                                <option value="Autres demandes">Autres demandes</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">J'ai lu et accepté les <a href="/privacy-policy">Privacy policy</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Envoyer <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-base-layout>