<x-base-layout>
    <x-slot:title>
       Legalizacja • sun work
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
                    <h3>Legalizacja</h3>
                </header>

                <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                        <h5><b>Legalization of work in Poland</b></h5>
                        <br>
                       W <span style="color: #DECE31;">SUN WORK</span> zespół doświadczonych specjalistów jest gotowy zapewnić Ci niezbędne wsparcie administracyjne. Pomagamy w: wymianie licencji, wyrobieniu karty pobytu, odwołaniach i innych kwestiach związanych
                       z polską biurokracją. 
                       <span style="color: #DECE31;">SUN WORK</span> to gwarancja wysokiej jakości.
                        </p>
                        <div class="justify-content-start">
                            <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Skontaktuj się z nami <i class="fa fa-comment"></i>
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
                        <h4><b>Skontaktuj się z nami</b></h4>
                    </div>
                    <div class="container">
                        <!-- Première ligne -->
                        <div class="row">
                            <!-- Première carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Karta pobytu</h5>
                                        <p class="card-text">Wspieramy wszystkie osoby pragnące uzyskać lub przedłużyć zezwolenie na pobyt w Polsce.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Prawo jazdy</h5>
                                        <p class="card-text">Pomagamy Ci uzyskać prawo jazdy, abyś mógł bezpiecznie rozpocząć pracę dla naszych partnerów.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ubezpieczenie</h5>
                                        <p class="card-text">Potrzebujesz ubezpieczenia? SUN WORK pomoże Ci uzyskać ubezpieczenie pokrywające wszelkie potencjalne zagrożenia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deuxième ligne -->
                        <div class="row">
                            <!-- Première carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Zezwolenie na pracę</h5>
                                        <p class="card-text">Niezależnie od tego, czy jesteś pracownikiem SUN WORK, czy nie, wspieramy Cię w procesie uzyskiwania pozwolenia na pracę.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pomoc prawna</h5>
                                        <p class="card-text">100% profesjonalne wsparcie. Nasi eksperci pomogą Ci rozwiązać wszystkie problemy związane z polską biurokracją.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pomoc administracyjna</h5>
                                        <p class="card-text">Jesteś nowy w Polsce lub mieszkasz w niej? Wspieramy Cię również we wszystkich procedurach administracyjnych.</p>
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
                    <h5><b>Dlaczego warto współpracować z <span style="color: #DECE31;">SUN WORK</span>?</b></h5>
                </div>
                <br>
                <div class="row about-container">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp order-text">
                            <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">99% naszych klientów otrzymuje pozwolenie na pobyt</a></h4>
                            <p class="description">99% naszych klientów osiąga pozytywne rezultaty dzięki ciężkiej pracy naszych ekspertów.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Gwarancja rezultatów lub zwrot pieniędzy</a></h4>
                            <p class="description">Współpracujemy wyłącznie z profesjonalistami. Jesteśmy pewni jakości i rezultatów naszych usług. Zwracając się do nas o wsparcie, masz pewność pozytywnego rezultatu.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                           <h4 class="title"><a href="">Pełne wsparcie</a></h4>
                           <p class="description">Wspieramy Cię od początku do końca procesu. Możesz na nas liczyć.</p>
                           </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Wykwalifikowani specjaliści</a></h4>
                            <p class="description">Nasz zespół składa się wyłącznie z doświadczonych ekspertów, gotowych zaoferować Ci nasze usługi i rozwiązać Twoje problemy.</p>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Złóż wniosek</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Miasto <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- wybierz miasto --</option>
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
                            <label for="first_name" class="form-label">Pierwsze imię <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Nazwisko <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Numer telefonu <one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Praca <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option value="" disabled>-- wybierz usługę --</option>
                                <option value="Job offer">Oferta pracy</option>
                                <option value="Legalization" selected>Legalizacja</option>
                                <option value="Accommodation assistance">Pomoc w zakwaterowaniu</option>
                                <option value="Work permit">Zezwolenie na pracę</option>
                                <option value="Other requests">Inne prośby</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Przeczytałem i akceptuję <a href="/privacy-policy">Polityka prywatności</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Wysłać <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>