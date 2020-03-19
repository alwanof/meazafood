<!doctype html>
<html lang="{{session('locale')}}">
<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{__('front.about.content')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Flag-icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('theme/img/logo.png')}}" type="image/x-icon">



    <title>{{__('front.title')}} | {{__('front.default_page_name')}}</title>
    <!-- Vendor CSS Files -->
    <link href="{{asset('design/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('design/css/style.css')}}" rel="stylesheet">

</head>
<body>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <a href="{{route('route_start')}}">
                <img src="{{asset('design/img/logo.png')}}" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
            </a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li ><a href="{{route('route_start')}}" title="{{__('front.general.title')}}">{{__('front.menu.menu_01')}}</a></li>
                <li><a href="{{route('route_start')}}#about-us" title="{{__('front.general.title')}}">{{__('front.menu.menu_02')}}</a></li>
                <li><a href="{{route('route_start')}}#products" title="{{__('front.general.title')}}">{{__('front.menu.menu_03')}}</a></li>
                <li><a href="#reciept">Reciept</a></li>
                <li><a href="{{route('route_start')}}#contact" title="{{__('front.general.title')}}">{{__('front.menu.menu_04')}}</a></li>
                <li class="drop-down"><a href="">{{__('front.languages.title')}}</a>
                    <ul>
                        <li><a href="{{route('switcher','ar')}}">{{__('front.languages')[0]}}</a></li>
                        <li><a href="{{route('switcher','en')}}">{{__('front.languages')[1]}}</a></li>
                        <li><a href="{{route('switcher','amh')}}">{{__('front.languages')[2]}}</a></li>
                        <li><a href="{{route('switcher','tig')}}">{{__('front.languages')[3]}}</a></li>
                        <li><a href="{{route('switcher','sw')}}">{{__('front.languages')[4]}}</a></li>
                        <li><a href="{{route('switcher','gr')}}">{{__('front.languages')[5]}}</a></li>

                    </ul>
                </li>

                <li class="get-started"><a href="{{url('/login')}}" title="{{__('front.general.title')}}">{{__('front.menu.menu_05')}}</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                <h1>Meazafood<br>Save You Time</h1>
                <h2>Specializes in East African “Habasha” prepared and partially prepared food</h2>
                <a href="#about" class="btn-get-started scrollto">BE AGENT</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <img src="{{asset('design/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-se display-3" data-aos="flip-right"></i>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-de display-3" data-aos="flip-right"></i>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-sa display-3" data-aos="flip-right"></i>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-et display-3" data-aos="flip-right"></i>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6" >
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-er display-3" data-aos="flip-right"></i>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6" data-aos="flip-right">
                    <div class="client-logo">
                        <i class="flag-icon flag-icon-us display-3" data-aos="flip-right"></i>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-in" data-aos-delay="100">
                            About Us
                        </h3>
                        <p data-aos="fade-in">
                            MEAZA specializes in East African “Habasha” prepared and partially prepared food. Our products mainly focus on the “Habasha Cuisine” particularly the spicy of them “Zigni, Pasta, chips, etc. in a way that maintains its nutritional value along with freshness and safety.
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4><a href="#">Vision </a></h4>
                                <p>To keep up with the global nature of today world’s life-style tempo without the dismissal of unique cultural features.To help you to stay connected with the taste, flavor and mood that keep you in touch with your uniqueness. </p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4><a href="#">Mission</a></h4>
                                <p>To save you time and effort of preparing your favorite meal, not to mention other environmental and safety side effects.To bring your own or favorite meal to you at the time and place you choose.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4><a href="#">Objectives</a></h4>
                                <p>To grow as a difference-making leading company in the domain of food industry. <br>To start a real different and innovative means of communications between the citizens of our globe that may enrich their mutual understanding of being the genuine makers of their own civilization rather than merely consumers.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4><a href="#">Values</a></h4>
                                <p>Preserving biodiversity and maintaining the ecosystems balance is on the top.To emphasize the importance of the human and environment friendly organic food. To deal carefully with the hard equation of business vs integrity. </p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="products" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Products</h2>
                <p data-aos="fade-in">We stand as a prominent contributor to the international efforts to preserve environmental health and sound hygienic lifestyle. </p>
            </div>

            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/services-1.jpg')}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">Berbere Tomato Sause</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    Meaza is a best Habesha organic home style, Berbere Tomato sauce with different spices. 18.9 Ounce ( 530 g).
                                </li>
                                <li><i class="icofont-check"></i>
                                    20 feet container (MOQ).
                                </li>
                                <li><i class="icofont-check"></i>
                                    FOB unit Price.
                                </li>
                            </ul>
                            <p class="card-text">
                                <a title="Meaza is a tasty combination of Berbere and spices, capers and 100% sun ripened organic tomatoes,Onion and garlic, delivering a hot and smooth spicy touch in one of the most classic Abyssinian recipes. Prepared without preservatives in the traditional way, this Berber tomato sauce is ready to give your, Zigni, Doro wet, Fata and Pasta with  the unique taste of genuine Abyssinian cuisine.">
                                    Meaza is a tasty combination of Berbere and spices, capers and 100% sun ripened organic tomatoes,Onion and garlic
                                </a>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/services-2.jpg')}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">Chips</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    Meaza Berbere Spice  Chips 170g Pack.
                                </li>
                                <li><i class="icofont-check"></i>
                                    20 feet container (MOQ).
                                </li>
                                <li><i class="icofont-check"></i>
                                    FOB unit Price.
                                </li>
                            </ul>
                            <p class="card-text">
                                Every day to the moment get-together, get pleasure from the instant with Meaza potato chips. Deliciously, hot fresh-tasting and tender,
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/services-3.jpg')}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">Teff Pasta</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    Meaza Teff Pasta gluten-free, EKO 400 g
                                </li>
                                <li><i class="icofont-check"></i>
                                    20 feet container (MOQ).
                                </li>
                                <li><i class="icofont-check"></i>
                                    FOB unit Price.
                                </li>
                            </ul>
                            <p class="card-text">
                                A super good gluten-free paste on teff and corn.  This is a pasta for you who are gluten allergy or for those who love organic pasta but who think about what you put in you.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Contact</h2>
                <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Divan Residence at Bomonti Plaza Cumhuriyet, Harika Sk. No: 4, 34380 Şişli/İstanbul </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p> info@meazafood.com <br>contact@@meazafood.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+90 531 892 74 13<br>+90 531 892 74 13</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container" data-aos="fade-up">

            <div class="row  justify-content-center">
                <div class="col-lg-6">
                    <a href="index.html"><img src="{{asset('design/img/logo.png')}}" alt="" class="img-fluid"></a>
                    <p>We stand as a prominent contributor to the international efforts to preserve environmental health and sound hygienic lifestyle. </p>
                </div>
            </div>

            <div class="row footer-newsletter justify-content-center">
                <div class="col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Reciept </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Agent Area</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Meaza</span></strong>. All Rights Reserved
        </div>
        <div class="credits" style="display: none;">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Vendor JS Files -->
<script src="{{asset('design/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('design/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('design/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('design/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('design/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('design/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('design/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('design/js/main.js')}}"></script>
</body>
</html>
