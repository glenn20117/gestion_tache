<x-base-layout>
    <x-slot:title>
        about-us • sun work
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

                <header class="section-header">
                    <h3>About Us</h3>
                </header>
                <br><br><br>
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <p>
                            <b>
                                We are partners of <one class="bolt">Bolt</one>, <two class="boltfood1">Bolt</two>
                                <three class="boltfood2">Food</three>, <four class="glovo">Glovo</four>,
                                <five class="uber">Uber<five>, <six class="ubereats1">Uber</six>
                                        <seven class="ubereats2">Eats</seven> and <eight class="freenow">FREENOW</eight> in Poland.
                            </b>
                            <br><br>
                            At <span style="color: #DECE31;">SUN WORK</span>, we are proud to partner with market leaders such as Uber, Bolt and FreeNow in Poland. Since our inception, we have taken a key position in the transport
                            services sector, offering unrivalled opportunities to taxi drivers across the country. Our commitment is not limited to providing quality services; we also aim to build
                            strong relationships with our drivers, providing them with ongoing support to improve their skills and maximise their income. By choosing to work with us, drivers benefit
                            from training programmes, attractive financial incentives and dedicated customer service, enabling them to thrive in a competitive environment.
                        </p>
                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="img/about-img.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="img/about-extra-1.svg" class="img-fluid" alt="sun work">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 order-text">
                        <h4>We remain firmly committed to our driver partners.</h4>
                        <p>
                            With the support of our partners, we guarantee drivers a stable income every day. Whether you drive for Uber in Wroclaw or other cities in Poland, or you are considering joining the Bolt and FreeNow taxi
                            fleet or Uber, we are here to support you throughout your journey.
                        </p>
                        <p>
                            Our growth has been rapid and significant. We have already expanded our fleet and now operate in five cities in Poland. Every day, new drivers join our ranks, strengthening our team and solidifying our commitment
                            to building a strong and vibrant community.
                        </p>
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 content order-lg-1 order-2 order-text">
                        <h4>At <span style="color: #DECE31;">SUN WORK</span>, we believe in strong cooperation with our partners and collaborators to provide quality service to our customers.</h4>
                        <p>
                            We consider our drivers as pillars of our team and are committed to supporting them at every stage of their career. As a partner, you will not only have access to a reliable
                            and efficient platform to grow your taxi business, but also to a collaborative and inclusive work environment where your efforts are recognized and valued. Whether you are an
                            experienced driver or looking to join our company for the first time, we will provide you with the resources and support you need to achieve your goals.<br>
                            #Together, providing our customers with unparalleled service.
                        </p>
                        <p>
                            Join us today and find out why many drivers make <span style="color: #DECE31;">SUN WORK</span> their trusted partner in the transport sector in Poland.
                        </p>
                    </div>
                    <div class= "col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <picture>
                           <source srcset="img/webp/about-extra-3.webp" type="image/webp">
                           <img src="img/images/about-extra-3.jpg" class="img-fluid" alt="Image optimisée">
                      </picture>
                    </div>

                </div>

                <br><br>

            </div>
        </section><!-- #about -->
    </main>
    @include('components.ui-footer')

</x-base-layout>