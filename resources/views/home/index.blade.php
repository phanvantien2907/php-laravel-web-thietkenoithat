@extends('layouts.main')
@section('content')
    <section class="main-slider">
        <div class="slider-box">

            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('images/main-slider/1.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2>We make dream <br> home a reality</h2>
                            <div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('images/main-slider/2.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2>Designs Benefitting <br> Your Persona</h2>
                            <div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('images/main-slider/3.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content">
                            <h2>Solution for <br> Modern Kitchen</h2>
                            <div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Awesome place & what improves <br> explore radiance.</h2>
            </div>

            <div class="row clearfix">

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="residental-interior.html"><img src="{{asset('images/resource/service-1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="residental-interior.html">Residential Interiors</a></h3>
                            <div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies.</div>
                            <a href="residental-interior.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="office-interior.html"><img src="{{asset('images/resource/service-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="office-interior.html">Office Designs</a></h3>
                            <div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
                            <a href="office-interior.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="commercial-interior.html"><img src="{{asset('images/resource/service-1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="commercial-interior.html">Commercial Interiors</a></h3>
                            <div class="text">Proactively envisioned multimedia based exper tise and cross-media growth strategies. Seam lessly visualize quality intellectual.</div>
                            <a href="commercial-interior.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- Services Section Two -->
    <section class="services-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Our Services</h2>
                <div class="text">Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt.</div>
            </div>

            <div class="row clearfix">
                <!-- Service Block -->
               <x-servies/>
            </div>

        </div>
    </section>
    <!-- End Services Section Two -->

    <!-- Project Section -->
    <section class="project-section">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Our Latest Projects</h2>
            </div>
        </div>

        <div class="outer-container">

            <!--Isotope Galery-->
            <div class="sortable-masonry">

                <!--Filter-->
                <div class="filters clearfix">

                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
                        <li class="filter" data-role="button" data-filter=".residential">Residential</li>
                        <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
                        <li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
                        <li class="filter" data-role="button" data-filter=".office">Office</li>
                    </ul>

                </div>

                <div class="items-container row clearfix">

                    <!-- Gallery Item -->
                    <div class="gallery-item large-block masonry-item all hospital commercial">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/1.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all hospital commercial">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/2.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all residential office commercial">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/3.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all commercial">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/4.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item large-block masonry-item all hospital office residential">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/7.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/7.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all residential">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/5.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/5.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item small-block masonry-item all hospital office">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/6.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/6.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                </div>

            </div>

            <!-- More Projects -->
            <div class="more-projects">
                <a href="projects-classic.html" class="projects">View All Projects</a>
            </div>

        </div>
    </section>
    <!-- End Project Section -->

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">

            <!--Content Column-->
            <div class="content-column">
                <div class="content-box">
                    <h2>Home design made easy</h2>
                    <div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
                    <ul class="list-style-one">
                        <li>Whole Home Interior</li>
                        <li>Modular Kitchen and Wardrobe</li>
                        <li>Furniture, Decore and more</li>
                        <li>Post-surgery, including cosmetic, joint replacement, or heart surgery</li>
                        <li>Chronic conditions, such as diabetes, COPD, or cancer</li>
                        <li>On Site Expertiset</li>
                    </ul>
                    <div class="bold-text">Design your home, right here at Stella Orr'e <br> <a href="contact.html">Talk to a designer</a></div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column" style="background-image: url(images/resource/video-img.jpg)">
                <div class="inner-column">
                    <div class="image">
                        <img src="images/resource/video-img.jpg" alt="">
                    </div>
                    <a href="https://www.youtube.com/watch?v=SXZXtD60t2g" class="overlay-link lightbox-image">
                        <div class="icon-box">
                            <span class="icon flaticon-play-button"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!--End Image Column-->

        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-two centered">
                <h2>What our customers says</h2>
                <div class="title-text">Thousands of people done interior</div>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="images/resource/author-1.jpg" alt="" />
                                </div>
                            </div>
                            <h3>Michale John</h3>
                            <div class="title">I got luxuary inteior from Stella Orr'e</div>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="images/resource/author-2.jpg" alt="" />
                                </div>
                            </div>
                            <h3>Michale John</h3>
                            <div class="title">I got luxuary inteior from Stella Orr'e</div>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="images/resource/author-1.jpg" alt="" />
                                </div>
                            </div>
                            <h3>Michale John</h3>
                            <div class="title">I got luxuary inteior from Stella Orr'e</div>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image-outer">
                                <div class="image">
                                    <img src="images/resource/author-2.jpg" alt="" />
                                </div>
                            </div>
                            <h3>Michale John</h3>
                            <div class="title">I got luxuary inteior from Stella Orr'e</div>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Featured Section -->
    <section class="featured-section" style="background-image: url(images/background/2.jpg)">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Our Work Process</h2>
            </div>

            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-hand-shake"></span>
                            </div>
                            <div class="feature-number">1</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="residental-interior.html">Meet Customers</a></h3>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-answer"></span>
                            </div>
                            <div class="feature-number">2</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="residental-interior.html">Design Discussion</a></h3>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-sketch"></span>
                            </div>
                            <div class="feature-number">3</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="residental-interior.html">Drafting Design</a></h3>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon flaticon-house-1"></span>
                            </div>
                            <div class="feature-number">4</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="residental-interior.html">Implimentation</a></h3>
                            <div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Need a design fix? Read our magazine</h2>
                <div class="text">Stay updated with latest trends, inspiration, expert tips, DIYs and more</div>
            </div>

            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li>By <span>Michale</span></li>
                                <li>Modular Kitchen</li>
                            </ul>
                            <h3><a href="blog-detail.html">15 Vastu ideas for the main door emphasizes on every par ...</a></h3>
                            <a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li>By <span>Michale</span></li>
                                <li>Interior, awesome</li>
                            </ul>
                            <h3><a href="blog-detail.html">Storage ideas for the bedroom by interior designers ...</a></h3>
                            <a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li>By <span>Michale</span></li>
                                <li>Interior, awesome</li>
                            </ul>
                            <h3><a href="blog-detail.html">Kids bedroom design ideas by interior designers in NY</a></h3>
                            <a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End News Section -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image: url(images/background/1.jpg)">
        <div class="auto-container">
            <h2>Think Interior. Think Stella Orr'e</h2>
            <div class="text">Interiors for all styles and budgets, Choose from thousands of <br> designs. Heart your favorites to shortlist.</div>
            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
        </div>
    </section>

@endsection
