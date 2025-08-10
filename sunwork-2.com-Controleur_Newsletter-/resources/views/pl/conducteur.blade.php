<x-base-layout>
    <x-slot:title>
       Dla kierowców• sun work
    </x-slot>

    @include('components.ui-header')
    <br>
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
                <br>
                <div class="text-center">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div>
                <header class="section-header">
                    <h3>Dla kierowców</h3>
                    <p>Nie czekaj dłużej, dołącz do nas jako kierowca lub dostawca</p>
                </header>

                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <p>
                            <b>
                               <h5>Zarabiaj od 2500 zł tygodniowo w taksówce lub dostawie.</h5>
                            </b>
                            <br>
                            
                            Pracuj przy swoim samochodzie lub przy nowoczesnych pojazdach luksusowych, takich jak samochody z wyższej półki czy klasyczne, bez konieczności płacenia kaucji. Jako profesjonalista motoryzacyjny będziesz mieć możliwość wykonywania różnorodnych zadań, od podstawowych
                            napraw mechanicznych, przez wysokiej jakości dodatki, po zaawansowane usługi konserwacyjne, takie jak regulacja silnika i
                            diagnostyka elektroniczna. Dodatkowo, pracując przy tych prestiżowych samochodach, możesz zdobyć cenne doświadczenie
                            i dogłębną wiedzę na temat nowoczesnych technologii motoryzacyjnych.
                            Dodatkowo, jako niezależny mechanik samochodowy, będziesz cieszyć się regularnym, przewidywalnym wynagrodzeniem, z płatnościami cotygodniowymi.
                            Ta stabilność finansowa ułatwi Ci planowanie i zarządzanie finansami osobistymi. Możesz również
                            skorzystać z elastyczności oferowanej przez tę pracę, dostosowując swój harmonogram do swoich potrzeb i preferencji.
                        </p>
                        <div class="text-center">
                            <div class="gap-4">
                                <!-- Button Submit your Application -->
                                <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Submit your application <i class="fa fa-window-restore" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 background order-lg-6 order-1 wow fadeInUp">
                      <picture>
                         <source srcset="img/webp/drivers.webp" type="image/webp">
                         <img src="img/images/drivers.png" class="img-fluid" width="1400" height="1400" alt="Description de l'image">
                      </picture>
                    </div>
                </div>

                <br><br>

                <br><br>

                <div class="text-center">
                    <header class="section-header">
                        <h3>Korzyści ze współpracy z nami</h3>
                    </header>
                </div>
                <br>
                <div class="row about-container">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp order-text">
                            <div class="icon"><i class="fa fa-car"></i></div>
                            <h4 class="title"><a href="">Mga hybrid nga salakyan para sa trabaho</a></h4> 
                            <p class="description">Dziś możesz jeździć ze spokojem dzięki hybrydowym samochodom, które dla Ciebie przygotowaliśmy</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-dollar"></i></div>
                           <h4 class="title"><a href="">Mga bayad kada semana</a></h4> 
                           <p class="description">Wprowadziliśmy tygodniowy system płatności gotówkowych</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                            <h4 class="title"><a href="">Opisyal nga trabaho</a></h4> 
                            <p class="description">Pomagamy Ci współpracować z naszymi oficjalnymi partnerami w Polsce</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon"><i class="fa fa-gift"></i></div>
                            <h4 class="title"><a href="">Dodatkowe bonusy</a></h4>
                            <p class="description">Zwiększ swoje wygrane dzięki bonusom, które przygotowaliśmy specjalnie dla Ciebie</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="text-center">
                    <header class="section-header">
                        <h3>Wymagania i harmonogram pracy </h3>
                    </header>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <!-- Première colonne -->
                        <div class="col-lg-4">
                            <div class="row about-container">
                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-ban"></i></div>
                                        <h4 class="title" style="margin: 0;">Minimalny wiek 18 lat</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-clock-o"></i></div>
                                        <h4 class="title" style="margin: 0;">Flexible hours</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-road"></i></div>
                                        <h4 class="title" style="margin: 0;">Doświadczenie w prowadzeniu pojazdów (1 rok)
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-heartbeat"></i></div>
                                        <h4 class="title" style="margin: 0;">Zaświadczenia lekarskie
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deuxième colonne -->
                        <div class="col-lg-4">
                            <div class="row about-container">
                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-id-card-o"></i></div>
                                        <h4 class="title" style="margin: 0;">prawo jazdy B</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-smile-o"></i></div>
                                        <h4 class="title" style="margin: 0;">Brak karalności</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-user"></i></div>
                                        <h4 class="title" style="margin: 0;">Jedna osoba na samochód</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp order-text" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-automobile"></i></div>
                                        <h4 class="title" style="margin: 0;">Do pracy wymagany samochód z 2006 roku</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Troisième colonne pour l'image -->
                        <div class="col-lg-4">
                            <div class="col-12 background order-lg-6 order-1 wow fadeInUp">
                              <picture>
                                 <source srcset="img/webp/drivers2.webp" type="image/webp">
                                 <img src="img/images/drivers2.jpg" class="img-fluid" width="1500" height="1500" alt="Description de l'image">
                              </picture>
                           </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="text-center">
                    <header class="section-header">
                        <h3>Cennik</h3>
                        <p>Oferujemy Państwu nasze różnorodne oferty</p>
                    </header>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>Chcę zostać kierowcą</h3>
                            <h4><sup>60 zł</sup><span>tygodniowo</span></h4>
                                <ul>
                                
                                <li><i class="fa fa-check"></i> Licencja taksówkarska</li>
                                <li><i class="fa fa-check"></i> Płatności w każdy poniedziałek</li>
                                
                                <li><i class="fa fa-check"></i> Pomoc w rejestracji</li>
                            </ul>
                            <a href="" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdropForDriver">Rozpocznij</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0 align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Chcę zostać kurierem</h3>
                            <h4><sup>ZŁ</sup>35<span>za tydzień</span></h4>
                            <ul>
                                <li><i class="fa fa-check"></i> Torba termiczna</li>
                                <li><i class="fa fa-check"></i> Płatności w każdy poniedziałek</li>
                                <li><i class="fa fa-check"></i> Pomoc przy rejestracji</li>
                            </ul>
                            <a href="" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdropForCourier">Rozpocznijd</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <br><br><br>

        <section id="about">
            <div class="all-div-carousel container-fluid">
                <div class="text-center">
                    <br>
                    <header class="section-header">
                        <h3>Leet pojazdów do pracy taksówkarskiej</h3>
                    </header>
                </div>

                <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrapper">
                              <picture>
                                 <source srcset="img/webp/2010-Toyota-Prius.webp" type="image/webp">
                                 <img src="img/images/2010-Toyota-Prius.jpg" class="d-block w-100 img-fluid" alt="First slide">
                               </picture>
                           </div>

                             <div class="carousel-caption custom-carousel-item">
                                <h5><strong>Toyota Prius</strong> 2010</h5>
                                <p class="d-flex justify-content-center">
                                   <picture style="width: 25px; height: 25px;">
                                      <source srcset="img/webp/zloty.webp" type="image/webp">
                                      <img src="img/images/zloty.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                 </picture>
                                  &nbsp;Depozyt - 800 &nbsp; &nbsp;
  
                                  <picture style="width: 25px; height: 25px;">
                                     <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                     <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                 </picture>
                                  &nbsp;Skrzynia biegów - Automatyczna &nbsp; &nbsp;
  
                                 <picture style="width: 25px; height: 25px;">
                                     <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                     <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                  </picture>
                                    &nbsp;Rodzaj paliwa– LPG/Petrol
                               </p>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper">
                              <picture>
                                 <source srcset="img/webp/a2.webp" type="image/webp">
                                 <img src="img/images/a2.jpg" class="d-block w-100 img-fluid" alt="Second slide">
                              </picture>
                           </div>

                             <div class="carousel-caption custom-carousel-item">
                                <h5><strong>Toyota Corolla</strong> 2012</h5>
                                <p class="d-flex justify-content-center">
                                    <p>
                                       <picture style="width: 25px; height: 25px; display: inline-block;">
                                           <source srcset="img/webp/zloty.webp" type="image/webp">
                                           <img src="img/images/zloty.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                       </picture>
                                        &nbsp;Depozyt - 800 &nbsp; &nbsp;

                                        <picture style="width: 25px; height: 25px; display: inline-block;">
                                            <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                            <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                       </picture>
                                      &nbsp;Skrzynia biegów - Automatyczna &nbsp; &nbsp;

                                       <picture style="width: 25px; height: 25px; display: inline-block;">
                                           <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                           <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Rodzaj paliwa – LPG/Petrol
                                   </p>

                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                           <div class="carousel-image-wrapper">
                              <picture>
                                 <source srcset="img/webp/2015-Toyota-Yaris2.webp" type="image/webp">
                                 <img src="img/images/2015-Toyota-Yaris2.jpg" class="d-block w-100 img-fluid" alt="Third slide">
                              </picture>
                           </div>

                             <div class="carousel-caption custom-carousel-item">
                                <h5><strong>Toyota Yaris</strong> 2015</h5>
                                <p class="d-flex justify-content-center">
                                    <p>
                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/zloty.webp" type="image/webp">
                                         <img src="img/images/zloty.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Depozyt - 900 &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                          <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                          <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Skrzynia biegów - Automatyczna &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                         <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Rodzaj paliwa – LPG/Petrol
                                   </p>
 
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <picture class="carousel-image-wrapper">
                                <source srcset="img/webp/Mazda-3-2007.webp" type="image/webp">
                                <img src="img/images/Mazda-3-2007.jpg" class="d-block w-100 img-fluid" alt="fourth slide">
                            </picture>
                             <div class="carousel-caption custom-carousel-item">
                                <h5><strong>Mazda 3</strong> 2014</h5>
                                <p class="d-flex justify-content-center">
                                    <p>
                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/zloty.webp" type="image/webp">
                                         <img src="img/images/zloty.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Depozyt - 400 &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                         <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Skrzynia biegów - Automatyczna &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                         <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Rodzaj paliwa– LPG/Petrol
                                   </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Poprzedni</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Następny</span>
                    </button>
                </div><br>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Złóż swoją aplikację <i class="fa fa-window-restore" aria-hidden="true"></i>
                    </button>
                </div>
                <br>
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
                            <label for="first_name" class="form-label">Pierwsze imię<one class="require">*</one> </label>
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
                                <option value="Drivers" selected>Zostań kierowcą</option>
                                <option value="Accommodation assistance">pomoc w zakwaterowaniu</option>
                                <option value="Work permit">Zezwolenie na pracę</option>
                                <option value="Other requests">Inne prośby</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1"> Przeczytałem i akceptuję <a href="/privacy-policy">Polityka prywatności</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Wysłać <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Submit your Application For Driver -->
    <div class="modal fade" id="staticBackdropForDriver" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="{{ route('email-procedure') }}" method="post">
                        @csrf
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Złóż wniosek o zostanie <span style="color: #DECE31;">kierowca</span></h1>
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
                            <label for="first_name" class="form-label">Pierwsze imię<one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Nazwisko <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Numer telefonu<one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Praca <one class="require">*</one></label>
                            <input type="text" class="form-control" id="service" name="service" value="Become a driver" disabled>
                            <input type="text" class="form-control" id="service" name="service" value="Become a driver" hidden>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Przeczytałem i akceptuję <a href="/privacy-policy">Politykę prywatności</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Wysłać <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Submit your Application For Courier -->
    <div class="modal fade" id="staticBackdropForCourier" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="{{ route('email-procedure') }}" method="post">
                        @csrf
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Złóż wniosek o zostanie <span style="color: #DECE31;">kurierem</span></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Miasto <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- wybierz miasto--</option>
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
                            <label for="city" class="form-label">Praca<one class="require">*</one></label>
                            <input type="text" class="form-control" id="service" name="service" value="Become a courier" disabled>
                            <input type="text" class="form-control" id="service" name="service" value="Become a courier" hidden>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Przeczytałem i akceptuję <a href="/privacy-policy">Politykę prywatności</a>. <one class="require">*</one></label>
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