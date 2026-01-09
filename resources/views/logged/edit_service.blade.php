@php $title = "Edit Service" @endphp

@extends('user.main')
 @section('content')

    <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Service</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Edit Service</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">


          <div class="col-sm-6">
            <form method="POST" action="{{ route('update_services', ['uniqueId'=>$single_service->unique_id]) }}" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf

              <div class="row">
                    <div class="col-md-12 form-group" style="margin-top:20px;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-success" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>


                <div class="col-md-12 form-group" style="margin-top:20px;">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $single_service->title }}" name="title" id="title" placeholder="Enter Title" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">{{ $single_service->description }}</textarea>
                     @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-md-12 form-group" style="margin-top:20px;">
                    <label for="description">Choose Icon</label>
                    <input type="hidden" class="@error('icon') is-invalid @enderror" value="{{ $single_service->icon }}"  name="icon" id="icon" placeholder="icon" />
                    <div class="row">
                        @if (count($icon_array) > 0)
                            @foreach ($icon_array as $eachIcon)
                                <div class="col-sm-2" >

                                    <div class="icon-box icon-holder" data-icon="{{ $eachIcon }}" style="text-align: center; border: 1px solid black; cursor:pointer; @if ($eachIcon === $single_service->icon) background:#ddd; @endif" data-aos="fade-up" data-aos-delay="200">
                                        <div class="icon"><i class="bi {{ $eachIcon }}"></i></div>
                                        </div>


                                </div>
                            @endforeach
                        @endif
                    </div>
                     @error('icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE PARTNER</button></div>
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script>
      const icon_holder = document.getElementsByClassName("icon-holder");


    Array.prototype.forEach.call(icon_holder, function(element) {

        element.addEventListener('click', function() {

            for(let i = 0; i < icon_holder.length; i++){
                    icon_holder[i].style.backgroundColor = ''
            }

            document.getElementById('icon').value = element.dataset.icon
            element.style.backgroundColor = '#ddd';

        });

    });


  </script>

      @include('user.styling')
 @endsection
