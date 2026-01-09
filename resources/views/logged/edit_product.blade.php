
@php $title = "Edit Product" @endphp

@extends('user.main')
 @section('content')

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Product</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Edit Product</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">

      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-10">
            <form method="POST" action="{{ route('update_product', ['uniqueId'=>$single_product->unique_id]) }}" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-12 form-group" style="margin-top:20px;">

                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-warning text-center" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                </div>

                <div class="col-md-12 text-center" >
                    <h3>Edit Product</h3>
                </div>

                <div class="col-md-12 text-center" >
                    <div class="row">

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="product_name" class="text-left">Select Products Category</label>
                            <select style="height: 44px; border-radius: 0;" name="category_unique_id" class="form-control @error('category_unique_id') is-invalid @enderror" >
                                <option value="">Select Category</option>
                                @if (count($all_category) > 0)
                                    @foreach ($all_category as $k => $eachCategory)
                                        <option {{ $single_product->category_unique_id === $eachCategory->unique_id ? 'selected':'' }} value="{{ $eachCategory->unique_id }}">{{ $eachCategory->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('category_unique_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="product_name " class="text-left"class="text-left">Product Name</label>
                            <input type="text" name="product_name" value="{{ $single_product->product_name }}" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="Product Name" required />
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group" style="margin-top:20px;">
                            <label for="product_description " class="text-left"class="text-left">Product Description</label>
                            <textarea class="form-control @error('product_description') is-invalid @enderror summernote" name="product_description" id="product_description" >{{ $single_product->product_description }}</textarea>

                            @error('product_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="price" class="text-left">Price  (NGN)</label>
                            <input type="number" name="price" value="{{ $single_product->price }}" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" required />
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="cancelled_price" class="text-left">Cancelled Price (NGN)</label>
                            <input type="number" name="cancelled_price" value="{{ $single_product->cancelled_price }}" class="form-control @error('cancelled_price') is-invalid @enderror" id="cancelled_price" placeholder="Cancelled Price" required />
                            @error('cancelled_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="discount" class="text-left">Discount (%)</label>
                            <input type="number" name="discount" value="{{ $single_product->discount }}" class="form-control @error('discount') is-invalid @enderror" id="discount" placeholder="Discount (%)" required />
                            @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="tax" class="text-left">Tax (%)</label>
                            <input type="number" name="tax" value="{{ $single_product->tax }}" class="form-control @error('tax') is-invalid @enderror" id="tax" placeholder="Tax (%)" required />
                            @error('tax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    @php $thumbNailName = asset($single_product->productStorageDisplayImagePath.$single_product->thumbnail) @endphp

                                    <img src="{{ $thumbNailName }}" style="width:100%;" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="thumbnail" class="text-left">Upload Thumbnail </label>
                                    <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" placeholder="Thumbnails" />
                                    <div class="text-warning text-left" style="font-size:0.7rem; text-align:left;">Select Image to Change Thumbnail, please do not upload an image if you dont want to change thumbnail</div>
                                    @error('thumbnail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 form-group" style="margin-top:20px;">

                            <div class="row">
                                {{-- get the product details --}}
                                @php $productDetails = $single_product->productDetails; @endphp
                                @if (count($productDetails) > 0)
                                <div class="col-md-12 form-group">


                                        <div class="row">
                                            @foreach ($productDetails as $l => $eachProductDetail)
                                                @php $eachImageName = asset($eachProductDetail->productDetailsStorageImageDisplayPath.$eachProductDetail->images) @endphp
                                            <div class="col-md-4" style="cursor:pointer; position:relative;">
                                                <div style="postion:relative; top:10px; left:10px;"><input value="{{ $eachProductDetail->unique_id }}" type="checkbox" name="delete_images[]" /></div>
                                                <img src="{{ $eachImageName }}" style="width:100%;" />
                                            </div>
                                            @endforeach
                                        </div>


                                </div>
                                <div class="col-md-12 form-group">
                                    <small style="font-size:0.7rem; text-align:left;" class="text-warning"> To delete any of the images above, please select the image by thicking the check box on top of the image.</small>
                                </div>
                                 @endif
                                <div class="col-md-12 form-group">
                                    <label for="images" class="text-left">More Images </label>
                                    <input type="file" multiple name="images[]" class="form-control @error('images') is-invalid @enderror" id="images" placeholder="Upload More Images" />
                                    <small style="font-size:0.7rem; text-align:left;" class="text-warning"> (Please hold down the control (Ctl) on your keyboard to select multiple images)</small>
                                    @error('images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12 form-group mt-4">
                            <div class="text-center"><button style="width: 100%;" type="submit">UPDATE PRODUCT</button></div>
                        </div>


                    </div>
                </div>


              </div>

              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

     @include('user.styling')
 @endsection
