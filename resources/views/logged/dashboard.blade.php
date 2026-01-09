@php $title = "Dashboard" @endphp

@extends('user.main')
 @section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Dashboard</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Dashboard</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="{{ route('category') }}">View Categories</a></h4>
              {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> --}}
              <div class="text-center"><a href="{{ route('category') }}" class="custom-btn">View</a></div>
              <div class="text-center"><a href="{{ route('product_category') }}" class="custom-btn">Add Categories</a></div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="{{ route('view_product') }}">Products</a></h4>
              {{-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> --}}
              <div class="text-center"><a href="{{ route('view_product') }}" class="custom-btn">Products</a></div>
              <div class="text-center"><a href="{{ route('add_product') }}" class="custom-btn">Add Product</a></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-image"></i></div>
              <h4 class="title"><a href="{{ route('view_sliders') }}">Sliders</a></h4>
              {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> --}}
              <div class="text-center"><a href="{{ route('view_sliders') }}" class="custom-btn">View</a></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="{{ route('settings') }}">Settings</a></h4>
              {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> --}}
              <div class="text-center"><a href="{{ route('settings') }}" class="custom-btn">View</a></div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="#">partners</a></h4>
              {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> --}}
              <div class="text-center"><a href="#" class="custom-btn">View</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="{{ route('testimonies') }}">Testimonies</a></h4>
              {{-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> --}}
              <div class="text-center"><a href="{{ route('testimonies') }}" class="custom-btn">View</a></div>
              <div class="text-center"><a href="/create_testimony" class="custom-btn">Create Testimony</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">News</a></h4>
              {{-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> --}}
              <div class="text-center"><a href="{{ route('all_news') }}" class="custom-btn">View</a></div>
              <div class="text-center"><a href="create_news" class="custom-btn">Create News</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Faqs</a></h4>
              {{-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> --}}
              <div class="text-center"><a href="{{ route('view_fags') }}" class="custom-btn">View</a></div>
              <div class="text-center"><a href="{{ route('create_faqs_page') }}" class="custom-btn">Create Faqs</a></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    

  </main><!-- End #main -->
@endsection