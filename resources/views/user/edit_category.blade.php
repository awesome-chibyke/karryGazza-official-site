
@php $title = "Home" @endphp

@extends('user.main')
 @section('content')

    <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>EDIT CATEGORY</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Category/Edit-Category</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('update_category', ['uniqueId'=>$edit_category->unique_id]) }}" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-12 form-group" style="margin-top:20px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <input type="hidden" name="unique_id" value="{{$edit_category->unique_id}}" />
                 <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="category_name" value="{{$edit_category->category_name}}" placeholder="Category Name" required />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image_name"><span style="font-style: italic">(optional)</span> </label>
                 <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description" required />{{$edit_category->description}}</textarea>
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            


           

               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE CATEGORY</button></div>
                </div>

                <!-- <div class="col-md-12 form-group mt-1">
                  @if (Route::has('password.request'))
                        <a class="btn btn-link" href="/forgot-password">
                            <small>{{ __('Forgot Your Password?') }}</small>
                        </a>
                    @endif
                </div> -->

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