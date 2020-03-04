<!doctype html>
<html lang="{{session('locale')}}">
<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{__('front.about.content')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('theme/img/logo.png')}}" type="image/x-icon">

    @if(session('locale')=='ar')
        <link rel="stylesheet" href="{{ asset('theme/rtl.css') }}" >
    @else
        <link href="{{asset('theme/style.css')}}" rel="stylesheet">
    @endif

    <title>{{__('front.title')}} | {{__('front.default_page_name')}}</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @if(session('locale') == 'tig')
        <style>
            .navigation-bar li {
                margin: 0 0 !important;
            }
        </style>
    @endif
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-white bg-white mt-4  sticky-top navigation-menu">
    <div class="container">

        <!--  Image based logo  -->
        <a class="navbar-brand" href="{{route('route_start')}}"><img src="{{asset('theme/img/logo.png')}}" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navigation-bar">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('route_start')}}" title="{{__('front.general.title')}}">
                        {{__('front.menu.menu_01')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('route_start')}}#about-us" title="{{__('front.general.title')}}">
                        {{__('front.menu.menu_02')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('route_start')}}#products" title="{{__('front.general.title')}}">
                        {{__('front.menu.menu_03')}}
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('route_start')}}#contact" title="{{__('front.general.title')}}">
                        {{__('front.menu.menu_04')}}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('front.languages.title')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','ar')}}">
                            - {{__('front.languages')[0]}}
                        </a>
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','en')}}">
                            - {{__('front.languages')[1]}}
                        </a>
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','amh')}}">
                            - {{__('front.languages')[2]}}
                        </a>
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','tig')}}">
                            - {{__('front.languages')[3]}}
                        </a>
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','sw')}}">
                            - {{__('front.languages')[4]}}
                        </a>
                        <a class="nav-link {{session('locale') == 'ar' ? 'text-right':'text-left'}}" href="{{route('switcher','gr')}}">
                            - {{__('front.languages')[5]}}
                        </a>
                    </div>
                </li>
                <li class="nav-item btn-main">
                    <a class="nav-link bg-main" href="{{url('/login')}}" title="{{__('front.general.title')}}">
                        <i class="fa fa-users"></i>
                        {{__('front.menu.menu_05')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('theme/img/slider/01.jpg')}}" class="d-block w-100 img-fluid" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
        </div>
        <div class="carousel-item">
            <img src="{{asset('theme/img/slider/2.jpeg')}}" class="d-block w-100 img-fluid" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
        </div>
        <div class="carousel-item">
            <img src="{{asset('theme/img/slider/3.jpeg')}}" class="d-block w-100 img-fluid" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5 mb-5 about-us" id="about-us">
    <div class="row">
        <div class="col-lg-12">
            <h2 align="center">
                {{__('front.about.about_us_title')}}
            </h2>
        </div>
        <div class="col-lg-6 mt-5">
            <img src="{{asset('theme/img/about.jpg')}}" class="img-fluid" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
        </div>
        <div class="col-lg-6 mt-5">
            <p class="{{session('locale') == 'ar' ? 'ar':'en'}} aboutus-description">
                {{__('front.about.content')}}
            </p>
            <ul class="nav nav-tabs {{session('locale') == 'ar' ? 'ar pr-0':'en'}}" id="myTab" role="tablist">
                <li class="nav-item active {{session('locale') == 'ar' ? 'ar':'en'}}">
                    <a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">
                        {{__('front.about.vision_title')}}
                    </a>
                </li>
                <li class="nav-item {{session('locale') == 'ar' ? 'ar':'en'}}">
                    <a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">
                        {{__('front.about.mission_title')}}
                    </a>
                </li>
                <li class="nav-item {{session('locale') == 'ar' ? 'ar':'en'}}">
                    <a class="nav-link" id="objectives-tab" data-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="false">
                        {{__('front.about.objectives_title')}}
                    </a>
                </li>
                <li class="nav-item {{session('locale') == 'ar' ? 'ar':'en'}}">
                    <a class="nav-link" id="values-tab" data-toggle="tab" href="#values" role="tab" aria-controls="values" aria-selected="false">
                        {{__('front.about.values_title')}}
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active aboutus-content-tabs" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                    <h2 class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.vision_title')}}
                    </h2>
                    <p class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.vision_content')}}
                    </p>
                </div>
                <div class="tab-pane fade aboutus-content-tabs" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                    <h2 class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.mission_title')}}
                    </h2>
                    <p class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.mission_content')}}
                    </p>
                </div>
                <div class="tab-pane fade aboutus-content-tabs" id="objectives" role="tabpanel" aria-labelledby="objectives-tab">
                    <h2 class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.objectives_title')}}
                    </h2>
                    <p class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.objectives_content')}}
                    </p>
                </div>
                <div class="tab-pane fade aboutus-content-tabs" id="values" role="tabpanel" aria-labelledby="values-tab">
                    <h2 class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.values_title')}}
                    </h2>
                    <p class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                        {{__('front.about.values_content')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container products" id="products">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <h3 align="center">
                {{__('front.products.section_title')}}
            </h3>
        </div>
    </div>
    <div class="row">
        @for($i = 1; $i < 4 ; $i++)

            <div class="col-md-4 mb-3">
                <div class="card product">
                    <img src="{{asset('theme/img/gallery/'.$i.'.jpg')}}" class="card-img-top" alt="{{__('front.general.alt')}}" title="{{__('front.general.title')}}">
                    <div class="card-body p-0">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="heading{{$i}}">
                                    <h2 class="mb-0 {{session('locale') == 'ar' ? 'ar':'en'}}">
                                        <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                            {{__('front.products.product_0'.$i.'.title')}}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse{{$i}}" class="collapse" aria-labelledby="heading{{$i}}" data-parent="#accordionExample">
                                    <div class="card-body {{session('locale') == 'ar' ? 'ar':'en'}}">
                                        {{__('front.products.product_0'.$i.'.description')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endfor
    </div>
</div>

<div class="container-fluid" id="contact">
    <div class="row">
        <div class="col-lg-12 mt-5 contact-info">
            <h3 align="center" class="mt-5">
                {{__('front.contact.title')}}
            </h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-6 mt-5 pl-5 pt-5 bg-light contact-content">
            <h3 class="{{session('locale') == 'ar' ? 'ar':'en'}}">
                {{__('front.contact.address.title')}}
            </h3>
            <address>
                <p class="{{session('locale') == 'ar' ? 'text-right':'text-left'}} mt-3">
                    <i class="fas fa-location-arrow"></i>

                    {{__('front.contact.address.content')}}
                </p>
                <p class="{{session('locale') == 'ar' ? 'text-right':'text-left'}}">
                    <i class="fas fa-phone-alt"></i>
                    {{__('front.contact.tel')}}
                </p>
                <p class="{{session('locale') == 'ar' ? 'text-right':'text-left'}}">
                    <i class="fa fa-envelope-o"></i>
                    {{__('front.contact.email')}}
                </p>
                <p class="{{session('locale') == 'ar' ? 'text-right':'text-left'}}">
                    <i class="fas fa-clock"></i>
                    {{__('front.contact.work_time')}}
                </p>
            </address>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.5871701165706!2d28.976994415415625!3d41.05615617929601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab72217aa2eab%3A0xc7f1195e790f4fe6!2sDivan%20Residence%20at%20Bomonti%20Plaza!5e0!3m2!1sen!2sus!4v1580846677295!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>

        <div class="col-lg-6 mt-5 pl-5 pt-5 bg-light contact-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <h3 style="color:green;">{{session('success')}}</h3>
                </div>
            @endif
            <form action="{{route('send_email')}}" method="post" class="mb-5">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">{{__('front.contact.form.name')}}</label>
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="{{__('front.contact.form.name')}}" required>
                </div>
                <div class="form-group">
                    <label for="email">{{__('front.contact.form.email')}}</label>
                    <input type="email" name="full_email" class="form-control" id="email" placeholder="{{__('front.contact.form.email')}}" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="phone">{{__('front.contact.form.phone')}}</label>
                    <input type="text" name="phone_number" class="form-control" id="phone" placeholder="{{__('front.contact.form.phone')}}" required>
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
                <button type="submit" class="btn btn-primary" name="submit">{{__('front.contact.form.submit')}}</button>
            </form>
        </div>
    </div>
  
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center">
                &copy; Copyright {{__('front.footer.copyrights')}}
            </p>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0c39f07510.js" crossorigin="anonymous"></script>
</body>
</html>
