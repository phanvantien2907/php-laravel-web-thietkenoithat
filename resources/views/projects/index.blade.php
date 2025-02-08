@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Projects</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Portfolio Page Section -->
    <section class="portfolio-page-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">

                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Works</li>
                        <li class="filter" data-role="button" data-filter=".residential-interior">Residential Interior</li>
                        <li class="filter" data-role="button" data-filter=".interior">Commercial Interior</li>
                        <li class="filter" data-role="button" data-filter=".kitchen">Modular Kitchen</li>
                        <li class="filter" data-role="button" data-filter=".wardrobe">Modern Wardrobe</li>
                        <li class="filter" data-role="button" data-filter=".furniture">Modern Furniture</li>
                    </ul>

                </div>

                <div class="filter-list row clearfix">

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/17.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/17.jpg')}}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/18.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/18.jpg')}}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all wardrobe residential-interior interior col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/19.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/19.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all wardrobe furniture kitchen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/20.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/20.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all interior residential-interior col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/21.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/21.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all wardrobe furniture kitchen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/22.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="images/gallery/22.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all interior furniture col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/23.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/23.jpg')}}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all furniture kitchen col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/24.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/24.jpg')}}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all furniture col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset('images/gallery/25.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                            <a href="{{asset('images/gallery/25.jpg')}}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                            <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Story Section -->
@endsection
