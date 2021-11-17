<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <script src="{{asset('front/scripts/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/scripts/bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('front/scripts/script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/image-box.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('front/scripts/jquery.flipster.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('front/scripts/flexslider/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('front/scripts/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/scripts/php/contact-form.css')}}">
    <link rel="icon" href="{{asset('12.png')}}">
    <link rel="stylesheet" href="{{asset('front/skin.css')}}">
    <style>
        .blink_me {
        animation: blinker 1s linear infinite;
        }
        @keyframes blinker {
        50% {
        opacity: 0;
        }
        }
    </style>
    @toastr_css
</head>
<body>
    <div id="preloader"></div>
    <header class="fixed-top scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}" style="width:250px;
                        height: 80px;">
                            {{-- <img class="logo-default" src="{{asset('1.png')}}"  alt="logo" /> --}}
                            Dlims Bhimber Govajk
                            {{-- <img class="logo-retina" src="{{asset('1.png')}}" alt="logo" /> --}}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                         <ul class="nav navbar-nav navbar-right">
                            <li class="{{Request::is('/')?'active':''}}">
                                <a  href="{{url('/')}}">Home</a>
                            </li>
                            <li class="dropdown {{Request::is('how_to_apply') || Request::is('verify_license') ?'active':''}}">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">License Info <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="{{url('how_to_apply')}}">How To Apply</a></li>
                                    <li><a href="{{url('verify_license')}}">Verify License</a></li>
                                    {{-- <li><a href="blog-classic.html">Track License Delivery</a></li> --}}
                                </ul>
                            </li>
                            <li class="{{Request::is('download')?'active':''}}">
                                <a  href="{{url('download')}}">Download</a>
                            </li>
                            <li class="{{Request::is('contact_us')?'active':''}}">
                                <a  href="{{url('contact_us')}}">Contact Us</a>
                            </li>
                        </ul> 
                        {{-- <div class="nav navbar-nav navbar-right">
                            <ul class="nav navbar-nav lan-menu">
                                 <li >
                                    <a href="{{route('user.register')}}" >Sign Up<span class="caret"></span></a>
                                </li> 
                                <li >
                                    <a href="">Sign In<span class="caret"></span></a>
                                </li>
								 <li >
                                    <a href="{{url('https://web.facebook.com/groups/advertfoxxofficial/')}}">Follow Us On Facebook<span class="caret"></span></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <i class="scroll-top scroll-top-mobile fa fa-sort-asc"></i>
    <footer class="footer-base" style="background-color:black;">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 footer-left text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Pages</h3>
                                <ul class="ul-dots text-s">
                                    <li><a href="{{url('/')}}" style="color:white!important;">Home</a></li>
                                    <li><a href="{{url('contact_us')}}" style="color:white!important;">Contact Us</a></li>
                                    <li><a href="{{url('download')}}" style="color:white!important;">Download</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3>License Info</h3>
                                <ul class="ul-dots text-s">
                                    <li><a href="{{url('how_to_apply')}}" style="color:white!important;">How to Apply</a></li>
                                    <li><a href="{{url('verify_license')}}" style="color:white!important;">Verify License</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-center text-left">
                        <h3>About Us</h3>
                        <p class="text-s" style="color:white!important;">
                            Driving License Issuance Management System (DLIMS) Dlims Bhimber Govajk automates the processes for driving license issuance, renewal and upgrades. These activities are carried out throughout the province of Bhimber Azad Kashmir.                        
                        </p>
                    </div>                    
                </div>
            </div>
            <div class="row copy-row">
                <div class="col-md-12 copy-text" style="color:white!important;">
                    © 2020 ALL RIGHTS RESERVED BY <a href="{{url('/')}}" style="color:white!important;">dlimsbhimbergovajk.pk</a>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="{{asset('front/scripts/iconsmind/line-icons.min.css')}}">
        <script async src="{{asset('front/scripts/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/imagesloaded.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/flexslider/jquery.flexslider-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/jquery.flipster.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/php/contact-form.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/jquery.progress-counter.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/jquery.tab-accordion.js')}}"_expanded_></script>
        <script type="text/javascript" src="{{asset('front/scripts/bootstrap/js/bootstrap.popover.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/google.maps.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCp69VyBGUlCdAAsfgcRvf3Pg57B6vNHd8')}}"></script>
        <script type="text/javascript" src="{{asset('front/scripts/isotope.min.js')}}"></script>
        <script src="{{asset('front/scripts/smooth.scroll.min.js')}}"></script>
        <!--End of Tawk.to Script-->
        @toastr_js
	    @toastr_render
        @yield('scripts')
    </footer>
    
</body>
</html>
