
@php $title = "All Careers Available" @endphp

@extends('user.main')
 @section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>All Careers Available</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>All Careers Available</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="services" class="contact">


<div class="container">

    <div class="row ">
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

        @if(Auth::check())
          <div>
              <a href="/create_available_careers" class="btn btn-info">Create Career</a>
          </div>
          @endif
          
       @if (count($allAvailableCareers)>0)
       
            @foreach ($allAvailableCareers as $allAvailableCareer)
            <div class="icon-box col-md-4 form-group offset-1" data-aos="fade-up">
                    <h3 data-aos="fade-up" class="my_title">{{ $allAvailableCareer->position }}</h3>
                        <p data-aos="fade-up">
                            {{ $allAvailableCareer->location }}
                        </p>
                        <div class="text-center"><a href="{{ route('view_singleavailablecarer', ['uniqueId'=>$allAvailableCareer->unique_id]) }}" class="custom-btn">View Career</a></div>
                        
                        @if(Auth::check())
                        <a href="/edit_availablecarer/{{$allAvailableCareer->unique_id}}" class="btn btn-info">Edit</a>
                    
                    <button onclick=" if( confirm('Do you really want to delete Partner ?') === true ){ window.location.href = 'delete_availablecarer/{{ $allAvailableCareer->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button>
                         @endif
            </div>
           
            @endforeach
       @endif
    </section>
  </main>



@include('user.styling')
 @endsection
