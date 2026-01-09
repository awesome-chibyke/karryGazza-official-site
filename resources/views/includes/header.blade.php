<!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ env('APP_URL') }}"><img style="width:120px" src="{{ asset("custom_assets/images/white-logo-and-name.png") }}" alt=""></a></figure>
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">

                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{ env("APP_URL") }}#features">Top Features</a>
                                            
                                        </li>

                                        <li class=""><a href="{{ env("APP_URL") }}#pricing">Pricing</a>
                                            
                                        </li>

                                        <li class=""><a href="{{ env("APP_URL") }}/blog">Blog</a>
                                           
                                        </li>                              
                                        <li class="dropdown">
                                            <a href="{{ env("APP_URL") }}#contact_form">Contact</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="outer-box">
                            <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}">Start Free Today</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="{{ env('APP_URL') }}"><img style="width:120px" src="{{ asset("custom_assets/images/white-logo-and-name.png") }}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="">
                                    <a href="{{ env("APP_URL") }}#features">Top Features</a>
                                </li>
                                <li class="">
                                    <a href="{{ env("APP_URL") }}#pricing">Pricing</a>
                                </li>
                                {{-- <li class="dropdown"><a href="{{ env("APP_URL") }}#blog_section">Blog</a> --}}
                                <li class="dropdown"><a href="{{ env("APP_URL") }}/blog">Blog</a>
                                    
                                </li>                              
                                <li class="dropdown"><a href="{{ env("APP_URL") }}#contact_form">Contact</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->