
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <meta name="google-site-verification" content=""/>
        <title>{{$settings->site_name}}</title>
    <meta name="description" content="{{$settings->site_name}} | We are here to serve you better and help save your money without charges.." />
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$settings->site_name}} - We are here to serve you better and help save your money without charges.." />
            <meta property="og:description" content="{{$settings->site_name}} | We are here to serve you better and help save your money without charges" />
        <meta property="og:image" content="{{ asset('storage/app/public/'.$settings->favicon)}}" />
        <meta property="og:url" content="{{$settings->site_address}}" />
    <meta property="og:site_name" content="{{$settings->site_name}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Welcome to a new era of banking at {{$settings->site_name}}, where traditional boundaries fade away and possibilities expand.." />
    <meta name="twitter:title" content="{{$settings->site_name}} - We are here to serve you better and help save your money without charges.." />
    <meta name="twitter:image" content="{{ asset('storage/app/public/'.$settings->favicon)}}" />

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('storage/app/public/'.$settings->favicon)}}" type="image/png" sizes="16x16">

    <!-- Chinese Bank Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Serif+SC:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AMHSRC Chinese Banking Theme -->
    <link rel="stylesheet" href="{{ asset('css/chinese-bank-theme.css') }}">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="temp/custom/base/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="temp/custom/base/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="temp/custom/base/css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="temp/custom/base/css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="temp/custom/base/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="temp/custom/base/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="temp/custom/base/css/owl.carousel.min.css">
    <link rel="stylesheet" href="temp/custom/base/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="temp/custom/base/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="temp/custom/base/css/responsive.css">

    <link rel="stylesheet" href="base/cdnjs.cloudflare.co/ajax/libs/normalize/5.0.0/normalize.min.html">
    <link rel='stylesheet' href='fonts.googleapis.co/icone91fe91fe91f.html?family=Material+Icons'>
    <link rel="stylesheet" href="temp/custom/base/css/customstyle.css">
    <style>
        .info {
            color: rgba(2, 2, 211, 0.753);
        }
        .success {
            color: rgba(5, 187, 5, 0.801);
        }
        .error {
            color: rgba(255, 0, 0, 0.801);
        }

        /* ── Premium Chinese Bank Theme for Landing Page ── */
        body {
            font-family: 'Inter', sans-serif !important;
            background-color: #F8F9FA;
        }
        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Noto Serif SC', 'Inter', serif !important;
        }
        /* Navbar Override */
        .navbar {
            background-color: #12111C !important;
            border-bottom: 2px solid var(--cbn-gold) !important;
            padding: 10px 0 !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15) !important;
        }
        .navbar-nav a {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500 !important;
            transition: color 0.2s !important;
        }
        .navbar-nav a:hover {
            color: var(--cbn-gold) !important;
        }
        .navbar-toggler {
            color: #fff !important;
            border-color: rgba(255, 255, 255, 0.2) !important;
        }
        /* Buttons */
        .btn-primary, .secondary-solid-btn {
            background: linear-gradient(135deg, #9A0B22, #C8102E) !important;
            border: 1px solid var(--cbn-gold) !important;
            color: #fff !important;
            border-radius: 6px !important;
            box-shadow: 0 4px 15px rgba(200, 16, 46, 0.3) !important;
            font-weight: 600 !important;
        }
        .btn-primary:hover, .secondary-solid-btn:hover {
            background: linear-gradient(135deg, #6E0819, #9A0B22) !important;
            box-shadow: 0 6px 20px rgba(200, 16, 46, 0.45) !important;
            color: #fff !important;
        }
        .outline-white-btn {
            border: 1.5px solid var(--cbn-gold) !important;
            color: var(--cbn-gold) !important;
            border-radius: 6px !important;
            background: transparent !important;
            font-weight: 600 !important;
        }
        .outline-white-btn:hover {
            background: var(--cbn-gold) !important;
            color: #12111C !important;
        }
        /* Footer Redesign */
        .footer-section {
            background-color: #12111C !important;
        }
        .footer-top {
            background: linear-gradient(180deg, #12111C 0%, #1A0D11 100%) !important;
            border-top: 3px solid var(--cbn-gold) !important;
        }
        .footer-nav-wrap h4, .footer-nav-wrap text-white h4 {
            color: var(--cbn-gold) !important;
            font-family: 'Noto Serif SC', serif !important;
            font-size: 16px !important;
            font-weight: 700 !important;
            margin-bottom: 20px !important;
        }
        .footer-nav-wrap a {
            color: rgba(255, 255, 255, 0.65) !important;
        }
        .footer-nav-wrap a:hover {
            color: var(--cbn-red-light) !important;
            padding-left: 5px !important;
        }
        .footer-bottom {
            background-color: #0B0A10 !important;
            border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
        }
        /* Hero Carousel Redesign */
        .hero-equal-height {
            background: linear-gradient(135deg, #1A0A10 0%, #12111C 60%, #170A0F 100%) !important;
            position: relative;
            overflow: hidden;
        }
        .hero-equal-height::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='0.4' opacity='0.03'%3E%3Crect x='10' y='10' width='40' height='40'/%3E%3Crect x='20' y='20' width='20' height='20'/%3E%3Cline x1='10' y1='10' x2='50' y2='50'/%3E%3Cline x1='50' y1='10' x2='10' y2='50'/%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }
        .hero-content-wrap h1 {
            color: #ffffff !important;
            font-size: 3.2rem !important;
            font-weight: 800 !important;
            line-height: 1.2 !important;
            margin-bottom: 20px !important;
            text-shadow: 0 4px 12px rgba(0,0,0,0.5) !important;
        }
        .hero-content-wrap .lead {
            color: rgba(255, 255, 255, 0.8) !important;
        }
        /* Promo Cards */
        .promo-section {
            background: #12111C !important;
            border-bottom: 1px solid rgba(212,175,55,0.15) !important;
        }
        .single-promo-block {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(212, 175, 55, 0.15) !important;
            transition: all 0.3s ease !important;
        }
        .single-promo-block:hover {
            background: rgba(212, 175, 55, 0.05) !important;
            border-color: var(--cbn-gold) !important;
            transform: translateY(-5px) !important;
        }
    </style></head>

    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/amhsrc-logo.svg') }}" alt="AMHSRC" style="height:48px; width:48px; margin-right: 10px;">
                <div class="d-flex flex-column align-items-start" style="line-height:1.1;">
                    <span style="font-family:'Inter',sans-serif; font-size:20px; font-weight:800; color:#fff; letter-spacing:0.05em;">AMHSRC</span>
                    <span style="font-family:'Noto Serif SC',serif; font-size:10px; color:#D4AF37; letter-spacing:0.1em; font-weight: 500;">国际商业银行</span>
                </div>
            </a>






            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">

                    <li><a  href="/">Home</a></li>
                    <li><a  href="about">About Us</a></li>
                    <li><a href="services"> Services</a></li>
                    <li><a href="faq">FAQs</a></li>
                    <li><a href="contact">Get Support</a></li>
                    <li><a style="opacity: 1;" href="{{route('register')}}" class="btn btn-sm btn-primary p-2 mb-2">Open Account</a></li>
                    <li><a style="opacity: 1;" href="{{route('login')}}" class="btn outline-white-btn p-2 text-white">Online Banking</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>




@yield('content')

<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">QUICK LINKS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('register')}}">Open Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href=" {{route('login')}}">Online Banking</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about">About Us</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="about">Our Services</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="faq">FAQs</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0);">Legal Information</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="privacy-policy">Privacy Policy</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="contact">Report Abuse</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="terms">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">SUPPORT</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact">Contact</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="faq">FAQs</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-map-marker-alt mr-2"></span> {{$settings->address}} </li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-envelope mr-2"></span> <a href="cdn-cgi/l/email-protection-2.html" class="__cf_email__" data-cfemail="3e6d4b4e4e514c4a7e595b535750575952515c5f525857505f505d5b105d51">[email&#160;protected]</a></a></li>
                                   <li class="d-flex align-items-center py-2"><i class="fas fa-comments"></i>&nbsp;&nbsp;<a href='#'> {{$settings->contact_email}} </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom py-4" style="background: black;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2023. All
                        rights reserved
                        <a href="/" target="_blank" class='text-white'>{{$settings->site_name}}</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="social-nav text-right">
                        <ul class="list-unstyled social-list mb-0">
                            <li class="list-inline-item tooltip-hover">
                                <a href="https://facebook.com/" target="_blank" class="rounded text-white"><span class="ti-facebook"></span></a>
                                <div class="tooltip-item">Facebook</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="https://twitter.com/" target="_blank" class="rounded text-white"><span class="ti-twitter"></span></a>
                                <div class="tooltip-item">Twitter</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="http://linkedin.com/" target="_blank" class="rounded text-white"><span class="ti-linkedin"></span></a>
                                <div class="tooltip-item">Linkedin</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="https://instagram.com/" target="_blank" class="rounded text-white"><span class="ti-instagram"></span></a>
                                <div class="tooltip-item">Instagram</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>

<div class="telegram-popup" align="center">

        </div>



        @include('layouts.lang')

<!--jQuery-->
<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="temp/custom/base/js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="temp/custom/base/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="temp/custom/base/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="temp/custom/base/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="temp/custom/base/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="temp/custom/base/js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="temp/custom/base/js/mixitup.min.js"></script>
<!--wow js-->
<script src="temp/custom/base/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="temp/custom/base/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="temp/custom/base/js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="temp/custom/base/js/all.min.js"></script>
<!--custom js-->
<script src="temp/custom/base/js/scripts.js"></script>
<!-- inpage script -->
<script>
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if(h === 0){
        h = 12;
    }

    if(h > 12){
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);

}

showTime();
</script>


<script>
    $(document).ready(function(){
        $(".telegram-popup").delay(3000).show(0);
    });
</script>

<script>
    if (window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
    }
    // ensure to add onunload='' to the body tag and autocomplete="off" on form tags
</script>

<!-- Script for getting user timezone -->
<script>
    // Timezone settings
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone; // e.g. "America/New_York"
    document.getElementById('location').value = timezone;
    console.log(document.getElementById('location').value);
</script>


@include('layouts.livechat')
@if($settings->tido)
    <script src="//code.tidio.co/{{$settings->tido}}" async></script>
    @endif

</body>



</html>
