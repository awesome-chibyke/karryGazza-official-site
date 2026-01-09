
@php $title = "Product Details" @endphp

@extends('user.main')
 @section('content')

<main id="main">

  @php $thumbNailName = asset($single_product->productStorageDisplayImagePath.$single_product->thumbnail) @endphp

  <meta property="og:title" content="{{ $single_product->product_name }}">
  <meta property="og:description" content="{{ $single_product->product_description }}">
  <meta property="og:image" content="{{ $thumbNailName }}">
  <meta property="og:url" content="{{ request()->fullUrl() }}">
  <meta property="og:type" content="product">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Details</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>{{ $single_product->product_name }}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">


                
                @php $productDetails = $single_product->productDetails; @endphp

                <div class="swiper-slide">
                  <img src="{{ $thumbNailName }}" alt="">
                </div>

                {{-- loop through the product details and display the images --}}
                @if (count($productDetails) > 0)
                    @foreach ($productDetails as $l => $eachProductDetail)
                        @php $eachImageName = asset($eachProductDetail->productDetailsStorageImageDisplayPath.$eachProductDetail->images) @endphp
                        <div class="swiper-slide">
                        <img src="{{ $eachImageName }}" alt="">
                        </div>
                    @endforeach
                @endif



              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="portfolio-info">
              <h3>{{ $single_product->product_name }}</h3>
              <ul>
                <li><strong>Category</strong>: {{ $single_product->category->category_name }}</li>
                @php $userModel = new App\Models\User(); @endphp

                @if($single_product->price > 0) <li><strong>Price</strong>:{{ $userModel->returnNairaSymbol() }} {{ number_format($single_product->price) }}</li> @endif

                @if($single_product->cancelled_price > 0) <li><strong>Old Price</strong>: <span style="text-decoration: line-through">{{ $userModel->returnNairaSymbol() }} {{ number_format($single_product->cancelled_price) }}</span></li> @endif
                <li>

                  @php
                    $businessPhoneNumber = env('BUSINESS_PHONE_NUMBER', '2348000000000');
                    $whatsappMessage = "Hello, I am interested in your product: " . $single_product->product_name . "\nPrice: ₦". number_format($single_product->price). " \n".$thumbNailName." \nCould you please provide more details?";
                    $whatsappLink = "https://wa.me/" . $businessPhoneNumber . "?text=" . urlencode($whatsappMessage);
                  @endphp

                  <a target="_blank" href="{{ $whatsappLink }}" class="details-link-2" title="Place an Order Via Whatsapp">
                  <img src="{{ asset('assets/css/whatsapp.svg') }}" alt="Whatsapp Icon" style="width: 48px; height: 48px;">
                  </a>
                </li>
                {{-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
              </ul>
            </div>
            @if($single_product->product_description !== null)
            <div class="portfolio-description">
              <h2>Product Description</h2>
              <p>
                @php echo $single_product->product_description @endphp
              </p>
            </div>
            @endif

          </div>

          <div class="col-lg-12">
            <!-- Add iframe that will hold the youtube video  -->
            @if($single_product->youtube_link !== null)
            <div class="portfolio-description">
              <h2>Product Description Video</h2>

              <iframe width="100%" height="600" src="{{ $single_product->youtube_link }}" title="{{ $single_product->product_name }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
            @endif
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  @endsection
