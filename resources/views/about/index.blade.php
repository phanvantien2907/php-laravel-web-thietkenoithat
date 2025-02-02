@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <h2>About us</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Story Section -->
    <section class="story-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Our Story In Interior Industry</h2>
                        <div class="bold-text">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line</div>
                        <div class="text">
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                            <p>At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('images/resource/story.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Story Section -->

    <!-- Interior Section -->
    <section class="interior-section style-three">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('images/resource/interior.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Why Choose Us for Interior Work</h2>
                            <div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
                            <div class="row clearfix">

                                <!-- Interior Block -->
                                <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="block-inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-award-1"></span>
                                        </div>
                                        <h3>Superior Quality</h3>
                                    </div>
                                </div>

                                <!-- Interior Block -->
                                <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="block-inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-answer"></span>
                                        </div>
                                        <h3>Professional Team</h3>
                                    </div>
                                </div>

                                <!-- Interior Block -->
                                <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="block-inner">
                                        <div class="icon-box">
                                            <span class="icon flaticon-hand"></span>
                                        </div>
                                        <h3>Unmatched Warranty</h3>
                                    </div>
                                </div>

                            </div>

                            <div class="bold-text">Get in touch with us to design your dream home</div>
                            <div class="column-text">Talk to our design expert and get your designs</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Interior Section -->

    <!-- Counter Section -->
    <section class="counter-section style-two">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="8">0</span> Year
                                </div>
                                <h4 class="counter-title">Material Warranty</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="2500">0</span>+
                                </div>
                                <h4 class="counter-title">Homes Completed</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="200">0</span>+
                                </div>
                                <h4 class="counter-title">Interior Designer</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="45">0</span> Days
                                </div>
                                <h4 class="counter-title">Project Delivery</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Team Section -->
    <section class="team-section style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>Our Team</h2>
                <div class="text">Our caregivers are trained specifically to provide in-home care.</div>
            </div>

            <div class="clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-1.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="team.html">Merry Desulva</a></h3>
                            <div class="designation">Interior Designer</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box ">
                        <div class="image">
                            <img src="{{asset('images/resource/team-2.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="team.html">Roseen</a></h3>
                            <div class="designation">Consultant for Designs</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-3.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="team.html">Merry Desulva</a></h3>
                            <div class="designation">Interior Designer</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('images/resource/team-4.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="team.html">Roseen</a></h3>
                            <div class="designation">Consultant for Designs</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- Mission Section -->
    <section class="mission-section style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('images/resource/mission.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Our Company Mission</h2>
                        <div class="bold-text">we believe that interior design is more than great functionality and <br> beautiful aesthetics.</div>
                        <div class="text">WThe aesthetics and functional aspects are the primary elements of a smart interior design. We as the prominent Interior Design Consultant in Noida keep these elements at our highest priority. We provide the best suggestions for Interior Designing of a given space</div>
                        <h3>Our Interior designers help you for classic look…</h3>
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-two">
                                    <li>-  Best Design Consultancy</li>
                                    <li>-  Architect Designer</li>
                                    <li>-  Turnkey Projects</li>
                                </ul>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-two">
                                    <li>-  Residential Designs</li>
                                    <li>-  Corporate Designs</li>
                                    <li>-  Commercial Designs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Mission Section -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image: url(images/background/6.jpg)">
        <div class="auto-container">
            <h2>Think Interior. Think Stella Orr'e</h2>
            <div class="text">Interiors for all styles and budgets, Choose from thousands of <br> designs. Heart your favorites to shortlist.</div>
            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
        </div>
    </section>
    <!-- End Call To Action Section -->
@endsection
