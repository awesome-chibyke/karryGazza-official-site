
@php $title = "Home" @endphp

@extends('user.main')
 @section('content')

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UPDATE COMPANY'S ABOUT US</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('store_about') }}" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-12 form-group" style="margin-top:20px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="title" class="text-left">Title</label>

                  <input type="hidden" name="unique_id" value="{{$about_details->unique_id}}" />
                  <input type="text" name="title" value="{{$about_details->title}}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" required />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="description" class="text-left">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" >{{$about_details->description}}</textarea>
                  @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                @php $imageName = asset('storage/public/images/'.$about_details->image) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image">Image</label>
                <label for="image_name">Change Image </label>
                <input type="file" id="image_name" class="form-control @error('description') is-invalid @enderror" name="image" placeholder="image" >
                  @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="vision" class="text-left">Vision</label>

                  <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" >{{$about_details->vision}}</textarea>
                  @error('vision')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="mission" class="text-left">Mission</label>
                  <textarea class="form-control @error('mission') is-invalid @enderror" name="mission" >{{$about_details->mission}}</textarea>
                  @error('mission')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE ABOUT US</button></div>
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
