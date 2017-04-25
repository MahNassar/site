@extends('layout.master')
@section('content')
    <!--================= Start Revolution Slider ==================-->
    <div class="home-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">

                <ul>

                    <!-- Slider 1 -->
                    <li data-transition="scaledownfromtop" data-slotamount="5" data-masterspeed="700">
                        <div class="cover"></div>
                        <img src="{{url('public/images/slider/1.jpg')}}" alt="" data-bgfit="cover"
                             data-bgposition="center center"
                             data-bgrepeat="no-repeat">

                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-30"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Good Design
                        </div>


                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-subtitle"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="80"
                             data-speed="900"
                             data-start="1800"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Creative personal & portfolio
                        </div>
                    </li>

                    <!-- Slider 2 -->
                    <li data-transition="scaledownfromtop" data-slotamount="5" data-masterspeed="700">
                        <div class="cover"></div>
                        <img src="{{url('public/images/slider/2.jpg')}}" alt="" data-bgfit="cover"
                             data-bgposition="center center"
                             data-bgrepeat="no-repeat">

                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-30"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Good Design
                        </div>


                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-subtitle"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="80"
                             data-speed="900"
                             data-start="1800"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Creative personal & portfolio
                        </div>
                    </li>

                    <!-- Slider 3 -->
                    <li data-transition="scaledownfromtop" data-slotamount="5" data-masterspeed="700">
                        <div class="cover"></div>
                        <img src="{{url('public/images/slider/3.jpg')}}" alt="" data-bgfit="cover"
                             data-bgposition="center center"
                             data-bgrepeat="no-repeat">

                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-30"
                             data-speed="700"
                             data-start="1000"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Good Design
                        </div>


                        <!-- Layer -->
                        <div class="tp-caption sft uppercase tp-resizeme slider-subtitle"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="80"
                             data-speed="900"
                             data-start="1800"
                             data-easing="easeOutBack"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-captionhidden="on"> Creative personal & portfolio
                        </div>
                    </li>
                </ul>
            </div>
            <div id="particles"></div>
        </div>
        <a href="index.html#" class="scroll-down">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>
    <!--================= End Revolution Slider ==================-->

    <!--================= Start Service Section ==================-->

    <section class="bg-dark type3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Welcome to Mine studio</h2>
                    <p>Enjoy all the advantages of elaborated code and creative design.</p>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- feature box begin -->
                <div class="service-icon col-md-4 col-sm-6 col-xs-6 col-12">
                    <div class="inner">
                        <i class="icon-camera"></i>
                        <div class="text">
                            <h3>Photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolominim veniam, quproident.</p>
                        </div>
                        <a href="index.html#" class="send_btn">Read More</a>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="service-icon col-md-4 col-sm-6 col-xs-6 col-12">
                    <div class="inner">
                        <i class="icon-wallet"></i>
                        <div class="text">
                            <h3>FULLY CUSTOMIZIBLE</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolominim veniam, quproident.</p>
                        </div>
                        <a href="index.html#" class="send_btn">Read More</a>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="service-icon col-md-4 col-sm-6 col-xs-6 col-12">
                    <div class="inner">
                        <i class="icon-presentation"></i>
                        <div class="text">
                            <h3>presentation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolominim veniam, quproident.</p>
                        </div>
                        <a href="index.html#" class="send_btn">Read More</a>
                    </div>
                </div>
                <!-- feature box close -->

            </div>
        </div>
    </section>
    <!--================= End Service Section ==================-->

    <!--================= start who we are Section ==================-->

    <section class="type1">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15" style="background-image: url(images/bg_who.jpg);"></div>
        </div>
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2 class="white">Who we are</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-12">
                        <div class="who-wrapper">
                            <img src="{{url('public/images/portfolio/1.jpg')}}" alt="#">
                            <div class="text">
                                <h3>Brand developing</h3>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on
                                    the
                                    skyline.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 col-12">
                        <div class="who-wrapper">
                            <img src="{{url('public/images/portfolio/2.jpg')}}" alt="#">
                            <div class="text">
                                <h3>Simple & Creative</h3>
                                <p>His many legs, pitifully thin compared with the size of the rest of him, waved about
                                    helplessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 col-12">
                        <div class="who-wrapper">
                            <img src="{{url('public/images/portfolio/3.jpg')}}" alt="#">
                            <div class="text">
                                <h3>Clean Design</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                    language ocean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= end who we are Section ==================-->


    <!--================= Start Team Section ==================-->
    <section class="bg-light type1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Team member</h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="team_block">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding img-left">
                                <img src="{{url('public/images/team/1.jpg')}}" alt="member1">
                                <svg viewBox="0 0 25 100" class="curved-shape">
                                    <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                </svg>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                <div class="wl-team-descript">
                                    <div class="team_name">
                                        <h3>Tyrion Bergh</h3>
                                        <p>Founder</p>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus erat nulla,
                                        volutpat nec commodo sed, porta sed nibh. Nulla facilisi. Fusce pretium...
                                    </p>
                                    <div class="profile_links">
                                        <a href="index.html#" title="Facebook"><i class="ion-social-facebook"></i></a>
                                        <a href="index.html#" title="Google+"><i class="ion-social-twitter"></i></a>
                                        <a href="index.html#" title="Instagram"><i class="ion-social-dribbble"></i></a>
                                        <a href="index.html#" title="Twitter"><i class="ion-social-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="team_block">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding img-left">
                                <img src="{{url('public/images/team/2.jpg')}}" alt="member2">
                                <svg viewBox="0 0 25 100" class="curved-shape">
                                    <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                </svg>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                <div class="wl-team-descript">
                                    <div class="team_name">
                                        <h3>Jessie Doe</h3>
                                        <p>Manager</p>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus erat nulla,
                                        volutpat nec commodo sed, porta sed nibh. Nulla facilisi. Fusce pretium...
                                    </p>
                                    <div class="profile_links">
                                        <a href="index.html#" title="Facebook"><i class="ion-social-facebook"></i></a>
                                        <a href="index.html#" title="Google+"><i class="ion-social-twitter"></i></a>
                                        <a href="index.html#" title="Instagram"><i class="ion-social-dribbble"></i></a>
                                        <a href="index.html#" title="Twitter"><i class="ion-social-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="team_block">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                <div class="wl-team-descript ">
                                    <div class="team_name">
                                        <h3>Alaska SN</h3>
                                        <p>Photographer</p>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus erat nulla,
                                        volutpat nec commodo sed, porta sed nibh. Nulla facilisi. Fusce pretium...
                                    </p>
                                    <div class="profile_links">
                                        <a href="index.html#" title="Facebook"><i class="ion-social-facebook"></i></a>
                                        <a href="index.html#" title="Google+"><i class="ion-social-twitter"></i></a>
                                        <a href="index.html#" title="Instagram"><i class="ion-social-dribbble"></i></a>
                                        <a href="index.html#" title="Twitter"><i class="ion-social-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding img-right">
                                <img src="{{url('public/images/team/3.jpg')}}" alt="member3">
                                <svg viewBox="0 0 25 100" class="curved-shape">
                                    <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="team_block">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                <div class="wl-team-descript">
                                    <div class="team_name">
                                        <h3>victor han</h3>
                                        <p>Designer</p>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus erat nulla,
                                        volutpat nec commodo sed, porta sed nibh. Nulla facilisi. Fusce pretium...
                                    </p>
                                    <div class="profile_links">
                                        <a href="index.html#" title="Facebook"><i class="ion-social-facebook"></i></a>
                                        <a href="index.html#" title="Google+"><i class="ion-social-twitter"></i></a>
                                        <a href="index.html#" title="Instagram"><i class="ion-social-dribbble"></i></a>
                                        <a href="index.html#" title="Twitter"><i class="ion-social-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding img-right">
                                <img src="{{url('public/images/team/4.jpg')}}" alt="member4">
                                <svg viewBox="0 0 25 100" class="curved-shape">
                                    <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--================= End Team Section ==================-->

    <!--================= Start testomonials Section ==================-->
    <section>
        <div class="overlay">
            <div class="background-overlay overlay_opacity_20"
                 style="background-image: url(images/bg_testomonials.jpg);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="testimonials-wrap">
                        <div id="testimonials" class="owl-carousel">
                            <div class="testomonials-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper
                                    metus
                                    pellentesque mattis. Maecenas volutpat, diam enim sagittis quam. Aliquam elementum
                                    tellus non erat porttitor mollis. Morbi viverra sollicitudin nisl eu sodales.</p>
                                <div class="testimonials_name">
                                    <h3>John doe</h3>
                                    <p>web developer</p>
                                </div>
                            </div>

                            <div class="testomonials-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper
                                    metus
                                    pellentesque mattis. Maecenas volutpat, diam enim sagittis quam.</p>
                                <div class="testimonials_name">
                                    <h3>JAMES WATT</h3>
                                    <p>DESIGNER</p>
                                </div>
                            </div>

                            <div class="testomonials-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper met
                                    Aliquam elementum tellus non erat porttitor mollis. Morbi viverra sollicitudin nisl
                                    eu
                                    sodales.</p>
                                <div class="testimonials_name">
                                    <h3>SOPHIE TURNER</h3>
                                    <p>MANAGER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= End testomonials Section ==================-->

    <!--================= Start Portfolio Section ==================-->
    <section class="lightbox-gallery bg-light pb0 type1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Our Projects</h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO SLIDER -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/1.jpg">
                    <img src="images/portfolio/1.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 1</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/2.jpg">
                    <img src="images/portfolio/2.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 2</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/3.jpg">
                    <img src="images/portfolio/3.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 3</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/4.jpg">
                    <img src="images/portfolio/4.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 4</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/5.jpg">
                    <img src="images/portfolio/5.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 4</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/6.jpg">
                    <img src="images/portfolio/6.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 4</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/7.jpg">
                    <img src="images/portfolio/7.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 4</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding">
            <div class="portfolio-item-inner">
                <a class="image-wrap" href="images/portfolio/8.jpg">
                    <img src="images/portfolio/8.jpg" alt="Image" class="image">
                </a>
                <div class="caption text-center">
                    <div class="portfolio-description">
                        <div class="table">
                            <div class="inner">
                                <div class="item-heading">
                                    <div class="item-wrap">
                                        <h3 class="h3 text-uppercase"><a href="portfolio-single.html">Project 4</a></h3>
                                        <div class="item-categories">
                                            <span>Branding</span>
                                            <span>design</span>
                                        </div>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-icon-link"><i class="ion-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
        <!-- END / PORTFOLIO ITEM -->
    </section>
    <!--================= End Portfolio Section ==================-->


    <!--================= Start Partner Section ==================-->
    <section class="partner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-wrap">
                        <div id="partner" class="owl-carousel">
                            <div class="feature-image"><img class="img-responsive" src="images/partner/1.png" alt="">
                            </div>
                            <div class="feature-image"><img class="img-responsive" src="images/partner/2.png" alt="">
                            </div>
                            <div class="feature-image"><img class="img-responsive" src="images/partner/3.png" alt="">
                            </div>
                            <div class="feature-image"><img class="img-responsive" src="images/partner/4.png" alt="">
                            </div>
                            <div class="feature-image"><img class="img-responsive" src="images/partner/5.png" alt="">
                            </div>
                            <div class="feature-image"><img class="img-responsive" src="images/partner/6.png" alt="">
                            </div>
                        </div><!-- /.owl-carousel -->
                    </div><!-- /.owl-wrap -->
                </div><!-- /.col-sm-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- our partner -->
    <!--================= End Partner Section ==================-->

@endsection