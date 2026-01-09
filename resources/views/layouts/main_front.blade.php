@extends('layouts.app_2')

@section('title', 'Postsville - Social Media Management & Scheduling Tool')

@section('content')
  {{-- <h1>Hello from Postsville!</h1> --}}
  <!-- page wrapper -->

    @include("includes.header")


    <!-- banner-section background:#0388AA;  background-image: url(custom_assets/images/background/banner-bg-1.png);-->
    {{-- <section class="banner-section style-one" style="background-image: url(custom_assets/images/background/custom-bg.png);">
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
                        
                        <figure class="image clearfix "><img src="{{ asset("custom_assets/images/background/smail-side-card.png") }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="banner-section style-one" style="background-image: url(custom_assets/images/background/custom-bg.png);">
        <div class="" style="width:80%; margin-left:auto; margin-right:auto;">
            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <h1>Your All-in-One Social Media Management Too</h1>
                        <div class="text">Plan, schedule, and publish across every channel with ease. PostsVille keeps your brand consistent and your audience engaged, all from one dashboard.</div>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
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

    <!-- feature-section -->
    <section class="feature-section centred ">
        <div class="container">
            <div class="sec-title">
                <h2>Why 200,000+ Creators and Businesses Trust PostsVille</h2>
                <p>Managing social media doesn’t have to be stressful. That’s why over 200,000 creators, startups, and growing businesses rely on PostsVille to simplify their content strategy and save valuable time.<br /></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-time-left"></i></div>
                            <h4><a href="#">Save Hours Every Week</a></h4>
                            <div class="text">Automate posting across multiple platforms and focus on what truly grows your brand.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-chart"></i></div>
                            {{-- flaticon-upload --}}
                            <h4><a href="#">Boost Engagement Consistently</a></h4>
                            <div class="text">Stay visible with scheduled posts that keep your audience hooked, even when you’re offline.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-writing"></i></div>
                            <h4><a href="#">All-in-One Dashboard</a></h4>
                            <div class="text">Plan, schedule, and track your posts in one place, no more juggling multiple tools.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-clipboard"></i></div>
                            <h4><a href="#">Affordable & Accessible</a></h4>
                            <div class="text">Get enterprise-level social media scheduling tools without the high price tag.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-quality"></i></div>
                            <h4><a href="#">Optimized for Creators on the Go.</a></h4>
                            <div class="text">Whether you’re at your desk or on your phone, Postsville works seamlessly — helping you stay productive wherever you are.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-graph"></i></div>
                            {{-- flaticon-computer --}}
                            <h4><a href="#">Lightning-Fast Workflow.</a></h4>
                            <div class="text">No fluff, no delays. Schedule posts and manage content with fewer clicks and faster load times</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->

    <!-- whychoose-section -->
    <section class="whychoose-section custom-bg-color-1" >
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-5 col-md-12 col-sm-12 video-column">
                    <div class="video-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="video-inner" style="background-image: url(custom_assets/images/background/video-bg.png);">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-music-player-play"></i></a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-2 col-md-12 col-sm-12 content-column"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2 class="text-white">Key Features</h2>
                            <p class="text-white">Unlike bloated tools that slow you down, Postsville is fast, focused, and designed for efficiency. Whether you're a solo creator or a growing agency, Postsville helps you stay ahead.</p>
                        </div>
                        <ul class="list-content">
                            <li class="text-white">Social Media Scheduling. <br> <small>Stop scrambling to post in real time. With PostsVille, you can plan your content calendar days, weeks, or even months ahead. Schedule once and let automation handle the rest so your brand stays active even when you’re offline.</small></li>
                            <li class="text-white">Multi-Platform Posting <br> <small>No more jumping between apps. PostsVille lets you create a post once and share it across Instagram, LinkedIn, TikTok, Twitter/X, Facebook and other platforms instantly. Stay consistent everywhere your audience is without extra effort.</small></li>
                            <li class="text-white">Analytics & Insights <br> <small>Know exactly what’s working. Our built-in analytics give you clear insights into reach, engagement, and performance. Spot trends, refine your strategy, and use real data to grow your audience faster.</small></li>

                            <li class="text-white">Team Collaboration (Add only when the platform supports it) <br> <small>Social media works better together. Invite teammates, assign roles, and manage approvals directly inside PostsVille. From small teams to agencies, collaboration is seamless and keeps everyone aligned.</small></li>
                        </ul>
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- whychoose-section end -->


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
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
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
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
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
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
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
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn">Start Free Today</a></div>
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

    <!-- faq-style-two -->
    <section class="faq-style-two home-6">
        <div class="container">
            <div class="sec-title centred">
                <h2>How It Works</h2>
                <p>A quick step-by-step guide to help you get started.</p>
            </div>
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">

                            <div class="single-item">
                                <div class="icon-box">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h4>Sign Up</h4>
                                <div class="text">Create your account in just a few clicks. Sign up with your email (or social account) to access your personalized dashboard. No complicated setup — just a quick and secure start to managing your social media from one place.</div>
                            </div>

                            <div class="single-item">
                                <div class="icon-box">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h4>Plan and Schedule Posts</h4>
                                <div class="text">Create your content once, choose when and where it should go live, and let PostsVille do the rest. Whether you’re scheduling days, weeks, or months ahead, you’ll save hours while keeping your brand consistent across every platform.
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">

                            <div class="single-item">
                                <div class="icon-box">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h4>Connect Your Accounts</h4>
                                <div class="text">Link your Instagram, LinkedIn, TikTok, Twitter/X, Facebook and more in just a few clicks. No complicated setup, PostsVille brings all your social media channels together into one dashboard so you can manage everything from a single place.</div>
                            </div>

                            <div class="single-item">
                                <div class="icon-box">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h4>Track Performance & Grow</h4>
                                <div class="text">Measure what matters with clear, easy-to-read analytics. See which posts get the most engagement, identify trends, and adjust your strategy to grow smarter. With data-driven insights, every post becomes a step toward bigger results.</div>
                            </div>
                            
                        </div>
                    </div>

                </div>
                <div class="btn-box centred"><a href="{{env('MAIN_APP_URL')}}">Start Free Today</a></div>
            </div>
        </div>
    </section>
    <!-- faq-style-two end -->

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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
                                                    <a href="#">Start Free Today</a>
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
    <section class="fact-counter integration-section sec-pad centred">
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
                        <div class="btn-box"><a href="{{env('MAIN_APP_URL')}}" class="theme-btn-two"><i class="flaticon-chrome"></i>Start Free Today</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- integration-section end -->


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
    @if (count($testimonies) > 0)
    <section class="testimonial-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h2>What User Say About Us</h2>
                <p>Hear What Our Happy Users Have to Say. Experiences That Speak for Themselves</p>
            </div>


            <div class="testimonial-inner">
                <div class="three-column-carousel-2 owl-carousel owl-theme">
        
                    @foreach ($testimonies as $l => $testimony)
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box"><i class="flaticon-left-quotes-sign"></i></div>
                                <div class="text">{{ $testimony->testimony }}</div>
                            </div>
                            <div class="author-info">
                                <figure class="author-thumb">
                                    <img src="{{ asset("custom_assets/images/avatar.png") }}" alt="">
                                    {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
                                </figure>
                                <h5 class="author-name">{{ $testimony->name }}</h5>
                                {{-- <span class="designation">UI/UX Designner</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
               
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- testimonial-section end -->


    <!-- news-section -->
    @if(count($viewAlNews))
    <section class="news-section bg-color-1 sec-pad" id="blog_section">
        <div class="container">

            <div class="sec-title centred">
                <h2>Latest News Updates</h2>
                <p>Stay informed with the latest news, trends, and insights from the world of social media, tech, and digital innovation.</p>
            </div>

            <div class="row">
                
                    @foreach($viewAlNews as $k => $news)

                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">
                                            @php $imageName = asset('storage/images/'.$news->image) @endphp
                                            <img src="{{ $imageName }}" alt="{{ $news->image }}">
                                        </a>
                                    </figure>
                                    <div class="lower-content">
                                        <h4><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">{{ $news->title }}</a></h4>
                                        <div class="post-date"><i class="flaticon-calendar"></i>{{ $news->created_at->diffForHumans() }}</div>
                                        <div class="post-date"><i class="flaticon-user"></i>{{ $news->user->name }}</div>
                                        <div class="link-btn"><a href="{{ route('view_single_news', ['uniqueId'=>$news->unique_id]) }}">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach

            </div>
            <div class="row mt-4 text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 news-block">
                    <div class="btn-box"><a href="{{route('news-blog')}}" class="theme-btn-two">View more</a></div>
                </div>   
            </div>
            
        </div>
    </section>
    @endif
    <!-- news-section end -->


    <!-- call-to-action -->
    <section class="call-to-action" id="contact_form">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <figure class="image-box  clearfix" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="horizontal"><img src="{{ asset("custom_assets/images/resource/contact_us.png") }}" alt=""></figure>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box" style="margin-top: 0px;">
                        <div class="sec-title " style="margin-bottom:5px;">
                            <h2>Get in Touch</h2>
                            <p>Have questions or need support? We’re here to help. Reach out to us and let’s start the conversation.</p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group" style="margin-top:2px;">
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
                        </div>

                        <div class="subscribe-form">
                            <form action="{{ route('send-message') }}" method="post" role="form" class="php-email-form">
                            @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class=" @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="name" placeholder="Email Address" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="@error('subject') is-invalid @enderror" id="name" placeholder="Subject" required>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea class=" @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Message" required></textarea>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group clearfix">

                                    {{-- <div class="create-acc">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkbox" checked="checked">
                                                <span>Also subscribe our newsletter</span>
                                            </label>
                                        </div>  
                                    </div> --}}

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

    <!-- faq-section -->
    @if(count($faqs) > 0)
    <section class="faq-section sec-pad bg-color-1">
        <div class="container">
            <div class="sec-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to the most common questions about using our platform.</p>
            </div>
            <div class="tabs-box">
                <div class="row">

                    
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-3">
                                <ul class="accordion-box">

                                    @foreach($faqs as $k => $eachFaq)
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>Q: {{$eachFaq->question}}?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">{{$eachFaq->answer}}</div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                                      
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- faq-section end -->
    
@endsection