@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <h2>Blog</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic padding-right">

                        <!-- News Block Three-->
                       <x-blog/>
                    </div>

                    <!--Styled Pagination-->
                    <ul class="styled-pagination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                    <!--End Styled Pagination-->

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">Modular Kitchen</a></li>
                                <li><a href="#">Lighting Effect</a></li>
                                <li><a href="#">Interior Tips</a></li>
                                <li><a href="#">Modern Wardrobe</a></li>
                                <li><a href="#">Modern Furniture</a></li>
                                <li><a href="#">Wooden Interior</a></li>
                            </ul>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent News</h2></div>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Hanging fruit to identify a ballpark value added ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Organically grow the holistic world view ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Bring to the table in the win-win survival ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Override the digital divide with additional ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                        </div>

                        <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="#">Interior Tips</a>
                            <a href="#">Lighting</a>
                            <a href="#">Designs</a>
                            <a href="#">Vintage Look</a>
                            <a href="#">Kitchens</a>
                            <a href="#">Kitchens</a>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
