@php
    $socialMediaLinks = \App\Models\SocialMediaLink::first();
    $settings = \App\Models\Setting::first();
    // dd($socialMediaLinks->toArray(), $settings->toArray());
@endphp
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
      <title>#1 Architect & Construction Firm in Hosur, Bangalore & Chennai</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
      <meta name="description" content="and Construction delivers a one-stop solution for all your construction needs including architectural planning and interior designing in Bangalore, Chennai & Hosur with good experience in residential projects." />
      <meta name="keywords" content="Construction company in bangalore, civil company in bangalore, architecture and construction firm, civil construction company in bangalore" />
      <link rel="icon" sizes="192x192" href="{{ $settings?->header_image }}">
        <link rel="apple-touch-icon" href="{{ $settings?->header_image }}">
      <link rel="manifest" href="manifest.json">
      <meta name="theme-color" content="#FFC30E"/>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="{{ url('') }}" />
      <meta property="og:site_name" content="{{ $settings?->app_name }}"/>
      <meta property="og:image" content="{{ $settings?->header_image }}" />
      <meta property="og:image" content="{{ $settings?->header_image }}" />
      <meta property="og:title" content="A Leading Architectural & Construction Services Company in Chennai, Hosur & Bangalore" />
      <meta property="og:description" content="{{ $settings?->app_name }} and Construction, is one of the top trusted construction company in Hosur, Chennai & Bangalore that engages in a broad range of services including architectural design, house construction & interior decoration in an affordable budget." />
      <meta property="twitter:card" content="summary_large_image"/>
      <meta property="twitter:url" content="{{ url('') }}"/>
      <meta name="twitter:title" content="A Leading Architectural & Construction Services Company in Chennai, Hosur & Bangalore"/>
      <meta name="twitter:description" content="{{ $settings?->app_name }} and Construction, is one of the top trusted construction company in Hosur, Chennai & Bangalore that engages in a broad range of services including architectural design, house construction & interior decoration in an affordable budget."/>
      <meta name="twitter:image"  content="{{ $settings?->header_image }}"/>
      <meta name="twitter:creator" content="@ {{ $settings?->app_name }}" />
      <meta name="twitter:site" content="@ {{ $settings?->app_name }}" />
      <meta name="robots" content="index,follow">
      <link rel="canonical" href="{{ url('') }}" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"Organization","name":"{{ $settings?->app_name }}","url":"{{ url('') }}","logo":"{{ $settings?->app_name }}","sameAs":["{{ $socialMediaLinks?->facebook ? $socialMediaLinks?->facebook : '' }}","{{ $socialMediaLinks?->instagram ? $socialMediaLinks?->instagram : '' }}","{{ $socialMediaLinks?->youTube ? $socialMediaLinks->youTube : '' }}","{{ $socialMediaLinks?->linkedin ? $socialMediaLinks->linkedin : '' }}"]}
</script>

<style>
   *{box-sizing:border-box}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;vertical-align:baseline;font-weight:400}body,html{height:100%;padding:0;margin:0;text-rendering:optimizeLegibility}body{background:0 0;overflow-x:hidden;letter-spacing:.2px}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}h1,h2,h3,h4,h5{margin:0;padding:0;font-weight:700;font-family:sofia_probold;font-weight:400}p{margin:0;padding:0;font-family:sofia_promedium}li,ol,ul{margin:0;padding:0;list-style:none;font-family:sofia_promedium}a:hover{text-decoration:none}a{text-decoration:none;font-family:sofia_probold}body{margin:0;padding:0}img,video{display:block;max-width:100%}.row.no-gutters{margin-right:0;margin-left:0}.row.no-gutters>[class*=" col-"],.row.no-gutters>[class^=col-]{padding-right:4px;padding-left:4px}.body-container{background-image:linear-gradient(to right bottom,#fbf8ee,#fff8f3,snow,#fffdfe,#fff);position:relative}.body-container:after{content:'';position:absolute;background-image:url(assets/images/pattern-1.svg);background-size:cover;height:100px;width:100px;right:0;top:0}.light{font-family:sofia_prolight}.regular{font-family:sofia_proregular}.semi{font-family:sofia_prosemibold}.bold{font-family:sofia_probold}.black{font-family:sofia_problack}.container{width:1225px;margin:0 auto;position:relative;z-index:1}.action_buttons[type=button]{background:#ffc30e;padding:10px 23px;color:#1a232c;border-radius:5px;text-transform:capitalize;position:relative;border:solid 1px #ffc30e}.action_buttons.cap{text-transform:uppercase}.secondary_button{background:0 0;padding:10px 23px;color:#fff;border:solid 1px #fff;border-radius:5px;text-transform:capitalize;position:relative;transition:all ease .3s}.secondary_button:hover{border:solid 1px #ffc30e;background:#ffc30e;color:#1a232c}.secondary_button.cap{text-transform:uppercase}.section-head{text-align:center;margin-bottom:50px;position:relative}.section-head:after{content:"";width:60px;height:3px;background:#edb200;position:relative;display:block;margin:20px auto 0}.section-head .section-title{font-size:36px;color:#1a232c;font-family:sofia_probold;text-transform:capitalize;line-height:40px;margin-bottom:10px;position:relative}.contact-form .section-head .section-title:after{content:"";width:100px;height:2px;background:#000;display:block;position:absolute;bottom:-15px;left:50%;transform:translateX(-50%);margin:0}.section-subtitle{font-size:18px;color:#1a232c;max-width:800px;margin:auto;font-family:sofia_probold;margin-bottom:20px}.bottom-cta{background:#ffc30e;text-align:center;padding:60px 0}.bottom-cta h5{color:#1a232c;font-size:42px;line-height:60px}.bottom-cta p{color:#1a232c;font-size:18px;line-height:30px}.bottom-cta a{background:#eee;color:#1a232c;text-transform:uppercase;padding:20px 30px;font-size:20px;display:inline-block;margin-top:30px;border-radius:5px;transition:all ease .3s}.contact-info{padding:20px 0;box-shadow:0 -6px 23px #0000003D}.contact-info ul{display:flex;flex-wrap:wrap;align-items:center;justify-content:center}.contact-info ul li{padding:0 30px;font-size:18px;line-height:28px;display:flex;align-items:center}.contact-info ul li svg{vertical-align:middle;width:40px;height:40px;margin-right:15px}.contact-info ul li span{font-family:sofia_prosemibold}.contact-info ul li span a{font-family:sofia_prosemibold;color:#000}.action_buttons.cap{margin-left:20px}.mobile-call{width:36px;height:35px;position:absolute;left:-10px;bottom:-20px}.mobile-call #call{width:100%;height:100%}ul.dropdown-menu{position:absolute;right:65%;width:250px;background:#fff;padding:10px 20px;top:140%;box-shadow:0 0 20px #0000001a;border-top:solid 3px #ffc30e}.mobile-call .dropdown-menu{opacity:0;visibility:hidden;transition:all ease .3s}.dropdown-menu .contct-heading{border-bottom:1px solid #ccc;margin-bottom:10px;padding-bottom:10px;color:#000;text-align:left;list-style:none}ul.dropdown-menu a{color:#000;list-style:none;display:inline-block;margin-bottom:2px}.mobile-call.active .dropdown-menu{opacity:1;visibility:visible;transition:all ease .3s;z-index:999}ul.dropdown-menu li{display:flex;align-items:center}ul.dropdown-menu li svg{display:inline-block;width:16px;height:auto;margin-right:10px;vertical-align:middle}.mimddle-cta{position:relative}.middle-cta .left{position:absolute;height:60%;width:20%;top:50%;transform:translateY(-50%);animation-name:slidein1;animation-duration:3s;transition-timing-function:ease-in-out;animation-iteration-count:infinite}.middle-cta .right{position:absolute;height:60%;width:20%;top:50%;transform:translateY(-50%);animation-name:slidein2;animation-duration:3s;transition-timing-function:ease-in-out;animation-iteration-count:infinite}.middle-cta{overflow:hidden;position:relative!important;padding:60px 10px;background-image:url(assets/images/mid-bg.png);background-size:cover;background-repeat:no-repeat;text-align:center}.mid-cta{max-width:80%;margin:0 auto}.mid-cta h3{font-size:40px;line-height:55px;color:#fff;text-transform:capitalize;margin-bottom:10px;position:relative;text-align:center;font-family:sofia_prolight}.mid-cta h3 b{color:#ffc30e;font-family:sofia_prosemibold!important}.mid-cta h3 a{font-size:40px;line-height:55px;color:#ffc30e;font-family:sofia_probold}.mid-cta h3 a{font-family:sofia_prosemibold!important}.expand-content{position:relative;z-index:99}.mid-cta p{color:#fff;font-size:18px;font-family:NunitoRegular;padding-top:10px}.middle-cta .left{position:absolute;height:60%;width:20%;top:50%;transform:translateY(-50%);animation-name:slidein1;animation-duration:3s;transition-timing-function:ease-in-out;animation-iteration-count:infinite}.middle-cta a{display:inline-block;margin:15px 0;font-family:sofia_probold!important;color:#000;font-size:18px}@media (max-width:1600px){@keyframes slidein1{0%{left:-10px}50%{left:-30px}100%{left:-10px}}}@media (min-width:1600px){@keyframes slidein1{0%{left:-70px}50%{left:-55px}100%{left:-70px}}}.middle-cta .right{position:absolute;height:60%;width:20%;top:50%;transform:translateY(-50%);animation-name:slidein2;animation-duration:3s;transition-timing-function:ease-in-out;animation-iteration-count:infinite}@media (max-width:1600px){@keyframes slidein2{0%{right:-10px}50%{right:-30px}100%{right:-10px}}}@media (min-width:1600px){@keyframes slidein2{0%{right:-70px}50%{right:-55px}100%{right:-70px}}}@media screen and (max-width:1024px){.middle-cta svg{display:none}}@media screen and (max-width:640px){.mid-cta{width:95%}.middle-cta{padding:25px 0}.middle-cta a{margin:10px 0}.mid-cta h3{font-size:25px;line-height:35px;margin:0}.mid-cta h3 a{display:block}.mid-cta h3 a{font-size:25px;line-height:35px;margin:0}}@media screen and (min-width:769px){section.sticky-footer{display:none}}@media screen and (max-width:768px){.bottom-cta h5{font-size:35px}.contact-info ul li{margin:5px 0}}@media screen and (max-width:641px){.bottom-cta{padding:25px 5px}.bottom-cta h5{font-size:25px;line-height:35px}.action_buttons[type=button]{font-size:15px;padding:8px 20px}.secondary_button{font-size:12px}.section-head .section-title{font-size:22px;line-height:33px}.section-subtitle{font-size:16px;line-height:25px}.section-head{margin-bottom:20px}.contact-info ul li{width:100%;margin:5px 0}.contact-info ul{justify-content:center}.bottom-cta a{padding:15px 15px;font-size:16px;margin-top:20px}.bottom-cta p{font-size:16px}.testmonial-cont{width:100%!important;min-height:auto!important}.testmonial-cont p{min-height:auto!important}.testmonial-cont p{font-size:14px!important}.reviewer span{font-size:18px!important}.mid-cta h3 b{display:block}.contact-form .section-head .section-title:after{bottom:-7px}}.heading{text-align:center;color:#454343;font-size:30px;font-weight:700;position:relative;margin-bottom:70px;text-transform:uppercase;z-index:999}.white-heading{color:#fff}.heading:after{content:' ';position:absolute;top:100%;left:50%;height:40px;width:180px;border-radius:4px;transform:translateX(-50%);background:url(img/heading-line.png);background-repeat:no-repeat;background-position:center}.white-heading:after{background:url(https://i.ibb.co/d7tSD1R/heading-line-white.png);background-repeat:no-repeat;background-position:center}.heading span{font-size:18px;display:block;font-weight:500}.white-heading span{color:#fff}.testimonials-wrap{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap}.testmonial-cont{width:31%;border:solid 2px #ffdb70;border-radius:20px;padding:30px 20px 20px 20px;margin-bottom:20px;position:relative;min-height:360px;bottom:0;transition:all ease .3s}.testmonial-cont:hover{bottom:10px}.testmonial-cont.filled{background:#fff5d8;border:solid 2px #fff5d8}.testmonial-cont:after{content:'';position:absolute;right:20px;top:-15px;background-image:url(assets/images/quotes.svg);background-size:contain;background-repeat:no-repeat;height:45px;width:45px}.testmonial-cont p{color:#313131;font-size:16px;line-height:26px;font-family:sofia_prosemibold;margin-top:10px;min-height:210px}.reviewer{display:flex;align-items:center;margin-top:20px}.reviewer .user{width:70px;height:auto;margin-right:20px}.reviewer span{font-size:22px;line-height:35px;color:#1a232c;font-family:sofia_probold}.rating{width:100px;height:auto}.popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:99999;background:#00000085;height:100%;width:100%}.flex-center{height:100%;width:100%;display:flex;align-items:center;justify-content:center}

   /*! Generated by Font Squirrel (https://www.fontsquirrel.com) on June 21, 2021 */@font-face{font-family:sofia_problack;src:url(assets/fonts/sofia_pro_black_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_black_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:sofia_probold;src:url(assets/fonts/sofia_pro_bold_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_bold_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:sofia_prolight;src:url(assets/fonts/sofia_pro_light_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_light_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:sofia_promedium;src:url(assets/fonts/sofia_pro_medium_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_medium_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:sofia_proregular;src:url(assets/fonts/sofia_pro_regular_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_regular_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:sofia_prosemibold;src:url(assets/fonts/sofia_pro_semi_bold_az-webfont.woff2) format('woff2'),url(assets/fonts/sofia_pro_semi_bold_az-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}
</style>
</head>
<body>

<style>
  header{position:fixed;z-index:99;width:100%;top:0;transition:all ease .2s}.navigation{background:#fff;box-shadow:0 5px 15px #00000014;position:relative}.brand{text-transform:uppercase;font-size:1.4em}.brand img{width:200px;height:auto}.brand a,.brand a:visited{color:#fff;text-decoration:none}.nav-container{max-width:1225px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center}nav ul{list-style:none;margin:0;padding:0}nav ul li{position:relative;display:inline-block;margin:0 0;position:relative}ul.nav-list li:after{content:"";position:absolute;left:0;width:0%;height:2px;background:#ffc30e;left:50%;transform:translateX(-50%);bottom:20px;transition:all ease .3s}ul.nav-list li:hover::after{width:40%}nav ul li a,nav ul li a:visited{display:block;color:#1a232c;background:#262626;text-decoration:none}nav ul li a{background:0 0;color:#1a232c;font-family:sofia_prosemibold;transition:all ease .3s;font-size:18px;cursor:pointer;padding:25px 5}.navbar-dropdown li a{border-bottom:solid 1px rgba(0,0,0,.1)}.navbar-dropdown li:last-child a{border-bottom:none}nav ul li a:not(:only-child):after,nav ul li a:visited:not(:only-child):after{padding-left:4px;content:" \025BE"}nav ul li .navbar-dropdown li{margin:0;width:100%}nav ul li .navbar-dropdown a{padding:15px;transition:all ease .3s;line-height:20px}nav ul li .navbar-dropdown li:hover a{color:#000;padding-left:17px}.navbar-dropdown{display:none;z-index:9;position:absolute;background:#fff;top:100%;transition:all ease .3s;margin-top:10px;width:100%;min-width:250px;box-shadow:0 5px 15px #00000014}.navbar-dropdown li:hover{background:#ffc30e}.navbar-dropdown li a{padding:inherit}.nav-list li:hover .navbar-dropdown{display:block}.nav-list .nav_contact{background:#ffc30e;padding:8px 20px;color:#1a232c;border-radius:5px;text-transform:capitalize;position:relative;border:solid 1px #ffc30e;text-align:center;display:inline-block;min-width:170px;font-size:17px}.nav-list .nav_contact:hover{color:#000}.nav-list .nav_quote{background:0 0;padding:8px 20px;color:#000;border:solid 1px #000;border-radius:5px;text-transform:capitalize;position:relative;text-align:center;display:inline-block;font-size:16px;margin-right:20px;transition:all ease .3s}.nav-list .nav_quote:hover{border:solid 1px #ffc30e;background:#ffc30e}.nav-list .nav_quote:hover{color:#000}.nav_contact:after{content:none!important}.nav_quote::after{content:none!important}.nav_actions:hover:after{content:none}.navbar-dropdown li:hover:after{content:none}.nav_actions{margin-left:20px;z-index:10}#navbar-toggle{cursor:pointer;position:absolute;right:0;top:-5px}#navbar-toggle.active span{background-color:transparent}#navbar-toggle.active span:after,#navbar-toggle.active span:before{top:0}#navbar-toggle.active span:before{transform:rotate(45deg)}#navbar-toggle.active span:after{transform:rotate(-45deg)}.nav-mobile{display:none;width:70px}#top-navigation{background:#ffc30e}.top-nav-row{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding:10px 0}.top-nav-info ul li{display:inline-block;padding:0 15px}.top-nav-info ul li a{font-size:16px;font-family: sofia_prolight;color:#000}.top-nav-info ul li i{margin-right:10px}.top-nav-info ul li i svg{width:22px;height:22px;vertical-align:middle}.social-link{display:flex}.top-nav-social ul li{display:inline-block;margin:0 10px}.top-nav-social ul li a svg{height:20px;width:20px}@media only screen and (max-width:1100px){.nav-container{padding:0}.nav-mobile{display:block;position:relative;right:20px;top:0}.brand{padding:10px}nav{width:100%}nav ul{display:none;padding-bottom:10px}nav ul li{float:none;display:block;margin:0}nav ul li a{padding:10px 15px}nav ul li ul li a{padding-left:30px}.navbar-dropdown{position:static;transition:inherit;min-width:100%;width:100%;padding:0;background:#ececec;box-shadow:none}nav ul li a.action_buttons[type=button]{display:inline-block;margin:10px auto}nav ul li:last-child{text-align:center}.navbar-dropdown li{text-align:left!important}ul.nav-list li:after{content:none}.nav_actions{margin:0}}@media screen and (max-width:1200px){.brand img{padding-left:10px}}@media screen and (min-width:1100px){.nav-list{display:block!important}.navbar-dropdown{opacity:0;visibility:hidden;margin-top:20px;transition:all ease .3s}.nav-list>li:hover .navbar-dropdown{opacity:1;visibility:visible;margin-top:0;display:inherit}.nav-list>li:nth-child(4):hover .navbar-dropdown{right:-15px}}@media screen and (max-width:768px){.brand img{width:170px}.nav-list .nav_quote{font-size:13px;padding:8px 10px}.nav-list .nav_contact{font-size:13px;padding:8px 10px}.top-nav-info{width:100%}.top-nav-info ul{display:flex;flex-wrap:wrap;align-items:center;justify-content:center}.top-nav-social{width:100%;margin-top:10px}.social-link{display:flex;align-items:center;justify-content:center}#top-navigation{display:none}}#navbar-toggle span{display:block;position:static;width:30px;height:3px;background-color:#ffc30e;margin-bottom:5px;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}#navbar-toggle.ham-toggle span:first-of-type{-webkit-transform:translateY(7px) rotate(-45deg);-ms-transform:translateY(7px) rotate(-45deg);transform:translateY(7px) rotate(-45deg)}#navbar-toggle.ham-toggle span:nth-of-type(2){opacity:0}#navbar-toggle.ham-toggle span:last-of-type{-webkit-transform:translateY(-9px) rotate(45deg);-ms-transform:translateY(-9px) rotate(45deg);transform:translateY(-9px) rotate(45deg)}
</style>

@include('layouts.header')

<script>


// if ($(window).width() < 768) {
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         if (scroll >= 150) {
//             $(".header").addClass("fixed-header");
//         } else {
//             $(".header").removeClass("fixed-header");
//         }
//     });
// }
// if ($(window).width() >= 768) {
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         if (scroll >= 113) {
//             $(".header").addClass("fixed-header");
//         } else {
//             $(".header").removeClass("fixed-header");
//         }
//     });
// }
    	(function($) {
  $(function() {

    //  open and close nav
    $('#navbar-toggle').click(function() {
      console.log('click');
      $('nav ul').slideToggle();
      $('.navbar-dropdown').hide();
    });


    // Hamburger toggle
    // $('#navbar-toggle').on('click', function() {
    //   this.classList.toggle('active');
    // });


    // If a link has a dropdown, add sub menu toggle.
    // $('nav ul li a:not(:only-child)').click(function(e) {
    //   $(this).siblings('.navbar-dropdown').toggle();

    //   // Close dropdown when select another dropdown
    //   $('.navbar-dropdown').not($(this).siblings()).hide("slow");
    //   e.stopPropagation();
    // });

    if ($(window).width() <= 1200) {
   $( ".nav-list li" ).click(function() {
      var child = $(this).children('.navbar-dropdown') ,
           rest = $('.navbar-dropdown:visible').not(child);
       child.slideToggle();
       rest.slideUp();

});
}
    // Click outside the dropdown will remove the dropdown class
    // $('html').click(function() {
    //   $('.navbar-dropdown').hide();
    // });
  });
})(jQuery);

$('.mobile-call').click(function(){
   $(this).toggleClass('active');
});

</script>
<script>
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
<style>
    /* banner  */
 .banner_bg{    background-color: rgb(59 59 59 / 50%);position:relative;
  background-image:url(assets/images/architects/best-architects-in-hosur.png);background-position:left;background-size:cover;padding:140px 0 165px;margin-top:65px}.banner_bg{padding:120px 0 90px}.banner-content{width:56%}.banner_img{position:relative;right:0;top:0}.banner-title .section-title{font-family:sofia_probold;font-size:51px;line-height:65px;color:#ffc30e;margin:0}.banner-title p{padding-bottom:10px;color:#fff;font-family:sofia_prolight;font-weight:300;font-size:50px;line-height:65px;color:#fff}.banner-title .section-title .in{line-height:50px;color:#fff;font-family:sofia_probold;display:block;font-size:18px;position:relative;margin-bottom:10px;padding-top:40px!important;text-transform:uppercase}.banner-title .section-subtitle{color:#fff}.banner-list li{color:#fff}.banner-list li:before{background:#fff}.banner-title .in b{color:#ffc30e}.banner-title .section-title .in{padding-top:10px!important}.banner-text{color:#fff;text-transform:none;font-size:17px;line-height:30px;padding:40px 0;width:75%;font-family: sofia_prolight;position:relative;display:block}.banner-text:before{width:65px}.banner-text:before{content:"";width:60px;height:2px;background:#fff;display:block;position:absolute;top:10px;left:0;right:0;margin:0}@media only screen and (max-width:768px){.section_container.white-bg{margin-top:0}.banner-continer,.banner_bg{padding:35px 0;margin-top:120px}.banner-title .section-subtitle{line-height:normal}.banner-text:before{margin:0 auto}.banner-text{width:100%;font-size:14px;padding:30px 0}.banner-title .section-title{font-size:31px;line-height:40px}.banner-content{width:100%;text-align:center}.banner-title p{font-size:31px!important;line-height:40px}.gallery-wrapper ul li span{font-size:18px}}@media only screen and (max-width:641px){.banner_bg{padding:0;background-position:center;margin-top:120px}.banner-title .section-title{font-size:28px}.banner-title p{font-size:24px}.banner-title .section-subtitle{font-size:26px;margin-bottom:10px}.banner-text{padding:30px 0 30px;font-size:18px}.banner-title .section-title span{font-size:16px!important;line-height:26px;width:100%!important}section.banner_bg:after{content:"";position:absolute;width:100%;height:100%;background:#00000080;top:0;left:0;bottom:0;right:0}.banner-title .section-title .in{padding-top:0!important;font-size:14px!important;line-height:24px}}
</style>
   <section class="banner_bg">
         <div class="container">
            <div class="banner-continer">
               <div class="banner-content banner-left animate">
                  <div class="banner-title">
                     <h1 class="section-title wow fadeInUp" style="visibility: visible;">
                     <span class="in">Architecture  |  Interiors  |  Construction</span>
                     Get Your Dream Home
                     <p>Designed & Built in One Place</p>
                     <span class="banner-text wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Our in-hand experts help you to have a complete furnished house right from planning, constructing & interior designing and let you unfold your sweetest dream into reality.</span>
                     </h1>
                  </div>
                  {{-- <a href="contact-sales.php" class="secondary_button cap" type="button" >Talk to Us</a>
                  <a href="get-quote.php" class="action_buttons cap" type="button" >Get a quote</a> --}}
               </div>
            </div>
         </div>
      </section>


      <style>
         .section_container{margin:45px 0;position:relative}.flex-col-right .section-title span{color:#1967d2}.section-head .section-title span{color:#1a232c}.flex-col-container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;flex-wrap:wrap;align-items:center;padding:20px 0 10px 0}.flex-col-container img{display:block;width:100%;height:auto}.flex-col-left{width:50%;margin:0}.flex-col-right{width:50%;text-align:left;margin-left:auto}.contentR{padding-right:60px}.contentL{padding-left:60px}.flex-col-container.img-right .flex-col-right{margin-left:45px;margin-right:0}.flex-col-container.img-right .flex-col-left{margin-left:auto}.flex-col-right .section-head{text-align:left;margin-bottom:20px}.flex-col-right .section-head span{display:block}.flex-col-right .section-head:after{margin:20px 0 0}.flex-col-right .section-head .section-title span{font-family:Nunitobold}.flex-col-container p{font-size:18px}.flex-col-container .flex-title{font-size:30px;color:#1a232c;font-family:sofia_probold;text-transform:capitalize;line-height:40px;margin-bottom:10px;position:relative}.flex-col-container .flex-title:after{content:"";width:60px;height:3px;background:#edb200;position:relative;display:block;margin:10px 0}.flex-col-container .subtext{font-size:18px;color:#1a232c;max-width:800px;margin:auto;font-family:sofia_probold;margin-bottom:20px}.flex-col-container .flex-desc{color:#313131;font-size:16px;line-height:26px;font-family:sofia_proregular;margin-top:10px}.flex-list{display:flex;flex-wrap:wrap;align-items:center;justify-content:flex-start;margin-top:10px}.flex-list li{width:45%;padding:8px 0 8px 15px;position:relative;font-family:sofia_proregular}.flex-list li:before{content:"";position:absolute;width:6px;height:6px;background:#c09432;border-radius:50%;left:0;top:18px}.flex-col-right .nav_quote{border:solid 1px #ffc30e;background:#ffc30e;padding:8px 20px;color:#1a232c;border-radius:5px;text-transform:capitalize;position:relative;text-align:center;display:inline-block;margin-top:20px;font-size:16px;transition:all ease .3s}.we-do-col{padding:40px 0}.cta{margin-top:20px;left:35px;bottom:5%;font-size:17px;font-family:sofia_probold;display:inline-block;color:#c09432}.cta svg{margin-left:0;left:0;vertical-align:middle;transition:all ease .3s;position:relative;fill:#c09432;height:20px;width:16px}.cta:hover svg{left:6px}.cta.center{text-align:center;margin-top:30px;display:block}.cta.ylr{text-align:center;display:block;margin:0 auto}.gallery-wrapper ul{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.gallery-wrapper ul li{width:31%;position:relative;margin-bottom:30px}.gallery-wrapper ul li span{font-size:26px;color:#fff;font-family:sofia_probold;text-transform:capitalize;line-height:40px;margin-bottom:10px;position:absolute;bottom:0;text-align:center;width:100%}.tab-section-wrapper .tab-head{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.tab-section-wrapper .tab-head li{margin:0 10px;position:relative}.tab-section-wrapper .tab-head li:after{content:"";position:absolute;height:15px;width:1px;right:-10px;background:#000;opacity:.54;top:13px}.tab-section-wrapper .tab-head li:last-child::after{content:none}.tab-section-wrapper .tab-head li a{opacity:.4;display:block;padding:0 10px;line-height:36px;color:#121212;font-family:sofia_probold;font-size:18px;border-bottom:solid 3px transparent;transition:all ease .2s}.tab-section-wrapper .tab-head li a.active,.tab-section-wrapper .tab-head li a:hover{opacity:1;color:#1a232c;border-bottom:solid 3px #ffc30e}.gallery-tab{padding:0 0}.gallery-tab ul li{width:100%!important;padding:0 10px}.gallery-tab .owl-nav{display:block!important}.gallery-tab .owl-nav .owl-prev{position:absolute;left:-20px;top:50%;transform:translateY(-50%);font-size:60px!important;color:#a09e9f!important}.gallery-tab .owl-nav .owl-next{position:absolute;right:-20px;top:50%;transform:translateY(-50%);font-size:60px!important;color:#a09e9f!important}.target-div.active{opacity:1;display:block}.target-div{opacity:0;-webkit-transition:all ease 2s;-o-transition:all ease 2s;transition:all ease 3s;display:none}@media screen and (max-width:641px){.cta{font-size:14px}.gallery-wrapper ul li{width:100%}.flex-col-left{width:100%}.flex-col-right{width:100%;padding:0}.flex-col-container .flex-title{font-size:22px;line-height:33px;margin-top:20px}.flex-col-container .subtext{font-size:16px}.flex-col-container.reverse{flex-direction:column-reverse}}
      </style>
   <div class="body-container">
      <section class="clearfix we-do-col">
         <div class="container">
            <div class="flex-col-container">
                         <div class="flex-col-left">
                           <img loading="lazy" width="613" height="453" class="transactional-img customwid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/construction-services.png" alt="Residential Construction Services" title="Residential Construction Services" style="">
                        </div>
                        <div class="flex-col-right contentL">
                           <div class="flex-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                              <h2 class="flex-title">We Execute Every Phase From Designing to Construction</h2>
                              <p class="subtext">Transform a Dream Home into Reality in 120 days</p>
                           </div>
                           <p class="flex-desc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">{{ $settings?->app_name }} is a leading construction company in Lucknow, Gorakhpur & Allahabaad that takes care of your home planning right from contemplating the design structure, elevating into beautiful construction and designing your special interiors. We primarily focus on personalized customer-centric approach, uncompromising business ethics, and utmost transparency.</p>
                           {{-- <a href="get-quote.php" class="nav_quote cap" type="button" >Get a quote</a> --}}
                        </div>
                     </div>
         </div>
      </section>
      <section class="section_container clearfix multifaceted">
         <div class="container">
            <div class="section-head">
               <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">We Provide Comprehensive Services From Designing to Construction</h2>
               <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;max-width:900px;">From Concept to Creation We Cover The Shortest Distance Between Paradise & Place Called “Home”</h4>
            </div>
                 <div class="flex-col-container reverse">
                         <div class="flex-col-right contentR">
                           <div class="flex-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                              <h3 class="flex-title">Architecture & Planning</h3>
                              <p class="subtext">Designing Spaces With Trust and Creativity</p>
                           </div>
                           <p class="flex-desc">We know it’s never been easy to have the choicest architect to build your dream house. Factors of cost, trust, experience, performance, and reliability all come into play.Through much experience in house raising projects, we’ve grown with Lucknow, Gorakhpur & Allahabaad—like the city itself! We firmly believe that a good design is all about satisfying a client's personalized needs and  objectives.</p>
                           <p class="flex-desc">We have a modern approach towards innovativeness in architecture and planning, yet have a strong foothold in aesthetic conventional designing that has lasting impact.</p>
                           <ul class="flex-list">
                              <li>Floor Plan</li>
                              <li>Structural Drawing</li>
                              <li>3D Elevation</li>
                              <li>3D Interior Design</li>
                           </ul>
                           {{-- <a class="cta" href="https://www.chennee.in/architects-in-hosur.php">Explore Architectural Services in Hosur
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a>
                           <a class="cta" href="https://www.chennee.in/architects-in-bangalore.php">Explore Architectural Services in Bangalore
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a> --}}
                        </div>
                        <div class="flex-col-left mlauto">
                           <img loading="lazy" width="613" height="518" class="advertising-img " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/architectural-design-services.webp" alt="Architectural Design Services" title="Architectural Design Services" style="">
                        </div>
                     </div>
                     <div class="flex-col-container">
                         <div class="flex-col-left">
                           <img loading="lazy" width="613" height="518" class="transactional-img customwid LoadImg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/home-interior-decorators.png" alt="Home Interior Designers" title="Home Interior Designers" style="">
                        </div>
                        <div class="flex-col-right contentL">
                           <div class="flex-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                              <h3 class="flex-title">Home Interior Designs</h3>
                              <p class="subtext">One-stop Shop For Classic-Contemporary Home Interiors</p>
                           </div>
                           <p class="flex-desc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">{{ $settings?->app_name }} specializes in interior design and decor for residential projects, creating spaces reflecting the client's personality and aspirations, truly imprinting their insignia.</p>
                           <p class="flex-desc wow fadeInUp">Through affordable design solutions and inspired visions we excel in designing Flats, Villas, Bungalows, Independent Residential Properties panning across Lucknow, Gorakhpur & Allahabaad, testimony to our caliber and diversity in design and implementation</p>
                           <ul class="flex-list">
                              <li>Modular Kitchen</li>
                              <li>Living Room</li>
                              <li>Bedroom</li>
                              <li>Dining Room</li>
                           </ul>
                           {{-- <a class="cta" href="https://www.chennee.in/interior-designers-in-hosur.php">Explore Interior Designers in Hosur
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a>
                           <a class="cta" href="https://www.chennee.in/home-interior-designers-in-bangalore.php">Explore Interior Designers in Bangalore
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a> --}}
                        </div>
                     </div>
                     <div class="flex-col-container reverse">
                         <div class="flex-col-right contentR">
                           <div class="flex-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                              <h3 class="flex-title">Residential Construction</h3>
                              <p class="subtext">We Promise Hassle-free Construction Services</p>
                           </div>
                           <p class="flex-desc">{{ $settings?->app_name }} have a proven track record of handling an array of projects before the stipulated time within reasonable budget.</p>
                           <p class="flex-desc">When it comes to building elevated structures we utilize best-in quality materials added with exceptional customized service during the construction phase with absolute zero compromise.</p>
                           <ul class="flex-list">
                              <li>Villa</li>
                              <li>Apartment</li>
                              <li>Duplex House</li>
                              <li>Bungalow</li>
                           </ul>
                           {{-- <a class="cta" href="https://www.chennee.in/building-construction-contractors-hosur.php">Explore Construction Services in Hosur
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a>
                           <a class="cta" href="https://www.chennee.in/building-construction-contractors-bangalore.php">Explore Construction Services in Bangalore
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a> --}}
                        </div>
                        <div class="flex-col-left mlauto">
                           <img loading="lazy" class="advertising-img " width="613" height="518" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/building-construction-contractors.png" alt="House Construction Contractors" title="House Construction Contractors" style="">
                        </div>
                     </div>
                     <div class="flex-col-container">
                         <div class="flex-col-left">
                           <img loading="lazy" width="613" height="518" class="transactional-img customwid LoadImg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/renovation-services.png" alt="Renovation Contractors" title="Renovation Contractors" style="">
                        </div>
                        <div class="flex-col-right contentL">
                           <div class="flex-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                              <h3 class="flex-title">Renovation & Remodeling</h3>
                              <p class="subtext">Revive Your Aged Homes to Surrounding That You Plan to Live </p>
                           </div>
                           <p class="flex-desc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">Is your house too old-fashioned? Are you planning to recreate your personalized interior spaces & give a fresh look? Put your worries away!</p>
                           <p class="flex-desc wow fadeInUp">{{ $settings?->app_name }} help you to remodel your living space & colour your walls of love which you can cherish for lifetime & beyond. Our projects range from sophisticated bath,  kitchen restoration to entire house refurbishment and special additions to new home construction.</p>
                           <ul class="flex-list">
                              <li>Floor Addition</li>
                              <li>Kitchen Renovation</li>
                              <li>Living Room Renovation</li>
                              <li>Bedroom Renovation</li>
                           </ul>
                           {{-- <a class="cta" href="https://www.chennee.in/renovation-contractors-in-hosur.php">Explore Renovation Services in Hosur
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a>
                           <a class="cta" href="https://www.chennee.in/house-renovation-contractors-bangalore.php">Explore Renovation Services in Bangalore
                           <svg xmlns="https://www.w3.org/2000/svg" width="14.455" height="12.396" viewBox="0 0 14.455 12.396"><defs><style>.apps{fill:#C09432;}</style></defs><g transform="translate(0 0)"><path class="apps" d="M.869,37.025a1.034,1.034,0,0,1,.179-.013h10.2l-.222-.1a2.068,2.068,0,0,1-.584-.414l-2.86-2.86a1.07,1.07,0,0,1-.15-1.37A1.034,1.034,0,0,1,8.98,32.13L14.151,37.3a1.034,1.034,0,0,1,0,1.463h0L8.98,43.936a1.034,1.034,0,0,1-1.551-.1,1.07,1.07,0,0,1,.15-1.37L10.433,39.6a2.068,2.068,0,0,1,.517-.377l.31-.14H1.1a1.07,1.07,0,0,1-1.091-.869A1.034,1.034,0,0,1,.869,37.025Z" transform="translate(0 -31.842)"></path></g></svg>
                           </a> --}}
                        </div>
                     </div>


         </div>
      </section>

      <section class="section_container middle-cta" data-src="assets/images/mid-bg.webp"  style="background-image: url(assets/images/mid-bg.webp);">
         <div class="">
            <svg class="left rm768" xmlns="http://www.w3.org/2000/svg" width="395" height="280" viewBox="0 0 395 280">
            <g id="Group_30200" data-name="Group 30200" transform="translate(4.748 -4876.405)">
               <rect id="Rectangle_12649" data-name="Rectangle 12649" width="178" height="27" rx="13.5" transform="translate(47.252 4876.405)" fill="#ffffff"></rect>
               <rect id="Rectangle_12650" data-name="Rectangle 12650" width="228" height="27" rx="13.5" transform="translate(78.252 5040.405)" fill="#fff"></rect>
               <path id="Rectangle_12652" data-name="Rectangle 12652" d="M0,0H194.5A13.5,13.5,0,0,1,208,13.5v0A13.5,13.5,0,0,1,194.5,27H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(-4.748 5129.405)" fill="#FFC30E"></path>
               <path id="Rectangle_12653" data-name="Rectangle 12653" d="M0,0H120.5A13.5,13.5,0,0,1,134,13.5v0A13.5,13.5,0,0,1,120.5,27H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(-4.748 4958.405)" fill="#ffd119"></path>
               <rect id="Rectangle_12651" data-name="Rectangle 12651" width="43" height="27" rx="13.5" transform="translate(347.252 5040.405)" fill="#ffd119"></rect>
               <path id="Rectangle_12654" data-name="Rectangle 12654" d="M0,0H8.5A13.5,13.5,0,0,1,22,13.5v0A13.5,13.5,0,0,1,8.5,27H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(-4.748 5040.405)" fill="#fff"></path>
            </g>
            </svg>
            <div class="mid-cta">
                  <h3>Contact Us For Your <b>Free Consultation.</b>
                  </h3>
                  {{-- <a href="get-quote.php" type="button" class="action_buttons" id="experts">Get A Free Quote</a> --}}
                  <h3>Or Give Us Call  <a href="tel:+91 9600442776">+91 96004  42776</a>
                  </h3>
            </div>
            <svg class="right rm768" id="Group_30201" data-name="Group 30201" xmlns="http://www.w3.org/2000/svg" width="393" height="280" viewBox="0 0 393 280">
            <rect id="Rectangle_12649" data-name="Rectangle 12649" width="178" height="27" rx="13.5" transform="translate(165 0)" fill="#ffd119"></rect>
            <rect id="Rectangle_12650" data-name="Rectangle 12650" width="228" height="27" rx="13.5" transform="translate(84 164)" fill="#fff"></rect>
            <path id="Rectangle_12652" data-name="Rectangle 12652" d="M13.5,0H206a0,0,0,0,1,0,0V27a0,0,0,0,1,0,0H13.5A13.5,13.5,0,0,1,0,13.5v0A13.5,13.5,0,0,1,13.5,0Z" transform="translate(187 253)" fill="#ffd119"></path>
            <path id="Rectangle_12653" data-name="Rectangle 12653" d="M13.5,0H132a0,0,0,0,1,0,0V27a0,0,0,0,1,0,0H13.5A13.5,13.5,0,0,1,0,13.5v0A13.5,13.5,0,0,1,13.5,0Z" transform="translate(261 82)" fill="#ffffff"></path>
            <rect id="Rectangle_12651" data-name="Rectangle 12651" width="43" height="27" rx="13.5" transform="translate(0 164)" fill="#FFC30E"></rect>
            <path id="Rectangle_12654" data-name="Rectangle 12654" d="M13.5,0H20a0,0,0,0,1,0,0V27a0,0,0,0,1,0,0H13.5A13.5,13.5,0,0,1,0,13.5v0A13.5,13.5,0,0,1,13.5,0Z" transform="translate(373 164)" fill="#fff"></path>
            </svg>
         </div>
      </section>

      <section class="section_container clearfix multifaceted">
         <div class="container">
            <div class="section-head">
               <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Reasons Why Customers Love Us To Design & Build Their Dream House</h3>
               <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Delightful Experiences Defines Our Vision To Give You The Best </h4>
            </div>
            <div class="gallery-wrapper">
               <ul>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/one-stop-solution.png" alt="One Stop Solution" title="One Stop Solution">
                     <span>One Stop Solution</span>
                  </li>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/superior-design.png" alt="Superior Design" title="Superior Design">
                     <span>Superior Design</span>
                  </li>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/on-time-delivery.png" alt="On Time Delivery" title="On Time Delivery">
                     <span>On-time Delivery</span>
                  </li>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/homes-with-warranty.png" alt="Homes With Warranty" title='Homes With Warranty'>
                     <span>Homes with Warranty</span>
                  </li>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/quality.png" alt="Quality" title="Quality">
                     <span>Quality</span>
                  </li>
                  <li>
                     <img width="380" height="200" loading="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/homepage/transparency.png" alt="Transparency" title="Transparency">
                     <span>Transparency</span>
                  </li>
               </ul>
            </div>
         </div>
      </section>

        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" />
      <section class="section_container clearfix">
         <div class="container">
               <div class="section-head">
                  <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Our Latest Projects</h3>
                  <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Take A Look At How We Build Our Treasures</h4>
               </div>
               <!-- <div class="tab-section-wrapper">
                  <ul class="tab-head wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                     <li>
                        <a href="javascript:void(0);" class="upload-video-Single active" target="1">
                        All Projects
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="upload-video-Single" target="2">
                        Architecture
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="upload-video-Single" target="3">
                        Interior
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="upload-video-Single" target="3">
                        Construction
                        </a>
                     </li>
                  </ul>
               </div> -->
               <div class="gallery-tab">
               <div id="upload-content1" class="active target-div">
                     <ul class="owl-carousel">
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-1.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-2.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-3.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-4.png" alt="">
                        </li>

                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-5.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-6.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-7.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-8.png" alt="">
                        </li>

                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-9.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-10.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-11.png" alt="">
                        </li>
                        <li class="item" style="width:250px">
                        <img loading="lazy" width="382" height="298" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/gallery/gallery-12.png" alt="">
                        </li>
                     </ul>
                  </div>
               </div>
         </div>
      </section>
   </div>

   <section class="section_container">
<div class="container">
               <div class="section-head">
                  <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">See What Customer Says About {{ $settings?->app_name }}</h3>
                  <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Serving Every Customer According to Niche Preferences is Our Key Objective. Check Out Our Recent Customer Success Stories of Shaping Their Passion Exclusively.</h4>
               </div>
    <div class="testimonials-wrap">
        <div class="testmonial-cont">
            <p>The transformation from a traditional structure to an urban classic residence was an  ideal blend of contemporary and trendy designs giving a remarkable ideation from {{ $settings?->app_name }} property experts.</p>
            <div class="reviewer">
                <img class="user" width="70" height="72" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/user-one.svg" alt="">
                <span>
                    Athithan
                    <img class="rating" width="100" height="15" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/rating-four.svg" alt="">
                </span>

            </div>
        </div>
        <div class="testmonial-cont filled">
            <p>In every way, {{ $settings?->app_name }} expert’s performance has been amazing. When it comes to material purchases for construction, we appreciate your expertise and attention to our needs, thereby saving us millions! </p>
            <div class="reviewer">
                <img class="user" width="70" height="72" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/user-two.svg" alt="">
                <span>
                Anukeerthana
                    <img class="rating" width="100" height="15" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/rating-five.svg" alt="">
                </span>

            </div>
        </div>
        <div class="testmonial-cont">
            <p>My family and I couldn't dream of a residence which is so prettily designed. The vibe is & our housing project has the right architecture designed making it so rejuvenating and beautiful. Finally, we enjoy living our dream! Thanks to {{ $settings?->app_name }}.</p>
            <div class="reviewer">
                <img class="user" width="70" height="72" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/user-three.svg" alt="">
                <span>
                Sundar
                    <img class="rating" width="100" height="15" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="assets/images/rating-four.svg" alt="">
                </span>

            </div>
        </div>
    </div>
</div>
</section>
<!-- Last published date  -->
<div class="container">
      <style>
         .publishd-date-wrap {
            text-align: right;
            color: #000000;
            font-size: 13px;
            margin-bottom: 5px;
            font-family: 'sofia_proregular';
         }
      </style>
      <div class="publishd-date-wrap" itemscope="" itemtype="http://schema.org/WebPage"><span class="text-tiny">Published:  <span class="published_on" itemprop="datePublished"> 2023-10-02</span></span></div>
      </div>
      <!-- Last published date  -->
   <section>
    <div class="bottom-cta">
        <h5>Let’s Design & Build Your Dream Home Together</h5>
        <p>Share your ideas, we design and build your dream home as your dream</p>
        {{-- <a href="get-quote.php">GET A FREE QUOTE</a> --}}
    </div>
    <div class="contact-info">
        <ul>
            <li>
                <svg xmlns="https://www.w3.org/2000/svg" width="52.393" height="52.393" viewBox="0 0 52.393 52.393"><defs><style>.absw{fill:#1a232c;}.bbsw{fill:#fff;}</style></defs><ellipse class="absw" cx="26.196" cy="26.197" rx="26.196" ry="26.197" transform="translate(0 0)"/><g transform="translate(11.836 16.316)"><path class="bbsw" d="M27.52,152.656H1.835A1.835,1.835,0,0,0,0,154.491v1.044l14.678,6.216,14.678-6.218v-1.042A1.835,1.835,0,0,0,27.52,152.656Z" transform="translate(0 -152.656)"/><g transform="translate(0 4.871)"><path class="bbsw" d="M15.035,320.841a.908.908,0,0,1-.716,0L0,314.777v13.476a1.835,1.835,0,0,0,1.835,1.835H27.52a1.835,1.835,0,0,0,1.835-1.835V314.777Z" transform="translate(0 -314.777)"/></g></g></svg>
               <span><a href="mailto:{{ $settings?->email }}">{{ $settings?->email }}</a></span>
            </li>
            <li>
                <svg xmlns="https://www.w3.org/2000/svg" width="51.976" height="51.976" viewBox="0 0 51.976 51.976"><defs><style>.vikd{fill:#25d366;}</style></defs><g transform="translate(0)"><path class="vikd" d="M25.994,0h-.013A25.972,25.972,0,0,0,4.947,41.22L1.709,50.874,11.7,47.681A25.983,25.983,0,1,0,25.994,0ZM41.116,36.7c-.627,1.77-3.115,3.239-5.1,3.668-1.358.289-3.132.52-9.1-1.956-7.637-3.164-12.555-10.925-12.939-11.428-.367-.5-3.086-4.109-3.086-7.839a8.3,8.3,0,0,1,2.657-6.325,3.776,3.776,0,0,1,2.657-.932c.322,0,.611.016.871.029.763.032,1.147.078,1.65,1.283.627,1.511,2.154,5.24,2.336,5.623a1.547,1.547,0,0,1,.11,1.407,4.491,4.491,0,0,1-.841,1.192c-.383.442-.747.78-1.13,1.254-.351.413-.747.854-.305,1.618a23.067,23.067,0,0,0,4.217,5.24A19.106,19.106,0,0,0,29.2,33.29,1.643,1.643,0,0,0,31.036,33a31.443,31.443,0,0,0,2.03-2.69,1.45,1.45,0,0,1,1.865-.565c.7.244,4.415,2.079,5.178,2.459s1.267.565,1.452.887A6.472,6.472,0,0,1,41.116,36.7Z" transform="translate(0)"/></g></svg>
                <span><a target="blank" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}?text=Hi%20I%20have%20a%20plot%20in">{{ $settings->whatsapp }}</a></span>
            </li>
            <li>
               <svg xmlns="https://www.w3.org/2000/svg" width="51.975" height="51.976" viewBox="0 0 51.975 51.976"><defs><style>.agt{fill:#1a232c;}</style></defs><g transform="translate(0 0)"><path class="agt" d="M44.361,7.608a25.988,25.988,0,1,0,7.614,18.373A25.988,25.988,0,0,0,44.361,7.608Zm-5,28.592,0,0V36.2L38.037,37.5a6.93,6.93,0,0,1-6.54,1.871,23.027,23.027,0,0,1-6.687-3,30.9,30.9,0,0,1-5.275-4.253,31.135,31.135,0,0,1-3.941-4.782,24.253,24.253,0,0,1-2.963-5.995,6.93,6.93,0,0,1,1.733-7.077L15.9,12.728a1.1,1.1,0,0,1,1.556,0l0,0L22.332,17.6a1.1,1.1,0,0,1,0,1.556l0,0-2.859,2.859a2.33,2.33,0,0,0-.243,3.032,33.432,33.432,0,0,0,3.422,3.993,33.227,33.227,0,0,0,4.5,3.786,2.347,2.347,0,0,0,3-.26l2.763-2.807a1.1,1.1,0,0,1,1.556,0l0,0,4.877,4.886A1.1,1.1,0,0,1,39.357,36.2Z" transform="translate(0 0)"/></g></svg>
                <span><a href="tel:{{ $settings?->contact }}">{{ $settings?->contact }}</a></span>
            </li>
        </ul>
    </div>
</section>
<style>
   footer{padding:60px 0 0;background:#1a232c}footer .container{width:1280px}.footer-menus{padding-bottom:40px}.footer-logo{width:210px;display:block;margin-bottom:20px;position:relative}.footer-content{font-size:14px;line-height:24px;font-family:sofia_promedium;margin-bottom:15px;color:#fff;width:100%}.social-links{margin-top:35px;position:relative}ul.social-links:before{content:'';position:absolute;width:38%;height:2px;background:#dfdfdf5e;opacity:.3;left:0;top:50%;transform:translateY(-50%)}ul.social-links:after{content:'';position:absolute;width:38%;height:2px;background:#dfdfdf5e;opacity:.3;right:0;top:50%;transform:translateY(-50%)}.social-links li{display:inline-block;margin:0 5px;width:27px;height:27px}.social-links li a,.social-links li span{padding:0!important}.social-links li a::before{content:none!important}.social-links li a:hover svg{transform:scale(1.1)}.social-links svg{width:100%;height:100%;vertical-align:middle;transition:all ease .2s}.footmenu-column{display:inline-block;vertical-align:top;width:15%;margin:0}.footmenu-column:nth-child(2){width:20%;padding-left:0}.footmenu-column:nth-child(3){padding-left:0;width:22%}.footmenu-column:nth-child(4){width:21%;padding-left:0}.footmenu-column:nth-child(5){width:9%}.footmenu-column:nth-child(6){width:100%!important;text-align:center;padding-left:0}.footmenu-column:first-child{padding-left:0;width:25%}.footmenu-column h6{font-size:18px;position:relative;margin-bottom:15px;font-family:sofia_probold;color:#dca937;margin-top:15px}.footmenu-column ul li a,.footmenu-column ul li span{-webkit-transition:all ease .3s;-o-transition:all ease .3s;transition:all ease .3s;color:#fff;font-size:14px;display:block;margin-bottom:12px;font-family:sofia_promedium;position:relative;padding-left:15px}.footmenu-column .footer-icons a{background:#fff;width:24px;height:24px;border-radius:100%;display:inline-block;position:relative;-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);-webkit-transition:all ease .3s;-o-transition:all ease .3s;transition:all ease .3s}.footmenu-column ul li a:hover{padding-left:20px}.footmenu-column ul li a::before{content:"";position:absolute;left:0;top:6px;height:7px;width:7px;background-image:url(../images/double-arrow-right.svg);background-size:cover}.footmenu-column .footer-icons a:hover{-webkit-transform:scale(1.2);-ms-transform:scale(1.2);transform:scale(1.2);-webkit-transition:all ease .3s;-o-transition:all ease .3s;transition:all ease .3s}.bottom-footer{background-color:#282929;height:44px}.footer-btn .sales{background:#ffc30e;color:#000;font-size:14px;font-family:sofia_probold;text-align:center;padding:9px 18px;border-radius:5px;display:inline-block;margin-top:15px;-webkit-transition:all ease .4s;-o-transition:all ease .4s;transition:all ease .4s;border:solid 1px transparent;margin-left:5px;text-transform:uppercase}.footer-btn .demo{background:0 0;color:#fff;font-size:14px;font-family:sofia_probold;text-align:center;padding:9px 18px;border-radius:5px;display:inline-block;margin-top:15px;-webkit-transition:all ease .4s;-o-transition:all ease .4s;transition:all ease .4s;border:solid 1px #fff;text-transform:uppercase}.footer-btn .demo:hover{background:#ffc30e;color:#000;border:solid 1px #ffc30e}.copyrights{font-size:14px;font-family:sofia_promedium;color:#fff}.footer-bottom{text-align:center;padding:20px 0}.footer-icons{margin:10px 0}.footer-icons li{display:inline-block;margin-right:10px}.footer-icons li a svg{height:15px;width:15px;vertical-align:middle;fill:#53caaa;position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.footer-icons svg path{fill:#0798d6}section.sticky-footer{position:relative;bottom:0;background:#fff;padding:10px 0;z-index:9;width:100%;display:none}.sticky-wrap{display:flex;align-items:center;justify-content:center;position:relative}.get-quotes{width:50%;text-align:center}.get-quotes:after{content:"";position:absolute;width:2px;height:20px;background:#ffc30e;left:50%;top:50%;transform:translate(-50%,-50%)}.whatsapps-us{width:50%;text-align:center}.whatsapps-us .whatsapp-link svg{width:40px;height:40px;position:absolute;padding:10px;background:#25d366;border-radius:50%;left:-7px;top:-2px}.whatsapps-us .whatsapp-link{background:#000;font-family:sofia_probold;color:#fff;border-radius:10px;padding:6px 20px 6px 40px;display:inline-block;box-shadow:0 3px 6px #00000029;position:relative;border-radius:45px}.nav_quote{background:#ffc30e;padding:8px 13px;color:#1a232c;border:solid 1px #ffc30e;border-radius:5px;text-transform:capitalize;position:relative;text-align:center;display:inline-block;font-size:14px;min-width:135px}.whatsapps-us .nav_quote{background:0 0;border:solid 1px #1a232c;color:#1a232c}.whatsapps-us .nav_quote:hover{background:#ffc30e;border:solid 1px #ffc30e;color:#1a232c}.whatsapp-footer{font-size:18px;background:#25d366;font-family:sofia_probold;color:#fff;border-radius:45px;padding:10px;box-shadow:0 3px 6px #00000029;position:fixed;bottom:4%;right:20px;z-index:999}.whatsapp-link svg{vertical-align:middle;height:25px;width:25px;margin-right:10px}@media screen and (max-width:1281px){.container{width:100%!important;padding:0 20px}}@media screen and (max-width:768px){.nav_actions{display:none!important}.whatsapp-footer{bottom:5%;right:10px}.footer_contact_form .section-head .form-head-bg{width:121px;height:121px}footer{padding-top:35px}.footer-menus{margin:0}.footmenu-column{width:45%!important;padding-left:0!important;margin-bottom:15px}.footmenu-column:nth-child(odd){margin-right:40px}.footmenu-column:nth-last-child(-n+2){margin-bottom:0}section.sticky-footer{display:block;background:#f5f5f5;bottom:1px}.whatsapp-footer{display:block}ul.social-links:before{width:15%}ul.social-links:after{width:15%}}@media screen and (max-width:641px){.footmenu-column h6{font-size:15px!important}.footmenu-column ul li a,.footmenu-column ul li span{font-size:12px!important}.footmenu-column ul li a:hover{padding-left:15px!important}.footmenu-column{width:100%!important}.footmenu-column:nth-child(odd){margin-right:0}.footmenu-column:last-child{margin-top:15px}.footmenu-column.responsive{width:49%!important;margin-top:15px}.footmenu-column.responsive.pd{padding-left:10px!important}.footer-content{width:100%}}@media screen and (max-width:341px){.nav_quote{font-size:13px}}
</style>
<style>

.popup__content{background-image:url(assets/images/popup-bg.png);background-repeat:no-repeat;background-size:cover;width:700px;height:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;position:relative;border-radius:17px}.popup__close{background-color:#ddd!important;height:30px;width:30px;line-height:30px;text-align:center;border-radius:50%;position:absolute;right:-10px;top:-10px;display:flex;align-items:center;justify-content:center;cursor:pointer}.popup-cont h5{font-family:sofia_probold;font-size:42px;line-height:55px;color:#ffc30e;margin:0;position:relative;padding-bottom:35px}.popup-cont #off{position:absolute;right:5%;top:35px;display:block;width:200px;height:auto}.popup-cont h5:before{content:"";width:100px;height:2px;background:#fff;display:block;position:absolute;bottom:10px;left:0;right:0;margin:0}.popup-cont p{font-size:22px;line-height:32px;color:#fff;max-width:800px;margin:auto; font-family: sofia_prolight;padding-top:10px}.popup-cont p b{font-family:sofia_probold}.popup-cont a{margin-top:20px}.popup-cont{width:70%;padding:60px 30px 145px 30px}#popup-img{position:absolute!important;width:100%;right:0;bottom:0}#popup-img img{border-bottom-right-radius:17px;border-bottom-left-radius:17px}.popup-cont .nav_quote{font-size:16px;z-index:99}@media screen and (max-width:640px){.popup__content{width:340px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}.popup-cont #off{right:5%;top:14px;display:block;width:105px!important}.popup-cont h5{font-size:21px;line-height:30px;padding-bottom:20px}.popup-cont p{font-size:13px;line-height:24px}.popup-cont .nav_quote{font-size:12px;min-width:inherit;padding:5px 9px}#popup-img{height:40%;width:100%;bottom:0;right:0}}@media screen and (max-width:340px){.popup__content{width:310px;position:relative}.popup-cont{width:80%;padding:80px 15px 70px 16px}}
@media screen and (min-width:768px){ .floating-cta{display:none}}.whatsapp-footer{transition:all ease .3s;}@media screen and (max-width:768px){footer {padding-bottom: 75px;}.whatsapp-footer.show{bottom:70px;}.floating-cta.show{bottom:0;}.floating-cta{position:fixed;width:100%;display:flex;align-items:center;justify-content:center;padding:8px 20px;background:#fff;-webkit-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);-moz-box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);box-shadow:0 -2px 4px 0 rgb(173 173 173 / 30%);transition: all ease .3s;bottom: -70px;z-index:9999;}.floating-cta a{height:48px;display:inline-block;background:#ffc30e;border-radius:3px;color:#000;text-align:center;font-size:16px;font-family: "proxima-nova", sans-serif;font-weight: 700;line-height:48px;padding:0 30px;border:none;transition:all .3s cubic-bezier(.25,.8,.25,1);position:relative;z-index:1;width:auto;}}@media screen and (max-width:641px){.floating-cta a{width:100%;}}</style>
<div class="floating-cta">
         {{-- <a rel="nofollow" id="sales-header" href="https://www.chennee.in/get-quote.php" title="Get a free quote">Get A Free Quote</a> --}}
         </div>
<footer>
    <div class="container">
        <div class="top-footer clearfix">
            <div class="footer-menus wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">
                <div class="footmenu-column">
                    <a itemprop="url" href="./" class="footer-logo" title="{{ $settings?->app_name }}">

                <img src="{{ $settings?->header_image }}" width="210" height="61" class="footer-logo LoadImg" alt="chennee logo" style="">
            </a>
                    <p class="footer-content">
                    We are a one stop solution for all your architectural planning, construction and interior design needs.
                </p>
                <div class="footer-btn">
                    {{-- <a class="demo" href="./contact-sales.php">Talk to us</a>
                    <a class="sales" href="./get-quote.php">Get a quote</a> --}}
                    </div>
                </div>

                <div class="footmenu-column responsive">
                    <h6>Services in Lucknow</h6>
                    <ul>
                       <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.hosur') }}" title="Architects in Hosur">Architects in Lucknow</a></li>
                       <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.hosur') }}" title="Building Contractors in Hosur">Building Contractors in Lucknow</a></li>
                       <li itemprop="name"><a itemprop="url" href="{{ route('interior.designers.in.hosur') }}" title="Interior Designers in Hosur">Interior Designers in Lucknow</a></li>
                       <li itemprop="name"><a itemprop="url" href="{{ route('renovation.contractors.in.hosur') }}" title="Renovation Contractors in Hosur">Renovation Contractors in Lucknow</a></li>
                       {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Hosur">House Construction Company in Lucknow</a></li> --}}
                    </ul>
                    </div>
                    <div class="footmenu-column responsive">
                        <h6>Services in Gorakpur</h6>
                        <ul>
                        <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.bangalore') }}" title="Architects in Bangalore">Architects in Gorakpur</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.bangalore') }}" title="Building Contractors in Bangalore">Building Contractors in Gorakpur</a></li>
                        <li itemprop="name"><a itemprop="url" href="https{{ route('interior.designers.in.bangalore') }}" title="Interior Designers in Bangalore">Interior Designers in Gorakpur</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('house.renovation.contractors.bangalore') }}" title="Renovation Contractors in Bangalore">Renovation Contractors in Gorakpur</a></li>
                        {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Bangalore">House Construction Company in Gorakpur</a></li> --}}
                        </ul>
                    </div>
                    <div class="footmenu-column responsive">
                        <h6>Services in Allahabaad</h6>
                        <ul>
                        <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.chennai') }}" title="Architects in Chennai">Architects in Allahabaad</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.chennai') }}" title="Building Contractors in Chennai">Building Contractors in Allahabaad</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('interior.designers.in.chennai') }}" title="Interior Designers in Chennai">Interior Designers in Allahabaad</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('house.renovation.contractors.chennai') }}" title="Renovation Contractors in Chennai">Renovation Contractors in Allahabaad</a></li>
                        {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Chennai">House Construction Company in Allahabaad</a></li> --}}
                        </ul>
                    </div>
                    <div class="footmenu-column responsive pd">
                        <h6>Company</h6>
                        <ul>
                        <li itemprop="name"><a itemprop="url" href="{{ route('about.us') }}" title="About Us">About Us</a></li>
                        <li itemprop="name"><a itemprop="url" href="#" title="Careers">Careers</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('contact.sales') }}" title="Contact Us">Contact Us</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('get.quote') }}" title="Get a Quote">Get a Quote</a></li>
                        {{-- <li itemprop="name"><a itemprop="url" href="#" title="Blog">Blog</a></li> --}}
                        </ul>
                    </div>
                    <div class="footmenu-column">
                        <ul class="social-links">
                        <li>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}?text=Hi%20I%20have%20a%20plot%20in" rel="nofollow" target="_blank">
                                <svg xmlns="https://www.w3.org/2000/svg" width="29.481" height="29.481" viewBox="0 0 29.481 29.481">
                                    <defs>
                                    <style>.whats{fill:#dca937;}</style>
                                    </defs>
                                    <g transform="translate(0)">
                                    <path class="whats" d="M14.744,0h-.007A14.731,14.731,0,0,0,2.806,23.38L.969,28.856l5.666-1.811A14.738,14.738,0,1,0,14.744,0Zm8.577,20.815a4.159,4.159,0,0,1-2.893,2.08c-.77.164-1.776.295-5.163-1.109-4.332-1.795-7.121-6.2-7.339-6.482a8.419,8.419,0,0,1-1.75-4.446A4.706,4.706,0,0,1,7.683,7.271a2.142,2.142,0,0,1,1.507-.529c.182,0,.346.009.494.017.433.018.65.044.936.728.356.857,1.222,2.972,1.325,3.189a.877.877,0,0,1,.063.8,2.547,2.547,0,0,1-.477.676c-.217.251-.424.442-.641.711-.2.234-.424.485-.173.918a13.084,13.084,0,0,0,2.392,2.972,10.837,10.837,0,0,0,3.457,2.132.932.932,0,0,0,1.039-.164,17.835,17.835,0,0,0,1.152-1.526.823.823,0,0,1,1.058-.321c.4.138,2.5,1.179,2.937,1.395s.719.321.824.5A3.671,3.671,0,0,1,23.321,20.815Z" transform="translate(0 0)"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $socialMediaLinks?->facebook ? $socialMediaLinks->facebook : '#' }}" rel="nofollow" target="_blank">
                                <svg xmlns="https://www.w3.org/2000/svg" width="29.481" height="29.481" viewBox="0 0 29.481 29.481">
                                    <defs>
                                    <style>.fbook{fill:#dca937;}.fbookb{fill:#1a232c;}</style>
                                    </defs>
                                    <path class="fbook" d="M25.8,0H3.685A3.689,3.689,0,0,0,0,3.685V25.8a3.689,3.689,0,0,0,3.685,3.685H25.8A3.689,3.689,0,0,0,29.481,25.8V3.685A3.689,3.689,0,0,0,25.8,0Z" transform="translate(0 0)"/>
                                    <path class="fbookb" d="M205.819,105.213h-4.606v-3.685c0-1.017.825-.921,1.843-.921H204.9V96h-3.685a5.527,5.527,0,0,0-5.528,5.528v3.685H192v4.606h3.685v10.134h5.528V109.819h2.764Z" transform="translate(-180.945 -90.472)"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $socialMediaLinks?->instagram ? $socialMediaLinks->instagram : '#' }}" rel="nofollow" target="_blank">
                                <svg xmlns="https://www.w3.org/2000/svg" width="29.769" height="29.769" viewBox="0 0 29.769 29.769">
                                    <defs>
                                    <style>.inins{fill:#dca937;}.ininsb{fill:#1a232c;}</style>
                                    </defs>
                                    <g transform="translate(-1520.667 -8066.153)">
                                    <path class="inins" d="M29.258,5.324A5.42,5.42,0,0,0,24.444.51,89.912,89.912,0,0,0,5.324.51,5.42,5.42,0,0,0,.509,5.324a89.912,89.912,0,0,0,0,19.119,5.42,5.42,0,0,0,4.815,4.815,89.914,89.914,0,0,0,19.12,0,5.42,5.42,0,0,0,4.815-4.815,89.912,89.912,0,0,0,0-19.119Zm0,0" transform="translate(1520.668 8066.153)"/>
                                    <g transform="translate(1526.196 8071.811)">
                                        <path class="ininsb" d="M95.09,102.932c.062-.438.109-.878.188-1.313A4.815,4.815,0,0,1,99.96,97.4c3-.1,6.011-.109,9.011,0a4.822,4.822,0,0,1,4.762,4.82q.135,4.322,0,8.651a4.822,4.822,0,0,1-4.762,4.82c-3,.108-6.011.111-9.011,0a4.905,4.905,0,0,1-4.77-4.833c-.016-.235-.066-.468-.1-.7v-7.218Zm9.358,11.146c1.373,0,2.748.041,4.119-.01a3.35,3.35,0,0,0,3.523-3.511q.093-4.015,0-8.034a3.329,3.329,0,0,0-3.523-3.506q-4.092-.087-8.187,0a3.309,3.309,0,0,0-3.517,3.455q-.11,4.066,0,8.136a3.331,3.331,0,0,0,3.517,3.46c1.354.05,2.712.01,4.067.01Zm0,0" transform="translate(-95.09 -97.317)"/>
                                        <path class="ininsb" d="M178.76,174a4.768,4.768,0,1,0,4.768,4.768A4.768,4.768,0,0,0,178.76,174Zm0,7.894a3.126,3.126,0,1,1,3.127-3.126A3.126,3.126,0,0,1,178.76,181.89Zm0,0" transform="translate(-169.405 -169.538)"/>
                                        <path class="ininsb" d="M325.554,151.877a1.134,1.134,0,1,1-1.134-1.134A1.134,1.134,0,0,1,325.554,151.877Zm0,0" transform="translate(-310.018 -147.636)"/>
                                    </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $socialMediaLinks?->linkedin ? $socialMediaLinks->linkedin : '#' }}" rel="nofollow" target="_blank">
                                <svg xmlns="https://www.w3.org/2000/svg" width="29.481" height="29.481" viewBox="0 0 29.481 29.481">
                                    <defs>
                                    <style>.in{fill:#dca937;}</style>
                                    </defs>
                                    <path class="in" d="M26.814,0H2.667A2.667,2.667,0,0,0,0,2.667V26.814a2.667,2.667,0,0,0,2.667,2.667H26.814a2.667,2.667,0,0,0,2.667-2.667V2.667A2.667,2.667,0,0,0,26.814,0ZM9.123,25.456a.776.776,0,0,1-.776.776h-3.3a.776.776,0,0,1-.776-.776V11.607a.776.776,0,0,1,.776-.776h3.3a.776.776,0,0,1,.776.776ZM6.695,9.526A3.138,3.138,0,1,1,9.833,6.387,3.138,3.138,0,0,1,6.695,9.526ZM26.387,25.518a.714.714,0,0,1-.714.714H22.128a.714.714,0,0,1-.714-.714v-6.5c0-.969.284-4.246-2.532-4.246-2.185,0-2.628,2.243-2.717,3.25v7.492a.714.714,0,0,1-.714.714H12.023a.714.714,0,0,1-.714-.714V11.545a.714.714,0,0,1,.714-.714h3.429a.714.714,0,0,1,.714.714v1.208c.81-1.216,2.014-2.154,4.577-2.154,5.676,0,5.644,5.3,5.644,8.217v6.7Z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $socialMediaLinks?->youTube ? $socialMediaLinks->youTube : '#' }}" rel="nofollow" target="_blank">
                                <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="35.144" height="29.481" viewBox="0 0 35.144 29.481">
                                    <defs>
                                    <style>.tube{fill:#dca937;}.tubeb{opacity:0.47;fill:url(#a);}.tubec{fill:#1a232c;}</style>
                                    <linearGradient id="a" x1="0.654" y1="0.871" x2="0.339" y2="0.448" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#f9e802" stop-opacity="0"/>
                                        <stop offset="0.329" stop-color="#b08c35" stop-opacity="0.267"/>
                                        <stop offset="1" stop-color="#e09637"/>
                                    </linearGradient>
                                    </defs>
                                    <g transform="translate(0 0)">
                                    <path class="tube" d="M33.548,45.61a4.526,4.526,0,0,0-3.3-3.065,56.018,56.018,0,0,0-25.356,0,4.526,4.526,0,0,0-3.3,3.065,33.55,33.55,0,0,0,0,20.445,4.526,4.526,0,0,0,3.3,3.065,56.018,56.018,0,0,0,25.356,0,4.526,4.526,0,0,0,3.3-3.065A33.55,33.55,0,0,0,33.548,45.61Z" transform="translate(0.001 -41.092)"/>
                                    </g>
                                    <path class="tubeb" d="M203.824,165.5a4.526,4.526,0,0,0,3.3-3.065q.387-1.236.68-2.475l-8.783-8.783a1.835,1.835,0,0,0-.546-.525l-9.371-5.739a1.688,1.688,0,0,0-2.682,1.422v11.755a1.717,1.717,0,0,0,.658,1.515l7.256,7.256A56.775,56.775,0,0,0,203.824,165.5Z" transform="translate(-173.574 -137.468)"/>
                                    <path class="tubec" d="M196.61,149.107l-9.371-5.877a1.841,1.841,0,0,0-2.82,1.56v11.755a1.842,1.842,0,0,0,2.82,1.56l9.371-5.877A1.842,1.842,0,0,0,196.61,149.107Z" transform="translate(-171.711 -135.926)"/>
                                </svg>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
        <div class="footer-bottom">
            <span class="copyrights">©  2023 All Rights Reserved</span>
        </div>
</a></footer>

{{-- <div class="popup popup_fl" id="popup-deposit" style="display:none !important">
   <div class="flex-center">

      <div class="popup__content LoadImg" preload="none">
         <a class="popup__close js-close-popup">
         <svg viewBox="0 0 384 512" style="display:block;height:18px;width:18px"><path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"></path></svg>
         </a>
            <div class="popup-wrap">
                <div class="popup-cont">
                <img width="200" height="177" id="off" src="assets/images/offer.png" alt=""/>
                <h5>Book a Home Construction Today!</h5>
                <p>Get an <b>Architectural Plan</b> & <b>Interior Design</b> For Exclusively <b style="color:#ffc30e;">FREE!!</b></p>
                <a href="https://www.chennee.in/get-quote.php?utm_source=getquote&utm_medium=banner&utm_campaign=popup" class="nav_quote cap" type="button" data-wow-delay="0.6s">Get a free quote</a>
                <img width="700" height="312"  id="popup-img" src="assets/images/popup-img.webp" alt=""/>
                </div>

            </div>
       </div>
   </div>
</div> --}}


<a class="whatsapp-footer" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}?text=Hi%20I%20have%20a%20plot%20in" target="blank">
    <svg xmlns="https://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
    <defs>
          <style>.whatsappa{fill:#fff;}</style>
       </defs>
       <path class="whatsappa" d="M18.5,0H18.5A18.489,18.489,0,0,0,3.522,29.343L1.216,36.216l7.111-2.273A18.5,18.5,0,1,0,18.5,0ZM29.269,26.124c-.446,1.26-2.218,2.306-3.631,2.611-.967.206-2.229.37-6.48-1.392-5.437-2.252-8.938-7.777-9.211-8.135s-2.2-2.925-2.2-5.58a5.906,5.906,0,0,1,1.892-4.5,2.688,2.688,0,0,1,1.892-.664c.229,0,.435.012.62.021.543.023.816.055,1.175.913.446,1.075,1.533,3.73,1.663,4a1.1,1.1,0,0,1,.079,1,3.2,3.2,0,0,1-.6.849c-.273.315-.532.555-.8.893-.25.294-.532.608-.217,1.152a16.421,16.421,0,0,0,3,3.73A13.6,13.6,0,0,0,20.789,23.7a1.17,1.17,0,0,0,1.3-.206,22.383,22.383,0,0,0,1.445-1.915,1.032,1.032,0,0,1,1.327-.4c.5.173,3.143,1.48,3.686,1.751s.9.4,1.034.631A4.607,4.607,0,0,1,29.269,26.124Z"></path>
    </svg>
 </a>

    <script>
        $placeholderImg = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=";
    $(function() {
        $('.LoadImg').lazy({
            combined: true,
            placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=",
        });
    });

</script>
<script>
window.addEventListener('scroll', function() {
    var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

    if (scroll >= 110) {
        document.querySelector(".floating-cta").classList.add("show");
        document.querySelector(".whatsapp-footer").classList.add("show");

    } else {
        document.querySelector(".floating-cta").classList.add("show");
        document.querySelector(".whatsapp-footer").classList.remove("show");
    }
});
</script>
<script>
  $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >=110) {
                    $(".floating-cta").addClass("show");
                    } else {
                    $(".floating-cta").removeClass("show");
                    }
                });
</script>
<script>
     $(document).ready(function ()
{
	//Fade in delay for the background overlay (control timing here)
	$("#popup-deposit").delay(15000).fadeIn(400);
  //Fade in delay for the popup (control timing here)
	$("#popup-deposit").delay(15000).fadeIn(400);
	$(".js-close-popup").on("click", function (e) {
          $("#popup-deposit").remove();
        });
	//Hide dialouge and background when the user clicks the close button
	$("#btnClose").click(function (e)
	{
		HideDialog();
		e.preventDefault();
	});
});
</script><script src="assets/js/owl.carousel.min.js"></script>
<script  src="assets/js/slick.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
      items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
})
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
    </script>


<script>
   $('.upload-video-Single').click(function (event) {
         event.preventDefault();
         $('.upload-video-Single').removeClass("active");
         $(this).addClass("active");
         $('.gallery-tab .target-div').hide();
         $('#upload-content' + $(this).attr('target')).show();
         if ($('#upload-content' + $(this).attr('target')).hasClass("active")) {
            $(".gallery-tab .target-div").removeClass("active");
            $('#upload-content' + $(this).attr('target')).addClass("active");
         } else {
            $(".gallery-tab .target-div").removeClass("active");
            $('#upload-content' + $(this).attr('target')).addClass("active");
         }
      });
</script>
<script>
  //New lazy loader script
  document.addEventListener("DOMContentLoaded", function() {
        const e = document.querySelectorAll("[data-src]"),
          t = new IntersectionObserver((e, t) => {
            e.forEach((e) => {
              e.isIntersecting &&
                ((function(e) {
                    const t = e.getAttribute("data-src");
                    switch (e.nodeName) {
                      case "VIDEO":
                        const sourceEle = e.children[0],
                          videoUrl = sourceEle.getAttribute("src");

                        function videoPlay() {
                          "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" ===
                          videoUrl
                            ?
                            ((sourceEle.src =
                                sourceEle.getAttribute("data-video-src")),
                              (e.autoplay = !0),
                              e.load()) :
                            ((e.autoplay = !0), e.load());
                        }
                        return (e.poster = t), videoPlay();
                      case "DIV":
                      case "SECTION":
                        return (e.style.backgroundImage = "url(" + t + ")");
                      default:
                        t && (e.src = t);
                    }
                  })(e.target),
                  t.unobserve(e.target));
            });
          }, {});
        if (
          (e.forEach((e) => {
              t.observe(e);
            }),
            window.matchMedia("(max-width: 768px)").matches)
        ) {
          const n = document.getElementById("remove768");
          null !== n && n.remove();
        } else {
          const r = document.getElementById("added768");
          null !== r && r.remove();
        }
      });
</script>
<script>
  // for animation

$(document).ready(function(){
  $('.pp-quote').click(function(){
    $('.pp-quote').removeClass("active");
    $(this).addClass("active");
});
});

$(document).ready(function(){

       // hide-top

        $('.li-quote-1').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-1').addClass('show');
            $('.quote-text-1').removeClass('hide-bottom');
        });

        $('.li-quote-2').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-2').addClass('show');
            $('.quote-text-2').removeClass('hide-bottom');
        });

        $('.li-quote-3').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-3').addClass('show');
            $('.quote-text-3').removeClass('hide-bottom');
        });
        $('.li-quote-4').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-4').addClass('show');
            $('.quote-text-4').removeClass('hide-bottom');
        });
        $('.li-quote-5').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-5').addClass('show');
            $('.quote-text-5').removeClass('hide-bottom');
        });
        $('.li-quote-6').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-6').addClass('show');
            $('.quote-text-6').removeClass('hide-bottom');
        });
        $('.li-quote-7').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-7').addClass('show');
            $('.quote-text-7').removeClass('hide-bottom');
        });
        $('.li-quote-8').click(function(e){
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-8').addClass('show');
            $('.quote-text-8').removeClass('hide-bottom');
        });


});


$(document).ready(function(){

       // hide-top

        $('.li-quote-1').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-1').addClass('look');
            $('.dp-name-1').removeClass('hide-dp-bottom');
        });

        $('.li-quote-2').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-2').addClass('look');
            $('.dp-name-2').removeClass('hide-dp-bottom');
        });

        $('.li-quote-3').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-3').addClass('look');
            $('.dp-name-3').removeClass('hide-dp-bottom');
        });
		$('.li-quote-4').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-4').addClass('look');
            $('.dp-name-4').removeClass('hide-dp-bottom');
        });

        $('.li-quote-5').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-5').addClass('look');
            $('.dp-name-5').removeClass('hide-dp-bottom');
        });

        $('.li-quote-6').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-6').addClass('look');
            $('.dp-name-6').removeClass('hide-dp-bottom');
        });
        $('.li-quote-7').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-7').addClass('look');
            $('.dp-name-7').removeClass('hide-dp-bottom');
        });
        $('.li-quote-8').click(function(e){
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-8').addClass('look');
            $('.dp-name-8').removeClass('hide-dp-bottom');
        });


});
</script>

<script>
         const images = document.querySelectorAll("[data-src]");

         function preloadImage(img) {
            const src = img.getAttribute("data-src");
            if (!src) {
               return;
            }

            img.src = src;
         }

         const imgOptions = {};

         const imgObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach(entry => {
               if(!entry.isIntersecting){
                  return;
               } else {
                  preloadImage(entry.target);
                  imgObserver.unobserve(entry.target);
               }
            })
         }, imgOptions);

         images.forEach(image => {
            imgObserver.observe(image);
         })
   </script>
<!-- Google Tag Manager --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKLQTZW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NKLQTZW');</script><!-- End Google Tag Manager -->
</body>
</html>
