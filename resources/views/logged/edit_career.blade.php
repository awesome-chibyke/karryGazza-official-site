
@php $title = "Home" @endphp

@extends('user.main')
 @section('content')

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UPDATE COMPANY'S Career</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Career</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('store_careers') }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                @php $imageName = asset('storage/images/'.$career_Detail->image) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image">Image</label>
                <label for="image_name">Change Image </label>
                <input type="file" id="image_name" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="image" >
                  @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="heading1" class="text-left">Heading 1</label>

                  <input type="hidden" name="unique_id" value="{{$career_Detail->unique_id}}" />
                  <input type="text" name="heading1" value="{{$career_Detail->heading1}}" class="form-control @error('heading1') is-invalid @enderror" id="heading1" placeholder="heading1" required />
                  @error('heading1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="heading2" class="text-left">Heading 2</label>

                  <input type="text" name="heading2" value="{{$career_Detail->heading2}}" class="form-control @error('heading2') is-invalid @enderror" id="heading2" placeholder="heading2" required />
                  @error('heading2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="text1" class="text-left">Text 1</label>
                  <textarea class="form-control @error('text1') is-invalid @enderror" name="text1" >{{$career_Detail->text1}}</textarea>
                  @error('text1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="text2" class="text-left">Text 2</label>
                  <textarea class="form-control @error('text2') is-invalid @enderror" name="text2" >{{$career_Detail->text2}}</textarea>
                  @error('text2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                       

               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE CAREER</button></div>
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
