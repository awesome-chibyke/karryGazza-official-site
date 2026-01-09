
@php $title = "Home" @endphp

@extends('user.main')
 @section('content')


<!-- @if(count($category)>0)
        @foreach ($category as $cats)
           {{$cats->category_name}}
        @endforeach
@endif -->
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>COMPANY'S CATEGORY</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Category</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<div class="container">

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
        
    <table class="table">
    <thead>
        <tr>
        <th scope="col">NO</th>
        <th scope="col">CATEGORY NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody>
    @if(count($category)>0)
        @php $count = 1 @endphp
        @foreach ($category as $cats)
   
        <tr>
        <td>{{$count}}</td>
        <td>{{$cats->category_name}}</td>
        <td>{{$cats->description}}</td>
        <td><a href="/edit_category/{{$cats->unique_id}}" class="btn btn-info">Edit</a> </td>



        <td><button onclick=" if( confirm('Do you really want to delete Category ?') === true ){ window.location.href = 'delete_category/{{ $cats->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button></td> 
        </tr>
        
       
    </tbody>
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



    <div>
        <a style="margin-top:20px;" href="create_category" class="btn btn-info">CREATE CATEGORY</a>
    </div>

    </tbody>
    </table>
    
    
   

</div>

@include('user.styling')
 @endsection