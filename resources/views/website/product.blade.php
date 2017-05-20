@extends('layout.master')
@section('content')
    <!--================= Start Page Header Section ==================-->
    <section class="page_section nopadding">
        <div class="overlay">
            <?php
                $images = explode(PHP_EOL, $product->images);
            ?>

            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/product-header.jpg')}}')">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">Product</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">{{$product->title}}</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}">Home</a></li>
                <li><a href="{{url('products')}}">Products</a></li>
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
                            $images = explode(PHP_EOL, $product->images);
                        ?>
                        @foreach($images as $image)
                            @if($loop->iteration < count($images))
                                @if($image != "")
                                    <div class="item"><img src="{{url('public/images/' . $image)}}" alt="#"></div>
                                @else
                                    <img src="{{url('public/images/' . $image)}}">
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portfolio-single-wrapper">
                        <h2>Description</h2>
                        <div class="description">
                            <p>{{$product->description}}</p>


                        </div>

                        <div class="portfolio-details">
                            <h2>info</h2>
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <i class="ion-ios-clock-outline"></i> <span> Size : </span> {{$product->size}}
                                </li>
                                <li class="entry-option">
                                    <i class="ion-android-person"></i> <span> Area : </span> {{$product->area}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================= End Portfolio Single Section ==================-->
@endsection