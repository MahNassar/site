@extends('layout.master')

@section('content')
    <!--================= Start Page Header Section ==================-->

    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/bg_services.jpg')}}');">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">خدماتنا</h1>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="#">الرئيسيه</a></li>
                <li><a href="">خدماتنا</a></li>
            </ol>
        </div>
    </section>


    <section class="type2">
        <div class="who_we_are">
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-3 col-sm-3 col-xs-6 col-12 pull-right text-right">
                            <div class="who-wrapper">
                                <img src="{{url('public/images/services/' . $service->image)}}" alt="#">
                                <div class="text">
                                    <a href="{{url('/services').'/'.$service->id}}">
                                        <h3>
                                            {{str_limit($service->title, 30)}}
                                        </h3>
                                    </a>
                                    <p>
                                        {{$service->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
