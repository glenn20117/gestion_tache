<x-base-layout>
    <x-slot:title>
        FAQ • sun work
    </x-slot>

    @include('components.ui-header')
    <br><br><br>
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
        <section id="faq" class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-5">
                    <div class="image-box">
                       <picture>
                         <source srcset="img/webp/personnes-faq.webp" type="image/webp">
                         <img src="img/images/personnes-faq.jpg" alt="FAQ" class="img-fluid rounded shadow">
                       </picture>
                   </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="accordion-text">
                        <div class="title text-center mb-4">
                            <h3><b>FAQ</b></h3>
                        </div>
                        <ul class="faq-text list-unstyled">
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">What does SUN WORK do?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">SUN WORK est une entreprise 100 % polonaise qui vous accompagne dans votre recherche d'emploi et vos démarches administratives.</p>
                            <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">"Quelles exigences Bolt/Uber devons-nous respecter ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">
                                    <strong>Vehicules</strong>: Moins de 10 ans, 4 portes (berline ou SUV), en bon état. </br>
                                    <strong>Documents du véhicule</strong>: Registration document, professional insurance, up-to-date technical inspection.</br>
                                    <strong>Driver</strong>: Carte grise, assurance professionnelle, contrôle technique à jour.</br>
                                    <strong>License</strong>: Permis de taxi</br>
                                    <strong>Taxation</strong>: Immatriculation fiscale en tant qu'entrepreneur ou via une entreprise partenaire (ce qui est notre cas)
                                    </p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Quel sera mon salaire mensuel et quand le recevrai-je ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">YVotre salaire est relativement lié à votre façon de travailler et vous pouvez atteindre jusqu'à 10 000 zlotys par mois.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Je suis étudiant, puis-je travailler pour SUN WORK ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Bien sûr, nous pouvons être un partenaire.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Comment payer le nettoyage et le ravitaillement de la voiture ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Nous sommes en partenariat avec des entités spécialisées dans ce domaine.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Où dois-je garer ma voiture une fois les travaux terminés ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">La voiture est à votre disposition, vous pouvez la garder où vous le souhaitez tout en assurant sa sécurité.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Puis-je terminer le travail plus tôt que prévu ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Les horaires de travail sont à votre discrétion.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Quel type de carburant est utilisé dans les voitures de votre flotte ?
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Nous avons des voitures hybrides avec de l’essence comme carburant.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Puis-je utiliser la voiture à des fins privées ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">La voiture est votre propre location, son utilisation ne dépend que de vous.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Quelles sont les conditions de coopération?span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Ayez en votre possession un permis de séjour valide, un permis de conduire polonais ainsi que certains documents supplémentaires.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Est-ce que travailler via l'application est légal ?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Nous travaillons en toute légalité.</p>
                                <hr>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <div class="card-body">
                                <a href="/contact-sunwork" class="readmore">Autres questions? <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.ui-footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Modal Submit your Application -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="" method="post">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Faire une demande</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option selected>Ouvrir ce menu de sélection</option>
                                <option value="1">Un</option>
                                <option value="2">Deux</option>
                                <option value="3">Trois</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Prénom <one class="require">*</one> </label>
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
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option selected>Ouvrir ce menu de sélection</option>
                                <option value="1">Un</option>
                                <option value="2">Deux</option>
                                <option value="3">Trois</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">J'ai lu et accepté la politique de confidentialité. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-base-layout>