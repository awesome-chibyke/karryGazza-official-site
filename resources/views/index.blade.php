@extends('layouts.app')

@section('title', 'Postsville - Social Media Management & Scheduling Tool')

@section('content')
  {{-- <h1>Hello from Postsville!</h1> --}}
  <!-- page wrapper -->
<body class="boxed_wrapper">

    @include("includes.header")

    {{-- <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="./"><img style="width:120px" src="{{ asset("custom_assets/images/white-logo-and-name.png") }}" alt=""></a></figure>
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
                                        <li class=""><a href="#features">Top Features</a>
                                            
                                        </li>

                                        <li class=""><a href="#pricing">Pricing</a>
                                            
                                        </li>

                                        <li class=""><a href="#blog_section">Blog</a>
                                           
                                        </li>                              
                                        <li class="dropdown">
                                            <a href="#contact_form">Contact</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="outer-box">
                            <div class="btn-box"><a href="#">Start a Free Trial</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index.html"><img style="width:120px" src="{{ asset("custom_assets/images/white-logo-and-name.png") }}" alt=""></a></figure>
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
                                    <a href="#features">Top Features</a>
                                </li>
                                <li class="">
                                    <a href="#pricing">Pricing</a>
                                </li>
                                <li class="dropdown"><a href="#blog_section">Blog</a>
                                    
                                </li>                              
                                <li class="dropdown"><a href="#contact_form">Contact</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header --> --}}


    <!-- banner-section background:#0388AA;  background-image: url(custom_assets/images/background/banner-bg-1.png);-->
    <section class="banner-section style-one" style="background-image: url(custom_assets/images/background/custom-bg.png);">
        <div class="" style="width:80%; margin-left:auto; margin-right:auto;">
            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <h1>The Ultimate Solution for Social Media Management</h1>
                        <div class="text">Save time and achieve real results on social media with ease—Posts Ville simplifies it all. Posts Ville provides everything you need to elevate your social media management—planning, scheduling, analytics, and collaboration tools, all in one seamless platform.</div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start a Free Trial</a></div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-lg-12 col-md-12 image-column">
                    <div class="image-box float-bob-y">
                        <figure class="image image-1"><img src="custom_assets/images/resource/phone-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="custom_assets/images/resource/phone-2.png" alt=""></figure>
                    </div>
                </div> -->
                <div class="col-xl-4 col-lg-12 col-md-12 image-column">
                    <div class="image-box float-bob-y">
                        {{-- paroller --}}
                        <figure class="image clearfix "><img src="{{ asset("custom_assets/images/background/smail-side-card.png") }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- works-section -->
    <section id="features" class="works-section centred" style="padding-bottom:50px; padding-top:50px;">
        <div class="container">
            <div class="sec-title" style="margin-bottom:50px;">
                <h2>Core Features</h2>
                <p>Explore the essential tools designed to power your workflow, boost productivity, and deliver results—all in one platform.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="work-content-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-writing"></i></div>
                            <h4><a href="#">Publish and Schedule Posts</a></h4>
                            <div class="text">
                                Effortlessly create, schedule and publish posts across multiple social media accounts from a single dashboard with our powerful scheduler. Collaborate with your team on the Posts Ville platform to create cohesive and engaging social media content
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="work-content-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-chart"></i></div>
                            <h4><a href="#">Social Media Calender</a></h4>
                            <div class="text">Stay organized and save valuable time with a streamlined social media calendar that allows you to plan, schedule, and manage all your posts in one place. Visualize your content strategy, ensure consistency across platforms, and never miss an important date or deadline again.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="work-content-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-graph"></i></div>
                            <h4><a href="#">Social Media Analytics</a></h4>
                            <div class="text">Take charge of your marketing strategy with complete control over analytics. Gain valuable insights, track performance metrics, and make data-driven decisions to optimize your campaigns. With comprehensive reporting and in-depth analysis, you can confidently lead your marketing efforts toward measurable success.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- works-section end -->


    <!-- overview-section -->
    <section class="overview-section bg-color-1 sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-12 col-sm-12 image-column"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image-box clearfix">
                        <figure class="image image-1"><img src="{{ asset("custom_assets/images/background/enhance_2.png") }}" alt=""></figure>
                        <figure class="image image-2"><img src="{{ asset("custom_assets/images/background/seamless_team_collaboration.png") }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title"><h2>Enhance your social media strategy to achieve greater impact and engagement.</h2></div>
                        <div class="text">
                            <p>Effortlessly grow your audience with our platform's powerful content creation tools, seamless client collaboration, advanced scheduling features, in-depth analytics, and robust teamwork solutions.</p>
                            <p>Effortlessly plan and schedule unlimited content across all your social media channels.</p>
                        </div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Trial</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-section end -->


    <!-- overview-style-two -->
    <section class="overview-style-two sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title"><h2>Ignite your creativity with fresh ideas for crafting engaging social media posts.</h2></div>
                        <div class="text">
                            <p>Unleash your creativity with AI Pilot! Generate amazing social media posts instantly using simple prompts. Stay inspired, overcome creative blocks, and captivate your followers with engaging content.</p>
                        </div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Trial</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box clearfix">
                        <figure class="image image-1"><img style="padding:10px" src="{{ asset("custom_assets/images/background/your_post.png") }}" alt=""></figure>
                        <!-- <figure class="image image-1"><img src="custom_assets/images/background/your_post.png" alt=""></figure> -->
                        <!-- <figure class="image image-2"><img src="custom_assets/images/resource/dashbord-4.jpg" alt=""></figure> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-style-two end -->

    <!-- overview-section -->
    <section class="overview-section bg-color-1 sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box clearfix">
                        <figure class="image image-1"><img src="{{ asset("custom_assets/images/background/template.png") }}" alt=""></figure>
                        <!-- <figure class="image image-2"><img src="custom_assets/images/background/hashtag.png" alt=""></figure> -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title"><h2>Save time and effort by reusing and optimizing your existing content.</h2></div>
                        <div class="text">
                            <p>Save time and boost productivity by storing posts, hashtags, and media in the Content Library for effortless editing and scheduling. Repurpose top-performing content to amplify your social campaigns and scale your efforts effectively.</p>
                        </div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Trial</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-section end -->

    <!-- overview-style-two -->
    <section class="overview-style-two sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title"><h2>Effortlessly Stay Updated with Integrated RSS Feeds.</h2></div>
                        <div class="text">
                            
                        <p>
                            Supercharge your social media strategy with seamless RSS feed integration. Automatically share the latest updates, industry news, and trending topics directly to your platforms, keeping your audience engaged and informed.
                        </p> 
                            
                        <p>
                            Save time on content curation while ensuring your posts are always fresh, relevant, and aligned with your brand’s voice. Stay ahead of the competition by consistently delivering value to your followers with minimal effort.
                        </p>

                        </div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Trial</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box clearfix">
                        <figure class="image image-1"><img style="padding:10px" src="{{ asset("custom_assets/images/background/rss_campaign.png") }}" alt=""></figure>
                        <!-- <figure class="image image-1"><img src="custom_assets/images/background/your_post.png" alt=""></figure> -->
                        <!-- <figure class="image image-2"><img src="custom_assets/images/resource/dashbord-4.jpg" alt=""></figure> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-style-two end -->

    <!-- whychoose-section -->
    <section class="whychoose-section custom-bg-color-1" >
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-5 col-md-12 col-sm-12 video-column">
                    <div class="video-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="video-inner" style="background-image: url(custom_assets/images/background/video-bg.png);">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-music-player-play"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-2 col-md-12 col-sm-12 content-column"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2 class="text-white">Why Choose Posts Ville</h2>
                            <p class="text-white">Unlike bloated tools that slow you down, Postsville is fast, focused, and designed for efficiency. Whether you're a solo creator or a growing agency, Postsville helps you stay ahead.</p>
                        </div>
                        <ul class="list-content">
                            <li class="text-white">⚡Lightning-Fast Workflow. <br> <small>No fluff, no delays. Schedule posts and manage content with fewer clicks and faster load times</small></li>
                            <li class="text-white">🧩 Clean, Distraction-Free Interface. <br> <small>Built with usability in mind — everything you need, nothing you don’t. No complicated dashboards or overwhelming menus.</small></li>
                            <li class="text-white">📱 Optimized for Creators on the Go. <br> <small>Whether you’re at your desk or on your phone, Postsville works seamlessly — helping you stay productive wherever you are.</small></li>
                            <li class="text-white">🧠 Smart Features, Not Feature Creep. <br> <small>Every feature serves a clear purpose — helping you automate, track, and grow without feeling overwhelmed.</small></li>
                        </ul>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Trial</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- whychoose-section end -->


    <!-- pricing-style-three -->
    <section id="pricing" class="pricing-style-three sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h2>Our Pricing and Plans</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br />been the industry's standard dummy text ever since</p>
            </div>
            <div class="pricing-inner">
                <div class="tabs-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 btn-column">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Bandwidth</li>
                                    <li class="tab-btn" data-tab="#tab-2">Active Project</li>
                                    <li class="tab-btn" data-tab="#tab-3">Market Analysing</li>
                                    <li class="tab-btn" data-tab="#tab-4">Team Members</li>
                                    <li class="tab-btn" data-tab="#tab-5">Live Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                            <div class="tabs-content centred">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Basic</h4>
                                                    <h2 class="price">Free</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>8 GB</li>
                                                        <li>2 Projects</li>
                                                        <li>Yes (Limited)</li>
                                                        <li>3 Members</li>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Professional</h4>
                                                    <h2 class="price">$19.70</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>32 GB</li>
                                                        <li>30 Projects</li>
                                                        <li>Yes</li>
                                                        <li>12 Members</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Premium</h4>
                                                    <h2 class="price">$49.99</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>120 GB</li>
                                                        <li>Unlimited</li>
                                                        <li>Yes</li>
                                                        <li>25 Members</li>
                                                        <li>24/7</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Basic</h4>
                                                    <h2 class="price">Free</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>8 GB</li>
                                                        <li>2 Projects</li>
                                                        <li>Yes (Limited)</li>
                                                        <li>3 Members</li>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Professional</h4>
                                                    <h2 class="price">$19.70</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>32 GB</li>
                                                        <li>30 Projects</li>
                                                        <li>Yes</li>
                                                        <li>12 Members</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Premium</h4>
                                                    <h2 class="price">$49.99</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>120 GB</li>
                                                        <li>Unlimited</li>
                                                        <li>Yes</li>
                                                        <li>25 Members</li>
                                                        <li>24/7</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="tab" id="tab-3">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Basic</h4>
                                                    <h2 class="price">Free</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>8 GB</li>
                                                        <li>2 Projects</li>
                                                        <li>Yes (Limited)</li>
                                                        <li>3 Members</li>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Professional</h4>
                                                    <h2 class="price">$19.70</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>32 GB</li>
                                                        <li>30 Projects</li>
                                                        <li>Yes</li>
                                                        <li>12 Members</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Premium</h4>
                                                    <h2 class="price">$49.99</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>120 GB</li>
                                                        <li>Unlimited</li>
                                                        <li>Yes</li>
                                                        <li>25 Members</li>
                                                        <li>24/7</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="tab" id="tab-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Basic</h4>
                                                    <h2 class="price">Free</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>8 GB</li>
                                                        <li>2 Projects</li>
                                                        <li>Yes (Limited)</li>
                                                        <li>3 Members</li>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Professional</h4>
                                                    <h2 class="price">$19.70</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>32 GB</li>
                                                        <li>30 Projects</li>
                                                        <li>Yes</li>
                                                        <li>12 Members</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Premium</h4>
                                                    <h2 class="price">$49.99</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>120 GB</li>
                                                        <li>Unlimited</li>
                                                        <li>Yes</li>
                                                        <li>25 Members</li>
                                                        <li>24/7</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="tab" id="tab-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Basic</h4>
                                                    <h2 class="price">Free</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>8 GB</li>
                                                        <li>2 Projects</li>
                                                        <li>Yes (Limited)</li>
                                                        <li>3 Members</li>
                                                        <li>No</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Professional</h4>
                                                    <h2 class="price">$19.70</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>32 GB</li>
                                                        <li>30 Projects</li>
                                                        <li>Yes</li>
                                                        <li>12 Members</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
                                            <div class="pricing-table">
                                                <div class="table-header">
                                                    <h4 class="title">Premium</h4>
                                                    <h2 class="price">$49.99</h2>
                                                </div>
                                                <div class="table-content">
                                                    <ul> 
                                                        <li>120 GB</li>
                                                        <li>Unlimited</li>
                                                        <li>Yes</li>
                                                        <li>25 Members</li>
                                                        <li>24/7</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-style-three end -->

    <style>
        #slider_ {
        width: 600px;
        height: 400px;
        overflow: hidden;
        }
        .slide_ {
        width: 600px;
        height: 400px;
        float: left;
        }
    </style>

    <!-- integration-section -->
    <section class="fact-counter integration-section sec-pad centred" id="integration_section">
        <div class="container">
            <div class="sec-title">
                <h2>Post to all major platforms from one dashboard:</h2>
                <p>Stay consistent across every platform without juggling tabs. With Postsville, you can create once and publish everywhere — Instagram, Facebook, LinkedIn, X (Twitter), and more — all from a single, powerful dashboard.</p>
            </div>
            <div class="row">
            <!-- offset-lg-1 -->
                <div class="col-lg-12 col-md-12 col-sm-12 integration-column">
                    <div class="integration-inner">
                        <ul class="clearfix wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" style="display:flex; justify-content: center;">
                            <li>
                                <a href="#">
                                    <!-- <i class="flaticon-instagram-logo"></i> -->
                                     <img style="width:60%;" src="{{ asset("custom_assets/fonts/instagram-logo.svg") }}" />
                                </a>
                                <h5>Instagram</h5>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- <i class="flaticon-windows-logo-silhouette"></i> -->
                                    <img style="width:60%;" src="{{ asset("custom_assets/fonts/facebook.svg") }}" />
                                </a>
                                <h5>Facebook</h5>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- <i class="flaticon-happy-mac-logo"></i> -->
                                    <img style="width:60%;" src="{{ asset("custom_assets/fonts/linkedin.svg") }}" />
                                </a>
                                <h5>LinkedIn</h5>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- <i class="flaticon-apple"></i> -->
                                     <img style="width:60%;" src="{{ asset("custom_assets/fonts/twitter.svg") }}" />
                                </a>
                                <h5>Twitter (X)</h5>
                            </li>
                            <li>
                                <a href="#">
                                    <!-- <i class="flaticon-android-logo"></i> -->
                                    <img style="width:60%;" src="{{ asset("custom_assets/fonts/tiktok.svg") }}" />
                                </a>
                                <h5>TikTok</h5>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-android-logo"></i></a>
                                <h5>Threads</h5>
                            </li>
                        </ul>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn-two"><i class="flaticon-chrome"></i>Start Free Trial</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- integration-section end -->


    <!-- fact-counter -->
    <!-- <section class="fact-counter bg-color-1 sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h2>Success in Numbers</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br />been the industry's standard dummy text ever since</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="flaticon-avatar"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="170">0</span><span>k</span>
                        </div>
                        <div class="text">Total Users</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="flaticon-user"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="40">0</span><span>k</span>
                        </div>
                        <div class="text">Regular Users</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="flaticon-rating"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="4.9">0</span>
                        </div>
                        <div class="text">User Rating</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="flaticon-customer-reviews"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k</span>
                        </div>
                        <div class="text">Positive Feedback</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- fact-counter end -->


    <!-- download-section -->
    <section class="download-section custom-bg-color-1 sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>Ready to Transaform Your Social Medi Workflow? Join Us Today</h2>
                        </div>
                        <div class="inner-box">
                            <div class="single-item">
                                <div class="number">1</div>
                                <h4><a href="#">AI-Assisted Content Development</a></h4>
                                <div class="text">Leverage the power of artificial intelligence to streamline your content creation process—enhancing creativity, improving efficiency, and generating high-quality written, visual, or multimedia content with ease.</div>
                            </div>
                            <div class="single-item">
                                <div class="number">2</div>
                                <h4><a href="#">Smooth Cross-Platform Connectivity</a></h4>
                                <div class="text">Manage all your social media accounts from a single dashboard.</div>
                            </div>
                            <div class="single-item">
                                <div class="number">3</div>
                                <h4><a href="#">Auto-Scheduled Content & Strategic Planning</a></h4>
                                <div class="text">Easily plan and schedule your content using our intuitive calendar. Stay on track and never miss a key update.</div>
                            </div>
                            <div class="download-btn">
                                <a href="{{env('MAIN_APP_URL')}}"><i class="flaticon-chrome"></i> Free Trial</a>
                                <!-- <a href="#"><i class="flaticon-android-logo"></i>Play Store</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <figure class="image-box float-bob-y"><img src="{{ asset("custom_assets/images/resource/all_medias.png") }}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- download-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h2>What User Say About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br />been the industry's standard dummy text ever since</p>
            </div>
            <div class="testimonial-inner">
                <div class="three-column-carousel-2 owl-carousel owl-theme">

                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-left-quotes-sign"></i></div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="author-info">
                                <figure class="author-thumb">
                                    <img src="{{ asset("custom_assets/images/resource/testimonial-1.png") }}" alt="">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </figure>
                                <h5 class="author-name">Tarisha Jahan</h5>
                                <span class="designation">UI/UX Designner</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-left-quotes-sign"></i></div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="author-info">
                                <figure class="author-thumb">
                                    <img src="{{ asset("custom_assets/images/resource/testimonial-2.png") }}" alt="">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </figure>
                                <h5 class="author-name">Rakib AL Mahmud</h5>
                                <span class="designation">UI/UX Designner</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-left-quotes-sign"></i></div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="author-info">
                                <figure class="author-thumb">
                                    <img src="{{ asset("custom_assets/images/resource/testimonial-3.png") }}" alt="">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </figure>
                                <h5 class="author-name">Eusra Ahmed Rima</h5>
                                <span class="designation">UI/UX Designner</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- news-section -->
    <section class="news-section bg-color-1 sec-pad" id="blog_section">
        <div class="container">
            <div class="sec-title centred">
                <h2>Latest News Updates</h2>
                <p>Stay informed with the latest news, trends, and insights from the world of social media, tech, and digital innovation.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="{{ asset("custom_assets/images/resource/news-1.jpg") }}" alt=""></a></figure>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">How App Is Going To Change Your Business Strategies</a></h4>
                                <div class="post-date"><i class="flaticon-calendar"></i>25 January, 2019</div>
                                <div class="link-btn"><a href="blog-details.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="{{ asset("custom_assets/images/resource/news-2.jpg") }}" alt=""></a></figure>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">Things That Make You Love And Hate Software</a></h4>
                                <div class="post-date"><i class="flaticon-calendar"></i>24 January, 2019</div>
                                <div class="link-btn"><a href="blog-details.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="{{ asset("custom_assets/images/resource/news-3.jpg") }}" alt=""></a></figure>
                            <div class="lower-content">
                                <h4><a href="blog-details.html">You Won’t Believe These Bizarre Truth Of Applications</a></h4>
                                <div class="post-date"><i class="flaticon-calendar"></i>23 January, 2019</div>
                                <div class="link-btn"><a href="blog-details.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- call-to-action -->
    <section class="call-to-action" id="contact_form">
        <div class="container">
            <div class="row">
{{-- paroller --}}
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <figure class="image-box  clearfix" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><img src="{{ asset("custom_assets/images/resource/contact_us.png") }}" alt=""></figure>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                            <p>Have questions or need support? We’re here to help. Reach out to us and let’s start the conversation.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="create-acc">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox" checked="checked">
                                                <span>Also subscribe our newsletter</span>
                                            </label>
                                        </div>  
                                    </div>
                                    <div class="message-btn">
                                        <button type="submit" class="theme-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action end -->
    
@endsection