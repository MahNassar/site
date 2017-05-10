@extends('layout.master')
@section('content')

    <!--================= Start Page Header Section ==================-->
    <section class="page_section nopadding type1">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/'.$about->image)}}');">
            </div>
        </div>
        <div class="page-header half text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">
                            {{$about->company_slogan}}
                        </h1>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </section>
    <!--================= End Page Header Section ==================-->


    <!--================= Start About and skill Section ==================-->
    <section class="about about-single">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="about-desc">
                        <h2>{{$about->company_name}}</h2>
                        <p>
                            {{$about->company_info}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= End About and skill Section ==================-->


    <!--================= Start Fun Fact Section ==================-->
    {{--<section>--}}
        {{--<div class="overlay"></div>--}}
        {{--<div class="background-overlay" style="background-image: url('{{url('public/images/fact_bg.jpg')}}');"></div>--}}
        {{--<div id="facts">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-12 text-center">--}}
                        {{--<div class="fact-item">--}}
                            {{--<div class="fact-number" data-count="92">--}}
                                {{--<div class="icon-wine"></div>--}}
                                {{--<h3 class="fact-desc">Products</h3>--}}
                                {{--<div class="count-focus">92</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-12 text-center">--}}
                        {{--<div class="fact-item">--}}
                            {{--<div class="fact-number" data-count="231">--}}
                                {{--<div class="icon-bike"></div>--}}
                                {{--<h3 class="fact-desc"> Projects</h3>--}}
                                {{--<div class="count-focus">231</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-12 text-center">--}}
                        {{--<div class="fact-item">--}}
                            {{--<div class="fact-number" data-count="414">--}}
                                {{--<div class="icon-happy"></div>--}}
                                {{--<h3 class="fact-desc">Clients</h3>--}}
                                {{--<div class="count-focus">414</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6 col-xs-6 col-12 text-center">--}}
                        {{--<div class="fact-item">--}}
                            {{--<div class="fact-number" data-count="543">--}}
                                {{--<div class="icon-trophy"></div>--}}
                                {{--<h3 class="fact-desc">Services</h3>--}}
                                {{--<div class="count-focus">543</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--================= End Fun Fact Section ==================-->


    <!--================= Start Process Section ==================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>About Company </h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- process begin -->
                <div class="process-icon col-md-6 col-sm-6 col-xs-12 col-12">
                    <div class="inner">
                        <i class="icon-tools"></i>
                        <div class="text">
                            <h3>Company Mission</h3>
                            <p>{{$about->company_mission}}</p>
                        </div>
                    </div>
                </div>
                <!-- process close -->

                <!-- process begin -->
                <div class="process-icon col-md-6 col-sm-6 col-xs-12 col-12">
                    <div class="inner">
                        <i class="icon-desktop"></i>
                        <div class="text">
                            <h3>Company Vission </h3>
                            <p>{{$about->company_vission}}</p>
                        </div>
                    </div>
                </div>
                <!-- process close -->

                <!-- process begin -->
                <!-- process close -->
            </div>
        </div>
    </section>
    <!--================= End Process Section ==================-->


    <!--================= Start Team Section ==================-->
    <section class="bg-light type2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Team member</h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
            <div class="row">
                <!--team-->
                <div class="team-wrapper">
                    @foreach($teamItems as $item)
                        <div class="col-md-3 col-sm-4 col-xs-6 col-12">
                            <div class="team_block">
                                <div class="team_item">
                                    <img src="{{url('public/images/team/'.$item->photo)}}" alt="Alt">
                                    <div class="profile_links">
                                        <p>{{str_limit($item->biography, 200)}}</p>
                                    </div>
                                </div>
                                <div class="team_name">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->position}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

@endsection