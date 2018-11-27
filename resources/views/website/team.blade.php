@extends('layout.master')
@section('content')

    <!--================= Start Page Header Section ==================-->
    <section class="page_section nopadding">
        <div class="overlay">
            <div class="background-overlay overlay_opacity_15 overlay_grayscale"
                 style="background-image: url('{{url('public/images/projects.jpg')}}');">
            </div>
        </div>
        <div class="page-header text-center">
            <div class="table">
                <div class="inner">
                    <div class="page-header-content">
                        <h1 class="page-header-title wow fadeInUp" data-wow-delay="0.10s">فريق العمل </h1>
                        <h2 class="page-header-subtitle wow fadeInUp" data-wow-delay="0.20s"></h2>
                        <div class="underline"><i class="fa fa-circle-thin"></i></div>
                    </div>
                </div>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{url('#')}}">الرئيسيه</a></li>
                <li class="active">فريق العمل</li>
            </ol>
        </div>
    </section>
    <!--================= End Page Header Section ==================-->


    <!--================= Start Blog section ==================-->
    <section class="bg-light type1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h2>Team member</h2>
                    <div class="underline"><i class="fa fa-circle-thin"></i></div>
                </div>
            </div>
            <div class="row">
                <?php $i = 0 ?>
                @foreach($members as $item)
                    <?php $i++ ?>
                    <div class="col-md-6 pull-right">
                        <div class="row">
                            <div class="team_block">
                                @if($i==1 ||$i==2)
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding @if($i==1 ||$i==2)img-left @else img-right @endif ">
                                        <img src="{{url('public/images/team/'.$item->photo)}}" alt="{{$item->name}}"
                                             style="height:293px;width: 283px;">
                                        <svg viewBox="0 0 25 100" class="curved-shape">
                                            <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                        </svg>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                        <div class="wl-team-descript">
                                            <div class="team_name">
                                                <h3>{{$item->name}}</h3>
                                                <p>{{$item->position}}</p>
                                            </div>
                                            <p>
                                            {{str_limit($item->biography, 200)}} <!-- 200 -->
                                            </p>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding">
                                        <div class="wl-team-descript">
                                            <div class="team_name">
                                                <h3>{{$item->name}}</h3>
                                                <p>{{$item->position}}</p>
                                            </div>
                                            <p>
                                                {{str_limit($item->biography, 200)}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-12 nopadding @if($i==1 ||$i==2)img-left @else img-right @endif ">
                                        <img src="{{url('public/images/team/'.$item->photo)}}" alt="{{$item->name}}"
                                             style="height:293px;width: 283px;">
                                        <svg viewBox="0 0 25 100" class="curved-shape">
                                            <path d="M0,100c0-37.5,25-37.5,25-50S0,37.5,0,0"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($i == 4)
                        <?php $i = 0; ?>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

@endsection