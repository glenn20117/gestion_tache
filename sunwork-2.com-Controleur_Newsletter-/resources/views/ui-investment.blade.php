<x-base-layout>
    <x-slot:title>
        Investment • sun work
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
                    <h3>Investment</h3>
                    <p>We provide employment opportunities while making it easier for investors to increase capital.</p>
                </header>

                <div class="row about-container align-items-center">
                    <div class="col-lg-6 content order-lg-1 order-2" style="text-align: justify;">
                        <h5><b>Earn from 2,500 zł per week on taxi or delivery.</b></h5>
                        <p>
                            Work on your own car or on modern luxury cars, such as high-end vehicles or classic cars, without having to pay
                            bond fees. As an automotive professional, you will have the opportunity to perform a variety of tasks, from basic
                            mechanical repairs to high-end feature additions, to advanced maintenance services such as engine tune-ups and
                            electronic diagnostics. Additionally, by working with these prestigious vehicles, you will develop valuable expertise
                            and a deep understanding of modern automotive technology.
                        </p>
                        <p>
                            Additionally, as an independent auto technician, you'll enjoy regular, predictable pay, with payments made weekly.
                            This financial stability will make it easier for you to plan and manage your personal finances. You will also be able
                            to take advantage of the flexibility offered by this job, adapting your schedule to your needs and preferences.
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
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Return on investment after 15 to 18 months.</h4>
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
                                        <h4 class="title" style="margin: 0; flex-grow: 1;">Stable monthly profits.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="justify-content-start">
                        <button type="button" class="btn btn-primary btn-submit-rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Submit your application <i class="fa fa-window-restore" aria-hidden="true"></i>
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
                                <option value="Legalization">Legalization</option>
                                <option value="Accommodation assistance">Accommodation assistance</option>
                                <option value="Investment" selected>Investment</option>
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