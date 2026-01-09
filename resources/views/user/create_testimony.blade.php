
@php $title = "Home" @endphp

@extends('user.main')

@section('content')

<main id="main">

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Add Testimony</h2>
        <ol>
        <li><a href="./">Home</a></li>
        <li>Add Testimony</li>
        </ol>
    </div>

    </div>
</section><!-- End Breadcrumbs -->

<section id="contact" class="contact">
    <div class="container">


    <div class="row mt-5 justify-content-center" data-aos="fade-up">

        <div class="col-sm-6">
        <form method="POST" action="{{ route('store_testimony') }}" role="form" class="php-email-form" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-12 form-group" style="margin-top:20px;">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <div class="col-md-12 form-group" style="margin-top:20px;">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder=" Name" required />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="col-md-12 form-group" style="margin-top:20px;">
                <textarea class="form-control @error('testimony') is-invalid @enderror" placeholder="testimony" name="testimony" ></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-12 form-group mt-4">
                <div class="text-center"><button style="width: 100%;" type="submit">SUBMIT</button></div>
            </div>

            <!-- <div class="col-md-12 form-group mt-1">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="/forgot-password">
                        <small>{{ __('Forgot Your Password?') }}</small>
                    </a>
                @endif
            </div> -->

            </div>

            {{-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> --}}

        </form>

        </div>

    </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

    @include('user.styling')
@endsection
