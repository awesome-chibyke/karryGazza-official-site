
@php $title = "Career" @endphp

@extends('user.main')
 @section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Career</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Career</li>
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

        <div class="row">
            <div class="shadow p-3 mb-1 bg-white rounded col-md-12 text-center form-group " >
                <h3  class="my_title">{{ $singleCareer->position }}</h3>            
            </div>
            <div class="shadow p-3 mb-1 bg-white rounded col-md-12 text-center form-group " data-aos="fade-up">
                        <p data-aos="fade-up">
                        <span> {{$singleCareer->job_description}}</span><br>
                           <span> {{ $singleCareer->location }} </span>
                        </p>
            </div>

        </div>
            
    </section>
  </main>



@include('user.styling')
 @endsection
