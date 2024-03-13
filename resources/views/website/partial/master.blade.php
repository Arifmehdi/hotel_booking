<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('frontend')}}/img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HillTown Resort</title>

    <!-- Icon css link -->
    <link href="{{asset('frontend/')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/stroke-icon/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('frontend')}}/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('frontend')}}/vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/vendors/lightbox/simpleLightbox.css" rel="stylesheet">

    <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--================Header Area =================-->
    <header class="main_header_area">
        <div class="header_top">
            <div class="container">
                <div class="header_top_inner">
                    <div class="pull-left">
                        <a href="#"><i class="fa fa-phone"></i>+ (1800) 456 7890</a>
                        <a href="#"><i class="fa fa-envelope-o"></i>info@hilltownresort.com</a>
                    </div>
                    <div class="pull-right">
                        <ul class="header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.png" alt="">
                            <img src="img/logo-sticky.png" alt="">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown submenu active">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('rooms')}}">Rooms</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('events')}}">Events</a></li>
                            <li><a href="{{route('comingSoon')}}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="search_dropdown">
                                <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                            </li>


                            @guest
                            @if (Route::has('login'))
                            <li class="book_btn">
                                <a class="book_now_btn" href="{{route('login')}}">Sign In</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="book_btn">
                                <a id="navbarDropdown" class=" book_now_btn" href="{{ route('admin.dashboard') }}"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            </li>
                            <li class=" nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    @yield('content')




    @include('website.partial.footer')
    <!--================End Footer Area =================-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('frontend')}}/js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="{{asset('frontend')}}/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="{{asset('frontend')}}/vendors/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>

    <script src="{{asset('frontend')}}/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/counterup/waypoints.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('frontend')}}/vendors/bootstrap-selector/bootstrap-select.js"></script>
    <script src="{{asset('frontend')}}/vendors/lightbox/simpleLightbox.min.js"></script>

    <!-- instafeed-->
    <script type="text/javascript" src="{{asset('frontend')}}/vendors/instafeed/instafeed.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/vendors/instafeed/script.js"></script>

    <script src="{{asset('frontend')}}/js/theme.js"></script>
</body>

</html>