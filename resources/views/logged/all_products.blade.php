
@php $title = "All Products" @endphp

@extends('user.main')
 @section('content')

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>All Products</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>All Products</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">

<div class="container">

    <div class="row" style="margin-bottom:100px;">
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
            <a class="btn btn-info btn-lg" href="{{ route('add_product') }}" >Add New Product</a>
        </div>

        <div class="col-md-12 form-group" style="margin-top:20px; margin-bottom:20px;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                    <th scope="col">S/NO</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cancelled Price</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Discount (%)</th>
                    <th scope="col">Quantity (%)</th>
                    <th scope="col">Tax (%)</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                @if(count($all_products)>0)
                    @php $count = 1 @endphp
                    @foreach ($all_products as $all_product)

                        <tr>
                        <td>{{$count}}</td>

                        {{-- get the categories --}}
                        @php $categoryDetails = $all_product->category; @endphp

                        {{-- get the product details --}}
                        @php $productDetails = $all_product->productDetails; @endphp

                        <td>{{$all_product->product_name}}</td>
                        <td>{{$categoryDetails->category_name}}</td>
                            @php $thumbNailName = asset($all_product->productStorageDisplayImagePath.$all_product->thumbnail) @endphp
                        <td>
                            <div style="width:50px; cursor:pointer;" title="click to view image">
                            <a href="{{ $thumbNailName }}" data-gallery="{{ $all_product->unique_id }}" class="portfolio-lightbox preview-link" title="{{$all_product->product_name}}">
                                <img src="{{ $thumbNailName }}" style="width:100%;" />
                            </a>
                            </div>
                            @if (count($productDetails) > 0)
                                @foreach ($productDetails as $l => $eachProductDetail)
                                    @php $eachImageName = asset($eachProductDetail->productDetailsStorageImageDisplayPath.$eachProductDetail->images) @endphp
                                    <div class="hidden">
                                        <a href="{{ $eachImageName }}" data-gallery="{{ $eachProductDetail->product_unique_id }}" class="portfolio-lightbox preview-link"></a>
                                    </div>
                                @endforeach
                            @endif

                        </td>
                        <td>{{$all_product->price}}</td>
                        <td><span style="text-decoration: overline;">{{$all_product->cancelled_price}}</span></td>
                        <td>{{$all_product->discount}}</td>
                        <td>{{$all_product->quantity}}</td>
                        <td>{{$all_product->tax}}</td>
                        <td>
                            <a href="/product_details/{{ $all_product->unique_id }}" target="_blank" class="btn btn-info">View</a>
                        </td>
                        <td>
                            <a href="/edit_product/{{ $all_product->unique_id }}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <button onclick=" if( confirm('Do you really want to delete Product ?') === true ){ window.location.href = 'delete_product/{{ $all_product->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button>
                        </td>
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


</div>

@include('user.styling')
 @endsection

