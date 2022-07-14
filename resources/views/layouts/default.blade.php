<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--    <link rel="stylesheet" href="css/slider.css">-->
    <title>Qazaq Green</title>
    <base href="/">
    @stack('css')
</head>
<style>
    .bg-jk {
        background-color: rgba(3, 140, 195, 1);
        color: white!important;
    }
    .glowing-btn span{
        position: absolute;
        display: block;
    }
    .glowing-btn span:nth-child(1){
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg,transparent,white);
        animation: animate1 1s linear infinite;
    }
    @keyframes animate1{
        0%{
            left: -100%;
        }
        50%,100%{
            left: 100%;
        }
    }
    .glowing-btn span:nth-child(2){
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg,transparent,white);
        animation: animate2 1s linear infinite;
        animation-delay: 0.25s;
    }
    @keyframes animate2{
        0%{
            top: -100%;
        }
        50%,100%{
            top: 100%;
        }
    }
    .glowing-btn span:nth-child(3){
        bottom: 0;
        right: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg,transparent,white);
        animation: animate3 1s linear infinite;
        animation-delay: 0.50s;
    }
    @keyframes animate3{
        0%{
            right: -100%;
        }
        50%,100%{
            right: 100%;
        }
    }


    .glowing-btn span:nth-child(4){
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg,transparent,white);
        animation: animate4 1s linear infinite;
        animation-delay: 0.75s;
    }
    @keyframes animate4{
        0%{
            bottom: -100%;
        }
        50%,100%{
            bottom: 100%;
        }
    }

    .play-btn {
        /*background: radial-gradient( rgba(3, 140, 195, 1) 60%, rgba(255, 255, 255, 1) %);*/
        position: relative;
        display: block;
        /*border-radius: 10%;*/
        /*margin: 100px auto;*/
        box-shadow: 0 0 5px 1px rgba(3, 140, 195, 1);
    }

    /* triangle */
    .play-btn::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-40%) translateY(-50%);
        transform: translateX(-40%) translateY(-50%);
        transform-origin: center center;
        width: 0;
        height: 0;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        border-left: 2px solid #fff;
        z-index: 100;
        -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    /* pulse wave */
    .play-btn:before {
        content: "";
        position: absolute;
        width: 150%;
        height: 150%;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate1 2s;
        animation: pulsate1 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        /*border-radius: 50%;*/
        border: 5px solid rgba(255, 255, 255, .75);
        top: -25%;
        left: -25%;
        background: rgba(198, 16, 0, 0);
    }

    @-webkit-keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }

    @keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }
        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }

</style>
<body>
<!--Start Header-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand d-flex" href="#">
{{--            <div style='background: url("images/spaq_logo_RU.png") no-repeat center;background-size: contain;width: 180px;height: 72px'></div>--}}
            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                <div style='width: 200px;height: 75px;background: url("{{asset('images/logo_ru.svg')}}") no-repeat center; background-size: cover;'></div>
            @elseif(LaravelLocalization::getCurrentLocale() == 'kz')
                <div style='width: 200px;height: 75px;background: url("{{asset('images/logo_kz.svg')}}") no-repeat center; background-size: cover;'></div>
            @else
                <div style='width: 200px;height: 75px;background: url("{{asset('images/logo_en.svg')}}") no-repeat center; background-size: cover;'></div>
            @endif

{{--            <img src="{{asset('images/logo.png')}}" alt="Qazaq Green Logo">--}}
{{--            <img src="{{asset('images/slogan.png')}}" alt="Qazaq Green Slogan">--}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-start" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item position-relative">
                    <a class="nav-link {{ Request::is(LaravelLocalization::getCurrentLocale()) ? 'active' : '' }}" href="{{route('main')}}">{{__('front.menu_main')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a href="{{route('aboutAssociation')}}" class="nav-link {{ Request::is(LaravelLocalization::getCurrentLocale().'/about-association') ? 'active' : '' }}">{{__('front.menu_about')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a id="menu_vek" class="nav-link dropdown-toggle {{ Request::is(LaravelLocalization::getCurrentLocale().'/about/*') ? 'active' : '' }}">{!! __('front.menu_vek') !!}</a>
                    <ul id="target_vek">
                        <li class="nav-item me-0"><a href="{{route('vie')}}" class="nav-link">{{__('front.menu_vek_about')}}</a></li>
                        <li class="nav-item me-0"><a href="{{route('law')}}" class="nav-link">{{__('front.menu_vek_law')}}</a></li>
                        <li class="nav-item me-0"><a href="{{route('material')}}" class="nav-link">{{__('front.menu_vek_material')}}</a></li>
                    </ul>
                </li>
                <li class="nav-item position-relative">
                    <a id="menu_news" class="nav-link dropdown-toggle {{ Request::is(LaravelLocalization::getCurrentLocale().'/associations-new/*') ? 'active' : '' }}">{!! __('front.menu_news') !!}</a>
                    <ul id="target_news">
                        <li class="nav-item me-0"><a href="{{route('front-news')}}" class="nav-link">{{__('front.menu_news_new')}}</a></li>
                        <li class="nav-item me-0"><a href="{{route('front-smi')}}" class="nav-link">{{__('front.menu_news_smi')}}</a></li>
{{--                        <li class="nav-item"><a href="{{route('front-event')}}" class="nav-link">{{__('front.menu_event')}}</a></li>--}}
                    </ul>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link" target="_blank" href="https://qazaqgreen.com/">{{__('front.menu_press')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a href="{{route('front-event')}}" class="nav-link {{ Request::is(LaravelLocalization::getCurrentLocale().'/event') ? 'active' : '' }}">{{__('front.menu_event')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a href="{{route('front-contact')}}" class="nav-link {{ Request::is(LaravelLocalization::getCurrentLocale().'/contact') ? 'active' : '' }}">{{__('front.menu_contact')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a class="btn btn-round bg-jk font-weight-bold glowing-btn play-btn" target="_blank" href="https://qazaqgreen.com/">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Qazaq Green
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{LaravelLocalization::getCurrentLocaleNative()}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink" style="font-size: 12px">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item text-capitalize" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End Header-->

@yield('content')

<!--Start Footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="images/footer_logo.png" alt="Footer Logo">
                <p class="mt-2 text-white">{!! __('front.footer_text') !!}
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-white">
                        <h6 class="fw-normal">{{__('front.menu_contact')}}</h6>
                        <p class="my-4">+7 701 286 69 50 <br>
                            +7 702 939 93 95 (English speaking) <br> info@spaq.kz
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-white">
                        <h6 class="fw-normal">{{__('front.address')}}</h6>
                        <p class="my-4">{!! __('front.footer_address') !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script>
    let countSlides = 1,
        target_vek = $('#target_vek'),
        target_news = $("#target_news");
    // target_vek = getComputedStyle(target_vek[0])
    // target_news = getComputedStyle(target_news[0])

    if (window.screen.width < 500){
        countSlides = 1
        $('#menu_vek').click(function () {
            if (target_vek.css('display') == 'none') {
                target_vek.css('display', 'block')
                target_vek.css('position', 'relative')
                target_vek.css('margin-left', '10px')
            } else {
                target_vek.css('display', 'none')
            }
        })
        $('#menu_news').click(function () {
            if (target_news.css('display') == 'none') {
                target_news.css('display', 'block')
                target_news.css('position', 'relative')
                target_news.css('margin-left', '10px')
            } else {
                target_news.css('display', 'none')
            }
        })
    }
    if (500 < window.screen.width && window.screen.width < 767) {
        countSlides = 2
    }
    if (window.screen.width > 767) {
        countSlides = 4
    }
    const crs = new Swiper('.crs', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: 1,

        // Navigation arrows
        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-previous',
        },
    });
    const swiper = new Swiper('.sw', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: countSlides,

        // Navigation arrows
        navigation: {
            nextEl: '.next',
            prevEl: '.previous',
        },
    });
    const swiper2 = new Swiper('.sw2', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: countSlides,

        // Navigation arrows
        navigation: {
            nextEl: '.next2',
            prevEl: '.previous2',
        },
    });
    const swiper3 = new Swiper('.sw3', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        slidesPerView: countSlides,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        // Navigation arrows
        navigation: {
            nextEl: '.next3',
            prevEl: '.previous3',
        },
    });

    // $(document).click(function () {
        // if($(".navbar-collapse").hasClass("in")){
        // $('.navbar-collapse').collapse('hide');
        // }
        $('.navbar-nav li a').on('click', function(){
            if(!$( this ).hasClass('dropdown-toggle')){
                $('.navbar-collapse').collapse('hide');
            }
        });
    // });
</script>
@stack('js')
</body>
</html>
