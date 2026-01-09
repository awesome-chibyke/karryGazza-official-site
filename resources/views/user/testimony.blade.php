
@php $title = "All Sliders" @endphp

@extends('user.main')
 @section('content')



 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>TESTIMONIES</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Testimonies</li>
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
                    <th scope="col">Name</th>
                    <th scope="col">Testimony</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delete</th>
           
                    </tr>
                </thead>
                @if(count($all_testimonies)>0)
                    @php $count = 1 @endphp
                    @foreach ($all_testimonies as $testimony)
                <tbody>
                    <tr>
                    <td>{{$count}}</td>
                    <td>{{$testimony->name}}</td>
                    <td>{{$testimony->testimony}}</td>

                    <td> <span
                        class="btn btn-@php if($testimony->status === 'pending'){ echo 'danger'; }
                        else if($testimony->status === 'approved' ){ echo 'success';} @endphp"> {{$testimony->status}} </span>

                         @if($testimony->status ==='pending')
                         <a href="{{ route('approve_testimony', ['uniqueID'=>$testimony->unique_id]) }}" class="btn btn-primary"> Approve  </a>
                        @endif
                    </td> 

                    <td>
                        <button onclick=" if( confirm('Do you really want to delete testimony ?') === true ){ window.location.href =     'delete_testimony/{{ $testimony->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a>
                        </button>
                    </td> 
        
                </tr>
                
                @php $count++ @endphp
                @endforeach
                @else
                <tr>
                    <td colspan="6">
                        <div class="col-me-12" style="margin-top: 20px;">
                            <p class="alert alert-warning text-center">No Data Available<p/>

                        </div>

                    </td>
                </tr>
                @endif

                </tbody>

        </table>

        </div>
    </div>


</div>

@include('user.styling')
 @endsection
