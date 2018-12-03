<header id="header" class="type1 on_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-9 ">
                    <a style="height: 10px;font-size: 27px;color: #fff9f9;margin-bottom: 20px;font-style: unset;font-family: initial;"
                       href="tel:19635">19635</a>
                </div>

                <div class=" col-sm-3 col-xs-12">
                    <input class="form-control " type="text" style="text-align: right"
                           placeholder="إبحث  "
                           aria-label="Search">
                </div>


            </div>
            <div class="col-md-12">
                <div class="logo_sect">
                    <a href="{{url('/')}}" class="logo" title=""><img
                                src="{{url('public/images/partners/'.$seo->logo)}}"
                                class="mine-logo" alt=""></a>
                </div>

                <nav class="primary_menu">
                    <ul class="main-menu">
                        <li class="{{Request::is('/') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('/')}}" title="">الرئيسية</a>
                        </li>

                        <li class="{{Request::is('about*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('about')}}" title="">عن الشركة</a>
                        </li>
                        <li class="{{Request::is('services*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('services')}}">خدماتنا</a>
                        </li>

                        <li class="{{Request::is('contact*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('contact')}}">اتصل بنا</a>
                        </li>
                        <li class="{{Request::is('blog*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('blog')}}">اخر الاخبار</a>
                        </li>

                        <li class="{{Request::is('team*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('team')}}">فريق العمل</a>
                        </li>

                        <li class="{{Request::is('careers*') ? 'active' : ''}} scroll has-child">
                            <a href="{{url('careers')}}">الوظائف </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
