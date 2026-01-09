
@php $title = "Career" @endphp

@extends('user.main')
 @section('content')

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CREATE CAREERS</h2>
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

          <div class="col-sm-8">
            <form method="POST" action="{{ route('store_availablecareers') }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                <label for="position">Position</label>
                  <input type="text" name="position"  class="form-control @error('position') is-invalid @enderror" id="position" placeholder="Position" />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="salary">Salary</label>
                  <input type="text" name="salary"  class="form-control @error('salary') is-invalid @enderror" id="salary" placeholder="Salary" />
                  @error('salary')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="closing_date">Closing Date</label>
                  <input type="text" name="closing_date"  class="form-control @error('closing_date') is-invalid @enderror" id="closing_date" placeholder="Closing Date" />
                  @error('closing_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="location">Location</label>
                  <input type="text" name="location"  class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Location" />
                  @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="job_description">Job Description</label>
                  <textarea class="form-control @error('job_description') is-invalid @enderror summernote" name="job_description" placeholder="Your Post"></textarea>
                  @error('job_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="tags">Tags</label>
                <input type="text" name="tag" id="tags" placeholder="Tags"  class="form-control @error('title') is-invalid @enderror"  data-role="tagsinput" />
                    @error('tags')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

  

             

               
               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">CREATE CAREER</button></div>
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