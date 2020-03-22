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
                <li><a href="#reciept">{{__('front.menu.menu_06')}}</a></li>
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
                <h1>{{__('front.header.title1')}}<br>{{__('front.header.title2')}}</h1>
                <h2>{{__('front.header.subtitle')}}</h2>
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

            <div class="row" id="about-us">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-in" data-aos-delay="100">
                            {{__('front.about.about_us_title')}}
                        </h3>
                        <p data-aos="fade-in">
                            {{__('front.about.content')}}
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4><a href="#">{{__('front.about.vision_title')}} </a></h4>
                                <p>{{__('front.about.vision_content')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4><a href="#">{{__('front.about.mission_title')}}</a></h4>
                                <p>{{__('front.about.mission_content')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4><a href="#">{{__('front.about.objectives_title')}}</a></h4>
                                <p>{{__('front.about.objectives_content')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4><a href="#">{{__('front.about.values_title')}}</a></h4>
                                <p>{{__('front.about.values_content')}} </p>
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
                <h2 data-aos="fade-in">{{__('front.products.title')}}</h2>
                <p data-aos="fade-in">{{__('front.products.desc')}}</p>
            </div>

            <div class="row">

                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/'.__('front.products.items.photos.A'))}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">{{__("front.products.items.titles.A")}}</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.A.A")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.A.B")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.A.C")}}
                                </li>
                            </ul>
                            <p class="card-text">
                                <a title="{{__("front.products.items.desc.A")}}">
                                    {{__("front.products.items.desc.A")}}
                                </a>

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/'.__('front.products.items.photos.B'))}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">{{__("front.products.items.titles.B")}}</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.B.A")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.B.B")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.B.C")}}
                                </li>
                            </ul>
                            <p class="card-text">
                                {{__("front.products.items.desc.B")}}
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('design/img/'.__('front.products.items.photos.C'))}}" alt="...">
                        </div>
                        <div class="card-body stylish">
                            <h5 class="card-title"><a href="">{{__("front.products.items.titles.C")}}</a></h5>
                            <ul>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.C.A")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.C.B")}}
                                </li>
                                <li><i class="icofont-check"></i>
                                    {{__("front.products.items.li.C.C")}}
                                </li>
                            </ul>
                            <p class="card-text">
                                {{__("front.products.items.desc.C")}}
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
                <h2 data-aos="fade-in">{{__('front.contact.specific_keyword')}}</h2>
                <p data-aos="fade-in">{{__('front.contact.desc')}}</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h3>{{__('front.contact.address.title')}}</h3>
                                <p>{{__('front.contact.address.content')}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-envelope"></i>
                                <h3>{{__('front.contact.form.email')}}</h3>
                                <p> info@meazafood.com <br>contact@@meazafood.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone-call"></i>
                                <h3>{{__('front.contact.form.phone')}}</h3>
                                <p>+90 531 892 74 13<br>+90 531 892 74 13</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                        <form action="{{route('send_email')}}" method="post" class="php-email-form">
                            {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="name">{{__('front.contact.form.name')}}</label>
                                <input type="text" name="full_name" class="form-control" id="name" placeholder="{{__('front.contact.form.name')}}" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">{{__('front.contact.form.email')}}</label>
                                <input type="email" name="full_email" class="form-control" id="email" placeholder="{{__('front.contact.form.email')}}" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">{{__('front.contact.form.subject')}}</label>
                            <select class="form-control" name="subject" id="subject" required>
                                <option value="{{__('front.contact.form.subject_options.01.value')}}">{{__('front.contact.form.subject_options.01.content')}}</option>
                                <option value="{{__('front.contact.form.subject_options.02.value')}}">{{__('front.contact.form.subject_options.02.content')}}</option>
                                <option value="{{__('front.contact.form.subject_options.03.value')}}">{{__('front.contact.form.subject_options.03.content')}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">{{__('front.contact.form.body')}}</label>
                            <textarea class="form-control" name="message_body" id="message" rows="3" style="resize:none;" placeholder="{{__('front.contact.form.body')}}" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit">{{__('front.contact.form.submit')}}</button>

                        </div>
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
                            <a class="nav-link p-0" href="{{route('route_start')}}/" class="text-white" title="{{__('front.general.title')}}">{{__('front.footer_links.col2.0')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{route('route_start')}}/#about-us" class="text-white" title="{{__('front.general.title')}}">{{__('front.footer_links.col2.1')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{route('route_start')}}/#contact" class="text-white" title="{{__('front.general.title')}}">{{__('front.footer_links.col2.3')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{route('route_start')}}/#products" class="text-white" title="{{__('front.general.title')}}">{{__('front.footer_links.col2.2')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#" title="{{__('front.menu.menu_06')}}">{{__('front.menu.menu_06')}} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="{{route('route_start')}}/login"  title="{{__('front.general.title')}}">
                                {{__('front.footer_links.col3.3')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link p-0"href="#!"  title="{{__('front.general.title')}}">
                                {{__('front.footer_links.col3.2')}}    </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#!"  title="{{__('front.general.title')}}">
                                {{__('front.footer_links.col4.0')}}    </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#!"  title="{{__('front.general.title')}}">
                                {{__('front.footer_links.col4.1')}}  </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright {{__('front.footer.copyrights')}}
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
