<x-base-layout>
    <x-slot:title>
        services • sun work
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
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Services</h3>
                    <P>
                        At <span style="color: #DECE31;">SUN WORK</span>, we are committed to providing superior services that meet the specific needs of our drivers and partners.
                        Our mission is to create an environment in which every driver can thrive, by providing them with the tools, support and opportunities they need to succeed.
                    </P>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a>job offer</a></h4>
                            <p class="description">SUN WORK has a recruitment service for candidates wishing to work in various fields in Poland or the European Union</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-checkmark-circled" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a>Legalization</a></h4>
                            <p class="description">SUN WORK supports candidates wishing to reside legally in Poland and throughout Europe.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-home" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a>Accommodation assistance</a></h4>
                            <p class="description">We have an accommodation support department for candidates who want to rent or buy apartments.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-settings" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a>Work permit</a></h4>
                            <p class="description">We support candidates wishing to work in Poland with our official partners and in different fields that we offer.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a>International support</a></h4>
                            <p class="description">We also have a department that supports international candidates wishing to come and settle and work in Poland.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-plus-outline" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a>Others</a></h4>
                            <p class="description">We support our clients in various activities. To find out more, go to the Legalization web page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('components.ui-footer')

</x-base-layout>