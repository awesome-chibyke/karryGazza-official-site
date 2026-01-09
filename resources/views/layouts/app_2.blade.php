<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    {{-- <title>Posts Ville</title>  | --}}
    <title>PostsVille | @yield('title')</title>

      <!-- SEO Meta Tags -->
    <meta name="description" content="Manage, schedule, and publish posts with PostsVille, the all-in-one social media management tool and free social media scheduler for smarter posting." />
    <meta name="keywords" content="social media management tools, social media scheduling tools, free social media scheduler, social media posting platforms, social media software, best social management tool, social media management programs, social media management software, social media management applications, social media manager app" />
    <meta name="author" content="PostsVille." />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Social Media Management & Scheduling Tool | PostsVille" />
    <meta property="og:description" content="Manage, schedule, and publish posts with PostsVille, the all-in-one social media management tool and free social media scheduler for smarter posting." />
    <meta property="og:image" content="https://www.postsville.com/images/preview.png" />
    <meta property="og:url" content="https://www.postsville.com" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Social Media Management & Scheduling Tool | PostsVille" />
    <meta name="twitter:description" content="Manage, schedule, and publish posts with PostsVille, the all-in-one social media management tool and free social media scheduler for smarter posting." />
    <meta name="twitter:image" content="https://www.postsville.com/images/preview.png" />

    <!-- Stylesheets -->
    <link href="{{ asset("custom_assets/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("custom_assets/css/responsive.css") }}" rel="stylesheet">
    <link rel="icon" href="{{ asset("custom_assets/images/favicon_image.png") }}" type="image/x-icon">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

</head>

<style>
        .list-control li{
            list-style: disc;
            padding: 0px;
            margin-left: 30px;
        }
        .header-color{
            background:#0388AA;
        }
        .header-padding{
            padding-top:130px;
            padding-bottom:40px;
        }
        .feature-block h5{

        }
        .fab-custom {
            line-height: 2 !important;
        }
        a {
            text-decoration: none !important
        }
    </style>

  <body class="boxed_wrapper">

    <div class="content">
      @yield('content')
    </div>

        <!-- main-footer -->
    <footer class="main-footer custom-bg-color-2" >
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="index.html"><img style="width:150px" src="{{ asset("custom_assets/images/white-logo-and-name.png" ) }}" alt=""></a></figure>
                                <div class="widget-content text-white">
                                    <div class="text">Manage, schedule, and publish posts with PostsVille, the all-in-one social media management tool and free social media scheduler for smarter posting.</div>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fab fa-facebook-f fab-custom"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter fab-custom"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p fab-custom"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Integrations</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Media Library</a></li>
                                        <li><a href="#">Chat GPT AI</a></li>
                                        {{-- <li><a href="#">Carrers</a></li>
                                        <li><a href="#">What We Do</a></li>
                                        <li><a href="#">Our Strategies</a></li>
                                        <li><a href="#">Product Tour</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Platforms</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Tiktok</a></li>
                                        <li><a href="#">X (Twitter)</a></li>
                                        <li><a href="#">Linkedin</a></li>
                                        <li><a href="#">More Platforms</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Access Us</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="{{ env("APP_URL") }}#features">Top Features</a></li>
                                        <li><a href="{{ env("APP_URL") }}#pricing">Pricing</a></li>
                                        <li><a href="{{ env("APP_URL") }}#blog_section">Blog</a></li>
                                        <li><a href="{{ env("APP_URL") }}#contact_form">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <ul class="footer-nav pull-left">
                    <li><a href="{{ route('term_and_conditions') }}">Terms and Conditions</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy & Policy</a></li>
                    <li><a href="{{ route('refund_policy') }}">Refund Policy</a></li>
                </ul>
                <div class="copyright pull-right">Copyright &copy; <a href="#">template_path</a> 2019</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
    <span class="text">Top</span>
</button>


    <!-- jequery plugins -->
    <script src="{{ asset("custom_assets/js/jquery.js") }}"></script>
    <script src="{{ asset("custom_assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("custom_assets/js/bootstrap.min.js") }}"></script>

    <script src="{{ asset("custom_assets/js/owl.js") }}"></script>
    <script src="{{ asset("custom_assets/js/wow.js") }}"></script>
    <script src="{{ asset("custom_assets/js/validation.js") }}"></script>
    <script src="{{ asset("custom_assets/js/jquery.fancybox.js") }}"></script>
    <script src="{{ asset("custom_assets/js/appear.js") }}"></script>
    <script src="{{ asset("custom_assets/js/jquery.paroller.min.js") }}"></script>

    <script src="{{ asset("custom_assets/js/isotope.js") }}"></script>

    <!-- main-js -->
    <script src="{{ asset("custom_assets/js/script.js") }}"></script>

    
    <script>
        let index = 0; // Current slide
        const slides = document.querySelectorAll(".slide_");

        function showSlide(n) {
            slides.forEach((slide, i) => {
                slide.style.display = i === n ? "block" : "none";
            });
        }

        // Next/previous controls
        function changeSlides(n) {
            index += n;
            if (index >= slides.length) index = 0;
            if (index < 0) index = slides.length - 1;
            showSlide(index);
        }

        // Initial display
        (() => {
            showSlide(index);
        })()
    </script>
    
  </body>

</html>