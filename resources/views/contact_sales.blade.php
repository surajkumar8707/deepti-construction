@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('public/assets/css/contact.css') }}">
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">
    var onloadCallback = function() {
      grecaptcha.render('recaptcha-rel', {
        'sitekey' : '6LcruOUbAAAAAOjGGnAx5VjfVzsxD9jpavy9dHn7'
      });
    };
  </script>
@section('content')

@php
    $socialMediaLinks = \App\Models\SocialMediaLink::first();
    $settings = \App\Models\Setting::first();
    // dd($socialMediaLinks->toArray(), $settings->toArray());
@endphp

<section class="banner_bg hosur">
    <div class="container">
        <div class="banner-continer">
            <div class="banner-content banner-left animate">
                <div class="banner-title">
                    <h1 class="section-title wow fadeInUp" style="visibility: visible;">
                        <span class="in">Architecture  |  Interiors  |  Construction</span>
                        Get Your Dream Home
                        <p>Designed &amp; Built in One Place</p>
                        <span class="banner-text wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Our in-hand experts help you to have a complete furnished house right from planning, constructing &amp; interior designing and let you unfold your sweetest dream into reality.</span>
                    </h1>
                </div>
                <a href="{{ route('contact.sales') }}" class="secondary_button cap" type="button" data-wow-delay="0.6s">Talk to Us</a>
                <a href="{{ route('get.quote') }}" class="action_buttons cap" type="button" data-wow-delay="0.6s">Get a quote</a>
            </div>
        </div>
    </div>
</section>

<section class="form-pages">
    <div class="container">
          <div class="form-container">
              <div class="contact-form" id="form-top">
              <div class="section-head">
                  <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Tell Us About Your Dream Project</h2>
                  <!-- <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Here's a few of our favourite projects showcasing our varied work</h4> -->
              </div>
                  <form class="contact-page " action="" method="post" id="">
                        @csrf
                      {{-- <input type="hidden" name="token" value="xYk6PuTDmk5bF2Qi3BunPrHh8lr_tEF7OGXfq5Hea3c,"> --}}
                      <ul>
                          <li class="name text-cont-error" id="div-name">
                          <label>First Name*</label>
                          <input type="text" name="txtname" id="txtname" placeholder="Eg: John">
                          <span style="display: none;" id="errorname">This field is required</span>
                          </li>
                          <li class="lname text-cont-error" id="div-lname">
                          <label>Last Name*</label>
                          <input type="text" name="txtlname" id="txtlname" placeholder="Eg: Smith">
                          <span style="display: none;" id="errorlname">This field is required</span>
                          </li>
                          <li class="phone text-cont-error" id="div-phone">
                          <label>Phone Number*</label>
                          <input type="number" name="txtphone" id="txtphone" placeholder="Enter Phone Number" onpaste="return validateNumber(event)" keydown="return validateNumber(event)">
                          <span style="display: none;" id="errorphone">Please enter a valid phone number</span>
                          <span id="valid-msg" class="hide" style="display:none;">✓ Valid</span>
                          <span id="error-msg" class="hide" style="display:none;"></span>
                          </li>
                          <li class="email text-cont-error" id="div-email">
                          <label>Email*</label>
                          <input type="text" name="txtemail" id="txtemail" placeholder=" jane.doe@example.com ">
                          <span style="display: none;" id="erroremail">Please enter a valid email address</span>
                          </li>
                          <li id="interested_in">
                              <label for="">I am Interested In *</label>
                              <ul>
                                  <li>
                                      <input type="checkbox" id="checkbox5" name="interested_in" value="Architectural Design" class="check-button">
                                      <label for="checkbox5" role="button">Architectural Design</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox6" value="Interior Designing" name="interested_in" class="check-button">
                                      <label for="checkbox6" role="button">Interior Designing</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox7" value="House Construction" name="interested_in" class="check-button">
                                      <label for="checkbox7" role="button">House Construction</label>
                                  </li>
                                  <li>
                                      <input type="checkbox" id="checkbox8" value="House Renovation" name="interested_in" class="check-button">
                                      <label for="checkbox8" role="button">House Renovation</label>
                                  </li>
                                  <li id="other-service">
                                      <input type="checkbox" id="checkbox9" value="Others" name="interested_in" class="check-button">
                                      <label for="checkbox9" role="button">Others (specify below)</label>
                                  </li>
                              </ul>
                              <span style="display: none;" id="errorinterested_in">This field is required</span>
                          </li>
                          <li class="contact-message msg-cont-error" id="div-message">
                            <label>Message*</label>
                            <textarea name="message" rows="3" id="message" placeholder="Your Message..."></textarea>
                            <span style="display: none;" id="errormessage">Please enter your requirements</span>
                          </li>
                          <li class="policy">
                            <p>By clicking the submit button, you agree with {{ $settings?->app_name }} to store &amp; progress the information for contact purposes.</p>
                          </li>
                          {{-- <li class="captchas">
                            <div id="recaptcha-rel"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-f1yo0jvnf5c" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcruOUbAAAAAOjGGnAx5VjfVzsxD9jpavy9dHn7&amp;co=aHR0cHM6Ly93d3cuY2hlbm5lZS5pbjo0NDM.&amp;hl=en&amp;v=MHBiAvbtvk5Wb2eTZHoP1dUd&amp;size=normal&amp;cb=huv018hpdgj0"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                          </li> --}}
                          <li id="button-submit">
                            <!-- onclick="formSubmit()" -->
                            <button onclick="formSubmit(event)" type="button" id="submit-button" class="form-submission contact-submit button">Submit</button>
                            <span id="ajx-loader"><img src="public/assets/images/ajax_loader.gif" alt="loader"></span>
                          </li>
                      </ul>
                  </form>
              </div>
              <div class="conatct-info">
                  <h5>Have Any Questions?</h5>
                  <p>We are Here To Help, Click us to reach us on WhatsApp</p>
                  <a class="whatsapp-link" href="https://wa.me/919600442776?text=Hi%20I%20have%20a%20plot%20in" target="blank">
                      <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"><defs><style>.whatsappa{fill:#fff;}</style></defs><path class="whatsappa" d="M18.5,0H18.5A18.489,18.489,0,0,0,3.522,29.343L1.216,36.216l7.111-2.273A18.5,18.5,0,1,0,18.5,0ZM29.269,26.124c-.446,1.26-2.218,2.306-3.631,2.611-.967.206-2.229.37-6.48-1.392-5.437-2.252-8.938-7.777-9.211-8.135s-2.2-2.925-2.2-5.58a5.906,5.906,0,0,1,1.892-4.5,2.688,2.688,0,0,1,1.892-.664c.229,0,.435.012.62.021.543.023.816.055,1.175.913.446,1.075,1.533,3.73,1.663,4a1.1,1.1,0,0,1,.079,1,3.2,3.2,0,0,1-.6.849c-.273.315-.532.555-.8.893-.25.294-.532.608-.217,1.152a16.421,16.421,0,0,0,3,3.73A13.6,13.6,0,0,0,20.789,23.7a1.17,1.17,0,0,0,1.3-.206,22.383,22.383,0,0,0,1.445-1.915,1.032,1.032,0,0,1,1.327-.4c.5.173,3.143,1.48,3.686,1.751s.9.4,1.034.631A4.607,4.607,0,0,1,29.269,26.124Z"></path></svg>
                      Message us on WhatsApp
                  </a>
                  <h6>{{ $settings?->app_name }}</h6>
                  <ul>
                      <li>
                          <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="26.07" height="26.07" viewBox="0 0 26.07 26.07"><defs><style>.appu{fill:#ffc30e;}.bppu{fill:#1a232c;}</style></defs><g transform="translate(-1193.738 -1137.465)"><ellipse class="appu" cx="13.035" cy="13.035" rx="13.035" ry="13.035" transform="translate(1193.738 1137.465)"></ellipse><g transform="translate(1199.869 1143.469)"><path class="bppu&quot;" d="M7.5,1.152,1.174.191A1.02,1.02,0,0,0,.357.415,1.029,1.029,0,0,0,0,1.186V13.309a.577.577,0,0,0,.575.575h1.87V10.864A1,1,0,0,1,3.452,9.857H4.891A1,1,0,0,1,5.9,10.864v3.021H8.343V2.147a1.007,1.007,0,0,0-.846-1ZM3.164,8.562H2.3a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Zm0-1.726H2.3a.432.432,0,1,1,0-.863h.863a.432.432,0,1,1,0,.863Zm0-1.726H2.3a.432.432,0,1,1,0-.863h.863a.432.432,0,1,1,0,.863Zm0-1.726H2.3a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863ZM6.041,8.562H5.178a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Zm0-1.726H5.178a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Zm0-1.726H5.178a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Zm0-1.726H5.178a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Z" transform="translate(0 0)"></path><path class="bppu&quot;" d="M19.6,10.209l-4.1-.858v8.428h3.884a1.008,1.008,0,0,0,1.007-1.007v-5.58A1,1,0,0,0,19.6,10.209Zm-1.364,5.844H17.37a.432.432,0,1,1,0-.863h.863a.432.432,0,1,1,0,.863Zm0-1.726H17.37a.432.432,0,1,1,0-.863h.863a.432.432,0,1,1,0,.863Zm0-1.726H17.37a.432.432,0,0,1,0-.863h.863a.432.432,0,0,1,0,.863Z" transform="translate(-6.582 -3.895)"></path></g></g></svg>
                              Address
                          </span>
                          <p>Plot No-339, BUILDING No-559J, BALDEV ROAD STREET VIHAR, LUCKNOW-226002 (U.P)</p>
                      </li>
                      <li>
                          <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25.809" height="25.809" viewBox="0 0 25.809 25.809"><defs><style>.pyt{fill:#ffc30e;}</style></defs><g transform="translate(0 0)"><g transform="translate(0 0)"><path class="pyt" d="M22.027,3.778A12.9,12.9,0,1,0,25.808,12.9,12.9,12.9,0,0,0,22.027,3.778Zm-2.485,14.2,0,0v0l-.654.649a3.441,3.441,0,0,1-3.248.929,11.434,11.434,0,0,1-3.321-1.488A15.343,15.343,0,0,1,9.7,15.951a15.46,15.46,0,0,1-1.957-2.374A12.043,12.043,0,0,1,6.271,10.6a3.441,3.441,0,0,1,.86-3.514L7.9,6.32a.546.546,0,0,1,.773,0l0,0,2.417,2.417a.546.546,0,0,1,0,.773l0,0L9.669,10.931a1.157,1.157,0,0,0-.12,1.506,16.6,16.6,0,0,0,1.7,1.983,16.5,16.5,0,0,0,2.237,1.88,1.166,1.166,0,0,0,1.488-.129l1.372-1.394a.546.546,0,0,1,.773,0l0,0L19.541,17.2A.546.546,0,0,1,19.543,17.975Z" transform="translate(0 0)"></path></g></g></svg>
                              Phone No
                          </span>
                          <p><a href="tel:{{ $settings?->contact }}">{{ $settings?->contact }}</a></p>
                      </li>
                      <li>
                          <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="26.07" height="26.07" viewBox="0 0 26.07 26.07"><defs><style>.ogh{fill:#ffc30e;}.bgh{fill:#1a232c;}</style></defs><ellipse class="ogh" cx="13.035" cy="13.035" rx="13.035" ry="13.035" transform="translate(0 0)"></ellipse><g transform="translate(5.889 8.119)"><path class="bgh" d="M13.694,152.656H.913a.913.913,0,0,0-.913.913v.519l7.3,3.093,7.3-3.094v-.519A.913.913,0,0,0,13.694,152.656Z" transform="translate(0 -152.656)"></path><g transform="translate(0 2.424)"><path class="bgh" d="M7.481,317.794a.452.452,0,0,1-.356,0L0,314.777v6.705a.913.913,0,0,0,.913.913H13.694a.913.913,0,0,0,.913-.913v-6.705Z" transform="translate(0 -314.777)"></path></g></g></svg>
                              Email ID
                          </span>
                          <p><a href="mailto:{{ $settings?->email }}">{{ $settings?->email }}</a></p>
                      </li>
                      <li>
                          <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="26.07" height="26.07" viewBox="0 0 26.07 26.07"><defs><style>.agh{fill:#ffc30e;}.bgh{fill:#1a232c;stroke:#1a232c;stroke-width:0.5px;}</style></defs><g transform="translate(-1193.738 -1521.345)"><ellipse class="agh" cx="13.035" cy="13.035" rx="13.035" ry="13.035" transform="translate(1193.738 1521.345)"></ellipse><g transform="translate(1198.781 1526.388)"><path class="lgh" d="M7.992,15.984a7.992,7.992,0,1,1,7.992-7.992A8,8,0,0,1,7.992,15.984Zm0-14.919a6.927,6.927,0,1,0,6.927,6.927A6.934,6.934,0,0,0,7.992,1.066Z"></path><path class="lgh" d="M168.494,67.622h-4.048V63.574a.533.533,0,1,0-1.066,0v4.581a.533.533,0,0,0,.533.533h4.581a.533.533,0,0,0,0-1.066Z" transform="translate(-155.921 -60.163)"></path></g></g></svg>
                              Timings
                          </span>
                          <p>Mon - Sat, 10 am to 6 pm</p>
                      </li>
                  </ul>
              </div>
          </div>
    </div>
</section>

<section class="discovery-popup" style="opacity: 0; visibility: hidden;">
    <div class="discovery-form">
       <div class="discovery-header">
          <h3 id="popup-title">Thank You <span>Suraj</span>!!</h3>
          <p>Just spend 20 more seconds with us to get the perfect tailor-made solution. </p>
       </div>
       <div class="discovery-content">
          <form action="includes/discover_mail_us.php?mail_type=discover_us" method="post" id="discovery-top">
            @csrf
            <ul>
             <li id="site_areas">
                   <p>1. Where is your site location?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="application-type-yek" type="radio" onfocus="removemessage('site_areas')" name="site_areas" value="1000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Lucknow
                      </label>
                      <label class="radio">
                      <input id="application-type-dho" type="radio" onfocus="removemessage('site_areas')" name="site_areas" value="2000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Gorakhpur
                      </label>
                      <label class="radio">
                      <input id="application-type-cha" type="radio" onfocus="removemessage('site_areas')" name="site_areas" value="3000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Allahabaad
                      </label>
                      <label class="radio">
                      <input id="application-type-theen" type="radio" onfocus="removemessage('site_areas')" name="site_areas" value="4000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Other Location
                      </label>
                   </div>
                   <p class="discover-error">Please select your site area</p>
                </li>
                <li id="site_area">
                   <p>2. What is the your site area?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="application-type-one" type="radio" onfocus="removemessage('site_area')" name="site_area" value="1000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Lesser Than 1000 sqft
                      </label>
                      <label class="radio">
                      <input id="application-type-two" type="radio" onfocus="removemessage('site_area')" name="site_area" value="2000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Lesser Than 2000 sqft
                      </label>
                      <label class="radio">
                      <input id="application-type-three" type="radio" onfocus="removemessage('site_area')" name="site_area" value="3000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Lesser Than 3000 sqft
                      </label>
                      <label class="radio">
                      <input id="application-type-three" type="radio" onfocus="removemessage('site_area')" name="site_area" value="4000">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Greater Than 4000 sqft
                      </label>
                   </div>
                   <p class="discover-error">Please select your site area</p>
                </li>
                <li id="building_type">
                   <p>3. What type of residential building would you like to construct?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="live-stream-four" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Simplex">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Simplex
                      </label>
                      <label class="radio">
                      <input id="live-stream-two" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Duplex">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Duplex
                      </label>
                      <label class="radio">
                      <input id="live-stream-one" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Rental">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Rental House
                      </label>
                      <label class="radio">
                      <input id="live-stream-three" type="radio" onfocus="removemessage('building_type')" name="building_type" value="Apartment">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Apartment
                      </label>
                   </div>
                   <p class="discover-error">Please select your building type</p>
                </li>
                <li id="bedrooms">
                   <p>4. How many bedrooms required?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="apply-type-one" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="1BHK">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>1 BHK
                      </label>
                      <label class="radio">
                      <input id="apply-type-two" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="2BHK">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>2 BHK
                      </label>
                      <label class="radio">
                      <input id="apply-type-three" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="3BHK">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>3 BHK
                      </label>
                      <label class="radio">
                      <input id="apply-type-four" type="radio" onfocus="removemessage('bedrooms')" name="bedrooms" value="4BHK">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>More than 4 BHK
                      </label>
                   </div>
                   <p class="discover-error">Please select your bedrooms</p>
                </li>
                <li id="material">
                   <p>5. What is the required material?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="development-one" type="radio" onfocus="removemessage('material')" name="material" value="Red">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Red Brick
                      </label>
                      <label class="radio">
                      <input id="development-two" type="radio" onfocus="removemessage('material')" name="material" value="Solid">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Solid Block
                      </label>
                      <label class="radio">
                      <input id="development-one" type="radio" onfocus="removemessage('material')" name="material" value="AAC">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>AAC Block
                      </label>
                   </div>
                   <p class="discover-error">Please select your material</p>
                </li>
                <li id="execution_time">
                   <p>6. When you are planning for execution?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="techType-one" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="Immediate">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Immediate
                      </label>
                      <label class="radio">
                      <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="1WEEk">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>After One Week
                      </label>

                      <label class="radio">
                      <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="1month">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>After One Month
                      </label>

                      <label class="radio">
                      <input id="techType-two" type="radio" onfocus="removemessage('execution_time')" name="execution_time" value="6month">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Within 6 Months
                      </label>
                   </div>
                   <p class="discover-error">Please select your execution time</p>
                </li>
                <li id="call_time">
                   <p>7. What time we can call you back?</p>
                   <div class="checkbox-set">
                      <label class="radio">
                      <input id="techieType-one" type="radio" onfocus="removemessage('call_time')" name="call_time" value="Immediately">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Immediately
                      </label>
                      <label class="radio">
                      <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="Anytime">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Anytime Today
                      </label>

                      <label class="radio">
                      <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="9amto2pm">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Tomorrow, 9:00 AM to 2:00 PM
                      </label>

                      <label class="radio">
                      <input id="techieType-two" type="radio" onfocus="removemessage('call_time')" name="call_time" value="3pmto8pm">
                      <span class="outer">
                      <span class="inner"></span>
                      </span>Tomorrow, 3:00 PM to 8:00 PM
                      </label>
                   </div>
                   <p class="discover-error">Please select your execution time</p>
                </li>
                <li class="policies">
                   <p>The information collected by {{ $settings?->app_name }} is solely for the purpose to understand and serve you a better service. {{ $settings?->app_name }} is committed to the protection of your Personal Data, including Communicating data for internal Business purposes only. For more information, Please read our Privacy Policy.</p>
                </li>
                <li id="discover-load">
                   <input type="hidden" name="txtname" id="txtname-discover">
                   <input type="hidden" name="txtlname" id="txtlname-discover">
                   <input type="hidden" name="txtphone" id="txtphone-discover">
                   <input type="hidden" name="txtemail" id="txtemail-discover">
                   <input type="hidden" name="country" id="country-discover">
                   <input type="hidden" name="geocountry" id="geocountry-discover">
                   <input type="hidden" name="txtcompany" id="txtcompany-discover">
                   <input type="hidden" name="message" id="message-discover">
                   <input type="hidden" name="solution" id="solution-discover">
                   <button type="button" onclick="return discoverFormSubmit()" id="discover-submit-button" class="button">Submit</button>
                   <span id="ajx-loader"><img src="public/assets/images/ajax_loader.gif" alt="loader"></span>
                </li>
             </ul>
             <input type="hidden" name="txtname" class="popup-name">
             <input type="hidden" name="email" class="popup-email">
          </form>
       </div>
       <i onclick="exitForm()">
          <svg xmlns="http://www.w3.org/2000/svg" width="246.2" height="246.2" viewBox="0 0 246.2 246.2">
             <g id="Group_1" data-name="Group 1" transform="translate(-0.65 0.02)">
                <path id="Shape_1" data-name="Shape 1" d="M123.1,0A123.1,123.1,0,1,1,0,123.1,123.1,123.1,0,0,1,123.1,0Z" transform="translate(0.65 -0.02)" fill="#fff"></path>
                <path id="Forma_1" data-name="Forma 1" d="M130.031,123.362l36.214-35.711a5.62,5.62,0,0,0,0-8.03,5.812,5.812,0,0,0-8.144,0l-36.214,35.711L85.671,79.621a5.813,5.813,0,0,0-8.144,0,5.62,5.62,0,0,0,0,8.03l36.216,35.711L77.527,159.074a5.62,5.62,0,0,0,0,8.03,5.813,5.813,0,0,0,8.144,0l36.216-35.711L158.1,167.1a5.813,5.813,0,0,0,8.144,0,5.62,5.62,0,0,0,0-8.03Z" fill="#1A232C"></path>
             </g>
          </svg>
       </i>
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
    {{-- <div class="publishd-date-wrap" itemscope="" itemtype=""><span class="text-tiny">Published:  <span class="published_on" itemprop="datePublished"> 2023-10-02</span></span></div> --}}
</div>
<!-- Last published date  -->
<section class="faq-bg" id="faq">
    <div class="faq-banner">
        <div class="faq-head">
            <h5 class="section-title">Frequently Asked Questions (FAQ)</h5>
        </div>
    </div>
    <div itemscope="" itemtype="" class="container faq-container">
        <div class="faq-accordian-wrapper acc1">
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns rotate arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        Why is {{ $settings?->app_name }} the Best Architectural Firm in Lucknow?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">To ensure client happiness, {{ $settings?->app_name }} architecture specialists in Hosur create sustainable buildings by ensuring that the form is consistent with its utility.</p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow rotate">
                <div class="faq">
                    <h3 itemprop="name">
                        What are the Architectural Design Services Offered by {{ $settings?->app_name }} Architects?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">We undertake the responsibility of inspiring a better living by planning and designing buildings with services like Floor plan, Structural Drawing, Civil Drawings, 3D Elevation & 3D Interior Design. </p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow active-acc">
                <div class="faq">
                    <h3 itemprop="name">
                        How Long Does {{ $settings?->app_name }} Architects Take to Provide My House Plan?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">All of our premium projects are adeptly managed by our first-grade experts, who adhere     to a strict deadline and keep a close eye on all phases to deliver your dream home on the proposed day.
                    </p>
                </div>
            </div>
        </div>
        <div class="faq-accordian-wrapper acc1">
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        What are the Process Followed by {{ $settings?->app_name }} Architects to Plan My New Home?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">When we begin, {{ $settings?->app_name }} NEE’s top team of architecting expertise in Lucknow will accompany you through all stages of raising building, architecture planning, and interior designs to witness the unfolding of your dream home.
                    </p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        What are the Types of Residential Buildings  Designed by {{ $settings?->app_name }} Architects?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">The range of buildings we strategize to build with style starts from simple residences, grand villas, magnificent bungalows, chic apartments to spacious duplex houses and aligned row houses
                    </p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        Why You Should Choose {{ $settings?->app_name }} Architects to Design Your Dream Home?
                        <svg class="arrows" xmlns="" width="15.798" height="9.022" viewBox="0 0 15.798 9.022">
                            <g id="next" transform="translate(0.565 126.199) rotate(-90)">
                                <g id="Group_19807" data-name="Group 19807" transform="translate(117.742 0)">
                                    <path id="Path_12441" data-name="Path 12441" d="M125.531,6.963l-6.815-6.8a.571.571,0,1,0-.807.809l6.409,6.391-6.409,6.391a.571.571,0,0,0,.807.809l6.815-6.8a.571.571,0,0,0,0-.809Z" transform="translate(-117.742 0)" fill="#ccc" stroke="#ccc" stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </div>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="">
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">With classic examples of creativity {{ $settings?->app_name }} Architects crafts your dream home with major pluses like superior design, on time delivery, quality, transparency & much more.  They are well known for the strength of the best residential architects in Hosur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bottom-cta">
        <h5>Let’s Get in Touch To Design Your Beautiful Home</h5>
        <p>Share your dreams, we’ll incorporate designs into dwellings that showcases your life-style</p>
        <a href="{{ route('get.quote') }}">GET A FREE QUOTE</a>
    </div>
    <div class="contact-info">
        <ul>
            <li>
                <svg xmlns="" width="52.393" height="52.393" viewBox="0 0 52.393 52.393">
                    <defs>
                        <style>.absw{fill:#1a232c;}.bbsw{fill:#fff;}</style>
                    </defs>
                    <ellipse class="absw" cx="26.196" cy="26.197" rx="26.196" ry="26.197" transform="translate(0 0)"/>
                    <g transform="translate(11.836 16.316)">
                        <path class="bbsw" d="M27.52,152.656H1.835A1.835,1.835,0,0,0,0,154.491v1.044l14.678,6.216,14.678-6.218v-1.042A1.835,1.835,0,0,0,27.52,152.656Z" transform="translate(0 -152.656)"/>
                        <g transform="translate(0 4.871)">
                            <path class="bbsw" d="M15.035,320.841a.908.908,0,0,1-.716,0L0,314.777v13.476a1.835,1.835,0,0,0,1.835,1.835H27.52a1.835,1.835,0,0,0,1.835-1.835V314.777Z" transform="translate(0 -314.777)"/>
                        </g>
                    </g>
                </svg>
                <span><a href="mailto:{{ $settings?->email }}">{{ $settings?->email }}</a></span>
            </li>
            <li>
                <svg xmlns="" width="51.976" height="51.976" viewBox="0 0 51.976 51.976">
                    <defs>
                        <style>.vikd{fill:#25d366;}</style>
                    </defs>
                    <g transform="translate(0)">
                        <path class="vikd" d="M25.994,0h-.013A25.972,25.972,0,0,0,4.947,41.22L1.709,50.874,11.7,47.681A25.983,25.983,0,1,0,25.994,0ZM41.116,36.7c-.627,1.77-3.115,3.239-5.1,3.668-1.358.289-3.132.52-9.1-1.956-7.637-3.164-12.555-10.925-12.939-11.428-.367-.5-3.086-4.109-3.086-7.839a8.3,8.3,0,0,1,2.657-6.325,3.776,3.776,0,0,1,2.657-.932c.322,0,.611.016.871.029.763.032,1.147.078,1.65,1.283.627,1.511,2.154,5.24,2.336,5.623a1.547,1.547,0,0,1,.11,1.407,4.491,4.491,0,0,1-.841,1.192c-.383.442-.747.78-1.13,1.254-.351.413-.747.854-.305,1.618a23.067,23.067,0,0,0,4.217,5.24A19.106,19.106,0,0,0,29.2,33.29,1.643,1.643,0,0,0,31.036,33a31.443,31.443,0,0,0,2.03-2.69,1.45,1.45,0,0,1,1.865-.565c.7.244,4.415,2.079,5.178,2.459s1.267.565,1.452.887A6.472,6.472,0,0,1,41.116,36.7Z" transform="translate(0)"/>
                    </g>
                </svg>
                <span><a target="blank" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}?text=Hi%20I%20have%20a%20plot%20in">{{ $settings?->contact }}</a></span>
            </li>
            <li>
                <svg xmlns="" width="51.975" height="51.976" viewBox="0 0 51.975 51.976">
                    <defs>
                        <style>.agt{fill:#1a232c;}</style>
                    </defs>
                    <g transform="translate(0 0)">
                        <path class="agt" d="M44.361,7.608a25.988,25.988,0,1,0,7.614,18.373A25.988,25.988,0,0,0,44.361,7.608Zm-5,28.592,0,0V36.2L38.037,37.5a6.93,6.93,0,0,1-6.54,1.871,23.027,23.027,0,0,1-6.687-3,30.9,30.9,0,0,1-5.275-4.253,31.135,31.135,0,0,1-3.941-4.782,24.253,24.253,0,0,1-2.963-5.995,6.93,6.93,0,0,1,1.733-7.077L15.9,12.728a1.1,1.1,0,0,1,1.556,0l0,0L22.332,17.6a1.1,1.1,0,0,1,0,1.556l0,0-2.859,2.859a2.33,2.33,0,0,0-.243,3.032,33.432,33.432,0,0,0,3.422,3.993,33.227,33.227,0,0,0,4.5,3.786,2.347,2.347,0,0,0,3-.26l2.763-2.807a1.1,1.1,0,0,1,1.556,0l0,0,4.877,4.886A1.1,1.1,0,0,1,39.357,36.2Z" transform="translate(0 0)"/>
                    </g>
                </svg>
                <span><a href="tel:+919600442776">{{ $settings?->contact }}</a></span>
            </li>
        </ul>
    </div>
</section>

<script>
    function exitForm(){
        console.log("form working");
        $(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});
     discoverFormSubmit();
 }
function formSubmit(){
  console.log("first form");
            if($('#txtname').val()=='' && $('#txtlname').val()=='' && $('#txtphone').val()=='' && $('#txtemail').val()=='' && $('#interested_in input[type=checkbox]:checked').length == 0 && $('#message').val()==''){
              $('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').show();
              $('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').addClass('focus-visible');
              return false;
           }else{
              $('#errorname, #errorlname, #errorphone, #erroremail, #errorinterested_in, #errormessage').hide();
              $('#txtname, #txtlname, #txtphone, #txtemail, #interested_in label,  #message').removeClass('focus-visible');
           }
           if($('#txtname').val()==''){
               $('#errorname').show();
               $('#txtname').focus();
               return false;
           }else{
               $('#errorname').hide();
           }
           if($('#txtlname').val()==''){
               $('#errorlname').show();
               $('#txtlname').focus();
               return false;
           }else{
               $('#errorlname').hide();
           }
           if($('#txtphone').val()==''){
               $('#errorphone').show();
               $('#txtphone').focus();
               return false;
           }else{
               $('#errorphone').hide();
           }

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var inputText = $('#txtemail').val();
          if(inputText.match(mailformat))
          {
              $('#erroremail').hide();
          }else{
              $('#erroremail').show();
              $('#txtemail').focus();
              return false;
          }
          if($('#interested_in input[type=checkbox]:checked').length == 0)
          {
              $('#errorinterested_in').show();
              $('#interested_in label').addClass('focus-visible');
               return false;
          }else{
               $('#errorinterested_in').hide();
              $('#interested_in label').removeClass('focus-visible');
           }
          if($('#message').val()==''){
              $('#errormessage').show();
              $('#message').focus();
               return false;
           }else{
               $('#errormessage').hide();
           }

            $('#popup-title span').html($('#txtname').val());
            $('#ajx-loader').show();
            $('.discovery-popup')
            .delay(2000)
            .queue(function (next) {
              $(this).css({"opacity": "1", "visibility": "visible"});
              next();
              $('#ajx-loader').hide();
           });
           //$(".discovery-popup").css({"opacity": "1", "visibility": "visible"});
          setTimeout(discoverFormSubmit, 60000);
       }

       function discoverFormSubmit(){
          console.log("form");
           $.ajax({
                 url: "{{ route('contact.save') }}",
                 type: "POST",
                 data: {
                     firstName: $("#txtname").val(),
                     lastName: $("#txtlname").val(),
                     phone: $("#txtphone").val(),
                     email: $("#txtemail").val(),
                     service1: $('#interested_in input[id=checkbox5]:checked').val(),
                     service2: $('#interested_in input[id=checkbox6]:checked').val(),
                     service3: $('#interested_in input[id=checkbox7]:checked').val(),
                     service4: $('#interested_in input[id=checkbox8]:checked').val(),
                     service5: $('#interested_in input[id=checkbox9]:checked').val(),
                     message: $("#message").val(),
                     sitearea: $('input[name="site_area"]:checked').val(),
                     location: $('input[name="site_areas"]:checked').val(),
                     building: $('input[name="building_type"]:checked').val(),
                     bedroom: $('input[name="bedrooms"]:checked').val(),
                     brick: $('input[name="material"]:checked').val(),
                     plan: $('input[name="execution_time"]:checked').val(),
                     call: $('input[name="call_time"]:checked').val(),
                     subt: 'Contact Sales',
                     _token: '{{ csrf_token() }}',
                 },
                 dataType: "JSON",
                 success: function (jsonStr) {
                  //    if(jsonStr=='success'){
                      console.log("mail sent");
                  //    }

                 }
             });
             $("#discover-submit-button").html("Submitting..");
             window.setTimeout(function(){
              $(".discovery-popup").css({"opacity": "0", "visibility": "hidden"});
              // Move to a new location or you can do something else
              window.location.href = "{{ route('thank.you') }}";

              }, 2000);

       }
</script>
@endsection
