@extends('layout.master')
@section('content')
    <!--================= Start Revolution Slider ==================-->
    <div class="home-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">

                <ul>
                    @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                            <li data-transition="scaledownfromtop" data-slotamount="5" data-masterspeed="700">
                                <div class="cover"></div>
                                <img src="{{url('public/images/slider/' . $slider->image)}}" alt="" data-bgfit="cover"
                                     data-bgposition="center center"
                                     data-bgrepeat="no-repeat">

                                <!-- Layer -->
                                <div class="tp-caption sft uppercase tp-resizeme slider-title"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-30"
                                     data-speed="700"
                                     data-start="1000"
                                     data-easing="easeOutBack"
                                     {{--data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"--}}
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-endspeed="300"
                                     data-captionhidden="on"
                                     style="font-size: 30px; font-family: 'Droid Arabic Kufi';text-align: center ; letter-spacing: 0px !important;"> {{$slider->title}}
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
                                     data-captionhidden="on"
                                     style="font-size: 23px">{{str_limit($slider->abstract, 80)}}
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div id="particles"></div>
        </div>
        <a href="#" class="scroll-down">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>

    <section class="lightbox-gallery bg-light pb0 type1 whtbg">
        {{--<div class="overlay">--}}
        {{--<div class="background-overlay overlay_opacity_15" style="background-image: url(images/bg_who.jpg);"></div>--}}
        {{--</div>--}}
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2 class="black">خدماتنا</h2>
                        <div class="underline black"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
                <div class="row">
                    @foreach($servives as $service)
                        <div class="col-md-3 col-sm-6 col-xs-6 col-12 pull-right">
                            <div class="who-wrapper">
                                <a href="{{url('/services') . '/' .$service->id}}">
                                    <img src="{{url('public/images/services/' . $service->image)}}">
                                </a>
                                <div class="text ">
                                    <a href="{{url('/services') . '/' .$service->id}}">
                                        <h3 style="font-size: 13px">
                                            {{str_limit($service->title, 45)}}
                                        </h3>
                                    </a>
                                    <p class="txt_black">
                                        {{str_limit($service->description, 100)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--================= end who we are Section ==================-->
    <section class="lightbox-gallery bg-light pb0 type1 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>ما يميزنا </h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
        </div>

    @foreach($projects as $project)
        <?php
        $images = explode(PHP_EOL, $project->images);
        ?>
        <!-- PORTFOLIO ITEM -->
            <figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding pull-right">
                <div class="portfolio-item-inner" style="padding: 10px;">
                    <a class="image-wrap" href="{{url('public/images/projects/' . $images[0])}}">
                        <img src="{{url('public/images/projects/' . $images[0])}}" alt="Image" class="image">
                    </a>
                    <div class="caption text-center">
                        <div class="portfolio-description">
                            <div class="table">
                                <div class="inner">
                                    <div class="item-heading">
                                        <div class="item-wrap">
                                            <h3 class="h3 text-uppercase">
                                                {{$project->title}}
                                            </h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <!-- END / PORTFOLIO ITEM -->
        @endforeach

    </section>

    <section class="whtbg">
        <div class="overlay"></div>
        <div class="background-overlay" style="background-image: url('{{url('public/images/tt1.jpg')}}');"></div>
        <div id="facts">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 text-center">
                        <div class="fact-item">
                            <div class="fact-number" data-count="414">
                                <div class="icon-happy"></div>
                                <h3 class="fact-desc">عملاء سعداء</h3>
                                <div class="count-focus">414</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 text-center">
                        <div class="fact-item">
                            <div class="fact-number" data-count="543">
                                <div class="icon-trophy"></div>
                                <h3 class="fact-desc">خدمات تم انجازها</h3>
                                <div class="count-focus">543</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= End Projects Section ==================-->
    <section class="type1 lightbox-gallery bg-light pb0 type1">
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2 class="black">شركائنا</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <div id="testimonials" class="owl-carousel">
                            @foreach($partners as $partner)
                                <div class="testomonials-info pull-right">
                                    <img src="{{url('public/images/partners/' . $partner->logo)}}" alt="Image"
                                         class="image">

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lightbox-gallery bg-light pb0 type1 container whtbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>عملائنا</h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

                <div id="testimonials" class="owl-carousel">
                    @foreach($clients as $client)
                        <div class="testomonials-info pull-right">
                            <img src="{{url('public/images/partners/' . $client->logo)}}" alt="Image"
                                 class="image">

                        </div>
                    @endforeach
                </div>

            </div>
        </div>


    </section>

    <section class="lightbox-gallery bg-light pb0 type1 " style="padding-bottom: 30px">

        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2 >تحميل التطبيق </h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="col-sm-6" style="text-align: center;">
                            <a href="{{$seo->android_app_link}}">
                                <i class="fa fa-android fa-5x" style="color:green; font-size: 8em !important;"></i>
                            </a>

                        </div>
                        <div class="col-sm-6" style="text-align: center;">
                            <a href="{{$seo->ios_app_link}}">
                                <i class="fa fa-apple fa-5x" style="color:black; font-size: 8em !important;"
                                   aria-hidden="true"></i>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

