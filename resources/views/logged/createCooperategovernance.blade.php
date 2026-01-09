@php $title = "Create Cooperate Governance" @endphp
@extends('user.main')
 @section('content')

 <main id="main">
      <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CREATE COOPERATE GOVERNANCE</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Cooperate Governance</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-8">
            <form method="POST" action="{{ route('store_cooperategovernance') }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                <label for="title">Title 1</label>
                <input type="hidden" name="unique_id" value="{{$createCooperategovernance_details->unique_id}}" />
                  <input type="text" value="{{$createCooperategovernance_details->title1}}" name="title1"  class="form-control @error('title1') is-invalid @enderror" id="title1" placeholder="Title1" />
                  @error('title1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-md-12 form-group" style="margin-top:20px;">
                @php $imageName = asset('storage/images/'.$createCooperategovernance_details->image1) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>
                
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image">Image 1</label>
                <label for="image_name">Change Image </label>
                <input type="file" name="image1" placeholder="Choose image" id="image1">
                     @error('image1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="post">Post1</label>
                  <textarea class="form-control @error('post1') is-invalid @enderror summernote" name="post1" placeholder="Your Post 1">{{$createCooperategovernance_details->post1}}</textarea>
                  @error('post1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="title">Title 2</label>
                  <input type="text" value="{{$createCooperategovernance_details->title2}}" name="title2"  class="form-control @error('title2') is-invalid @enderror" id="title2" placeholder="Title2" />
                  @error('title2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                
                <div class="col-md-12 form-group" style="margin-top:20px;">
                @php $imageName = asset('storage/images/'.$createCooperategovernance_details->image2) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>
                
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image2">Image 2</label>
                <label for="image_name">Change Image </label>
                <input type="file" name="image2" placeholder="Choose image" id="image2">
                     @error('image2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="post">Post2</label>
                  <textarea class="form-control @error('post2') is-invalid @enderror summernote" name="post2" placeholder="Your Post 2">{{$createCooperategovernance_details->post2}}</textarea>
                  @error('post2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                            
               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE COOPERATE GOVERNANCE</button></div>
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

 @endsection('content')