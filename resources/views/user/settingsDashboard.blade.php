
@php $title = "Home" @endphp

@extends('user.main')
 @section('content')

    <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UPDATE SETTINGS</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Settings/Update-Settings</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('update_settings') }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                <label for="name">Name</label>
                  <input type="hidden" name="unique_id" value="{{$settings_details->unique_id}}" />
                  <input type="text" name="company_name" value="{{$settings_details->company_name}}" class="form-control @error('company_name') is-invalid @enderror" id="company_name" placeholder="Company Name" required />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="email1">Email1</label>
                  <input type="text" name="email1" value="{{$settings_details->email1}}" class="form-control @error('email1') is-invalid @enderror" id="email1" placeholder="Email1" required />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="email2">Email2</label>
                  <input type="text" name="email2" value="{{$settings_details->email2}}" class="form-control @error('email2') is-invalid @enderror" id="email2" placeholder="Email2" />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="phone1">Phone1</label>
                  <input type="text" name="phone1" value="{{$settings_details->phone1}}" class="form-control @error('phone1') is-invalid @enderror" id="phone1" placeholder="Phone1" required />
                  @error('phone1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="phone2">Phone2</label>
                  <input type="text" name="phone2" value="{{$settings_details->phone2}}" class="form-control @error('phone2') is-invalid @enderror" id="phone2" placeholder="Phone2" />
                  @error('phone2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="address1">Address1</label>
                  <input type="text" name="address1" value="{{$settings_details->address1}}" class="form-control @error('address1') is-invalid @enderror" id="address1" placeholder="Address1" required />
                  @error('address1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="address2">Address2</label>
                  <input type="text" name="address2" value="{{$settings_details->address2}}" class="form-control @error('address2') is-invalid @enderror" id="address2" placeholder="Address2" />
                  @error('address2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="linkedin">Linkedin</label>
                  <input type="text" name="linkedin" value="{{$settings_details->linkedin}}" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" placeholder="Linkedin" />
                  @error('linkedin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="twitter">Twitter</label>
                  <input type="text" name="twitter" value="{{$settings_details->twitter}}" class="form-control @error('twitter') is-invalid @enderror" id="twitter" placeholder="Twitter" />
                  @error('twitter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="facebook">Facebook</label>
                  <input type="text" name="facebook" value="{{$settings_details->facebook}}" class="form-control @error('facebook') is-invalid @enderror" id="facebook" placeholder="Facebook" />
                  @error('facebook')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="instagram">Instagram</label>
                  <input type="text" name="instagram" value="{{$settings_details->instagram}}" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="Instagram" />
                  @error('instagram')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="slogan">Slogan</label>
                  <input type="text" name="slogan" value="{{$settings_details->slogan}}" class="form-control @error('slogan') is-invalid @enderror" id="slogan" placeholder="Slogan" />
                  @error('slogan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE SETTINGS</button></div>
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
