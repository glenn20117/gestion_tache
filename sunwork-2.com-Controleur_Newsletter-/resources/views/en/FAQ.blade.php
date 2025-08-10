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
                                <p class="small text-muted">SUN WORK is a 100% Polish company, which supports you in your job search and administrative procedures.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">What Bolt/Uber requirements do we need to meet?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">
                                    <strong>Vehicle</strong>: Less than 10 years old, 4 doors (sedan or SUV), in good condition. </br>
                                    <strong>Vehicle documents</strong>: Registration document, professional insurance, up-to-date technical inspection.</br>
                                    <strong>Driver</strong>: Valid driving license, clean criminal record.</br>
                                    <strong>License</strong>: Taxi license</br>
                                    <strong>Taxation</strong>: Tax registration as an entrepreneur or via a partner company (which we are)
                                </p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">What will my monthly salary be and when will I receive it?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Your salary is relatively linked to your way of working and you can reach up to 10k zloty per month.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">I am a student, can I work for SUN WORK?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Of course we can be a partner.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">How to pay for car cleaning and refueling?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">We are in partnership with entities specialized in this field.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Where should I park my car once the work is completed?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">The car is at your disposal, you can keep it wherever you want while ensuring its safety.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Can I finish work earlier than expected?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Working hours are up to you.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">What type of fuel is used in the cars in your fleet?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">We have hybrid cars with gasoline as fuel.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Can I use the car for private purposes?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">The car is your own rental, its use depends only on you.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">What are the terms of cooperation?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">Have in your possession a valid residence permit, a Polish driving license as well as certain additional documents.</p>
                                <hr>
                            </li>
                            <li class="mb-3">
                                <div class="question-arrow d-flex justify-content-between align-items-center">
                                    <span class="question font-weight-bold">Is working through the app legal?</span>
                                    <i class="bx bxs-chevron-down arrow"></i>
                                </div>
                                <p class="small text-muted">We work completely legally.</p>
                                <hr>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <div class="card-body">
                                <a href="/contact-sunwork" class="readmore">Other questions? <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                            <h1 class="modal-title fs-5 mx-auto" id="staticBackdropLabel">Make a request</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city" required>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Service <one class="require">*</one></label>
                            <select class="form-select" aria-label="Default select example" id="service" name="service" required>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I have read and accepted the privacy policy. <one class="require">*</one></label>
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