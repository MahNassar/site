@extends('layout.master')
@section('content')

    <!--================= Start Page Header Section ==================-->
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
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">Products</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">WE SHARE OUR BEST
                            Products</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="">Products</a></li>
            </ol>
        </div>
    </section>
    <!--================= End Page Header Section ==================-->


    <!--================= Start Blog section ==================-->
    <section class="type2">
        <div class="container relative">
            <div class="row">
                <!-- content -->
                <div class="col-md-12">
                    <div class="blog-posts-content row">
                        <!-- post col -->
                        @foreach($products as $product)
                            <?php
                            $images = explode(PHP_EOL, $product->images);
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 col-12 masonry">
                                <!-- standard post -->
                                <article class="entry-item">
                                    <div class="entry-img">
                                        <a href="{{url('').'/products/'.$product->id}}">
                                            <img src="{{url('public/images/' . $images[1])}}"
                                                 alt="Post Image" style="width: 400px;height: 270px;"/>
                                        </a>
                                    </div>

                                    <div class="entry">
                                        <div class="entry-head text-center">
                                            <h2 class="entry-title">
                                                <a href="{{url('').'/products/'.$product->id}}">{{$product->title}}</a>
                                            </h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{str_limit($product->abstract, 130)}}</p>

                                            <div class="entry-footer">

                                                <a href="{{url('').'/products/'.$product->id}}" class="send_btn">
                                                    Read More <i class="ion-arrow-right-c"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </article> <!-- end standard post -->
                            </div><!-- end col -->

                        @endforeach

                    </div>


                </div> <!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!--================= End Blog section ==================-->


@endsection