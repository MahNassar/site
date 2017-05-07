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
                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.1"
                                     data-endelementdelay="0.1"
                                     data-endspeed="300"
                                     data-captionhidden="on" style="font-size: 60px"> {{str_limit($slider->title, 20)}}
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
                                     data-captionhidden="on">{{str_limit($slider->abstract, 80)}} <!-- 55 chars -->
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div id="particles"></div>
        </div>
        <a href="index.html#" class="scroll-down">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>
    <!--================= End Revolution Slider ==================-->

    <!--================= Start Product Section ==================-->
    @if($products->count() > 0)
        <section class="bg-dark type3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2>Our Products</h2>
                        <!--<p>Enjoy all the advantages of elaborated code and creative design.</p>-->
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <?php
                        $images = explode(PHP_EOL, $product->images);
                        ?>
                        <!-- feature box begin -->
                        <div class="service-icon col-md-4 col-sm-6 col-xs-6 col-12">
                            <div class="inner">
                                <!--<i class="icon-presentation"></i>-->
                                <a href="{{url('').'/products/'.$product->id}}">
                                    <img src="{{url('public/images/' . $images[0])}}" class="img-rounded" alt="Cinque Terre" width="200" height="200">
                                </a>
                                <div class="text">
                                    <h3 style="font-size: 14px">{{str_limit($product->title, 40)}}</h3>
                                    <p>{{str_limit($product->abstract, 130)}}</p>
                                </div>
                                <a href="{{url('').'/products/'.$product->id}}" class="send_btn">Read More</a>
                            </div>
                        </div>
                        <!-- feature box close -->
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!--================= End Product Section ==================-->

    <!--================= start Service Section ==================-->

    <section class="type1">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15" style="background-image: url(images/bg_who.jpg);"></div>
        </div>
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2 class="white">Our Services</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
                <div class="row">
                    @foreach($servives as $service)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-12">
                            <div class="who-wrapper">
                                <a href="{{url('/services') . '/' .$service->id}}">
                                    <img src="{{url('public/images/services/' . $service->image)}}">
                                </a>
                                <div class="text">
                                    <a href="{{url('/services') . '/' .$service->id}}">
                                        <h3 style="font-size: 13px">
                                            {{str_limit($service->title, 45)}}
                                        </h3>
                                    </a>
                                    <p>
                                        {{str_limit($service->abstract, 100)}}
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
                <?php $i = 0 ?>
                @foreach($members as $item)
                    <?php $i++ ?>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="team_block">
                                @if($i==1 ||$i==2)
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding @if($i==1 ||$i==2)img-left @else img-right @endif ">
                                        <img src="{{url('public/images/team/'.$item->photo)}}" alt="{{$item->name}}">
                                        <svg viewBox="0 0 25 100" class="curved-shape">
                                            <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                        </svg>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                        <div class="wl-team-descript">
                                            <div class="team_name">
                                                <h3>{{$item->name}}</h3>
                                                <p>{{$item->position}}</p>
                                            </div>
                                            <p>
                                                {{str_limit($item->biography, 200)}} <!-- 200 -->
                                            </p>
                                        </div>
                                   </div>
                                @else
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                        <div class="wl-team-descript">
                                            <div class="team_name">
                                                <h3>{{$item->name}}</h3>
                                                <p>{{$item->position}}</p>
                                            </div>
                                            <p>
                                                {{str_limit($item->biography, 200)}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding @if($i==1 ||$i==2)img-left @else img-right @endif ">
                                        <img src="{{url('public/images/team/'.$item->photo)}}" alt="{{$item->name}}">
                                        <svg viewBox="0 0 25 100" class="curved-shape">
                                            <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($i == 4)
                        <?php $i = 0; ?>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--================= End Team Section ==================-->

    <!--================= Start testomonials Section ==================-->

    @if(isset($testimonials) && $testimonials->count() > 0)
        <section>
            <div class="overlay">
                <div class="background-overlay overlay_opacity_20" style="background-image: url(images/bg_testomonials.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="testimonials-wrap">
                            <div id="testimonials" class="owl-carousel">
                                @foreach($testimonials as $testimonial)
                                    <div class="testomonials-info">
                                        <p>{{$testimonial->quote}}</p>
                                        <div class="testimonials_name">
                                            <h3>{{$testimonial->username}}</h3>
                                            <p>{{$testimonial->position}}</p>
                                        </div>
                                    </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <br>
    @endif

    <!--================= End testomonials Section ==================-->

    <!--================= Start Projects Section ==================-->
    @if(isset($projects) && $projects->count() > 0)
        <section class="lightbox-gallery bg-light pb0 type1 container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center title">
                        <h2>Our Projects</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            @foreach($projects as $project)
                <?php
                    $images = explode(PHP_EOL, $project->images);
                ?>
                <!-- PORTFOLIO ITEM -->
                <figure class="portfolio-item col-md-4 col-sm-6 col-xs-6 col-12 nopadding">
                    <div class="portfolio-item-inner" style="padding: 10px;">
                        <a class="image-wrap" href="">
                            <img src="{{url('public/images/projects/' . $images[0])}}" alt="Image" class="image">
                        </a>
                        <div class="caption text-center">
                            <div class="portfolio-description">
                                <div class="table">
                                    <div class="inner">
                                        <div class="item-heading">
                                            <div class="item-wrap">
                                                <h3 class="h3 text-uppercase">
                                                    <a href="{{url('/projects') . '/' .$project->id}}">{{$project->title}}</a>
                                                </h3>
                                                <div class="item-categories">
                                                    <span>Branding</span>
                                                </div>
                                            </div>
                                            <a href="{{url('/projects') . '/' .$project->id}}" class="portfolio-icon-link"><i class="ion-link"></i></a>
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
    @else
        <br>
    @endif
    <br>
    <!--================= End Projects Section ==================-->


@endsection