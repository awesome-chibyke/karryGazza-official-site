    
    @extends('layouts.app_2')

    @section('title', 'News')

    @section('content')

    @include("includes.header")
    <!-- banner-section -->
    <section class="blog-banner centred" style="background-image: url({{ asset("custom_assets/images/background/news-bg-image.png") }});">
        <div class="container">
            <div class="content-box">
                <h1>Blog Details</h1>
                <div class="search-box">
                    <form action="#" method="post">
                        {{-- <div class="form-group">
                            <input type="search" name="search-field" placeholder="Search..." required="">
                            <button type="submit">Search</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- blog-classic -->
    <section class="blog-details sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="inner-box">
                            <div class="title-inner">
                                <h2>{{$singleNews->title}}</h2>
                                <ul class="info-box">
                                    <li class="author"><i class="flaticon-user"></i>{{$singleNews->user->name}}</li>
                                    <li><i class="flaticon-calendar"></i>{{ $singleNews->created_at->diffForHumans() }}</li>
                                </ul>
                            </div>
                            @php $imageName = asset('storage/images/'.$singleNews->image) @endphp

                            <figure class="image-box"><img src="{{ $imageName }}" alt=""></figure>

                            <div class="text">

                                <p>@php echo $singleNews->post @endphp</p>

                            </div>
                            {{-- <div class="video-box">
                                <div class="video-inner" style="background-image: url(images/background/video-bg-6.jpg);">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-music-player-play"></i></a>
                                </div>
                            </div> --}}

                        </div>
                        <div class="social-links">
                            <ul class="social-list">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>

                        {{-- <div class="comments-area">
                            <h3 class="group-title">3 Comments</h3>
                            <div class="comment-box">
                                <div class="comment">
                                    <figure class="author-thumb"><img src="images/resource/comment-1.png" alt=""></figure>
                                    <div class="comment-inner">
                                        <h5 class="name">Emraan Hossain</h5>
                                        <div class="text">Praesent orci urna per varius felis magna nullam molestie libero, facilisis a tllam corper sapien utmpus leo, arcu imperdiet nisi taciti varius ultricies est congue posuere justo non felis etiam euismod vestibulum majority have suffered.</div>
                                        <div class="info-box">
                                            <a href="#" class="replay-btn">Reply</a>
                                            <span class="date">January 29, 2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment replay-comment">
                                    <figure class="author-thumb"><img src="images/resource/comment-2.png" alt=""></figure>
                                    <div class="comment-inner">
                                        <h5 class="name">Adnan Islam</h5>
                                        <div class="text">Raesent orci urna per varius felis magna nullam molestie libero facilisis arper sapien utmpus leo, arcu imperdiet nisi taciti varius.</div>
                                        <div class="info-box">
                                            <a href="#" class="replay-btn">Reply</a>
                                            <span class="date">January 30, 2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <figure class="author-thumb"><img src="images/resource/comment-3.png" alt=""></figure>
                                    <div class="comment-inner">
                                        <h5 class="name">Ridoy Rafish</h5>
                                        <div class="text">Praesent orci urna per varius felis magna nullam molestie libero, facilisis a tllam corper sapien utmpus leo, arcu imperdiet nisi taciti varius ultricies est congue posuere justo non felis etiam euismod vestibulum majority have suffered.</div>
                                        <div class="info-box">
                                            <a href="#" class="replay-btn">Reply</a>
                                            <span class="date">January 27, 2019</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="login-btn"><a href="login-page.html">Login to Write Comment</a></div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">

                        {{-- <div class="sidebar-categories sidebar-widget">
                            <h3 class="widget-title">Categories</h3>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Mobile Application <span>(12)</span></a></li>
                                    <li><a href="#">Desktop Software <span>(19)</span></a></li>
                                    <li><a href="#">Computer Programing <span>(09)</span></a></li>
                                    <li><a href="#">Web Development <span>(21)</span></a></li>
                                    <li><a href="#">User Interface Design <span>(05)</span></a></li>
                                    <li><a href="#">Digital Marketing <span>(11)</span></a></li>
                                </ul>
                            </div>
                        </div> --}}
             

                        <div class="sidebar-post sidebar-widget">
                            <h3 class="widget-title">Recent Post</h3>
                            <div class="widget-content">

                                @if(count($latestNews)>0)
                                @foreach($latestNews as $news)
                                <div class="post">
                                    <h5><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{$news->title}}</a></h5>
                                    <div class="post-date">{{$news->created_at->diffForHumans()}}</div>
                                </div>
                                @endforeach
                                @endif

                            </div>
                        </div>

                        {{-- <div class="sidebar-post sidebar-widget">
                            <h3 class="widget-title">Popular Post</h3>
                            <div class="widget-content">
                                <div class="post">
                                    <h5><a href="blog-details.html">Are You User Interface The Best You Can? 11 Signs Of Failure and Success.</a></h5>
                                    <div class="post-date">12 Jan, 2019</div>
                                </div>
                                <div class="post">
                                    <h5><a href="blog-details.html">How To Handle Every Programing Challenge With Ease Using These Tips.</a></h5>
                                    <div class="post-date">11 Jan, 2019</div>
                                </div>
                                <div class="post">
                                    <h5><a href="blog-details.html">Super Simple Ways The Pros Use To Promote Web Development.</a></h5>
                                    <div class="post-date">10 Jan, 2019</div>
                                </div>
                                <div class="post">
                                    <h5><a href="blog-details.html">In 9 Minutes, I'll Give You The Truth About The Programing And Development.</a></h5>
                                    <div class="post-date">08 Jan, 2019</div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="sidebar-archives sidebar-widget">
                            <h3 class="widget-title">Keywords</h3>
                            <div class="widget-content">
                                <ul class="clearfix">
                                    <li><a href="#">Software</a></li>
                                    <li><a href="#">Apps</a></li>
                                    <li><a href="#">Web</a></li>
                                    <li><a href="#">Interface</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Template</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Design</a></li>
                                </ul>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-classic end -->

    @endsection