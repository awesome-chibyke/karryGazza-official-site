
@php $title = "News" @endphp

@extends('user.main')
 @section('content')

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UPDATE NEWS</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Update News</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">

          <div class="col-sm-6">
            <form method="POST" action="{{ route('update_news', ['uniqueId'=>$newsToEdit->unique_id]) }}" role="form" class="php-email-form" enctype="multipart/form-data">
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
                <label for="title">Title</label>
                  <input type="text" name="title" value="{{$newsToEdit->title}}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" />
                  @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                  @if($newsToEdit->image !== null)
                      @php $imageName = asset('storage/images/'.$newsToEdit->image) @endphp
                      <img src="{{ $imageName }}" style="width:100%" />
                  @endif

                  @if($newsToEdit->image === null)
                      <div>No Image</div>
                  @endif
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="image">Image</label>                
                <input type="hidden" name="unique_id" value="{{$newsToEdit->unique_id}}" />
                <input type="file" name="image" placeholder="Choose image" id="image">
                     @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="post">Post</label>
                  <textarea class="form-control @error('post') is-invalid @enderror summernote"  name="post" placeholder="Your Post">{{$newsToEdit->post}}</textarea>
                  @error('post')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @if(count($newsToEdit->tags) > 0)
                <div class="col-md-12 form-group" style="margin-top:20px;">
                <label for="tags">Tags</label>
                <input type="text" name="tag" id="tags" placeholder="Tags" value="{{ @implode(", ", $newsToEdit->tags) }}"  class="form-control @error('title') is-invalid @enderror"  data-role="tagsinput" />
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @endif
              

               
               <div class="col-md-12 form-group mt-4">
                  <div class="text-center"><button style="width: 100%;" type="submit">UPDATE NEWS</button></div>
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