@extends('layout.master')
@section('content')
    <!--================= Start Page Header Section ==================-->
    <section class="page_section nopadding">
        <div class="overlay">>

            <?php
            $images = explode(PHP_EOL, $project->images);
            ?>

            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url({{url('public/images/projects/' . $images[0])}})">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">
                            Project
                        </h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">
                            {{$project->title}}
                        </h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}">Home</a></li>
                <li class="active">Project</li>
            </ol>
        </div>
    </section>
    <!--================= End Page Header Section ==================-->


    <!--================= Start Portfolio Single Section ==================-->
    <section class="portfolio-single portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $images = explode(PHP_EOL, $project->images);
                        ?>

                        @foreach($images as $image)
                            @if($image != "")
                                <div class="item"><img src="{{url('public/images/projects/' . $image)}}" alt="{{$project->title}}"
                                                       width="500px" height="400px"></div>
                            @else
                                <img src="{{url('public/images/projects/' . $images[0])}}" width="500px" height="400px">
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portfolio-single-wrapper">
                        <h2>Description</h2>
                        <div class="description">
                            <p>{{$project->description}}</p>


                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================= End Portfolio Single Section ==================-->
@endsection