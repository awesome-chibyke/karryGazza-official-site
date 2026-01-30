
@php $title = "Home" @endphp

@extends('user.main')

@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        @if (count($sliders) > 0)

            @foreach ($sliders as $k => $slider)
                @php $imageName = asset('storage/public/sliders/'.$slider->photo) @endphp
                <div class="carousel-item @if($k == 0) active @endif" style="background-image: url( {{ $imageName }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2> @php echo $slider->title; @endphp </h2>
                        <p>{{ $slider->description }}</p>
                        {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
                        </div>
                    </div>
                </div>

            @endforeach

        @endif
        <!-- Slide 1 -->

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>

    <main id="main">


        <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-left text-lg-left">
            <h3><span>{{ $about->title }}</span></h3>
            <p>{{ \Illuminate\Support\Str::limit($about->description, 500, $end='...') }} </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ route('about-us') }}">More</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center">
                  <h3 style="color: #000033;">Our Products</h3>
              </div>
          </div>
        <div class="row">
            {{-- <div class="col-lg-2"></div> --}}
        @if (count($services) > 0)
            @foreach ($services as $k => $service)
                <div class="col-lg-4 col-md-4">
                    <div class="icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi {{ $service->icon }}"></i></div>
                    <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                    <p class="description">{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        @endif

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        @if (count($categories) > 0)

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $m => $category)
                        <li data-filter=".{{ $category->unique_id }}">{{ $category->category_name }}</li>
                        @endforeach
                        {{-- <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li> --}}
                        </ul>
                    </div>
                </div>

        @endif


        @if (count($products) > 0)

        <div class="row portfolio-container" data-aos="fade-up">

          @foreach ($products as $l => $product)
            <div class="col-12 col-lg-4 col-md-6 portfolio-item {{ $product->category_unique_id }}">
                @php $thumbNailName = asset($product->productStorageDisplayImagePath.$product->thumbnail) @endphp
                @php $productDetails = $product->productDetails; @endphp
                {{-- <img src="{{ $thumbNailName }}" class="img-fluid" alt=""> --}}
                <img src="{{ $thumbNailName }}" class="img-fluid fixed-thumb" alt="" />
                <div class="portfolio-info">
                <h4>{{$product->product_name }}</h4>

                @php $userModel = new App\Models\User(); @endphp
                @if($product->price > 0) <p>{{ $userModel->returnNairaSymbol() }} {{ number_format($product->price) }} @endif
                @if($product->cancelled_price > 0) <br><small style="text-decoration: line-through"> {{ $userModel->returnNairaSymbol() }} {{ number_format($product->cancelled_price) }}</small> @endif </p>
                <a href="{{ $thumbNailName }}" data-gallery="{{$product->unique_id }}" class="portfolio-lightbox preview-link" title="{{$product->product_name }}"><i class="bx bx-info-circle"></i></a>

                @if (count($productDetails) > 0)
                    @foreach ($productDetails as $l => $eachProductDetail)
                        @php $eachImageName = asset($eachProductDetail->productDetailsStorageImageDisplayPath.$eachProductDetail->images) @endphp
                        <div class="hidden">
                            <a href="{{ $eachImageName }}" data-gallery="{{ $eachProductDetail->product_unique_id }}" class="portfolio-lightbox preview-link"></a>
                        </div>
                    @endforeach
                @endif

                <a href="/product_details/{{ $product->unique_id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>

                @php
                    $businessPhoneNumber = env('BUSINESS_PHONE_NUMBER', '2348000000000');
                    $whatsappMessage = "Hello, I am interested in your product: " . $product->product_name . "\nPrice: ₦". number_format($product->price). " \n".$thumbNailName." \nCould you please provide more details?";
                    $whatsappLink = "https://wa.me/" . $businessPhoneNumber . "?text=" . urlencode($whatsappMessage);
                  @endphp

                  <a target="_blank" href="{{ $whatsappLink }}"  title="Place an Order Via Whatsapp">
                    <img src="{{ asset('assets/css/whatsapp.svg') }}" alt="Whatsapp Icon" style="width: 24px; height: 24px;">
                  </a>


                </div>
            </div>
          @endforeach

        </div>

        <style>

          .cta-btn-a {
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 2px;
            transition: 0.4s;
            margin: 10px;
            border-radius: 4px;
            border: 2px solid #b51031;
            color: #b51031;
            background: #fff;
        }

        </style>

        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-12 cta-btn-container text-center">
            <a class="cta-btn-a align-middle" href="{{ route('products') }}">More</a>
          </div>
        </div>

        @endif

      </div>
    </section><!-- End Portfolio Section -->

@if (count($testimonies) > 0)
<section id="hero1">
    <div id="heroCarousel1" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($testimonies as $l => $testimony)
            <div class="carousel-item @if($l == 0) active @endif" style="background-image: url(assets/img/testimonials_bg.png);">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                    <h2><span>{{ $testimony->name }}</span></h2>
                    <p>{{ $testimony->testimony }}</p>
                    {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
                    </div>
                </div>
            </div>
        @endforeach


      </div>

      <a class="carousel-control-prev" href="#heroCarousel1" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel1" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators1"></ol>

    </div>
  </section>
  @endif


@if(count($partners) > 0)
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Partners</strong></h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>



        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach($partners as $n => $partner)
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
                @php $partnerLogo = asset($partner->imageDisplayPath.$partner->image) @endphp
                <img src="{{ $partnerLogo }}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach



        </div>

      </div>
    </section><!-- End Our Clients Section -->
    @endif

    </main><!-- End #main -->
    @include('user.styling')


    @endsection
