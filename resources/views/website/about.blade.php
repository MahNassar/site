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
                <li><a href="{{url('/')}}">الرئيسئه</a></li>
                <li class="active">عن الشركه</li>
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




@endsection