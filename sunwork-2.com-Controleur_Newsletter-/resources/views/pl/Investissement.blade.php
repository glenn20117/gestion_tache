<x-base-layout>
    <x-slot:title>
        Inwestycja • sun work
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
                    <h3>Inwestycja</h3>
                    <p>Zapewniamy możliwości zatrudnienia, ułatwiając jednocześnie inwestorom pozyskiwanie kapitału.</p>
                </header>

                <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2" style="text-align: justify;">
                        <h5><b>Zarabiaj od 2500 zł tygodniowo na taksówkach lub dostawach.</b></h5>
                        <p>
                            Pracuj przy swoim własnym samochodzie lub przy nowoczesnych samochodach luksusowych, takich jak samochody z wyższej półki czy klasyczne, bez konieczności płacenia
                            kaucji. Jako profesjonalista motoryzacyjny będziesz mieć możliwość wykonywania różnorodnych zadań, od podstawowych
                            napraw mechanicznych, przez dodawanie funkcji z wyższej półki, po zaawansowane usługi konserwacyjne, takie jak tuning silnika i
                            diagnostyka elektroniczna. Dodatkowo, pracując przy tych prestiżowych pojazdach, zdobędziesz cenną wiedzę
                            i dogłębne zrozumienie nowoczesnej technologii motoryzacyjnej.
                        </p>
                        <p>
                        Ponadto, jako niezależny mechanik samochodowy, będziesz cieszyć się regularnym, przewidywalnym wynagrodzeniem, z płatnościami cotygodniowymi.
                        Ta stabilność finansowa ułatwi Ci planowanie i zarządzanie finansami osobistymi. Będziesz mógł również
                        skorzystać z elastyczności oferowanej przez tę pracę, dostosowując swój harmonogram do swoich potrzeb i preferencji.

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
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Zwrot z inwestycji po 15–18 miesiącach.</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px; flex-shrink: 0;">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Twój samochód będzie ubezpieczony i zarejestrowany na Twoje nazwisko.</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px; flex-shrink: 0;">
                                            <i class="fa" style="font-size: 24px;"><b>zł</b></i>
                                        </div>
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Stabilne miesięczne zyski.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="justify-content-start">
                        <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Złóż swoją aplikację <i class="fa fa-window-restore" aria-hidden="true"></i>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Złóż wniosek</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Miasto <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>--wybierz miasto --</option>
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
                                <option value="" disabled>-- wybierz usługę--</option>
                                <option value="Job offer">Oferta pracy</option>
                                <option value="Legalization">Legalizacja</option>
                                <option value="Accommodation assistance">Pomoc w zakwaterowaniu</option>
                                <option value="Investment" selected>Inwestycja</option>
                                <option value="Work permit">Zezwolenie na pracę</option>
                                <option value="Other requests">Inne żądanies</option>
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
