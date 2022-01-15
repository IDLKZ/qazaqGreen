@extends('layouts.default')
@section('content')
    <!--Start Slider-->
    <section style="height: calc(100vh*0.8)" id="carousel">
        <!-- If we need navigation buttons -->
        <div class="d-flex carousel-btn-2">
            <span class="me-2"><a class="button-previous text-white">&#10094;</a></span>
            <span class="ms-2"><a class="button-next text-white">&#10095;</a></span>
        </div>
        <!-- Slider main container -->
        <div style="height: 100%" class="swiper crs">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            @if($sliders)
                <!-- Slides -->
                    @foreach($sliders as $slider)
                        <div class="swiper-slide position-relative">
                            <img src="{{$slider->getFile('image')}}" style="width: 100%;height: 100%">
                            <h6 class="crs-title-2">{!! $slider->getDescriptionAttribute() !!}</h6>
                        </div>
                    @endforeach
                @else
                <!-- Slides -->
                    <div class="swiper-slide position-relative">
                        <img src="images/back.png">
                        <h4 class="crs-title-2">Единая площадка для казахстанских
                            и международных игроков
                            в отрасли зеленой энергетики</h4>
                    </div>
                    <div class="swiper-slide position-relative">
                        <img src="images/back_2.png">
                        <h2 class="crs-title">Единая площадка для казахстанских
                            и международных игроков
                            в отрасли зеленой энергетики</h2>
                    </div>
                @endif
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>

    </section>
    <!--End Slider-->
@endsection
