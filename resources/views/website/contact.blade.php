@extends('layout.master')
@section('content')

    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/contact_head.jpg')}}');">
            </div>
        </div>
        <div class="page-header full text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">اتصل بنا</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">خدمه 24 ساعه فى اليوم</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">الرئيسيه</a></li>
                <li class="active">اتصل بنا</li>
            </ol>
        </div>
    </section>
    <!--================= Start Contact Section ==================-->
    <section class="contact type3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--================= Start Google map ==================-->
                    <div class="row mb60">
                        <div class="col-md-8">
                            <div class="contact-map">
                                <div id="contactmap" data-position-latitude="30.0737198"
                                     data-position-longitude="31.3441064"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact_holder">
                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-call"></span></div>
                                    <div class="info_holder">
                                        <h4>رقم الهاتف</h4>
                                        (02)23052771
                                    </div>
                                </div>

                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-pin"></span></div>
                                    <div class="info_holder">
                                        <h4>العنوان</h4>
                                        22 Military Logistics Buildings, Naser City , Cairo
                                    </div>
                                </div>

                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-mail"></span></div>
                                    <div class="info_holder">
                                        <h4>البريد الالكترونى</h4>
                                        <a href="mailto:#">info@ems-min.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--================= End Google map ==================-->
                </div>
            </div>
        </div>
    </section>
    <!--================= End Contact Section ==================-->



@endsection