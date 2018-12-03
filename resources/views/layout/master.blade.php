<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feed - فييد</title>
    <meta name="description" content="{{$seo->meta_description}}">
    <meta name="keywords" content="{{$seo->meta_keywords}}">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic"
          rel="stylesheet" type="text/css">
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Revolution css -->
    <link rel="stylesheet" type="text/css" href="{{url('public/vendor/rs-plugin/css/settings.css')}}" media="screen"/>
    <link href="{{url('public/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('public/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('public/css/et-line.css')}}" rel="stylesheet">
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Owl Carosel css -->
    <link rel="stylesheet" href="{{url('public/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('public/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('public/css/owl.theme.css')}}">
    <link href="{{url('public/css/style.css')}}" rel="stylesheet">
    <link href="{{url('public/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('public/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- FAVICON FILES -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-75638957-2', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body class="appear-animate">

<!--================= Start preloader ==================-->
<div class="loader">
    <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<!--================= End preloader ==================-->


<!--================= Start Navigation ==================-->
@include('layout.header')
<!--================= End Navigation ==================-->


@yield('content')
<!--================= Start Footer ==================-->
@include('layout.footer')
<!--================= End footer ==================-->


<!--================= Start JS sctipts ==================-->
<script src="{{url('public/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="{{url('public/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/vendor/rs-plugin/js/jquery.themepunch.revolution.js')}}"></script>
<script src="{{url('public/js/plugins.js')}}"></script>
<script src="{{url('public/js/contact.map.js')}}"></script>
<script src="{{url('public/js/main.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="{{url('public/js/placeholder.js')}}"></script><![endif]-->


<!--================= End JS sctipts ==================-->
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 8
            }
        }
    })

    $('.xyz').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<script>
    var total_menu_items = $('#header.type1 .primary_menu > ul > li').length;  //Get the count of the all menu items
    var half_position_even = total_menu_items / 2;   //If the count is even, just directly divide by 2
    var half_position_odd = (total_menu_items - 1) / 2;   //If the count is odd, just adding 1 in order to make it to be an even, then divide by 2
    var logo_html = '<li class="logo"><a href="/"><img src="{{url('public/images/partners/'.$seo->logo)}}" alt="Feed" class="img-responsive mine-logo"/></a></li>'; //LOGO HTML
    var ex = /^\d+$/;
    if (ex.test(total_menu_items / 2)) {
        $('#header.type1 .primary_menu > ul > li:nth-child(' + half_position_even + ')').after(logo_html);
    } else {
        $('#header.type1 .primary_menu > ul > li:nth-child(' + half_position_odd + ')').after(logo_html);
    }


</script>
</body>
</html>