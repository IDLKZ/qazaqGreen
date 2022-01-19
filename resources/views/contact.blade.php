@extends('layouts.default')
@push('css')
    <style>
        #contact-page img {
            width: 20px;
            height: 20px;
            margin-right: 15px;
        }
        iframe {width: 100%}
    </style>
@endpush
@section('content')
    <div class="container my-container py-3">
        <div class="under-title">
            <h1>{{__('front.menu_contact')}}</h1>
        </div>

        <div class="row my-5" id="contact-page">
            <div class="col-md-6 col-sm-12">
                <div class="d-flex align-items-center">
                    <img src="{{asset('images/contact-map.png')}}">
                    <span>ул. Сыганак 43, 010000, бизнес-центр «Ансар», <br> г. Нур-Султан, Республика Казахстан</span>
                </div>
                <div class="d-flex my-3 align-items-center">
                    <img src="{{asset('images/contact-phone.png')}}">
                    <span>
                            +7 701 286 69 50 <br>
                        +7 702 939 93 95 (English speaking)
                        </span>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{asset('images/contact-email.png')}}">
                    <span>info@spaq.kz</span>
                </div>
                <div class="d-flex my-5 align-items-center">
                    <a href="https://www.facebook.com/SPAQ.KZ/" target="_blank">
                        <img src="{{asset('images/-facebook.png')}}">
                    </a>
                    <a href="https://youtube.com/channel/UC7ur9U0b2kO8pHVii2UoN1A" target="_blank">
                        <img src="{{asset('images/youtube.png')}}">
                    </a>
{{--                    <a href="https://www.facebook.com/SPAQ.KZ/" target="_blank">--}}
{{--                        Ассоциация ВИЭ "Qazaq Green"--}}
{{--                        </a>--}}
                </div>
{{--                <div class="d-flex align-items-center">--}}
{{--                    <a href="https://youtube.com/channel/UC7ur9U0b2kO8pHVii2UoN1A" target="_blank">--}}
{{--                        <img src="{{asset('images/youtube.png')}}">--}}
{{--                    </a>--}}
{{--                    <a href="https://youtube.com/channel/UC7ur9U0b2kO8pHVii2UoN1A" target="_blank">--}}
{{--                        Ассоциация ВИЭ Qazaq Green--}}
{{--                        </a>--}}
{{--                </div>--}}
            </div>
            <div class="col-md-6 col-sm-12">
                <a class="dg-widget-link"
                   href="http://2gis.kz/nur_sultan/firm/70000001028064268/center/71.43123865127565,51.12378179366606/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                    на карте Нур-Султана</a>
                <div class="dg-widget-link"><a
                        href="http://2gis.kz/nur_sultan/firm/70000001028064268/photos/70000001028064268/center/71.43123865127565,51.12378179366606/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                        компании</a></div>
                <div class="dg-widget-link"><a
                        href="http://2gis.kz/nur_sultan/center/71.431236,51.123529/zoom/16/routeTab/rsType/bus/to/71.431236,51.123529╎Ансар, бизнес-центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                        проезд до Ансар, бизнес-центр</a></div>
                <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                <script charset="utf-8">new DGWidgetLoader({
                        "height": 400,
                        "borderColor": "#a3a3a3",
                        "pos": {"lat": 51.12378179366606, "lon": 71.43123865127565, "zoom": 16},
                        "opt": {"city": "nur_sultan"},
                        "org": [{"id": "70000001028064268"}]
                    });</script>
                <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript.
                    Включите его в настройках вашего браузера.
                </noscript>
            </div>
        </div>
    </div>
@endsection
