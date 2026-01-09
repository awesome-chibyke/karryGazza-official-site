@php $title = "Our Careers" @endphp

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
            <li>Our Careers</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
   

  
  <div class="container">
            <div class="row no-gutters" style="margin-top:30px; margin-bottom:10px;" data-aos="fade-right">

                       <div  class="col-md-3">
                          <h4>{{$viewCarer->heading1}}</h4>
                          <p data-aos="fade-up">
                              {{ $viewCarer->text1 }}
                          </p>  
                        </div>              
              
                        <div class="col-md-9 form-group float-right ">
                            @php $imageName = asset('storage/images/'.$viewCarer->image) @endphp
                            <img src="{{ $imageName }}" style="width:100%" />
                        </div>

                           
                        
            </div>
            
            <div>
            <div class="col-md-12 form-group text-center" style="margin-top:20px; margin-bottom:70px;">
                <h3 data-aos="fade-up" class="my_title">{{ $viewCarer->heading2 }}</h3>
                <hr data-aos="fade-up" style="height: 6px; width: 20%; margin: auto; margin-top:20px; margin-bottom:20px;"/>
                        <p data-aos="fade-up">
                            {{ $viewCarer->text2}}
                        </p>
            </div>
            </div>
        
            <div class="col-md-12 form-group text-center" style=" margin-top:20px; margin-bottom:20px;">
                  <a data-aos="fade-up" href="/available_careers" class="btn btn-info">Available Career</a>
            </div>

            

 </main><!-- End #main -->


  @endsection
