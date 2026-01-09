@php $title = "All Sliders" @endphp

@extends('user.main')
 @section('content')

 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>COMPANY'S PARTNERS</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Partners</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


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

        <div class="col-md-12 form-group" style="margin-top:20px;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                    <th scope="col">S/NO</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">ACTION</th>
                    <th scope="col">DELETE</th>
                    
                    </tr>
                </thead>
                <tbody>
                @if(count($business_partners)>0)
                    @php $count = 1 @endphp
                    @foreach ($business_partners as $partner)
                
                    <tr>
                    <td>{{$count}}</td>
                    <td>
                        <div style="width:100px; cursor:pointer;">
                            <a href="/storage/images/{{ $partner->image}}" data-gallery="{{ $partner->unique_id }}" class="portfolio-lightbox preview-link" >                    
                            <img style="width: 100%" src="/storage/images/{{$partner->image}}">
                            </a>                        
                        </div>
                    </td>
                    <td><a href="/edit_partner/{{$partner->unique_id}}" class="btn btn-info">Edit</a> </td>
                    
                    <td><button onclick=" if( confirm('Do you really want to delete Partner ?') === true ){ window.location.href = 'delete_partner/{{ $partner->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button></td>                  
                    </tr>

                    


               
                @php $count++ @endphp
                @endforeach
            @endif
            </tbody>

            <div style="margin-bottom: 20px">
                 <a href="create_partner" class="btn btn-info">CREATE PARTNER</a>
             </div>

        </table>

        </div>
    </div>


</div>

@include('user.styling')
 @endsection
