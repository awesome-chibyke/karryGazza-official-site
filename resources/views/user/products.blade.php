
@php $title = "Products" @endphp

@extends('user.main')
 @section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Products</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Product List</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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
            <div class="col-lg-4 col-md-6 col-12 portfolio-item {{ $product->category_unique_id }}">

                @php $thumbNailName = asset($product->productStorageDisplayImagePath.$product->thumbnail) @endphp
                @php $productDetails = $product->productDetails; @endphp

                {{-- <img src="{{ $thumbNailName }}" class="img-fluid" alt=""> --}}
                <img src="{{ $thumbNailName }}" class="img-fluid fixed-thumb" alt=""  />

                <div class="portfolio-info">
                  <h4>{{$product->product_name }}</h4>

                  @php $userModel = new App\Models\User(); @endphp

                  @if($product->price > 0) <p> {{ $userModel->returnNairaSymbol() }} {{ number_format($product->price) }} @endif

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

                  {{-- <a href="/product_details/{{ $product->unique_id }}" class="details-link-2" title="Place an Order Via Whatsapp">
                    <i class="bx bx-chat"></i>
                  </a> --}}
                
                </div>
            </div>
          @endforeach

        </div>

        <div class="blog-pagination">
                {{$products->links()}}
                <!-- <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul> -->
        </div>

        @endif



      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection
