<x-base-layout>
    <x-slot:title>
        Légalisation • sun work
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
                    <h3>Légalisation</h3>
                </header>

                 <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                        <h5><b>Légalisation du travail en Pologne</b></h5>
                        <br>
                       Chez <span style="color: #DECE31;">SUN WORK</span>, votre équipe de spécialistes expérimentés est prête à vous fournir le soutien administratif dont vous avez besoin. Nous vous aidons pour : l'échange de permis, l'obtention d'une carte de séjour, les recours et autres démarches administratives polonaises. <span style="color: #DECE31;">SUN WORK</span> est la garantie d'une qualité irréprochable.</p>
                        <div class="justify-content-start">
                            <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Contacter nous <i class="fa fa-comment"></i>
                            </button>
                        </div>
                        <br>
                    </div>


                    <div class="col-lg-6 text-center order-lg-2 order-1 wow fadeInUp">
                        <img src="img/legalization.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <section id="partners" class="section-bg"></section>
                <br><br>
                <div class="card-container shadow-container">
                    <br>
                    <div class="text-center">
                        <h4><b>Nos services en matière de légalisation</b></h4>
                    </div>
                    <div class="container">
                        <!-- Première ligne -->
                        <div class="row">
                            <!-- Première carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Carte de séjour
                                        <p class="card-text">Nous accompagnons toutes les personnes souhaitant obtenir ou renouveler leur permis de séjour en Pologne.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                       <h5 class="card-title">Permis de conduire</h5>
                                        <p class="card-text">Nous vous aidons à obtenir votre permis de conduire afin que vous puissiez commencer à travailler en toute sécurité pour nos partenaires.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                       <h5 class="card-title">Assurance</h5>
                                        <p class="card-text">Besoin d'une assurance ? SUN WORK vous aide à souscrire une assurance pour couvrir tout danger potentiel.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Deuxième ligne -->
                        <div class="row">
                            <!-- Première carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Permis de travail
                                        <p class="card-text">Que vous soyez salarié ou non de SUN WORK, nous vous accompagnons dans vos démarches d'obtention d'un permis de travail.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Assistance juridique</h5>
                                        <p class="card-text">Assistance 100 % professionnelle. Nos experts vous aideront à résoudre tous vos problèmes liés à la bureaucratie polonaise.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">AAssistance administrative</h5>
                                        <p class="card-text">Vous êtes nouveau ou résident en Pologne ? Nous vous accompagnons également dans toutes vos démarches administratives.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <section id="partners" class="section-bg"></section>
                <br>
                <div class="text-center">
                    <h5><b>Pourquoi coopérer avec <span style="color: #DECE31;">SUN WORK</span>?</b></h5>
                </div>
                <br>
                <div class="row about-container">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp order-text">
                            <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">99 % de nos clients obtiennent un titre de séjour.</a></h4>
                            <p class="description">99 % de nos clients obtiennent des résultats positifs grâce au travail acharné de nos experts.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>   </div>
                            <h4 class="title"><a href="">GRésultats garantis ou remboursés</a> </h4>
                            <p class="description">Nous travaillons uniquement avec des professionnels. Nous sommes convaincus de la qualité et des résultats de nos services. En nous sollicitant, vous êtes assuré d'obtenir un résultat positif.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Accompagnement complet</a></h4>
                            <p class="description">Nous vous accompagnons du début à la fin de votre processus. Vous pouvez compter sur nous.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Spécialistes qualifiés</a></h4>
                            <p class="description">Notre équipe est composée uniquement d'experts chevronnés, prêts à vous offrir nos services et à résoudre vos problèmes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->
    </main>
    @include('components.ui-footer')

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
                            <label for="city" class="form-label">Ville <one class="require">*</one></label>
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
                                <option value="" disabled>-- Choisir le service --</option>
                                <option value="Job offer">Offre d'emploi</option>
                                <option value="Legalization" selected>Légalisation</option>
                                <option value="Accommodation assistance">Aide au logement </option>
                                <option value="Work permit">Permis de travail</option>
                                <option value="Autres demandes">Autres demandes</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">J'ai lu et accepté la <a href="/privacy-policy">Politique de confidentialité</a>. <one class="require">*</one></label>
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