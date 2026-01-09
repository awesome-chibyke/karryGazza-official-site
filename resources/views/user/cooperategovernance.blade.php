@php $title = "Edit Partner" @endphp

@extends('user.main')
 @section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
   

  
  <div class="container">
      <div class="row no-gutters">
              <div class="col-md-6 form-group" style="margin-top:50px; margin-bottom:50px;" data-aos="fade-right">
                @php $imageName = asset('storage/images/'.$cooperateGovPage->image1) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>
                <div class="col-md-6 form-group" style="margin-top:60px; margin-bottom:50px;">
                <h3 data-aos="fade-up" class="my_title">{{ $cooperateGovPage->title1 }}</h3>
                        <p data-aos="fade-up">
                            {{ $cooperateGovPage->post1 }}
                        </p>
                </div>
         
                <div class="col-md-6 form-group" style="margin-top:60px; margin-bottom:50px;">
                    <h3 data-aos="fade-up" class="my_title">{{ $cooperateGovPage->title2 }}</h3>
                        <p data-aos="fade-up">
                            {{ $cooperateGovPage->post2 }}
                        </p>
                </div>
              <div class="col-md-6 form-group" style="margin-top:10px; margin-bottom:10px;" data-aos="fade-right">
                @php $imageName = asset('storage/images/'.$cooperateGovPage->image2) @endphp
                  <img src="{{ $imageName }}" style="width:100%" />
                </div>
        </div>
  </div>

 
 </main><!-- End #main -->


  @endsection
