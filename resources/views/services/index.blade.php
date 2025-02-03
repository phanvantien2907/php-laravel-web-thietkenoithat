@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/background/5.jpg')}})">
        <div class="auto-container">
            <h2>{{$services->title}}</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Services</li>
                <li>{{$services->title}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Services Detail -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="services-detail">
                        <div class="inner-box">
                            <div class="bold-text">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line</div>
                            <div class="text">
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                <p>At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                <!-- Two Column -->
                                <div class="two-column">
                                    <div class="row clearfix">
                                        <div class="column col-lg-4 col-md-4 col-sm-12">
                                            <div class="image">
                                                <img src="{{asset('images/resource/service-22.jpg')}}" alt="" />
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('images/resource/service-23.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content-column col-lg-8 col-md-8 col-sm-12">
                                            <div class="inner-column">
                                                <h3>We are dedicated to design with excellence and  focus on quality.</h3>
                                                <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                                                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services.</p>
                                                <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>Best Interior Designer In Your Local Area</h4>
                                <ul class="list-style-four">
                                    <li>-   Complete solutions for home or office</li>
                                    <li>-   Design consultancy within your budget and matching your taste</li>
                                    <li>-   Redesigning or renovation of your space</li>
                                    <li>-   Furnishing, art and accessories to create inviting, soothing & comfortable ambience .</li>
                                    <li>-   Redesigning or renovation of your space</li>
                                </ul>
                                <div class="service-contact-box"> Our experienced Designers help for your home interior. <br> <a href="contact.html">Contact our team</a> to learn more!</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Sidebar Widget / List Widget-->
                        <div class="sidebar-widget list-widget">
                            <!-- Services List -->
                            <ul class="services-list">
                                <li><a href="residental-interior.html">Residential Interior</a></li>
                                <li><a href="commercial-interior.html">Commercial Interior</a></li>
                                <li class="active"><a href="office-interior.html">Office Designs</a></li>
                                <li><a href="hospitality-design.html">Hospitality Design</a></li>
                                <li><a href="modern-furniture.html">Modern Furniture</a></li>
                                <li><a href="modular-kitchen.html">Modular Kitchen</a></li>
                                <li><a href="wardrobe.html">Wordrobe</a></li>
                                <li><a href="false-celling-design.html">False Celling Designs</a></li>
                            </ul>
                        </div>

                        <!-- Sidebar Widget / Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                            <div class="widget-content" style="background-image: url({{asset('images/background/7.jpg')}});">
                                <h3>Get Free Quote</h3>
                                <a href="/contact" class="theme-btn btn-style-one"><span class="txt">contact us</span></a>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
