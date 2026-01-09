@php $title = "Home" @endphp

@extends('user.main')
 @section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>PRESS</h2>
      <ol>
        <li><a href="./">Home</a></li>
        <li>Press</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">
@if(count($viewAlNews)>0)
      <div class="col-lg-8 entries">


      @foreach($viewAlNews as $news)

        <article class="entry">

          <div class="entry-img">
                @php $imageName = asset('storage/images/'.$news->image) @endphp
                <img src="{{ $imageName }}" style="width:100%" />
          </div>


          <h2 class="entry-title">
            <a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{$news->title}}</a>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$news->created_at}}</time></a></li>
              <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
            </ul>
          </div>

          <div class="entry-content">
            <p>
            @php echo \Illuminate\Support\Str::limit($news->post, 300) @endphp
            </p>
            <div class="read-more">
              <a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">Read More</a>
            </div>
          </div>



        </article><!-- End blog entry -->

        @endforeach




        <div class="blog-pagination">
            {{$viewAlNews->links()}}
          <!-- <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul> -->
        </div>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <!-- <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>End sidebar search formn -->

          <!-- <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>
          </div>End sidebar categories -->
          @if(count($viewAlNews)>0)
          <h3 class="sidebar-title">Recent Posts</h3>

            @foreach($viewAlNews as $news)


          <div class="sidebar-item recent-posts">
            <div class="post-item clearfix">
                @php $imageName = asset('storage/images/'.$news->image) @endphp
                <img src="{{ $imageName }}" style="width:18%" />
              <h4><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{$news->title}}</a></h4>
              <time datetime="2020-01-01">{{$news->created_at}}</time>
            </div>
             @endforeach
          @endif



          </div><!-- End sidebar recent posts-->



    </div>

  </div>
  @else
  <div class="col-sm-12">
      <h3 class="alert alert-warning text-center">No Data Availble</div>
  </div>

    @endif
</section><!-- End Blog Section -->

</main><!-- End #main -->
@include('user.styling')
 @endsection
