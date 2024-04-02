@php
    $socialMediaLinks = \App\Models\SocialMediaLink::first();
    $settings = \App\Models\Setting::first();
    // dd($socialMediaLinks->toArray(), $settings->toArray());
@endphp
<html lang="en">
<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <title>Residential Architects | Best Architecture Firms | House Building Planners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
    <meta name="description" content="{{ $settings?->app_name }} is the best architects" />
    <meta name="keywords" content="architects, architecture firm, residential architects, home architects" />
    <link rel="icon" sizes="192x192" href="{{ asset('public/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('public/assets/images/favicon.png') }}">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="white"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:site_name" content="{{ $settings?->app_name }}"/>
    <meta property="og:image" content="{{ $settings?->header_image }}" />
    <meta property="og:image" content="{{ $settings?->header_image }}" />
    <meta property="og:title" content="A Leading Architectural & Construction Services Company" />
    <meta property="og:description" content="{{ $settings?->app_name }} and Construction, is one of the top trusted construction company" />
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="{{ url('') }}"/>
    <meta name="twitter:title" content="A Leading Architectural & Construction Services Company"/>
    <meta name="twitter:description" content="{{ $settings?->app_name }} and Construction, is one of the top trusted construction company"/>
    <meta name="twitter:image"  content="public/assets/images/CHENNEE-OG-logo-large.png"/>
    <meta name="twitter:creator" content="@chenneeofficial" />
    <meta name="twitter:site" content="@chenneeofficial" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ asset('architects.in.lucknow') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/header.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/footer.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/architects.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Review",
            "itemReviewed": {
                "@type": "LocalBusiness",
                "name": "Architects",
                "image": "{{ asset('public/assets/images/CHENNEE-OG-logo-large.png') }}",
                "description": "Construction Architects is the best architects that offers the excellent architectural house plans & design services for all types of residential buildings within your budget including floor plans, 3D elevations, structural drawings, civil drawings, and 3D interiors.",
                "telephone": "9600442776",
                "url": "{{ url('') }}",
                "pricerange": "Contact 9600442776 | Customize Pricing Package"
            },
            "author": "Users",
            "reviewRating": {
                "@type": "AggregateRating",
                "bestRating": "5",
                "ratingCount": "159",
                "ratingValue": "4.9",
                "itemReviewed": {
                    "@type": "Thing",
                    "name": "ServiceReview"
                }
            }
        }
    </script>
    <style>
        .faq-accordian-wrapper {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager -->
    {{-- #1d6caa63 --}}
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKLQTZW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NKLQTZW');</script><!-- End Google Tag Manager -->
    <style>
        header{position:fixed;z-index:99;width:100%;top:0;transition:all ease .2s}.navigation{background:#fff;box-shadow:0 5px 15px #00000014;position:relative}.brand{text-transform:uppercase;font-size:1.4em}.brand img{width:200px;height:auto}.brand a,.brand a:visited{color:#fff;text-decoration:none}.nav-container{max-width:1225px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center}nav ul{list-style:none;margin:0;padding:0}nav ul li{position:relative;display:inline-block;margin:0 0;position:relative}ul.nav-list li:after{content:"";position:absolute;left:0;width:0%;height:2px;background:white;left:50%;transform:translateX(-50%);bottom:20px;transition:all ease .3s}ul.nav-list li:hover::after{width:40%}nav ul li a,nav ul li a:visited{display:block;color:#1a232c;background:#262626;text-decoration:none}nav ul li a{background:0 0;color:#1a232c;font-family:sofia_prosemibold;transition:all ease .3s;font-size:18px;cursor:pointer;padding:25px 5}.navbar-dropdown li a{border-bottom:solid 1px rgba(0,0,0,.1)}.navbar-dropdown li:last-child a{border-bottom:none}nav ul li a:not(:only-child):after,nav ul li a:visited:not(:only-child):after{padding-left:4px;content:" \025BE"}nav ul li .navbar-dropdown li{margin:0;width:100%}nav ul li .navbar-dropdown a{padding:15px;transition:all ease .3s;line-height:20px}nav ul li .navbar-dropdown li:hover a{color:#000;padding-left:17px}.navbar-dropdown{display:none;z-index:9;position:absolute;background:#fff;top:100%;transition:all ease .3s;margin-top:10px;width:100%;min-width:250px;box-shadow:0 5px 15px #00000014}.navbar-dropdown li:hover{background:white}.navbar-dropdown li a{padding:inherit}.nav-list li:hover .navbar-dropdown{display:block}.nav-list .nav_contact{background:white;padding:8px 20px;color:#1a232c;border-radius:5px;text-transform:capitalize;position:relative;border:solid 1px white;text-align:center;display:inline-block;min-width:170px;font-size:17px}.nav-list .nav_contact:hover{color:#000}.nav-list .nav_quote{background:0 0;padding:8px 20px;color:#000;border:solid 1px #000;border-radius:5px;text-transform:capitalize;position:relative;text-align:center;display:inline-block;font-size:16px;margin-right:20px;transition:all ease .3s}.nav-list .nav_quote:hover{border:solid 1px white;background:white}.nav-list .nav_quote:hover{color:#000}.nav_contact:after{content:none!important}.nav_quote::after{content:none!important}.nav_actions:hover:after{content:none}.navbar-dropdown li:hover:after{content:none}.nav_actions{margin-left:20px;z-index:10}#navbar-toggle{background-color: #ffc30ed6;cursor:pointer;position:absolute;right:0;top:-5px}#navbar-toggle.active span{background-color:transparent}#navbar-toggle.active span:after,#navbar-toggle.active span:before{top:0}#navbar-toggle.active span:before{transform:rotate(45deg)}#navbar-toggle.active span:after{transform:rotate(-45deg)}.nav-mobile{display:none;width:70px}#top-navigation{background:white}.top-nav-row{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding:10px 0}.top-nav-info ul li{display:inline-block;padding:0 15px}.top-nav-info ul li a{font-size:16px;font-family: sofia_prolight;color:#000}.top-nav-info ul li i{margin-right:10px}.top-nav-info ul li i svg{width:22px;height:22px;vertical-align:middle}.social-link{display:flex}.top-nav-social ul li{display:inline-block;margin:0 10px}.top-nav-social ul li a svg{height:20px;width:20px}@media only screen and (max-width:1100px){.nav-container{padding:0}.nav-mobile{display:block;position:relative;right:20px;top:0}.brand{padding:10px}nav{width:100%}nav ul{display:none;padding-bottom:10px}nav ul li{float:none;display:block;margin:0}nav ul li a{padding:10px 15px}nav ul li ul li a{padding-left:30px}.navbar-dropdown{position:static;transition:inherit;min-width:100%;width:100%;padding:0;background:#ececec;box-shadow:none}nav ul li a.action_buttons[type=button]{display:inline-block;margin:10px auto}nav ul li:last-child{text-align:center}.navbar-dropdown li{text-align:left!important}ul.nav-list li:after{content:none}.nav_actions{margin:0}}@media screen and (max-width:1200px){.brand img{padding-left:10px}}@media screen and (min-width:1100px){.nav-list{display:block!important}.navbar-dropdown{opacity:0;visibility:hidden;margin-top:20px;transition:all ease .3s}.nav-list>li:hover .navbar-dropdown{opacity:1;visibility:visible;margin-top:0;display:inherit}.nav-list>li:nth-child(4):hover .navbar-dropdown{right:-15px}}@media screen and (max-width:768px){.brand img{width:170px}.nav-list .nav_quote{font-size:13px;padding:8px 10px}.nav-list .nav_contact{font-size:13px;padding:8px 10px}.top-nav-info{width:100%}.top-nav-info ul{display:flex;flex-wrap:wrap;align-items:center;justify-content:center}.top-nav-social{width:100%;margin-top:10px}.social-link{display:flex;align-items:center;justify-content:center}#top-navigation{display:none}}#navbar-toggle span{display:block;position:static;width:30px;height:3px;background-color:white;margin-bottom:5px;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}#navbar-toggle.ham-toggle span:first-of-type{-webkit-transform:translateY(7px) rotate(-45deg);-ms-transform:translateY(7px) rotate(-45deg);transform:translateY(7px) rotate(-45deg)}#navbar-toggle.ham-toggle span:nth-of-type(2){opacity:0}#navbar-toggle.ham-toggle span:last-of-type{-webkit-transform:translateY(-9px) rotate(45deg);-ms-transform:translateY(-9px) rotate(45deg);transform:translateY(-9px) rotate(45deg)}
    </style>
    @include('layouts.header')
    <script>
        (function($) {
            $(function() {

                //  open and close nav
                $('#navbar-toggle').click(function() {
                    console.log('click');
                    $('nav ul').slideToggle();
                    $('.navbar-dropdown').hide();
                });

                if ($(window).width() <= 1200) {
                    $(".nav-list li").click(function() {
                        var child = $(this).children('.navbar-dropdown'),
                        rest = $('.navbar-dropdown:visible').not(child);
                        child.slideToggle();
                        rest.slideUp();

                    });
                }
            });
        })(jQuery);

        $('.mobile-call').click(function() {
            $(this).toggleClass('active');
        });
    </script>
    <script >
        (function() {
            var button = document.querySelector('#navbar-toggle');
            var box = document.querySelector('#navbar-toggle');
            var ber = document.querySelector('#nav');
            var drop = document.querySelector('.dropmenu-new');

            button.addEventListener('click', function() {
                console.log('click');
                box.classList.toggle('ham-toggle');
            });
        })();
    </script>

    @yield('banners')
    @yield('content')
    <style>
        .popup__content{background-image:url({{ asset('public/assets/images/popup-bg.png') }});background-repeat:no-repeat;background-size:cover;width:700px;height:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative;border-radius:17px}.popup__close{background-color:#ddd!important;height:30px;width:30px;line-height:30px;text-align:center;border-radius:50%;position:absolute;right:-10px;top:-10px;display:flex;align-items:center;justify-content:center;cursor:pointer}.popup-cont h5{font-family:sofia_probold;font-size:42px;line-height:55px;color:white;margin:0;position:relative;padding-bottom:35px}.popup-cont #off{position:absolute;right:5%;top:35px;display:block;width:200px;height:auto}.popup-cont h5:before{content:"";width:100px;height:2px;background:#fff;display:block;position:absolute;bottom:10px;left:0;right:0;margin:0}.popup-cont p{font-size:22px;line-height:32px;color:#fff;max-width:800px;margin:auto; font-family: sofia_prolight;padding-top:10px}.popup-cont p b{font-family:sofia_probold}.popup-cont a{margin-top:20px}.popup-cont{width:70%;padding:60px 30px 145px 30px}#popup-img{position:absolute!important;width:100%;right:0;bottom:0}#popup-img img{border-bottom-right-radius:17px;border-bottom-left-radius:17px}.popup-cont .nav_quote{font-size:16px;z-index:99}@media screen and (max-width:640px){.popup__content{width:340px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}.popup-cont #off{right:5%;top:14px;display:block;width:105px!important}.popup-cont h5{font-size:21px;line-height:30px;padding-bottom:20px}.popup-cont p{font-size:13px;line-height:24px}.popup-cont .nav_quote{font-size:12px;min-width:inherit;padding:5px 9px}#popup-img{height:40%;width:100%;bottom:0;right:0}}@media screen and (max-width:340px){.popup__content{width:310px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}}
        @media screen and (min-width:768px){ .floating-cta{display:none}}.whatsapp-footer{transition:all ease .3s;}@media screen and (max-width:768px){footer {padding-bottom: 75px;}.whatsapp-footer.show{bottom:70px;}.floating-cta.show{bottom:0;}.floating-cta{position:fixed;width:100%;display:flex;align-items:center;justify-content:center;padding:8px 20px;background:#fff;-webkit-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);-moz-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);transition: all ease .3s;bottom: -70px;z-index:9999;}.floating-cta a{height:48px;display:inline-block;background:white;border-radius:3px;color:#000;text-align:center;font-size:16px;font-family: "proxima-nova", sans-serif;font-weight: 700;line-height:48px;padding:0 30px;border:none;transition:all .3s cubic-bezier(.25,.8,.25,1);position:relative;z-index:1;width:auto;}}@media screen and (max-width:641px){.floating-cta a{width:100%;}}
    </style>
    <div class="floating-cta">
        <a rel="nofollow" id="sales-header" href="{{ asset('get.quote') }}" title="Get a free quote">Get A Free Quote</a>
    </div>
    @include('layouts.footer')
</body>
</html>
