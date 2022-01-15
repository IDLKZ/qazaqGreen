@extends('layouts.default')
@push('css')
    <style>
        #contact-page img {
            width: 30px;
            height: 30px;
            margin-right: 15px;
        }
    </style>
@endpush
@section('content')
    <div class="container my-container py-3">
        <div class="under-title">
            <h1>{{__('front.menu_contact')}}</h1>
        </div>

        <div class="row my-5" id="contact-page">
            <div class="col-md-6 col-sm-12">
                <div class="d-flex">
                    <img src="{{asset('images/contact-map.png')}}">
                    <span>ул. Сыганак 43, 010000, бизнес-центр «Ансар», <br> г. Нур-Султан, Республика Казахстан</span>
                </div>
                <div class="d-flex my-3">
                    <img src="{{asset('images/contact-phone.png')}}">
                    <span>
                            +7 701 286 69 50 <br>
                        +7 702 939 93 95 (English speaking)
                        </span>
                </div>
                <div class="d-flex">
                    <img src="{{asset('images/contact-email.png')}}">
                    <span>info@spaq.kz</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1079.316542125863!2d71.41740148575623!3d51.178608708485335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245872d1cc47921%3A0xe7ec066188284d7f!2z0YPQu9C40YbQsCDQkdC10LnQsdC40YLRiNC40LvQuNC6IDQzLCDQndGD0YAt0KHRg9C70YLQsNC9IDAxMDAwMA!5e0!3m2!1sru!2skz!4v1642229092356!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
        </div>
    </div>
@endsection
