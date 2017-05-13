@extends('layout.master')
@section('content')

    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('images/contact_head.jpg')}}');">
            </div>
        </div>
        <div class="page-header full text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">Contact</h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s">we're always open to talk
                            to good people</h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Contact</li>
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
                                <div id="contactmap" data-position-latitude="27.692548"
                                     data-position-longitude="85.3361"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact_holder">
                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-call"></span></div>
                                    <div class="info_holder">
                                        <h4>call us</h4>
                                        +977 (9841) 75 23 20
                                    </div>
                                </div>

                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-pin"></span></div>
                                    <div class="info_holder">
                                        <h4>Address</h4>
                                        245 Quigley Blvd, Ste K
                                    </div>
                                </div>

                                <div class="icon_box">
                                    <div class="icon"><span class="ion-android-mail"></span></div>
                                    <div class="info_holder">
                                        <h4>Email</h4>
                                        <a href="mailto:#">support@mine.co</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--================= End Google map ==================-->
                    <div class="row">
                        <div class="contact_form">
                            <div id="note"></div>
                            <div id="fields">
                                <form id="contact-form" action="contact2.html#" class="form" name="sentMessage"
                                      novalidate>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group"> <!-- Your name input -->
                                            <p class="help-block text-danger"></p>
                                            <input type="text" autocomplete="off" class="form-control"
                                                   placeholder="Name" id="name" required="" name="name"
                                                   data-validation-required-message="Please enter your name.">
                                        </div>
                                        <div class="form-group"> <!-- Your email input -->
                                            <p class="help-block text-danger"></p>
                                            <input type="email" autocomplete="off" class="form-control"
                                                   placeholder="Email" id="email" required="" name="mail"
                                                   data-validation-required-message="Please enter your email address.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 p0">
                                        <div class="form-group"> <!-- Your email input -->
                                            <p class="help-block text-danger"></p>
                                            <textarea class="form-control" placeholder="Message" id="message"
                                                      name="message" required=""
                                                      data-validation-required-message="Please enter a message."></textarea>
                                            <div id="success"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label><span
                                                    class="ion-android-alert"> All the fields are required</span></label>

                                        <button type="submit" class="send_btn pull-right" id="submit-message">submit
                                            message
                                        </button>
                                        <div id="msg" class="message"></div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= End Contact Section ==================-->



@endsection