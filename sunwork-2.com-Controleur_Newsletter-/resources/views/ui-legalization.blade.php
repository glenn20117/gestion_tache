<x-base-layout>
    <x-slot:title>
        Legalization • sun work
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
                    <h3>Legalization</h3>
                </header>

                <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                        <h5><b>Legalization of work in Poland</b></h5>
                        <br>
                        At <span style="color: #DECE31;">SUN WORK</span>, your team of experienced specialists is ready to provide you with the administrative support
                        you need. We help with: exchange of licenses, making a residence card, appeals, and other issues related to
                        Polish bureaucracy. <span style="color: #DECE31;">SUN WORK</span> is a guarantee of high quality.
                        </p>
                        <div class="justify-content-start">
                            <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Contact us <i class="fa fa-comment"></i>
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
                        <h4><b>Our services regarding legalization</b></h4>
                    </div>
                    <div class="container">
                        <!-- Première ligne -->
                        <div class="row">
                            <!-- Première carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Residence card</h5>
                                        <p class="card-text">We support all people wishing to obtain or renew their residence permit in Poland.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Driving license</h5>
                                        <p class="card-text">We help you obtain your driving license so you can start working safely for our partners..</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Insurance</h5>
                                        <p class="card-text">Need insurance? SUN WORK helps you obtain insurance to cover any potential danger.</p>
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
                                        <h5 class="card-title">Work permit</h5>
                                        <p class="card-text">As a SUN WORK employee or not, we support you in your process of obtaining a work permit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Deuxième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Legal assistance</h5>
                                        <p class="card-text">100% professional support. Our experts will help you solve all your problems related to Polish bureaucracy.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Troisième carte -->
                            <div class="col-lg-4 col-md-4 mb-4">
                                <div class="card text-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Administrative assistance</h5>
                                        <p class="card-text">Are you new or resident in Poland? We also support you in all your administrative procedures.</p>
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
                    <h5><b>Why cooperate with <span style="color: #DECE31;">SUN WORK</span>?</b></h5>
                </div>
                <br>
                <div class="row about-container">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp order-text">
                            <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">99% of our clients receive a residence permit</a></h4>
                            <p class="description">99% of our clients achieve positive results thanks to the hard work of our experts.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Guaranteed results or refund</a></h4>
                            <p class="description">We only work with professionals. We are confident in the quality and results of our services. By asking us for our support, you are sure to achieve a positive result.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-text">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Full support</a></h4>
                            <p class="description">We support you from start to finish of your process. You can count on us.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="">Qualified specialists</a></h4>
                            <p class="description">Our team is made up only of seasoned experts, ready to offer you our services and solve your problems.</p>
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
                                <option value="Legalization" selected>Legalization</option>
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
                            <button type="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>