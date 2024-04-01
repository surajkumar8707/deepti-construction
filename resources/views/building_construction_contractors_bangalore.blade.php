@extends('layouts.app')

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
                        <span class="in">{{ $settings?->app_name }}</span>
                        A Leading Innovative
                        <p>Architecture Firm in Gorakpur</p>
                        <span class="banner-text wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Get Your Dream House Design Plans With The Hands of Best Architects in Gorakpur at Low Cost</span>
                    </h1>
                </div>
                {{-- <a href="contact-sales.php" class="secondary_button cap" type="button" data-wow-delay="0.6s">Talk to Us</a>
                <a href="get-quote.php" class="action_buttons cap" type="button" data-wow-delay="0.6s">Get a quote</a> --}}
            </div>
        </div>
    </div>
</section>

<section class="section_container clearfix multifaceted">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">{{ $manage_content?->main_heading }}</h2>
          <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">{{ $manage_content?->sub_heading }}</h4>
       </div>
       <div class="gallery-wrapper hover">

        <ul>
            @forelse ($manage_content?->frontendImages as $images)
                <li>
                    <img src="{{ asset($images?->photo) }}" alt="Residential Architects in Gorakpur" title="Residential Architects in Gorakpur">
                    <span>{{ $images?->title }}</span>
                    <div class="hover-cont">
                        <h6>{{ $images?->title }}</h6>
                        <p>{{ $images?->description }}</p>
                    </div>
                </li>
            @empty
            @endforelse
        </ul>
       </div>
    </div>
 </section>

<section class="section_container middle-cta">
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
                <h3>Or Give Us Call  <a href="tel:{{ $settings?->contact }}">{{ $settings?->contact }}</a>
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

<section class="section_container usecases clearfix">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Get a Range of Architectural Services For Your Residences in Gorakpur</h2>
          <h3 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Connect With Us For Limitless Designs To Build Your Dream Palace</h3>
       </div>
       <div class="tab-section clearfix">
          <ul class="tabs wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s;">
             <li class="tab1 active" rel="tab1">
                <span>Floor Plan</span>
             </li>
             <li rel="tab2" class="tab2">
                <span>Structural Design</span>
             </li>
             <li rel="tab3" class="tab3">
                <span>Civil Drawings</span>
             </li>
             <li rel="tab4" class="tab4">
                <span>3D Elevation</span>
             </li>
             <li rel="tab5" class="tab5 tab_last">
                <span>3D Interior Design</span>
             </li>
          </ul>
          <div class="tab_container">
             <!-- #tab1 -->
             <h3 class="tab_drawer_heading" rel="tab1">
             Floor Plan
                <svg class="plus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <g>
                         <polygon points="272,128 240,128 240,240 128,240 128,272 240,272 240,384 272,384 272,272 384,272 384,240 272,240   " fill="#FFFFFF"></polygon>
                         <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256    C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472    z" fill="#FFFFFF"></path>
                      </g>
                   </g>
                </svg>
                <svg class="minus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <rect x="128" y="240" width="256" height="32" fill="#FFFFFF"></rect>
                      <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   " fill="#FFFFFF"></path>
                   </g>
                </svg>
             </h3>
             <div id="tab1" class="tab_content clearfix" style="display: block;">
                <div class="tab-img">
                <img class=" lazy-img" src="public/assets/images/architects/floor-plan-architecture-design.png" alt="House Floor Plan Designers" title="House Floor Plan Designers" style="">

                </div>
                <div class="tab-description wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s;">
                   <h3>Floor Plan</h3>
                   <!-- <span>From Dreams to Dream Homes in 150 days</span> -->
                   <p>A well labelled floor plan and schematics provided through our pioneer home architects in Gorakpur ensures maximum utilisation of space. Keeping functionality in mind and allowing natural light is the driving factor in the plans. Designed to suit multi-generational living our experts work hand-in-hand to assist you in all stages.</p>

                </div>
             </div>
             <!-- #tab2 -->
             <h3 class="tab_drawer_heading" rel="tab2">
             Structural Design
                <svg class="plus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <g>
                         <polygon points="272,128 240,128 240,240 128,240 128,272 240,272 240,384 272,384 272,272 384,272 384,240 272,240   " fill="#FFFFFF"></polygon>
                         <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256    C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472    z" fill="#FFFFFF"></path>
                      </g>
                   </g>
                </svg>
                <svg class="minus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <rect x="128" y="240" width="256" height="32" fill="#FFFFFF"></rect>
                      <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   " fill="#FFFFFF"></path>
                   </g>
                </svg>
             </h3>
             <div id="tab2" class="tab_content clearfix" style="display: none;">
                <div class="tab-img">
                <img class=" lazy-img" src="public/assets/images/architects/structural-design-drawing.png" alt="Structural Design Services" title="Structural Design Services">

                </div>
                <div class="tab-description">
                   <h3>Structural Design</h3>
                   <p>Top architects take pride in providing your planned home with the structural drawings you specify, sticking to foundation, size, &amp; framing details to the letter. Collaborate with {{ $settings?->app_name }} skilled designers in Gorakpur to produce a structure that will withstand the load for years, giving you the dream home you've always desired.
                   </p>

                </div>
             </div>
             <!-- #tab3 -->
             <h3 class="tab_drawer_heading" rel="tab3">
             Civil Drawings
                <svg class="plus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <g>
                         <polygon points="272,128 240,128 240,240 128,240 128,272 240,272 240,384 272,384 272,272 384,272 384,240 272,240   " fill="#FFFFFF"></polygon>
                         <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256    C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472    z" fill="#FFFFFF"></path>
                      </g>
                   </g>
                </svg>
                <svg class="minus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <rect x="128" y="240" width="256" height="32" fill="#FFFFFF"></rect>
                      <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   " fill="#FFFFFF"></path>
                   </g>
                </svg>
             </h3>
             <div id="tab3" class="tab_content clearfix" style="display: none;">
                <div class="tab-img">
                <img class=" lazy-img" src="public/assets/images/architects/civil-plan-drawing.png" alt="Civil Home Plan Drawing" title="Civil Home Plan Drawing">

                </div>
                <div class="tab-description">
                   <h3>Civil Drawings</h3>
                   <p>Civil drawings are important since they provide specific structural information that are required to obtain permissions to construct your dream home. We translate your thoughts into simple yet expressively significant drawings so that you may have the exact layout you want.
                   </p>

                </div>
             </div>
             <!-- #tab4 -->
             <h3 class="tab_drawer_heading" rel="tab4">
             3D Elevation
                <svg class="plus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <g>
                         <polygon points="272,128 240,128 240,240 128,240 128,272 240,272 240,384 272,384 272,272 384,272 384,240 272,240   " fill="#FFFFFF"></polygon>
                         <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256    C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472    z" fill="#FFFFFF"></path>
                      </g>
                   </g>
                </svg>
                <svg class="minus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <rect x="128" y="240" width="256" height="32" fill="#FFFFFF"></rect>
                      <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   " fill="#FFFFFF"></path>
                   </g>
                </svg>
             </h3>
             <div id="tab4" class="tab_content clearfix" style="display: none;">
                <div class="tab-img">
                <img class=" lazy-img" src="public/assets/images/architects/3d-elevation-designers.png" alt="3d Elevation Designers in Gorakpur" style="">

                </div>
                <div class="tab-description">
                   <h3>3D Elevation</h3>
                   <p>The house's elevation provides a comprehensive 360-degree panoramic picture, demonstrating the physical accuracy of your home. We are the first home architects in Gorakpur to offer this service, which allows consumers to see their home in 3D, making decision-making easier.
Customers may visualise the interiors &amp; exteriors with this approach.
                   </p>

                </div>
             </div>
             <!-- #tab5 -->
             <h3 class="tab_drawer_heading" rel="tab5">
             3D Interior Design
                <svg class="plus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <g>
                         <polygon points="272,128 240,128 240,240 128,240 128,272 240,272 240,384 272,384 272,272 384,272 384,240 272,240   " fill="#FFFFFF"></polygon>
                         <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256    C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472    z" fill="#FFFFFF"></path>
                      </g>
                   </g>
                </svg>
                <svg class="minus" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512">
                   <g>
                      <rect x="128" y="240" width="256" height="32" fill="#FFFFFF"></rect>
                      <path d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256   C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z   " fill="#FFFFFF"></path>
                   </g>
                </svg>
             </h3>
             <div id="tab5" class="tab_content clearfix" style="display: none;">
                <div class="tab-img">
                <img class=" lazy-img" src="public/assets/images/architects/3d-interior-design-plan.png" alt="3d Interior Designing Company" title="3d Interior Designing Company">

                </div>
                <div class="tab-description">
                   <h3>3D Interior Design</h3>
                   <p>Interior design entails maximising space to make your home more large, pleasant, and appealing to live in. Home experts in {{ $settings?->app_name }} architects &amp; construction take care of aesthetic sense &amp; provide you with a lovely home that meets all of your requirements. The resulting atmosphere ensures that it is a palace you will always cherish and value.
                   </p>
                   <!-- <ul>
                      <li><span></span>Smooth Streaming</li>
                      <li><span></span>Audio Clarity</li>
                      <li><span></span>HD Visuals</li>
                      <li><span></span>State-of-the-art Technology</li>
                   </ul> -->

                </div>
             </div>

          </div>
       </div>
    </div>
 </section>

 <section class="section_container packages">
    <div class="container">
          <div class="section-head">
             <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Choose The Best Architectural Design Packages</h3>
             <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Build Happiness Using Experts To Sketch Your Inventive Designs</h4>
          </div>
          <div class="packages-wrapper">
             <div class="packages-cont">
                <div class="package-type">
                <img src="public/assets/images/gallery/architecture-design-cost-standard.png" alt="Architecture Design Cost">
                   <span>Standard</span>
                </div>
                <ul>
                   <li>2D Floor Plan - Vasthu</li>
                   <li>3D Elevation</li>
                   <li>Floor Plan Revision Upto 3 Times</li>
                   <li>Electrical Design</li>
                   <li>Facade Type - Standard Design</li>
                   <a href="get-quote.php" class="nav_quote cap" type="button" data-wow-delay="0.6s">Get a free quote</a>
                </ul>
             </div>
             <div class="packages-cont">
                   <div class="package-type">
                   <img src="public/assets/images/gallery/home-architecture-design-cost-premium.png" alt="Home Architecture Design Cost">
                      <span>Premium</span>
                   </div>
                <ul>
                   <li>2D Floor Plan - Vasthu</li>
                   <li>3D Elevation</li>
                   <li>Floor Plan Revision Upto 10 Times</li>
                   <li>Structural Design</li>
                   <li>Plumbing Design</li>
                   <li>Electrical Design</li>
                   <li>Furniture Layout</li>
                   <li>Civil Drawings</li>
                   <li>Site Visits by Architects Upto 2 Times</li>
                   <a href="get-quote.php" class="nav_quote cap" type="button" data-wow-delay="0.6s">Get a free quote</a>
                </ul>
             </div>
             <div class="packages-cont">
                <div class="package-type">
                <img src="public/assets/images/gallery/architecture-interior-design-cost-elite.png" alt="Architecture Interior Design Cost">
                   <span>Elite</span>
                </div>
                <ul>
                   <li>2D Floor Plan - Vasthu</li>
                   <li>3D Floor Plan - Vasthu</li>
                   <li>3D Elevation</li>
                   <li>2D Elevation</li>
                   <li>3D Walkthrough</li>
                   <li>Floor Plan Revision Unlimited</li>
                   <li>Structural Design</li>
                   <li>Civil Drawings</li>
                   <li>Plumbing Design</li>
                   <li>Electrical Design</li>
                   <li>Furniture Layout</li>
                   <li>Site Visits by Architects Upto 5 Times</li>
                   <a href="get-quote.php" class="nav_quote cap" type="button" data-wow-delay="0.6s">Get a free quote</a>
                </ul>
             </div>
          </div>
    </div>
 </section>

 <section class="section_container clearfix our-process">
    <div class="container">
          <div class="section-head">
             <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">How to Chart Out The Architectural Design Process?</h3>
             <h5 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Design Methodology Defined Categorically in Phases </h5>
          </div>
          <div class="our-process-wrap">
             <div class="procrss-cont">
                <span>01</span>
                <h6>Site Analysis</h6>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="37.006" height="47.996" viewBox="0 0 37.006 47.996"><defs><style>.axo{opacity:0.5;}.bxo{fill:#1a232c;}</style></defs><g class="axo" transform="translate(-0.499)"><path class="bxo" d="M236.579,0h-8.686a3.678,3.678,0,0,0-3.674,3.674v8.687a3.678,3.678,0,0,0,3.674,3.674h8.686a3.678,3.678,0,0,0,3.674-3.674V3.674A3.678,3.678,0,0,0,236.579,0Zm.862,12.361a.863.863,0,0,1-.862.862h-8.686a.863.863,0,0,1-.862-.862V3.674a.863.863,0,0,1,.862-.862h8.686a.863.863,0,0,1,.862.862Zm0,0" transform="translate(-202.747)"></path><path class="bxo" d="M27.1,19.545a3.985,3.985,0,0,0-1.869.463,4.005,4.005,0,0,0-5.313-1.267,4.009,4.009,0,0,0-4.427-1.454V16.035h.334A3.678,3.678,0,0,0,19.5,12.36V3.674A3.678,3.678,0,0,0,15.827,0H7.141A3.678,3.678,0,0,0,3.467,3.674v8.687a3.678,3.678,0,0,0,3.674,3.674h.334v8.711a4.055,4.055,0,0,0-.73-.579,3.981,3.981,0,0,0-2.87-.532,3.52,3.52,0,0,0-2.649,1.294A3.543,3.543,0,0,0,.6,27.96l1.848,7.908c1.054,6.6,6.2,11.535,6.42,11.742A1.406,1.406,0,0,0,9.838,48H25.653a1.407,1.407,0,0,0,1.175-.634,25.979,25.979,0,0,0,4.282-14.307v-9.5h0A4.014,4.014,0,0,0,27.1,19.545ZM10.429,45.183c-1.133-1.205-4.473-5.1-5.208-9.8-.005-.035-.012-.069-.02-.1L3.341,27.321a.754.754,0,0,1,.088-.645.824.824,0,0,1,.594-.254c.137-.013.193-.029.32-.037a1.535,1.535,0,0,1,.918.17A1.19,1.19,0,0,1,5.8,27.3l1.6,6.864A1.407,1.407,0,0,0,8.594,35.24l.113.014a1.406,1.406,0,0,0,1.581-1.4V11.511a1.2,1.2,0,1,1,2.394,0V24.7a1.406,1.406,0,1,0,2.812,0V21.113a1.2,1.2,0,0,1,2.394,0v3.743a1.406,1.406,0,0,0,2.812,0V22.228a1.2,1.2,0,0,1,2.394,0v3.611a1.406,1.406,0,0,0,2.812,0V23.554a1.2,1.2,0,1,1,2.394,0v9.5A23.167,23.167,0,0,1,24.88,45.183ZM6.279,12.361V3.674a.863.863,0,0,1,.862-.862h8.686a.863.863,0,0,1,.862.862v8.687a.863.863,0,0,1-.862.862h-.334V11.51a4.009,4.009,0,1,0-8.019,0v1.712H7.141a.863.863,0,0,1-.862-.862Zm0,0" transform="translate(0 0)"></path></g></svg>
             </div>
             <div class="procrss-cont">
                <span>02</span>
                <h6>Concept <br>Creation</h6>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="52.66" height="47.996" viewBox="0 0 52.66 47.996"><defs><style>.aqo{opacity:0.5;}.bqo{fill:#1a232c;}</style></defs><g class="aqo" transform="translate(0 -22.677)"><path class="bqo" d="M48.724,22.677H19.8a3.944,3.944,0,0,0-3.936,3.943V36.829H3.936A3.944,3.944,0,0,0,0,40.771V63.463a3.944,3.944,0,0,0,3.936,3.942h.621A2.87,2.87,0,0,1,7.239,69.28L7.5,70a1.028,1.028,0,0,0,1.56.484l3.606-2.553a2.839,2.839,0,0,1,1.649-.525H32.856a3.944,3.944,0,0,0,3.936-3.942V52.226h1.549a2.838,2.838,0,0,1,1.649.525L43.6,55.3a1.028,1.028,0,0,0,1.56-.484l.265-.72A2.87,2.87,0,0,1,48.1,52.226h.621a3.944,3.944,0,0,0,3.936-3.943V26.62a3.944,3.944,0,0,0-3.936-3.943ZM34.736,63.463a1.885,1.885,0,0,1-1.879,1.885H14.319a4.884,4.884,0,0,0-2.838.9l-2.538,1.8a4.937,4.937,0,0,0-4.386-2.7H3.936a1.885,1.885,0,0,1-1.879-1.885V40.771a1.885,1.885,0,0,1,1.879-1.885h28.92a1.885,1.885,0,0,1,1.879,1.885ZM50.6,48.283a1.885,1.885,0,0,1-1.879,1.885H48.1a4.937,4.937,0,0,0-4.386,2.7l-2.538-1.8a4.885,4.885,0,0,0-2.838-.9H36.793v-9.4a3.923,3.923,0,0,0-.48-1.885H43.56a1.029,1.029,0,1,0,0-2.057H17.924V26.62A1.885,1.885,0,0,1,19.8,24.734h28.92A1.885,1.885,0,0,1,50.6,26.62Z"></path><path class="bqo" d="M76.233,230.007H67.415a1.029,1.029,0,0,0-1.029,1.029v4.906a1.029,1.029,0,0,0,1.029,1.029H71.22a5.521,5.521,0,0,1-.924,3.7,2.576,2.576,0,0,1-2.219.714,1.029,1.029,0,0,0-1.1,1.026v3.627a1.029,1.029,0,0,0,.024.222,1.5,1.5,0,0,0,1.462,1.191l.083,0a12.529,12.529,0,0,0,1.5-.2,8.765,8.765,0,0,0,7.168-7.656c.032-.315.04-3.148.04-3.176v-5.382A1.029,1.029,0,0,0,76.233,230.007Zm-1.029,6.41c0,.388-.013,2.691-.03,2.979a6.7,6.7,0,0,1-5.488,5.829q-.353.064-.65.1v-1.913a4.247,4.247,0,0,0,2.78-1.364c1.988-2.179,1.382-6.109,1.355-6.276a1.028,1.028,0,0,0-1.015-.865H68.443v-2.849H75.2Z" transform="translate(-59.558 -186.006)"></path><path class="bqo" d="M195.452,230.007h-8.818a1.029,1.029,0,0,0-1.029,1.029v4.906a1.029,1.029,0,0,0,1.029,1.029h3.805a5.521,5.521,0,0,1-.924,3.7,2.576,2.576,0,0,1-2.219.714,1.029,1.029,0,0,0-1.1,1.026v3.627a1.031,1.031,0,0,0,.024.222,1.5,1.5,0,0,0,1.462,1.192l.083,0a12.529,12.529,0,0,0,1.5-.2,8.765,8.765,0,0,0,7.168-7.656c.031-.309.04-3.148.04-3.176v-5.382A1.029,1.029,0,0,0,195.452,230.007Zm-1.028,6.41c0,.388-.013,2.69-.031,2.979a6.7,6.7,0,0,1-5.488,5.829q-.353.064-.65.1v-1.913a4.248,4.248,0,0,0,2.78-1.364c1.988-2.179,1.382-6.109,1.355-6.276a1.028,1.028,0,0,0-1.015-.865h-3.713v-2.849h6.761Z" transform="translate(-166.515 -186.006)"></path><path class="bqo" d="M252.375,97.255H233.783a1.029,1.029,0,0,0,0,2.057h18.592a1.029,1.029,0,1,0,0-2.057Z" transform="translate(-208.815 -66.907)"></path></g></svg>
             </div>
             <div class="procrss-cont">
                <span>03</span>
                <h6>Design <br>Development</h6>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="37.497" height="47.996" viewBox="0 0 37.497 47.996"><defs><style>.aro{opacity:0.5;}.bro{fill:#1a232c;}</style></defs><g class="aro" transform="translate(-56)"><path class="bro" d="M118.266,156.864l4.383-5.272a.7.7,0,0,0-1.081-.9l-3.757,4.519-.821-1.334a.7.7,0,0,0-1.2.737l1.335,2.168A.7.7,0,0,0,118.266,156.864Z" transform="translate(-54.093 -136.337)"></path><path class="bro" d="M115.794,253.614l1.335,2.168a.7.7,0,0,0,1.139.081l4.383-5.272a.7.7,0,0,0-1.081-.9l-3.757,4.519-.821-1.334a.7.7,0,1,0-1.2.737Z" transform="translate(-54.094 -226.055)"></path><path class="bro" d="M115.794,353.281l1.335,2.168a.7.7,0,0,0,1.139.081l4.383-5.272a.7.7,0,1,0-1.081-.9l-3.757,4.519-.821-1.334a.7.7,0,1,0-1.2.737Z" transform="translate(-54.094 -316.379)"></path><path class="bro" d="M92.794,175a.7.7,0,0,0-.7.7v5.118a1.079,1.079,0,0,1-1.078,1.078H58.484a1.079,1.079,0,0,1-1.078-1.078V150.012a.7.7,0,0,0-1.406,0v30.812a2.487,2.487,0,0,0,2.484,2.484H91.013a2.487,2.487,0,0,0,2.484-2.484v-5.118A.7.7,0,0,0,92.794,175Z" transform="translate(0 -135.312)"></path><path class="bro" d="M91.013,5.417H87.574V2.512a2.512,2.512,0,0,0-5.025,0V5.417H77.261V2.512a2.512,2.512,0,0,0-5.025,0V5.417H66.948V2.512a2.512,2.512,0,1,0-5.025,0V5.417H58.484A2.487,2.487,0,0,0,56,7.9v3.517a.7.7,0,1,0,1.406,0V7.9a1.079,1.079,0,0,1,1.078-1.078h3.439V7.94a2.512,2.512,0,1,0,5.025,0V6.824h5.288V7.94a2.512,2.512,0,0,0,5.025,0V6.824h5.288V7.94a2.512,2.512,0,1,0,5.025,0V6.824h3.439A1.079,1.079,0,0,1,92.091,7.9V37.113a.7.7,0,0,0,1.406,0V7.9a2.487,2.487,0,0,0-2.484-2.484ZM65.542,7.94a1.106,1.106,0,0,1-2.212,0V2.512a1.106,1.106,0,0,1,2.212,0Zm10.313,0a1.106,1.106,0,1,1-2.212,0V2.512a1.106,1.106,0,1,1,2.212,0Zm10.313,0a1.106,1.106,0,0,1-2.212,0V2.512a1.106,1.106,0,0,1,2.212,0Z" transform="translate(0)"></path><path class="bro" d="M200.442,182.589h14.811a2.2,2.2,0,1,0,0-4.406H200.442a2.2,2.2,0,0,0,0,4.406Zm0-3h14.811a.8.8,0,1,1,0,1.594H200.442a.8.8,0,1,1,0-1.594Z" transform="translate(-128.905 -161.48)"></path><path class="bro" d="M200.442,281.8h14.811a2.2,2.2,0,1,0,0-4.406H200.442a2.2,2.2,0,0,0,0,4.406Zm0-3h14.811a.8.8,0,0,1,0,1.594H200.442a.8.8,0,0,1,0-1.594Z" transform="translate(-128.905 -251.392)"></path><path class="bro" d="M200.442,381.014h14.811a2.2,2.2,0,1,0,0-4.406H200.442a2.2,2.2,0,0,0,0,4.406Zm0-3h14.811a.8.8,0,1,1,0,1.594H200.442a.8.8,0,1,1,0-1.594Z" transform="translate(-128.905 -341.304)"></path></g></svg>
             </div>
             <div class="procrss-cont">
                <span>04</span>
                <h6>Execution</h6>
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="45.855" height="46.196" viewBox="0 0 45.855 46.196"><defs><style>.ago{opacity:0.5;}.bgo{fill:#1a232c;}</style></defs><g class="ago" transform="translate(-1.891)"><g transform="translate(1.891 0)"><path class="bgo" d="M17.494,173.715a.677.677,0,0,0,0-1.353H14.439v-2.029a.677.677,0,0,0-1.353,0v2.029H10.707v-7.815a.875.875,0,0,0-.881-.888H2.888a1.042,1.042,0,0,0-1,1.1v29.227a1.042,1.042,0,0,0,1,1.1H17.174a1.054,1.054,0,0,0,1-1.1v-7.016a.677.677,0,1,0-1.353,0v6.765H3.244V165.012h6.11v1.7H7.068a.677.677,0,1,0,0,1.353H9.354v2.457H7.3a.677.677,0,0,0,0,1.353H9.354v5.979a.677.677,0,0,0,.677.677h6.786v5.289a.677.677,0,1,0,1.353,0V178.07a.9.9,0,0,0-.909-.888H14.439v-3.467Zm-4.408,3.467H10.707v-3.467h2.378v3.467Z" transform="translate(-1.891 -148.893)"></path><path class="bgo" d="M141.164,31.3V21.834h0V12.37h0V8.313h1.318A1.116,1.116,0,0,0,143.6,7.2V7.136H147.1a1.311,1.311,0,0,0,.789-.258A.681.681,0,0,0,148,6.787l.021-.024a1.057,1.057,0,0,0,.317-.746V2.3a1.184,1.184,0,0,0-1.237-1.12H143.6V1.114A1.116,1.116,0,0,0,142.482,0h-8.606a1.116,1.116,0,0,0-1.115,1.114v.062H113.7a1.185,1.185,0,0,0-1.239,1.12V6.017a1.185,1.185,0,0,0,1.239,1.12h3.22V9.469l-2.5,2.661H113.8a1.075,1.075,0,0,0-1.074,1.073v3.164a1.076,1.076,0,0,0,1.074,1.076h7.595a1.077,1.077,0,0,0,1.077-1.076V13.2a1.076,1.076,0,0,0-1.077-1.073h-.616l-2.5-2.661V7.136h14.486V7.2a1.116,1.116,0,0,0,1.115,1.114h1.318V35.355h-2.121a1.7,1.7,0,0,0-1.7,1.7v4.414h-.742a2.37,2.37,0,0,0-2.37,2.366v1.233a1.133,1.133,0,0,0,1.134,1.13h17.785a1.132,1.132,0,0,0,1.131-1.13V43.833a2.369,2.369,0,0,0-2.367-2.366H145.2V37.054a1.7,1.7,0,0,0-1.7-1.7h-2.332V31.3h0ZM146.987,2.53V4.858l-2.4-2.328Zm-3.39.923L146,5.783h-2.4ZM113.815,5.783V2.53h.375l3.349,3.253Zm7.3,7.7V16.09h-7.039V13.483Zm-2.2-1.353h-2.644l1.322-1.4Zm-2.786-9.6h6.15l-3.075,2.986Zm7.255,3.253h-2.512L123.951,2.8l3.075,2.986Zm2.231-3.253h6.15l-3.075,2.986Zm5.862,3.253h-1.119l2.4-2.329V5.783ZM143.5,36.708a.348.348,0,0,1,.35.346v4.414h-3.94a.677.677,0,0,0,0,1.353h6.036a1.014,1.014,0,0,1,1.014,1.012v1.01H129.613v-1.01a1.015,1.015,0,0,1,1.016-1.012h6a.677.677,0,1,0,0-1.353h-3.9V37.054a.351.351,0,0,1,.348-.346H143.5Zm-3.954-24.339-2.995,3.07V9.3Zm-2.066-4.056h2.334v2.393Zm2.334,5.719v6.139l-2.995-3.07Zm-.269,7.8-2.995,3.07v-6.14Zm.269,1.663v6.14l-2.995-3.07Zm-.269,7.8-2.995,3.07v-6.14Zm.269,1.663v2.393h-2.334Zm.677-26h-6.373V1.353h8.13V6.96Z" transform="translate(-102.486 0)"></path><path class="bgo" d="M45.171,351.958a1.012,1.012,0,0,0-1.01-1.011H35.852a1.013,1.013,0,0,0-1.012,1.011v2.76a1.013,1.013,0,0,0,1.012,1.011h8.309a1.012,1.012,0,0,0,1.01-1.011Zm-5.841,2.418H36.193V352.3H39.33v2.076Zm4.488,0H40.683V352.3h3.134v2.076Z" transform="translate(-31.867 -319.282)"></path><path class="bgo" d="M44.161,426.371H35.852a1.013,1.013,0,0,0-1.012,1.011v2.76a1.013,1.013,0,0,0,1.012,1.011h8.309a1.012,1.012,0,0,0,1.01-1.011v-2.76A1.012,1.012,0,0,0,44.161,426.371ZM39.33,429.8H36.193v-2.076H39.33V429.8Zm4.488,0H40.683v-2.076h3.134V429.8Z" transform="translate(-31.867 -387.901)"></path></g></g></svg>
             </div>
          </div>
    </div>
    <svg class="patterns" xmlns="http://www.w3.org/2000/svg" width="303.477" height="455.412" viewBox="0 0 303.477 455.412"><defs><style>.wqa{opacity:0.15;}.wqb{fill:#ffc30e;}</style></defs><g class="wqa" transform="translate(303.477) rotate(90)"><path class="wqb" d="M227.71,303.477C102.152,303.477,0,201.334,0,75.775A226.5,226.5,0,0,1,12.973,0H82.43a162.861,162.861,0,0,0-18.6,75.775c0,90.363,73.513,163.877,163.876,163.877S391.587,166.139,391.587,75.775A162.848,162.848,0,0,0,372.991,0h69.448a226.5,226.5,0,0,1,12.973,75.775C455.412,201.334,353.27,303.477,227.71,303.477Z"></path></g></svg>
 </section>

 <section class="section_container clearfix multifaceted">
    <div class="container">
       <div class="section-head">
          <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Reasons Why Customers Love Us To Design Their Dream House</h3>
          <h4 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Get Prompt Service &amp; Accurate Partnership with Best Residential Architects in Gorakpur</h4>
       </div>
       <div class="gallery-wrapper">
          <ul>
             <li>
                <img loading="lazy" src="public/assets/images/architects/superior-design.png" alt="Superior Design" title="Superior Design">
                <span>Superior Design</span>
             </li>
             <li>
                <img loading="lazy" src="public/assets/images/architects/on-time-delivery.png" alt="On-Time Delivery" title="On-Time Delivery">
                <span>On-time Delivery</span>
             </li>
             <li>
                <img loading="lazy" src="public/assets/images/architects/quality.png" alt="Quality" title="Quality">
                <span>Quality</span>
             </li>
             <li>
                <img loading="lazy" src="public/assets/images/architects/delivered-several-designs.png" alt="Delivered Several Designs" title="Delivered Several Designs">
                <span>Delivered 100+ Designs</span>
             </li>
             <li>
                <img loading="lazy" src="public/assets/images/architects/transparency.png" alt="Transparency" title="Transparency">
                <span>Transparency</span>
             </li>
             <li>
                <img loading="lazy" src="public/assets/images/architects/customer-satisfication.png" alt="Customer Satisfaction" title="Customer Satisfaction">
                <span>Customer Satisfaction</span>
             </li>
          </ul>
       </div>
    </div>
 </section>

 <section class="section_container clearfix">
    <div class="container">
          <div class="section-head">
             <h3 class="section-title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">Our Accomplishments - Latest Projects</h3>
             <h5 class="section-subtitle wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">Transforming Lives With Innovative House Architects in Gorakpur</h5>
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
             <ul class="owl-carousel owl-loaded owl-drag">
















                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2881px, 0px, 0px); transition: all 0.25s ease 0s; width: 8964px;"><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-8.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-9.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-10.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-11.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-12.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-13.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-14.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-1.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-2.png" alt="">
                   </li></div><div class="owl-item active" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-3.png" alt="">
                   </li></div><div class="owl-item active" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-4.png" alt="">
                   </li></div><div class="owl-item active" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-5.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-6.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-7.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-8.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-9.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-10.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-11.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-12.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-13.png" alt="">
                   </li></div><div class="owl-item" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-14.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-1.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-2.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-3.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-4.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-5.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-6.png" alt="">
                   </li></div><div class="owl-item cloned" style="width: 310.133px; margin-right: 10px;"><li class="item" style="width:250px">
                   <img loading="lazy" src="public/assets/images/gallery/gallery-7.png" alt="">
                   </li></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></ul>
             </div>
          </div>
    </div>
 </section>

<section class="section_container">
    <div class="container">
        <div class="section-head">
            <h5 class="section-title wow fadeInUp"></h5>
            <h4 class="section-subtitle wow fadeInUp" >Compliments That Made Us Dream to Reach the Sky</h4>
        </div>
        <div class="testimonials-wrap">
            <div class="testmonial-cont">
                <p>The transformation from a traditional structure to an urban classic residence was an  ideal blend of contemporary and trendy designs giving a remarkable ideation from {{ $settings?->app_name }} property experts.</p>
                <div class="reviewer">
                    <img class="user" src="public/assets/images/user-one.svg" alt="">
                    <span>
                        Athithan
                        <img class="rating" src="public/assets/images/rating-four.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="testmonial-cont filled">
                <p>In every way, {{ $settings?->app_name }} expert’s performance has been amazing. When it comes to material purchases for construction, we appreciate your expertise and attention to our needs, thereby saving us millions! </p>
                <div class="reviewer">
                    <img class="user" src="public/assets/images/user-two.svg" alt="">
                    <span>
                        Anukeerthana
                        <img class="rating" src="public/assets/images/rating-five.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="testmonial-cont">
                <p>My family and I couldn't dream of a residence which is so prettily designed. The vibe is & our housing project has the right architecture designed making it so rejuvenating and beautiful. Finally, we enjoy living our dream! Thanks to {{ $settings?->app_name }}.</p>
                <div class="reviewer">
                    <img class="user" src="public/assets/images/user-three.svg" alt="">
                    <span>
                        Sundar
                        <img class="rating" src="public/assets/images/rating-four.svg" alt="">
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
            @forelse ($manage_content?->faqs as $faqs)
                <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns rotate arrow">
                    <div class="faq">
                        <h3 itemprop="name">
                            {{ $faqs?->question }}
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
                        <p itemprop="text" class="comm-desc-analyse" style="display: none;">{{ $faqs?->description }}</p>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
<section>
    <div class="bottom-cta">
        <h5>Let’s Get in Touch To Design Your Beautiful Home</h5>
        <p>Share your dreams, we’ll incorporate designs into dwellings that showcases your life-style</p>
        <a href="#">GET A FREE QUOTE</a>
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
                <span><a target="blank" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}?text=Hi%20I%20have%20a%20plot%20in">{{ $settings->whatsapp }}</a></span>
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
                <span><a href="tel:{{ $settings->contact }}">{{ $settings->contact }}</a></span>
            </li>
        </ul>
    </div>
</section>
@endsection
