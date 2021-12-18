<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<body>
<!--Start Header-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand d-flex" href="#">
            <img src="images/logo.png" alt="Qazaq Green Logo">
            <img src="images/slogan.png" alt="Qazaq Green Slogan">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        <li class="nav-item"><a href="{{route('vie')}}" class="nav-link">{{__('front.menu_vek_about')}}</a></li>
                        <li class="nav-item"><a href="{{route('law')}}" class="nav-link">{{__('front.menu_vek_law')}}</a></li>
                        <li class="nav-item"><a href="{{route('material')}}" class="nav-link">{{__('front.menu_vek_material')}}</a></li>
                    </ul>
                </li>
                <li class="nav-item position-relative">
                    <a id="menu_news" class="nav-link dropdown-toggle {{ Request::is(LaravelLocalization::getCurrentLocale().'/associations-new/*') ? 'active' : '' }}">{!! __('front.menu_news') !!}</a>
                    <ul id="target_news">
                        <li class="nav-item"><a href="{{route('front-news')}}" class="nav-link">{{__('front.menu_news_new')}}</a></li>
                        <li class="nav-item"><a href="{{route('front-smi')}}" class="nav-link">{{__('front.menu_news_smi')}}</a></li>
{{--                        <li class="nav-item"><a href="{{route('front-event')}}" class="nav-link">{{__('front.menu_event')}}</a></li>--}}
                    </ul>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link">{{__('front.menu_press')}}</a>
                </li>
                <li class="nav-item position-relative">
                    <a href="{{route('front-event')}}" class="nav-link {{ Request::is(LaravelLocalization::getCurrentLocale().'/event') ? 'active' : '' }}">Анонс</a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link">{{__('front.menu_contact')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{LaravelLocalization::getCurrentLocaleNative()}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
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
                <p class="mt-2 text-white">Объединение юридических лиц <br>
                    Ассоциация "QAZAQ GREEN"</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-white">
                        <h6>Контакты</h6>
                        <p>+7 701 286 69 50 <br>
                            +7 702 939 93 95 (English speaking)
                        </p>
                        <p>info@spaq.kz</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-white">
                        <h6>Адрес</h6>
                        <p>улица Княгинина 11, м-он Чубары <br>
                            010000, город Нур-Султан
                        </p>
                        <p>Республика Казахстан</p>
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
        loop: true,
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
        loop: true,
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
        loop: true,
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
        loop: true,
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

</body>
</html>
