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
                                     style="font-size: 40px; font-family: 'Droid Arabic Kufi';text-align: center ; letter-spacing: 0px !important;"> {{$slider->title}}
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
                                     style="font-size: 30px ;font-family: 'Droid Arabic Kufi'; letter-spacing: 0px!important">{{$slider->abstract}}
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
                        <div class="col-md-4 col-sm-6 col-xs-6 col-12 pull-right " style="height: 250px">
                            <div class="who-wrapper">
                                <a href="{{url('/services') . '/' .$service->id}}">
                                    <img class="small_img responsive"
                                         src="{{url('public/images/services/' . $service->image)}}">
                                </a>
                                <div class="text ">
                                    <a href="{{url('/services') . '/' .$service->id}}">
                                        <h3>
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
    <section class="lightbox-gallery bg-light pb0 type1 whtbg">
        <div class="who_we_are">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2>ما يميزنا </h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>

            @foreach($projects as $project)
                <?php
                $images = explode(PHP_EOL, $project->images);
                ?>
                <!-- PORTFOLIO ITEM -->
                    {{--<figure class="portfolio-item col-md-3 col-sm-6 col-xs-6 col-12 nopadding pull-right">--}}
                    <div class="col-md-4 col-sm-6 col-xs-6 col-12 pull-right ">
                        <a class="image-wrap" href="{{url('public/images/projects/' . $images[0])}}">
                            <img src="{{url('public/images/projects/' . $images[0])}}" alt="Image"
                                 class="image small_img responsive">
                        </a>
                        <div class="caption text-center">
                            <div class="portfolio-description">
                                <h3 class="h3Text">
                                    {{$project->title}}
                                </h3>

                            </div>
                        </div>
                    </div>


                    {{--</figure>--}}
                <!-- END / PORTFOLIO ITEM -->
                @endforeach

            </div>
        </div>
    </section>

    <section class="whtbg">
        <div class="overlay"></div>
        <div class="background-overlay" style="background-image: url('{{url('public/images/tt1.jpg')}}');"></div>
        <div id="facts">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 text-center">
                        <div class="fact-item">
                            <div class="fact-number" data-count="{{$seo->count_client}}">
                                <div class="icon-happy"></div>
                                <h3 class="fact-desc">عملاء سعداء</h3>
                                <div class="count-focus">{{$seo->count_client}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 text-center">
                        <div class="fact-item">
                            <div class="fact-number" data-count="{{$seo->count_services}}">
                                <div class="icon-trophy"></div>
                                <h3 class="fact-desc">خدمات تم انجازها</h3>
                                <div class="count-focus">{{$seo->count_services}}</div>
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

    <section class="lightbox-gallery bg-light pb0 type1 whtbg" style="padding-bottom: 30px;height: 360px;">
        <div class=" background-overlay" style="background-image: url('{{url('public/images/fb.jpg')}}');"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2> اراء العملاء </h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="testimonials-wrap">
                        <div id="testimonials" class="xyz">
                            <div class="testomonials-info">
                                <p>ممتازين ومحترامين جدا جدا وذوقك في المعامله وشغل عالي جدا جدا وكفايه الأمان</p>
                                <div class="testimonials_name">
                                    <h3>ياسمين شومان</h3>

                                </div>
                            </div>

                            <div class="testomonials-info">
                                <p>ممتازين ومحترامين جدا جدا وذوقك في المعامله وشغل عالي جدا جدا وكفايه الأمان</p>
                                <div class="testimonials_name">
                                    <h3>ياسمين شومان</h3>

                                </div>
                            </div>

                            <div class="testomonials-info">
                                <p>ممتازين ومحترامين جدا جدا وذوقك في المعامله وشغل عالي جدا جدا وكفايه الأمان</p>
                                <div class="testimonials_name">
                                    <h3>ياسمين شومان</h3>

                                </div>
                            </div>
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



    <section class="lightbox-gallery bg-light pb0 type1 whtbg" style="padding-bottom: 30px;height: 360px;">


        <div class=" background-overlay" style="background-image: url('{{url('public/images/dwback.png')}}');"></div>
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2>تحميل التطبيق او اتصل بنا </h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="col-sm-4" style="text-align: center;">

                            <a href="{{$seo->android_app_link}}">
                                <img src="{{url('public/images/google.png')}}" class="responsive"
                                     style="max-width: 80% !important;">
                            </a>

                        </div>
                        <div class="col-sm-4" style="text-align: center">

                            <a href="tel:19635">
                                <img src="{{url('public/images/24h.png')}}" class="responsive "
                                     style="max-width: 50% !important;">
                            </a>
                        </div>
                        <div class="col-sm-4" style="text-align: center;">
                            <a href="{{$seo->ios_app_link}}">
                                <img src="{{url('public/images/ios.png')}}" class="responsive "
                                     style="max-width: 80% !important;">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

