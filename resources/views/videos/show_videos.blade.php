@extends('layout.master')

@section('content')
    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/blog/ems-blog.jpg')}}');">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">Videos</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s"></h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Videos</li>
            </ol>
        </div>
    </section>

    <section class="type2">
        <div class="container relative">
            <div class="row">
                <!-- content -->
                <div class="col-md-12">
                    <div class="blog-posts-content row">

                        @foreach($videos as $video)
                            <div class="col-md-4 col-sm-6 col-xs-6 col-12 masonry">
                                <!-- standard post -->
                                <article class="entry-item">
                                    <div class="entry-img">
                                        <iframe width="360" height="230"
                                                src="{{ preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$2",$video->url )}}"
                                                frameborder="0" allowfullscreen></iframe>
                                    </div>

                                    <div class="entry">
                                        <div class="entry-head text-center">
                                            <h2 class="entry-title">
                                                    {{$video->title}}
                                            </h2>
                                        </div>

                                        <div class="entry-content">
                                            <p>
                                                {{$video->abstract}}
                                            </p>
                                        </div>

                                    </div>
                                </article> <!-- end standard post -->
                            </div><!-- end col -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection