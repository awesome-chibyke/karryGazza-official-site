
@php $title = "All Sliders" @endphp

@extends('user.main')
 @section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>All Sliders</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>All Sliders</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">


<div class="container">

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

        <div class="col-md-12" style="margin-top:20px;">
            <a class="btn btn-info btn-lg" href="{{ route('add_slider') }}" >Add New Slider</a>
        </div>

        <div class="col-md-12 form-group" style="margin-top:20px; margin-bottom:20px;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                    <th scope="col">S/NO</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                @if(count($all_sliders)>0)
                    @php $count = 1 @endphp
                    @foreach ($all_sliders as $all_slider)

                        <tr>
                        <td>{{$count}}</td>
                        <td>{{$all_slider->title}}</td>
                        <td>{{$all_slider->description}}</td>
                        @php $imageName = asset('storage/sliders/'.$all_slider->photo) @endphp
                        <td>
                            <div style="width:100px; cursor:pointer;">
                            <a href="{{ $imageName }}" data-gallery="{{ $all_slider->unique_id }}" class="portfolio-lightbox preview-link" title="{{$all_slider->title}}">
                                <img src="{{ $imageName }}" style="width:100%;" />
                            </a>
                            </div>
                        </td>
                        <td><a href="/edit_slider/{{ $all_slider->unique_id }}" class="btn btn-info">Edit</a> </td>
                        <td><button onclick=" if( confirm('Do you really want to delete slider ?') === true ){ window.location.href = 'delete_slider/{{ $all_slider->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button></td>
                        </tr>

                    @php $count++ @endphp
                    @endforeach
                @else
                <tr>
                    <td colspan="6">
                        <div class="col-md-12" style="margin-top:20px;">
                            <p class="alert alert-warning text-center">No Data Available</p>
                        </div>
                    </td>
                </tr>
                @endif
                </tbody>
        </table>

        </div>
    </div>


</div>

    </section>
  </main>

@include('user.styling')
 @endsection
