
@php $title = "Create Slider" @endphp

@extends('user.main')
 @section('content')

    <main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Sliders</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Edit Sliders</li>
          </ol>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('update_slider', ['sliderUniqueId'=>$slider_detail->unique_id]) }}" role="form" class="php-email-form" enctype="multipart/form-data">
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

                <div class="col-md-12 text-center" >
                    <p>Update Slider</p>
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                  <input type="text" name="title" value="{{ $slider_detail->title }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" required />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                  <textarea placeholder="Description" class="form-control @error('description') is-invalid @enderror"  name="description" >{{ $slider_detail->description }}</textarea>
                  @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                @php $imageName = asset('storage/public/sliders/'.$slider_detail->photo) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>


                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label fo=""></label>
                  <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" id="photo" placeholder="Photo" />
                  @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">Update</button></div>
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
