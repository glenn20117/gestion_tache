<x-base-layout>
    <x-slot:title>
        For drivers • sun work
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
                    <h3>For Drivers</h3>
                    <p>Don't wait any longer, join us as drivers or delivery people </p>
                </header>

                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <p>
                            <b>
                                <h5>Earn from 2,500 zł per week on taxi or delivery.</h5>
                            </b>
                            <br>
                            Work on your own car or on modern luxury cars, such as high-end vehicles or classic cars, without having to pay
                            bond fees. As an automotive professional, you will have the opportunity to perform a variety of tasks, from basic
                            mechanical repairs to high-end feature additions, to advanced maintenance services such as engine tune-ups and
                            electronic diagnostics. Additionally, by working with these prestigious vehicles, you will develop valuable expertise
                            and a deep understanding of modern automotive technology.
                            Additionally, as an independent auto technician, you'll enjoy regular, predictable pay, with payments made weekly.
                            This financial stability will make it easier for you to plan and manage your personal finances. You will also be able
                            to take advantage of the flexibility offered by this job, adapting your schedule to your needs and preferences.
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
                        <h3>Benefits of working with Us</h3>
                    </header>
                </div>
                <br>
                <div class="row about-container">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp order-text">
                            <div class="icon"><i class="fa fa-car"></i></div>
                            <h4 class="title"><a href="">Hybrid cars for work</a></h4>
                            <p class="description">Today, drive with peace of mind the hybrid cars that we put at your disposal</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-dollar"></i></div>
                            <h4 class="title"><a href="">Weekly payments</a></h4>
                            <p class="description">We have set up a weekly payment system for money payments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                            <h4 class="title"><a href="">Official employment</a></h4>
                            <p class="description">We help you work with our official partners in Poland</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon"><i class="fa fa-gift"></i></div>
                            <h4 class="title"><a href="">Additional Bonuses</a></h4>
                            <p class="description">Increase your winnings with bonuses that we have prepared especially for you</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="text-center">
                    <header class="section-header">
                        <h3>Requirements and work schedule </h3>
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
                                        <h4 class="title" style="margin: 0;">Minimum age 18 years</h4>
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
                                        <h4 class="title" style="margin: 0;">Driving experience (1 year)</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-heartbeat"></i></div>
                                        <h4 class="title" style="margin: 0;">Medical certificates</h4>
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
                                        <h4 class="title" style="margin: 0;">driving license B</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-smile-o"></i></div>
                                        <h4 class="title" style="margin: 0;">No criminal record</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-user"></i></div>
                                        <h4 class="title" style="margin: 0;">One person per car</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="icon-box wow fadeInUp order-text" style="display: flex; align-items: center;">
                                        <div class="icon" style="margin-right: 10px;"><i class="fa fa-automobile"></i></div>
                                        <h4 class="title" style="margin: 0;">For work, 2006 car required</h4>
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
                        <h3>Pricing</h3>
                        <p>We offer you our different offers</p>
                    </header>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>I want to become a driver</h3>
                            <h4><sup>ZŁ</sup>60<span>per week</span></h4>
                            <ul>
                                <li><i class="fa fa-check"></i> Taxi license</li>
                                <li><i class="fa fa-check"></i> Payments every Monday</li>
                                <li><i class="fa fa-check"></i> Registration help</li>
                            </ul>
                            <a href="" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdropForDriver">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0 align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>I want to become a courier</h3>
                            <h4><sup>ZŁ</sup>35<span>per week</span></h4>
                            <ul>
                                <li><i class="fa fa-check"></i> Cooler bag</li>
                                <li><i class="fa fa-check"></i> Payments every Monday</li>
                                <li><i class="fa fa-check"></i> Registration help</li>
                            </ul>
                            <a href="" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdropForCourier">Get Started</a>
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
                        <h3>Fleet of vehicles for taxi work</h3>
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
                                  &nbsp;Deposit - 800 &nbsp; &nbsp;
  
                                  <picture style="width: 25px; height: 25px;">
                                     <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                     <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                 </picture>
                                  &nbsp;Gearbox - Automatic &nbsp; &nbsp;
  
                                 <picture style="width: 25px; height: 25px;">
                                     <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                     <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                  </picture>
                                    &nbsp;Fuel Type – LPG/Petrol
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
                                        &nbsp;Deposit - 800 &nbsp; &nbsp;

                                        <picture style="width: 25px; height: 25px; display: inline-block;">
                                            <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                            <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                       </picture>
                                      &nbsp;Gearbox - Automatic &nbsp; &nbsp;

                                       <picture style="width: 25px; height: 25px; display: inline-block;">
                                           <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                           <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Fuel Type – LPG/Petrol
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
                                      &nbsp;Deposit - 900 &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                          <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                          <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Gearbox - Automatic &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                         <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Fuel Type – LPG/Petrol
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
                                      &nbsp;Deposit - 400 &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/boite-de-vitesses.webp" type="image/webp">
                                         <img src="img/images/boite-de-vitesses.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Gearbox - Automatic &nbsp; &nbsp;

                                      <picture style="width: 25px; height: 25px; display: inline-block;">
                                         <source srcset="img/webp/pompe-a-essence.webp" type="image/webp">
                                         <img src="img/images/pompe-a-essence.png" alt="" class="img-fluid" style="width: 25px; height: 25px;">
                                      </picture>
                                      &nbsp;Fuel Type – LPG/Petrol
                                   </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div><br>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Submit your application <i class="fa fa-window-restore" aria-hidden="true"></i>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Make a request</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- choose the city --</option>
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
                            <label for="first_name" class="form-label">Fist name <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number <one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option value="" disabled>-- choose the service --</option>
                                <option value="Job offer">Job offer</option>
                                <option value="Drivers" selected>Become a driver</option>
                                <option value="Accommodation assistance">Accommodation assistance</option>
                                <option value="Work permit">Work permit</option>
                                <option value="Other requests">Other requests</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I have read and accepted the <a href="/privacy-policy">Privacy policy</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Make a request to become a <span style="color: #DECE31;">driver</span></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- choose the city --</option>
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
                            <label for="first_name" class="form-label">Fist name <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number <one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <input type="text" class="form-control" id="service" name="service" value="Become a driver" disabled>
                            <input type="text" class="form-control" id="service" name="service" value="Become a driver" hidden>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I have read and accepted the <a href="/privacy-policy">Privacy policy</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Make a request to become a <span style="color: #DECE31;">courier</span></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option value="" disabled selected>-- choose the city --</option>
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
                            <label for="first_name" class="form-label">Fist name <one class="require">*</one> </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name <one class="require">*</one></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number <one class="require">*</one></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <one class="require">*</one></label>
                            <input type="email" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <input type="text" class="form-control" id="service" name="service" value="Become a courier" disabled>
                            <input type="text" class="form-control" id="service" name="service" value="Become a courier" hidden>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I have read and accepted the <a href="/privacy-policy">Privacy policy</a>. <one class="require">*</one></label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>