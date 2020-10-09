@extends('layouts.app')

@section('content')

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                    <li>
                                        <a href="#banner-section">Home</a>
                                    </li>
                                    <li>
                                        <a href="#about-section">About</a>
                                    </li>
                                    <li>
                                        <a href="#feature-section">Feature</a>
                                    </li>
                                    <li>
                                        <a href="#price-section">Price</a>
                                    </li>
                                    <li>
                                        <a href="#testimonial-section">Testimonial</a>
                                    </li>
                                    <li>
                                        <a href="#download-section">Download</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Start header section -->

    <!-- Start banner section -->
    <section class="banner-section relative section-gap-full" id="banner-section">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left">
                    <h1 class="text-uppercase">Hi, I'm Dope app.</h1>
                    <p>Ultimate solution to make stunning mobile app landing around the world. Lorem ipsum dolor, sit
                        amet consectetur
                        adipisicing. </p>
                    <a class="video-btn primary-btn" href="about-us.html">About More</a>
                </div>
                <div class="col-md-6 banner-right text-center">
                    <img class="img-fluid" src="img/3000.png" alt="">
                </div>
            </div>
        </div>
        <div class="wave">
            <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
                preserveAspectRatio="none">
                <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path>
                <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path>
                <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
            </svg>
        </div>
    </section>
    <!-- End banner section -->

    <!-- Start featured section -->
    <section class="featured-section">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">As Featured In</h2>
            </div>
            <div class="row align-item-center">
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="img/logo/logo1.png" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="img/logo/logo2.png" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="img/logo/logo3.png" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 single-logo">
                    <img class="img-fluid" src="img/logo/logo4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End featured section -->

    <!-- Start about section -->
    <section class="about-section section-gap-full relative" id="about-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-12 about-left">
                    <img class="img-fluid" src="img/app-img.png" alt="">
                </div>
                <div class="col-lg-5 col-md-7 about-right">
                    <h3>What Is Dope App?</h3>
                    <h1>The Most Beautiful Theme For Your App</h1>
                    <ul>
                        <li class="d-flex">
                            <div class="icon">
                                <span class="ti-layout-media-center-alt"></span>
                            </div>
                            <div class="details">
                                <h4>Retina Ready</h4>
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoyed.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="icon">
                                <span class="ti-crown"></span>
                            </div>
                            <div class="details">
                                <h4>Premium Quality</h4>
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoyed.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="icon">
                                <span class="ti-headphone-alt"></span>
                            </div>
                            <div class="details">
                                <h4>Excellent Support</h4>
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoyed.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="floating-shapes">
            <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'>
                <img src="img/shape/fl-shape-1.png" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'>
                <img src="img/shape/fl-shape-2.png" alt="">
            </span>
            <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'>
                <img src="img/shape/fl-shape-3.png" alt="">
            </span>
            <span data-parallax='{"x": -20, "y": 180}'>
                <img src="img/shape/fl-shape-4.png" alt="">
            </span>
            <span data-parallax='{"x": 300, "y": 70}'>
                <img src="img/shape/fl-shape-5.png" alt="">
            </span>
            <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'>
                <img src="img/shape/fl-shape-6.png" alt="">
            </span>
            <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'>
                <img src="img/shape/fl-shape-7.png" alt="">
            </span>
            <span data-parallax='{"x": 60, "y": -100}'>
                <img src="img/shape/fl-shape-9.png" alt="">
            </span>
            <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'>
                <img src="img/shape/fl-shape-10.png" alt="">
            </span>
        </div>
    </section>
    <!-- End about section -->

    <!-- Start feature section -->
    <section class="feature-section section-gap-full" id="feature-section">
        <div class="container">
            <div class="row align-items-center feature-wrap">
                <div class="col-lg-4 header-left">
                    <h1>
                        An exceptionally unique experience to you
                    </h1>
                    <a class="primary-btn" href="about-us.html">Know More
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row features-wrap">
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-palette"></span>
                                <h3>Awesome Design</h3>
                                <p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved
                                    about helplessly as he looked.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-heart"></span>
                                <h3>Made With Love</h3>
                                <p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved
                                    about helplessly as he looked.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-loop"></span>
                                <h3>Constant Update</h3>
                                <p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved
                                    about helplessly as he looked.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-headphone-alt"></span>
                                <h3>Full Free Chat</h3>
                                <p>
                                    His many legs, pitifully thin compared with the size of the rest of him, waved
                                    about helplessly as he looked.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <!-- Start price section -->
    <section class="price-section section-gap-full" id="price-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 price-left">
                    <h4>
                        Our Pricing Plan </br> and Options
                    </h4>
                    <p>
                        Far curiosity incommode now led smallness allowance. Favour bed assure son things yet.
                    </p>
                </div>
                <div class="col-lg-7 d-flex price-right">
                    <div class="single-price main">
                        <div class="top-wrap">
                            <i class="ti ti-medall"></i>
                            <h4>Enterprise</h4>
                            <p>For Large Size Team</p>
                            <h2><span>$</span>88.0</h2>
                        </div>
                        <div class="bottom-wrap">
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>1000 Max Conntection</span>
                                    <i class="ti ti-check"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>1000 Max Conntection</span>
                                    <i class="ti ti-check"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Additional Option</span>
                                    <i class="ti ti-check"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Lifetime Support</span>
                                    <i class="ti ti-check"></i>
                                </li>
                            </ul>
                            <a href="#" class="primary-btn primary-btn-w d-block mx-auto">Select Plan</a>
                        </div>
                    </div>
                    <div class="single-price">
                        <div class="top-wrap">
                            <i class="ti ti-briefcase"></i>
                            <h4>Free</h4>
                            <p class="relative">For Personal Use</p>
                            <h2 class="relative"><span>$</span>00.0</h2>
                        </div>
                        <div class="bottom-wrap">
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>1000 Max Conntection</span>
                                    <i class="ti ti-check"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>1000 Max Conntection</span>
                                    <i class="ti ti-check"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Additional Option</span>
                                    <i class="ti ti-close"></i>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Lifetime Support</span>
                                    <i class="ti ti-close"></i>
                                </li>
                            </ul>
                            <a href="#" class="primary-btn d-block mx-auto">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End price section -->

    <!-- Start explore section -->
    <section class="explore-section section-gap-full relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 explore-left">
                    <h3>Explore More</h3>
                    <h1>Other Features</h1>
                    <p>
                        The bedding was hardly able to cover it and seemed ready to slide off any moment.His many legs,
                        pitifully thin compared with
                        the size of the rest of him.
                    </p>
                    <div class="d-flex counter-wrap">
                        <div class="single-counter">
                            <h2>2.5K+</h2>
                            <p>Download</p>
                        </div>
                        <div class="single-counter">
                            <h2>2K+</h2>
                            <p>Review</p>
                        </div>
                        <div class="single-counter">
                            <h2>3.4K+</h2>
                            <p>Active User</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 explore-right"></div>
            </div>
        </div>
    </section>
    <!-- End explore section -->

    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap-full" id="testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 testimonial-left">
                    <h2>What People Says</h2>
                    <p>
                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorperi.
                    </p>
                </div>
                <div class="col-lg-8 testimonial-right">
                    <div class="testimonial-carusel owl-carousel" id="testimonial-carusel">
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Alice Johnson</h4>
                                    <p>Business Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Amber Mcdonald</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Rhonda Barnes</h4>
                                    <p>UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Alice Johnson</h4>
                                    <p>Business Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Amber Mcdonald</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="img/avatar3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h4>Rhonda Barnes</h4>
                                    <p>UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->

    <!-- Start screenshot section -->
    <section class="screenshot-section section-gap-full">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">App Screenshots</h2>
            </div>
            <div class="row">
                <div class="screenshot_slider owl-carousel" id="screenshot-carusel">
                    <div class="item">
                        <img src="img/screen/screen1.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen2.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen3.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen4.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen5.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen6.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen7.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen1.jpg" alt="" title="">
                    </div>
                    <div class="item">
                        <img src="img/screen/screen2.jpg" alt="" title="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End screenshot section -->

    <!-- Start faq section -->
    <section class="home-faq-section faq-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <h2>Frequently Asked Question</h2>
                    <p>
                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorperi.
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est voluptatibus, tempora odio dicta
                        molestiae recusandae delectus perferendis eveniet aspernatur voluptatum earum dolore
                        necessitatibus odit perspiciatis eos, quidem soluta autem esse.
                    </p>
                </div>
                <div class="col-lg-7">
                    <dl class="accordion">
                        <dt>
                            <a href="#" class="active">Started several mistake joy say painful removed reached end.</a>
                        </dt>
                        <dd>
                            Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                            consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                            new shade drift hopes small. So otherwise commanded sweetness we improving.
                        </dd>
                        <dt>
                            <a href="#">Although moreover mistaken kindness me feelings do be marianne?</a>
                        </dt>
                        <dd>
                            Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                            consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                            new shade drift hopes small. So otherwise commanded sweetness we improving.
                        </dd>
                        <dt>
                            <a href="#">By in no ecstatic wondered disposal my speaking?</a>
                        </dt>
                        <dd>
                            Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She
                            consisted consulted elsewhere happiness disposing household any old the. Widow downs you
                            new shade drift hopes small. So otherwise commanded sweetness we improving.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq section -->

    <!-- Start download section -->
    <section class="download-section section-gap-full" id="download-section">
        <div class="container">
            <div class="row download-wrap justify-items-between align-items-center">
                <div class="col-lg-6">
                    <h1>Get Started for Free</h1>
                    <p>
                        To take a trivial example, which of us ever undertakes laborious physical exercise.right to
                        find fault with a man
                    </p>
                </div>
                <div class="col-lg-6 dload-btn">
                    <a href="#" class="primary-btn">
                        <span>Google Play</span>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"
                            style="fill:#fff">
                            <g id="surface1">
                                <path style=" " d="M 7.125 2 L 28.78125 23.5 L 34.71875 17.5625 L 8.46875 2.40625 C 8.03125 2.152344 7.5625 2.011719 7.125 2 Z M 5.3125 3 C 5.117188 3.347656 5 3.757813 5 4.21875 L 5 46 C 5 46.335938 5.070313 46.636719 5.1875 46.90625 L 27.34375 24.90625 Z M 36.53125 18.59375 L 30.1875 24.90625 L 36.53125 31.1875 L 44.28125 26.75 C 45.382813 26.113281 45.539063 25.304688 45.53125 24.875 C 45.519531 24.164063 45.070313 23.5 44.3125 23.09375 C 43.652344 22.738281 38.75 19.882813 36.53125 18.59375 Z M 28.78125 26.3125 L 6.9375 47.96875 C 7.300781 47.949219 7.695313 47.871094 8.0625 47.65625 C 8.917969 47.160156 26.21875 37.15625 26.21875 37.15625 L 34.75 32.25 Z "></path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="primary-btn">
                        <span>App Store</span>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 30 30"
                            style="fill:#fff;">
                            <path d="M25.565,9.785c-0.123,0.077-3.051,1.702-3.051,5.305c0.138,4.109,3.695,5.55,3.756,5.55 c-0.061,0.077-0.537,1.963-1.947,3.94C23.204,26.283,21.962,28,20.076,28c-1.794,0-2.438-1.135-4.508-1.135 c-2.223,0-2.852,1.135-4.554,1.135c-1.886,0-3.22-1.809-4.4-3.496c-1.533-2.208-2.836-5.673-2.882-9 c-0.031-1.763,0.307-3.496,1.165-4.968c1.211-2.055,3.373-3.45,5.734-3.496c1.809-0.061,3.419,1.242,4.523,1.242 c1.058,0,3.036-1.242,5.274-1.242C21.394,7.041,23.97,7.332,25.565,9.785z M15.001,6.688c-0.322-1.61,0.567-3.22,1.395-4.247 c1.058-1.242,2.729-2.085,4.17-2.085c0.092,1.61-0.491,3.189-1.533,4.339C18.098,5.937,16.488,6.872,15.001,6.688z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End download section -->

    <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <a href="#">
                        <img src="img/logo-w.png" alt="">
                    </a>
                    <p class="copyright-text">&copy; 2018 Design With
                        <i class="fa fa-heart" aria-hidden="true"></i> By
                        <a href="http://dopetheme.com" target="_blank">Dope Theme</a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <ul id="social">
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">Affiliate Program</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditionss</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>

@endsection
