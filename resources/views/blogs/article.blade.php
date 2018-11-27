@extends('layout.master')

@section('content')
    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/blog/' . $article->image)}}');">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">اخر اخبارنا </h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">
                            {{$article->abstract}}
                        </h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">الرئيسيه</a></li>
                <li class="active">اخر الاخبار</li>
            </ol>
        </div>
    </section>


    <section class="blog-single type1">
        <div class="container relative">
            <div class="row">
                <!-- content -->
                <div class="col-md-8 col-md-offset-2">

                    <!-- standard post -->
                    <article class="entry-item">
                        <div class="entry-img">
                            <a href="blog-single.html">
                                <img src="{{url('public/images/blog/' . $article->image)}}" alt="{{$article->title}}"/>
                            </a>
                        </div>

                        <div class="entry">
                            <div class="entry-head">
                                <h2 class="entry-title">
                                    <a href="blog-single.html">{{$article->title}}</a>
                                </h2>
                                <div class="entry-meta list-inline">
                                      <span class="entry-date">
                                        <i class="fa fa-clock-o"></i>
                                          {{$article->created_at}}
                                      </span>

                                </div>
                            </div>
                            <div class="entry-content">
                                {{$article->topic}}
                            </div>

                        </div>
                    </article> <!-- end standard post -->
                </div>
            </div>
        </div>
    </section>

@endsection
