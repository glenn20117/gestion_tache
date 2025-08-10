<x-base-layout>
    <x-slot:title>
        Contact us • sun work
    </x-slot>

    @include('components.ui-header')
    <br><br>
    <section id="contact">
        <div class="container-fluid">

            <div class="alert-container">
                <div class="alert-wrapper">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible text-center slide-down" role="alert" id="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
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

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe width="100%" height="312px" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=fr&amp;q=Antoniego%20Madali%C5%84skiego%203,%2050-443%20Wroc%C5%82aw,%20Poland+(Sun%20Work)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>Wrocław, Poland</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>contact@thesunwork.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+48729682370</p>
                        </div>
                    </div>
                    <div class="form">
                        <form action="{{ route('email-contact') }}" method="post" role="form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email_address" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </button></div><br>
                            <div class="text-center">
                                @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                                    {{ Session::get('message') }}
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.ui-footer')
    
</x-base-layout>