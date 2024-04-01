@extends('layouts.app')

@section('content')
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
                {{-- <a href="contact-sales.php" class="secondary_button cap" type="button" data-wow-delay="0.6s">Talk to Us</a>
                <a href="get-quote.php" class="action_buttons cap" type="button" data-wow-delay="0.6s">Get a quote</a> --}}
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
                <p>The transformation from a traditional structure to an urban classic residence was an  ideal blend of contemporary and trendy designs giving a remarkable ideation from CHENNEE property experts.</p>
                <div class="reviewer">
                    <img class="user" src="public/assets/images/user-one.svg" alt="">
                    <span>
                        Athithan
                        <img class="rating" src="public/assets/images/rating-four.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="testmonial-cont filled">
                <p>In every way, CHENNEE Architects and Construction expert’s performance has been amazing. When it comes to material purchases for construction, we appreciate your expertise and attention to our needs, thereby saving us millions! </p>
                <div class="reviewer">
                    <img class="user" src="public/assets/images/user-two.svg" alt="">
                    <span>
                        Anukeerthana
                        <img class="rating" src="public/assets/images/rating-five.svg" alt="">
                    </span>
                </div>
            </div>
            <div class="testmonial-cont">
                <p>My family and I couldn't dream of a residence which is so prettily designed. The vibe is & our housing project has the right architecture designed making it so rejuvenating and beautiful. Finally, we enjoy living our dream! Thanks to CHENNE Architects & Construction.</p>
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
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns rotate arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        Why is CHENNEE Architects the Best Architectural Firm in Hosur?
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
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">To ensure client happiness, CHENNEE architecture specialists in Hosur create sustainable buildings by ensuring that the form is consistent with its utility.</p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow rotate">
                <div class="faq">
                    <h3 itemprop="name">
                        What are the Architectural Design Services Offered by CHENNEE Architects?
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
                        How Long Does CHENNEE Architects Take to Provide My House Plan?
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
                        What are the Process Followed by CHENNEE Architects to Plan My New Home?
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
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">When we begin, CHENNEE’s top team of architecting expertise in Hosur will accompany you through all stages of raising building, architecture planning, and interior designs to witness the unfolding of your dream home.
                    </p>
                </div>
            </div>
            <div itemscope="" itemprop="mainEntity" itemtype="" class="faq-acc accordion-commns arrow">
                <div class="faq">
                    <h3 itemprop="name">
                        What are the Types of Residential Buildings  Designed by CHENNEE Architects?
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
                        Why You Should Choose CHENNEE Architects to Design Your Dream Home?
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
                    <p itemprop="text" class="comm-desc-analyse" style="display: none;">With classic examples of creativity CHENNE Architects crafts your dream home with major pluses like superior design, on time delivery, quality, transparency & much more.  They are well known for the strength of the best residential architects in Hosur.
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
        <a href="get-quote.php">GET A FREE QUOTE</a>
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
                <span><a href="mailto:info@chennee.in">info@chennee.in</a></span>
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
                <span><a target="blank" href="https://wa.me/919600442776?text=Hi%20I%20have%20a%20plot%20in">+91 96004 42776</a></span>
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
                <span><a href="tel:+919600442776">+91 96004 42776</a></span>
            </li>
        </ul>
    </div>
</section>
@endsection
