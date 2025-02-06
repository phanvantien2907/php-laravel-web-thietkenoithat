@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/images/background/5.jpg)">
        <div class="auto-container">
            <h2>Blog Details</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single padding-right">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/{{$blog->image}}" alt=""></figure>
                                <span class="date">{{$blog->created_at ? \Carbon\Carbon::parse($blog->created_at)->format('j M Y') : 'unknown' }}</span>
                            </div>
                            <div class="lower-content">
                                <div class="post-meta">
                                    <ul class="post-info clearfix">
                                        <li><a href="blog-detail.html">By : {{$blog->user->name}}</a></li>
                                        <li><a href="blog-detail.html">interior, furniture</a></li>
                                        <li><a href="blog-detail.html">Comments: {{$blog->blog_comments->count()}}</a></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <h3>How to make best home interior ourself</h3>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        <h4>Two Column Text Sample</h4>
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                            </div>
                                        </div>
                                        <p>Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#">here is link</a> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments {{$blog->blog_comments->count()}}</h2></div>
                            <div class="inner-box">

                                <!--Comment Box-->
                                @foreach($blog->blog_comments as $item)
                                    <div class="comment-box">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="/{{$item->image}}" alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info clearfix"><strong>{{$item->name}}</strong></div>
                                                <div class="text">{{$item->detail}}</div>
                                                <ul class="post-info">
                                                    <li>{{$item->created_date ? \Carbon\Carbon::parse($item->created_date)->format('d-m-Y') : 'unknown'}}</li>
                                                    <li><a href="#">Reply</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title"><h2>Leave a Comment</h2></div>
                            <div class="form-inner">
                                <form id="commentForm">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" id="name" name="name" placeholder="Your name" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" id="email" name="email" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="detail" id="detail" placeholder="Write message"></textarea>
                                            <input type="hidden" id="blog_id" name="blog_id" value="{{$blog->blog_id}}">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" id="submitComment" type="submit" name="submit-form">Post Comment</button>
                                        </div>

                                    </div>
                                </form>

                                <div id="messageBox" style="display: none;"></div>

                            </div>
                        </div>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                $("#submitComment").click(function (e) {
                                    e.preventDefault();

                                    var _blogid = $("#blog_id").val();
                                    var _name = $("#name").val();
                                    var _email = $("#email").val();
                                    var _detail = $("#detail").val();

                                    $.ajax({
                                        url: "{{ route('blog.addComment') }}",
                                        type: "POST",
                                        data: {
                                            _token: "{{ csrf_token() }}",
                                            blog_id: _blogid,
                                            name: _name,
                                            email: _email,
                                            detail: _detail
                                        },
                                        success: function (response) {
                                            if (response.status) {
                                                toastr.success("Bình luận thành công!");
                                                $("#commentForm")[0].reset();
                                            } else {
                                                toastr.error("Bình luận không thành công.");
                                            }
                                        },
                                        error: function () {
                                            toastr.error("Lỗi! Vui lòng thử lại.");
                                        }
                                    });
                                    return false;
                                });
                            });
                        </script>


                    </div>
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

                        <!--Blog Category Widget-->
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
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="/images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Hanging fruit to identify a ballpark value added ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Organically grow the holistic world view ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-detail.html">Bring to the table in the win-win survival ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-detail.html"><img src="/images/resource/post-thumb-4.jpg" alt=""></a></figure>
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
