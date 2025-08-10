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
                                    <span class="question font-weight-bold">Czym zajmuje się SUN WORK?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">SUN WORK to w 100% polska firma, która wspiera Cię w poszukiwaniu pracy i procedurach administracyjnych.</p>
                            <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Jakie wymagania Bolta/Ubera musimy spełnić?</span></span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">
                                    <strong>Pojazdu</strong>: Mniej niż 10 lat, 4-drzwiowy (sedan lub SUV), w dobrym stanie. </br>
                                    <strong>Dokumenty pojazdu:</strong>: Dowód rejestracyjny, ubezpieczenie OC, aktualny przegląd techniczny.</br>
                                    <strong>Kierowca</strong>: Dowód rejestracyjny, ubezpieczenie OC, aktualny przegląd techniczny..</br>
                                    <strong>Licencja</strong>: Licencja taksówkarska</br>
                                    <strong>Opodatkowanie</strong>: Rejestracja podatkowa jako przedsiębiorca lub za pośrednictwem spółki partnerskiej (jak w naszym przypadku).
                                    </p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Ile wyniesie moja miesięczna pensja i kiedy ją otrzymam?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Twoje wynagrodzenie jest w dużym stopniu uzależnione od sposobu pracy i możesz zarobić nawet 10 000 zł miesięcznie.<</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Jestem studentem. Czy mogę pracować w SUN WORK?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Oczywiście, że możemy być partnerem.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Jak zapłacić za mycie i tankowanie samochodu?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Współpracujemy z podmiotami specjalizującymi się w tej dziedzinie.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Gdzie powinienem zaparkować samochód po zakończeniu prac?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Samochód jest do Twojej dyspozycji, możesz go zostawić gdziekolwiek chcesz, dbając jednocześnie o jego bezpieczeństwo.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Czy mogę zakończyć pracę wcześniej niż planowano?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Godziny pracy ustalasz według własnego uznania</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Jaki rodzaj paliwa jest stosowany w samochodach w Państwa flocie?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Mamy samochody hybrydowe, których paliwem jest benzyna.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Czy mogę używać samochodu do celów prywatnych?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Samochód jest Twoją własnością i tylko od Ciebie zależy, jak go wykorzystasz.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Jakie są warunki współpracy?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Posiadaj ważne zezwolenie na pobyt, polskie prawo jazdy i kilka dodatkowych dokumentów.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Czy praca za pośrednictwem aplikacji jest legalna?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Pracujemy całkowicie legalnie.</p>
                                <hr>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <div class="card-body">
                                <a href="/contact-sunwork" class="readmore">Masz jeszcze jakieś pytania?<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                            <label for="city" class="form-label">Miasto <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option selected>Otwórz to menu wyboru</option>
                                <option value="1">Jeden</option>
                                <option value="2">Dwa</option>
                                <option value="3">Trzy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="first_name" class="form-label">Imię <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Nazwa <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Numer telefonu<one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail <one class="require">*</one></label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Praca <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option selected>Otwórz to menu wyboru</option>
                                <option value="1"><object>Jeden</object></option>
                                <option value="2">Dwa</option>
                                <option value="3">Trzy</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Przeczytałem i akceptuję politykę prywatności. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Wysłać</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-base-layout>