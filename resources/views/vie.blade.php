@extends('layouts.default')
@section('content')
    <!--Start Slider-->
    <section style="height: calc(100vh*0.7)" id="carousel">
        <!-- If we need navigation buttons -->
        <div class="d-flex carousel-btn">
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
                            <img src="{{$slider->getFile('image')}}" style="width: 100%">
                            <h2 class="crs-title">{{$slider->title}}</h2>
                        </div>
                    @endforeach
                @else
                <!-- Slides -->
                    <div class="swiper-slide position-relative">
                        <img src="images/back.png">
                        <h2 class="crs-title">Единая площадка для казахстанских
                            и международных игроков
                            в отрасли зеленой энергетики</h2>
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
