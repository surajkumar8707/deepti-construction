<footer>
    <div class="container">
    <div class="top-footer clearfix">
    <div class="footer-menus wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">
       <div class="footmenu-column">
          <a itemprop="url" href="./" class="footer-logo" title="chennee">
          <img src="{{ asset($settings?->header_image) }}" width="210" height="61" class="footer-logo LoadImg" alt="chennee logo" style="">
          </a>
          <p class="footer-content">
             We are a one stop solution for all your architectural planning, construction and interior design needs.
          </p>
          <div class="footer-btn">
             <a class="demo" href="{{ route('contact.sales') }}">Talk to us</a>
             <a class="sales" href="{{ route('get.quote') }}">Get a quote</a>
          </div>
       </div>
       <div class="footmenu-column responsive">
          <h6>Services in Hosur</h6>
          <ul>
             <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.hosur') }}" title="Architects in Hosur">Architects in Hosur</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.hosur') }}" title="Building Contractors in Hosur">Building Contractors in Hosur</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('interior.designers.in.hosur') }}" title="Interior Designers in Hosur">Interior Designers in Hosur</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('renovation.contractors.in.hosur') }}" title="Renovation Contractors in Hosur">Renovation Contractors in Hosur</a></li>
             {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Hosur">House Construction Company in Hosur</a></li> --}}
          </ul>
       </div>
       <div class="footmenu-column responsive">
          <h6>Services in Bangalore</h6>
          <ul>
             <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.bangalore') }}" title="Architects in Bangalore">Architects in Bangalore</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.bangalore') }}" title="Building Contractors in Bangalore">Building Contractors in Bangalore</a></li>
             <li itemprop="name"><a itemprop="url" href="https{{ route('interior.designers.in.bangalore') }}" title="Interior Designers in Bangalore">Interior Designers in Bangalore</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('house.renovation.contractors.bangalore') }}" title="Renovation Contractors in Bangalore">Renovation Contractors in Bangalore</a></li>
             {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Bangalore">House Construction Company in Bangalore</a></li> --}}
          </ul>
       </div>
       <div class="footmenu-column responsive">
          <h6>Services in Chennai</h6>
          <ul>
             <li itemprop="name"><a itemprop="url" href="{{ route('architects.in.chennai') }}" title="Architects in Chennai">Architects in Chennai</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('building.construction.contractors.chennai') }}" title="Building Contractors in Chennai">Building Contractors in Chennai</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('interior.designers.in.chennai') }}" title="Interior Designers in Chennai">Interior Designers in Chennai</a></li>
             <li itemprop="name"><a itemprop="url" href="{{ route('house.renovation.contractors.chennai') }}" title="Renovation Contractors in Chennai">Renovation Contractors in Chennai</a></li>
             {{-- <li itemprop="name"><a itemprop="url" href="#" title="House Construction Company in Chennai">House Construction Company in Chennai</a></li> --}}
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
       <span class="copyrights">&copy;  2023 All Rights Reserved</span>
    </div>
    </a>
 </footer>
 {{-- <div class="popup popup_fl" id="popup-deposit">
    <div class="flex-center">
       <div class="popup__content LoadImg" preload="none">
          <a class="popup__close js-close-popup">
             <svg viewBox="0 0 384 512" style="display:block;height:18px;width:18px">
                <path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"></path>
             </svg>
          </a>
          <div class="popup-wrap">
             <div class="popup-cont">
                <img width="200" height="177" id="off" src="{{ asset('assets/images/offer.png') }}" alt=""/>
                <h5>Book a Home Construction Today!</h5>
                <p>Get an <b>Architectural Plan</b> & <b>Interior Design</b> For Exclusively <b style="color:#ffc30e;">FREE!!</b></p>
                <a href="{{ route('get.quote') }}?utm_source=getquote&utm_medium=banner&utm_campaign=popup" class="nav_quote cap" type="button" data-wow-delay="0.6s">Get a free quote</a>
                <img width="700" height="312"  id="popup-img" src="{{ asset('assets/images/popup-img.webp') }}" alt=""/>
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
 </script>
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <!-- <script>
    $('.multiCarosel').each(function(){
     var number = $(this).data('number');
     $(this).owlCarousel({
       center: false,
       loop: true,
       items: 1,
       dots: false,
       nav:true,
       autoplayTimeout:3000,
       responsiveClass:true,
       navContainer: '.kernNav-'+number,
       navText: [
         '<span class="btn btn-block px-3"><i class="fas fa-chevron-left fa-2x fa-inverse"></i></span>',
         '<span class="btn btn-block px-3"><i class="fas fa-chevron-right fa-2x fa-inverse"></i></span>'
       ],
     });
    });
     </script> -->
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

       $(document).ready(function () {
          $('.acc1 .accordion-commns').off().on('click', function () {
             $('.acc1 .accordion-commns').removeClass("active-acc");
             var elem = $(this);
             var curUl = elem.find('.comm-desc-analyse');
             $(this).addClass("active-acc");
             $('.acc1 .comm-desc-analyse').not(curUl).slideUp();
             elem.find('.comm-desc-analyse').slideToggle();
          });
       });
       // Accordion 1
       $(document).ready(function(){
          $(".faq-acc ").click(function(e){
             $(this).toggleClass("rotate");
             e.stopPropagation()
          });
          if ($(e.target).is(".faq-acc") === false) {
       $(".faq-acc").removeClass("rotate");
     }
       });


       $(".tab_content").hide();
          $(".tab_content:first").show();

          /* if in tab mode */
          $("ul.tabs li").click(function () {

                $(".tab_content").hide();
                var activeTab = $(this).attr("rel");
                $("#" + activeTab).fadeIn();

                $("ul.tabs li").removeClass("active");
                $(this).addClass("active");

                $(".tab_drawer_heading").removeClass("d_active");
                $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

          });
          /* if in drawer mode */
          $(".tab_drawer_heading").click(function () {

                // $(".tab_content").hide();
                var d_activeTab = $(this).attr("rel");
                $("#" + d_activeTab).slideToggle();

                $(".tab_drawer_heading").removeClass("d_active");
                $(this).addClass("d_active");

                $("ul.tabs li").removeClass("active");
                $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
          });
          /* Extra class "tab_last"
          to add border to right side
          of last tab */
          $('ul.tabs li').last().addClass("tab_last");
 </script>
