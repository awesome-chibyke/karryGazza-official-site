    
    @extends('layouts.app_2')

    @section('title', 'News')

    @section('content')

    @include("includes.header")
    <!-- banner-section -->
    <section class="blog-banner centred" style="background-image: url({{ asset("custom_assets/images/background/news-bg-image.png") }});">
        <div class="container">
            <div class="content-box">
                <h1>Blog</h1>
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

    <!-- blog-masonary -->
    <section class="blog-masonary">
        <div class="container">
            <div class="sortable-masonry">

                <div class="items-container row clearfix">
                    
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        
                        <div class="row">

                            @foreach($viewAlNews as $k => $news)
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block masonry-item small-column">
                                <div class="news-block-two">
                                    <div class="inner-box">

                                        <figure class="image-box">

                                            <a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">
                                                @php $imageName = asset('storage/images/'.$news->image) @endphp
                                                <img src="{{ $imageName }}" alt="{{ $news->image }}">
                                            </a>
                                        </figure>

                                        <div class="lower-content">
                                            <div class="post-date"><i class="flaticon-calendar"></i>{{ $news->created_at->diffForHumans() }}</div>
                                            <div class="post-date"><i class="flaticon-user"></i>{{ $news->user->name }}</div>
                                            <h4><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{ $news->title }}</a></h4>
                                            {{-- <div class="text">@php echo(Illuminate\Support\Str::limit($news->post, 100, ' (...)')) @endphp</div> --}}
                                            <div class="link-btn"><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                    @if(count($latestNews)>0)
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side">
                                <div class="sidebar">
                        

                                    <div class="sidebar-post sidebar-widget">
                                        <h3 class="widget-title">Recent Post</h3>
                                        <div class="widget-content">

                                            
                                            @foreach($latestNews as $news)
                                            <div class="post">
                                                <h5><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{$news->title}}</a></h5>
                                                <div class="post-date">{{$news->created_at->diffForHumans()}}</div>
                                            </div>
                                            @endforeach
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <div>
                    </div>
                    @endif

                </div>

                
            </div>
            
            <div class="pagination-wrapper centred">
                {{ $viewAlNews->links() }}
                {{-- <ul class="pagination">
                    <li><a href="{{  }}"><i class="fas fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#" class="active">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </section>
    <!-- blog-masonary end -->

    @endsection