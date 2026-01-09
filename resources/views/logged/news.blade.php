
@php $title = "News" @endphp

@extends('user.main')
 @section('content')


  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>COMPANY'S NEWS</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>News</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->


   <!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
<div class="container">

    <div class="col-md-12">
        <a style="margin-top:20px;" href="create_news" class="btn btn-info">CREATE NEWS</a>
    </div>

    <div class="col-md-12 " style="margin-top:20px;">
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

       <div class="col-md-12 table-responsive" style="margin-top:20px;"> 
            <table class="table" id="dataTable">
            <thead>
                <tr>
                <th scope="col">S/NO</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Post</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @if(count($allNews)>0)
                @php $count = 1 @endphp
                @foreach ($allNews as $allNew)
            
                <tr>
                <td>{{$count}}</td>
                <td>{{$allNew->title}}</td>
                {{-- <td>{{$allNew->title}}</td> --}}
                <td> 
                    <div style="width:100px; cursor:pointer;">
                                    @if($allNew->image !== null)
                                        <a href="/storage/images/{{ $allNew->image}}" data-gallery="{{ $allNew->unique_id }}" class="portfolio-lightbox preview-link" >                    
                                        <img style="width: 100%" src="/storage/images/{{$allNew->image}}">
                                        </a> 
                                    @endif

                                    @if($allNew->image === null)
                                        <div>NONE</div>
                                    @endif
                                                           
                    </div>
                </td>

                <td>
                    <div>
                        @php echo Illuminate\Support\Str::limit($allNew->post, 100, ' (...)'); @endphp
                    </div>
                </td>

                <td>
                    <a target="_blank" href="{{ route('view_single_news', ['uniqueId'=>$allNew->unique_id]) }}" class="btn btn-info">View</a>
                </td>

                <td>
                    <a href="/edit_news/{{$allNew->unique_id}}" class="btn btn-info">Edit</a>
                </td>

                <td><button onclick=" if( confirm('Do you really want to delete Category ?') === true ){ window.location.href = 'delete_news/{{ $allNew->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button></td> 
                </tr>
                
            
            
            @php $count++ @endphp
            @endforeach
                @else
                        <tr>
                            <td colspan="10">
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

</section>
@include('user.styling')
 @endsection