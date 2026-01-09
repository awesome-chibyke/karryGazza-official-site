
@php $title = "Add Product" @endphp

@extends('user.main')
 @section('content')

    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Add Product</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Add Product</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">

      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-10">
            <form method="POST" action="{{ route('store_product') }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                    <h3>Add Products</h3>
                </div>

                <div class="col-md-12 text-center" >
                    <div class="row">

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="product_name" class="text-left">Select Products Category</label>
                            <select style="height: 44px; border-radius: 0;" name="category_unique_id" class="form-control @error('category_unique_id') is-invalid @enderror" >
                                <option value="">Select Category</option>
                                @if (count($all_category) > 0)
                                    @foreach ($all_category as $k => $eachCategory)
                                        <option {{ old('category_unique_id') === $eachCategory->unique_id ? 'selected':'' }} value="{{ $eachCategory->unique_id }}">{{ $eachCategory->category_name }}</option>
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
                            <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="Product Name" required />
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group" style="margin-top:20px;">
                            <label for="product_description " class="text-left"class="text-left">Product Description</label>
                            <textarea class="form-control @error('product_description') is-invalid @enderror summernote" name="product_description" id="product_description" >{{ old('product_description') }}</textarea>

                            @error('product_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="price" class="text-left">Price  (NGN)</label>
                            <input type="number" name="price" value="{{ empty(old('price')) ? 0 : old('price') }}" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" required />
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="cancelled_price" class="text-left">Cancelled Price (NGN)</label>
                            <input type="number" name="cancelled_price" value="{{ empty(old('cancelled_price')) ? '0': old('cancelled_price') }}" class="form-control @error('cancelled_price') is-invalid @enderror" id="cancelled_price" placeholder="Cancelled Price" required />
                            @error('cancelled_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="discount" class="text-left">Discount (%)</label>
                            <input type="number" name="discount" value="{{ empty(old('discount')) ? '0': old('discount') }}" class="form-control @error('discount') is-invalid @enderror" id="discount" placeholder="Discount (%)" required />
                            @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="tax" class="text-left">Tax (%)</label>
                            <input type="number" name="tax" value="{{ empty(old('tax')) ? '0': old('tax') }}" class="form-control @error('tax') is-invalid @enderror" id="tax" placeholder="Tax (%)" required />
                            @error('tax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="thumbnail" class="text-left">Upload Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" placeholder="Thumbnails" required />
                            @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group" style="margin-top:20px;">
                            <label for="images" class="text-left">More Images </label>
                            <input type="file" multiple name="images[]" class="form-control @error('images') is-invalid @enderror" id="images" placeholder="Upload More Images" />
                            <small style="font-size:0.7rem; text-align:left;" class="text-warning"> (Please hold down the control (Ctl) on your keyboard to select multiple images)</small>
                            @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group" style="margin-top:20px;">
                            <label for="youtube_link" class="text-left">Link to Youtube Video</label>
                            <input type="text" name="youtube_link" value="{{ old('youtube_link') }}" class="form-control @error('youtube_link') is-invalid @enderror" id="youtube_link" placeholder="Link to Youtube Video" />
                            @error('youtube_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group mt-4">
                            <div class="text-center"><button style="width: 100%;" type="submit">ADD</button></div>
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
