@php $title = "Home" @endphp

@extends('user.main')
 @section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Press</h2>
      <ol>
        <li><a href="./">Home</a></li>
        <li>{{$singleNews->title}}</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry">

          <div class="entry-img">
                @php $imageName = asset('storage/images/'.$singleNews->image) @endphp
                <img src="{{ $imageName }}" style="width:100%" />
          </div>


          <h2 class="entry-title">
            {{$singleNews->title}}
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$singleNews->created_at}}</time></li>
              <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
            </ul>
          </div>

          <div class="entry-content">
            <p>
             @php echo $singleNews->post @endphp
            </p>

          </div>

        </article><!-- End blog entry -->






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

          <h3 class="sidebar-title">Recent Posts</h3>
          @if(count($latestNews)>0)
            @foreach($latestNews as $news)


          <div class="sidebar-item recent-posts">
            <div class="post-item clearfix">
                @php $imageName = asset('storage/images/'.$news->image) @endphp
                <img src="{{ $imageName }}" style="width:18%" />
              <h4><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{$news->title}}</a></h4>
              <time datetime="2020-01-01">{{$news->created_at}}</time>
            </div>
             @endforeach
          @endif

          <!-- <h3 class="sidebar-title">Tags</h3>
          <div class="sidebar-item tags">
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div>End sidebar tags -->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->
@include('user.styling')
 @endsection
