<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ env('APP_NAME') }} - {{ $title }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("custom_assets/images/favicon_image.png") }}" rel="icon">
  <link href="{{ asset("custom_assets/images/favicon_image.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("assets/vendor/animate.css/animate.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/css/styler.css") }}" rel="stylesheet">
  <link href="{{ asset("tagsinput/src/bootstrap-tagsinput.css") }}" rel="stylesheet">
  <link href="{{ asset("summernote/summernote-bs4.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" />
  {{-- data table --}}
  <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" />

  {{-- pell editor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/pell/dist/pell.min.css">

  <style>
      .pell-content{
          background: lightyellow;
          border-bottom: 1px solid black;
      }

      .fixed-thumb {
          width: 100%;
          height: 450px;
          object-fit: cover;
      }
  </style>
  {{-- pell editor --}}

  <!-- =======================================================
  * Template Name: Flattern - v4.7.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@php $settings = App\Models\Settings::first(); @endphp

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{ $settings->email1 }}">{{ $settings->email1 }}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $settings->phone1 }}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{ $settings->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ $settings->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $settings->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ $settings->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        {{-- <h1 class="text-light"><a href="./">Flattern</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('go_home') }}">
          {{-- <span style="color:#000; font-weight: bolder; text-shadow:0.5px 0.5px black; font-size:2rem;">KarryGaza</span> --}}
          <img style="width: 300px; margin-bottom: 20px; margin-top: 20px;" src="{{ asset("custom_assets/images/karry_gaza_2.png") }}" alt="" class="img-fluid" />
        </a>
      </div>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ route('go_home') }}">Home</a></li>
          <li><a href="{{ route('about-us') }}">About</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{route('view_news')}}">Press</a></li>
          {{-- <li><a href="{{route('cooperategovernance')}}">Cooperate Governance</a></li> --}}
          {{-- <li><a href="{{route('careers')}}">Careers</a></li> --}}

          @php $loggedInUser = App\Models\User::loggedInUserCheck(); @endphp

          @if ($loggedInUser)
            @if ($loggedInUser->type_of_user === 'admin')
            <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
                <ul style="height: 200px;overflow-y: auto;">
                <li><a href="/category">View All Categories</a></li>
                <li><a href="/create_category">Add Category</a></li>
                <li><a href="/view_sliders">View Sliders</a></li>
                <li><a href="/add_slider">Add Slider</a></li>
                <li><a href="/category">View Categories</a></li>
                <li><a href="/create_category">Add Category</a></li>
                <li><a href="/settings">Settings</a></li>
                <li><a href="/create_about_us">About Us</a></li>
                <li><a href="/partners">View Partners</a></li>
                <li><a href="/create_partner">Add Partner</a></li>

                <li><a href="/view_services">View Services</a></li>
                <li><a href="/create_services">Add Services</a></li>
                <li><a href="/testimony">View Testimonies</a></li>
                <li><a href="/create_testimony">Add Testimony</a></li>
                <li><a href="/all_news">View News</a></li>
                <li><a href="/create_news">Add News</a></li>
                {{-- <li><a href="/edit_career">Edit Career Page</a></li> --}}
                {{-- <li><a href="/create_available_careers">Add Available Careers</a></li> --}}
                {{-- <li><a href="/create_cooperategovernance">Create CoOperate Governance</a></li> --}}

                {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('add_product') }}">Add Products</a></li>
                <li><a href="{{ route('view_product') }}">View Products</a></li>
                </ul>
            </li>
          @endif
          @endif


          <li><a href="{{ route('contact') }}">Contact</a></li>
          @if ($loggedInUser)
            @if ($loggedInUser->type_of_user === 'admin')
          <li><a href="{{ route('create_testimony') }}">Add Testimony</a></li>
          @endif
          @endif

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @if (auth()->check())
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>


          </li>


          {{-- <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li> --}}
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  @yield('content')
  <!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="width:100px;"><a href="{{ route('go_home') }}">
              <img src="{{ asset("custom_assets/images/karry_footer.png") }}" style="width:250px;" alt=""></a>
              {{-- <span style="color:#ddd; font-weight: bolder; text-shadow:0.5px 0.5px black; font-size:2rem;">KarryGaza</span> --}}
            </h3>
            <p>{{ $settings->address1 }} <br><br>
              <strong>Phone:</strong> {{ $settings->phone1 }}<br>
              <strong>Email:</strong> {{ $settings->email1 }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('go_home') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about-us') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('products') }}">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('view_news') }}">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            @php $all_the_services = App\Models\Service::orderBy('id', 'desc')->get(); @endphp
            <ul>
              @php 
              
              $categoriess = App\Models\Category::orderBy('id', 'desc')->get()
              @endphp
                @if (count($categoriess) > 0)
                    @foreach ($categoriess as $category)
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $category->category_name }}</a></li>
                    @endforeach
                @endif

              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Follow Us</h4>
            {{-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> --}}
            <div class="social-links text-left text-md-right pt-3 pt-md-0">
                <a href="{{ $settings->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $settings->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $settings->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="{{ $settings->twitter }}" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                <a href="{{ $settings->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright"> &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
      </div>
      {{-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> --}}
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
 <script src="{{ asset("summernote/app.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>
  <script src="{{ asset("tagsinput/src/bootstrap-tagsinput.js") }}"></script>
  <script src="{{ asset("summernote/summernote-bs4.js") }}"></script>
  <script src="{{ asset("summernote/script.js") }}"></script>
  <script src="{{asset('/custom/requestHandler.js')}}"></script>
  <script src="{{asset('backEnd/default-assets/sweetalert2.min.js')}}"></script>
<script src="{{asset('backEnd/default-assets/sweetalert-init.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>

  <script>
    function checkAll() {
        if($(".mainCheckBox").is(':checked')){
            $(".smallCheckBox").prop('checked', true);
        }else{
            $(".smallCheckBox").prop('checked', false);
        }
    }

    async function confirmDeleteFaqs(a) {

        let retVal = confirm('Do you really want to continue?');
        if(retVal === true){
            $(a).text('Loading...').attr({'disabled':true});
            let selected = $(".smallCheckBox");
            let dataArray = [];
            for(let i = 0; i < selected.length; i++){
                if($(selected[i]).is(':checked')){

                    dataArray.push($(selected[i]).val());
                }
            }

            if(dataArray.length == 0){
                $(a).text('Delete Selected Faq(s)').attr({'disabled':false});
                errorDisplay('Please select at least one faqs to be deleted');
                return;
            }

            let postData = await theRequestHandler.postRequest("{{ route('confirm_faq_delete') }}", {dataArray:dataArray});
            if(postData.error_code == 0){
                $(a).text('Delete Selected Faq(s)').attr({'disabled':false});
                // successDisplay(postData.success_statement);
                alert(postData.success_statement)
                setTimeout(function () {
                    location.reload();
                }, 5000)
            }else{
                $(a).text('Delete Selected Faq(s)').attr({'disabled':false});
                alert(postData.error_message);
            }
        }

    }

    const successDisplay = (message) => swal(message, 'successful', 'success');
    const errorDisplay = (message) => swal(message, 'Failed', 'error');
  </script>

  {{-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
        //$("#testimonial4").carousel();
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
  </script> --}}

  {{-- pell editor --}}
  <script src="https://unpkg.com/pell"></script>
  {{-- <script>
      //pell editor
      const pell = window.pell;
      const editor = document.getElementById("editor");
      const markup = document.getElementById("markup");

      pell.init({
      element: editor,
      onChange: (html) => {
          markup.innerHTML = "HTML Output: <br /><br />";
          markup.innerText += html;
      }
      })
  </script> --}}
  {{-- pell editor --}}

</body>

</html>
