@extends('layouts.default')
@section('content')
    <!--Start Slider-->
    <section id="carousel">
        <!-- If we need navigation buttons -->
        <div class="d-flex carousel-btn">
            <span class="me-2"><a class="button-previous text-white">&#10094;</a></span>
            <span class="ms-2"><a class="button-next text-white">&#10095;</a></span>
        </div>
        <!-- Slider main container -->
        <div class="swiper crs">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @if($sliders)
                    <!-- Slides -->
                        <div class="swiper-slide position-relative">
                            <div style="width: 100%;height: 100%;background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.5)), url('/images/main_back.png') no-repeat center;background-size: cover"></div>
{{--                            <img src="images/back.jpg" style="width: 100%;height:100%;filter: brightness(50%);">--}}
{{--                            <img src="{{asset('images/main_back.png')}}" style="width: 100%;height:100%;filter: brightness(50%);">--}}
                            <h2 class="crs-title">{{__('front.slider_const')}}</h2>
                        </div>
                        @foreach($sliders as $slider)
                            <div class="swiper-slide position-relative">
                                <div style='background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.5)), url("{{$slider->getFile('image')}}") no-repeat center; background-size: cover; width: 100%; height: 100%'></div>
{{--                                <img src="{{$slider->getFile('image')}}" style="width: 100%;filter: brightness(50%);">--}}
                                <h2 class="crs-title">
                                    <a class="text-white text-decoration-none" href="{{route('front-single-new', $slider->slug)}}">{{$slider->title}}</a>
                                    <br>
                                    <br>
                                    <a href="{{route('front-single-new', $slider->slug)}}" class="crs-btn-2 btn">{{__('front.btn_more')}} ???</a>
                                </h2>
                            </div>
                        @endforeach
                    @else
                    <!-- Slides -->
                        <div class="swiper-slide position-relative">
                            <img src="images/back.png">
                            <h2 class="crs-title">???????????? ???????????????? ?????? ??????????????????????????
                                ?? ?????????????????????????? ??????????????
                                ?? ?????????????? ?????????????? ????????????????????</h2>
                        </div>
                        <div class="swiper-slide position-relative">
                            <img src="images/back_2.png">
                            <h2 class="crs-title">???????????? ???????????????? ?????? ??????????????????????????
                                ?? ?????????????????????????? ??????????????
                                ?? ?????????????? ?????????????? ????????????????????</h2>
                        </div>
                    @endif
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>

    </section>
    <!--End Slider-->

    <!--Start section activity-->
    <section id="activity" class="py-5">
        <div style="background: url('images/right_logo.png') no-repeat right; background-size: contain; width: calc(100vw*0.12); height: 100%; position: absolute; top: 0;right: 0"></div>
        <div class="container my-container">
            <h4>{{__('front.task')}}</h4>
            <div class="row mt-4 py-4">
                @if($tasks)
                    @foreach($tasks as $task)
                        <div class="my-col col-sm-12 act-block">
                            <div>{{$task->order}}</div>
                            <div>
                                {!! $task->title !!}
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="my-col col-sm-12 act-block">
                    <div>1</div>
                    <div>
                        ?????????????????????????? ?? ???????????? ?????????????????? ???????????? ????????????????????;
                    </div>
                </div>
                <div class="my-col col-sm-12 act-block">
                    <div>2</div>
                    <div>
                        ???????????????????? ??????????????????????????-?????????????????????????????? ???????????? ?????? ???????????? ???????????????????? ?? ???????????????????????????????? ???????????????????? ???? ???????????????? ???????????????????? ???????????????? ?????????????????? ???????????????????? ?? ????????????????????
                    </div>
                </div>
                <div class="my-col col-sm-12 act-block">
                    <div>3</div>
                    <div>
                        ?????????????????? ?????????????????????????????? ?????????????? ?????????? ???????????????? ?????????????????????? ?? ?????????????????????????????? ?????????? ???????????????????? ??????????????????
                    </div>
                </div>
                <div class="my-col col-sm-12 act-block">
                    <div>4</div>
                    <div>
                        ???????????????????????????? ?? ???????????????????????????? ?????????????????????? ??????????????????????
                    </div>
                </div>
                <div class="my-col col-sm-12 act-block">
                    <div>5</div>
                    <div>
                        ?????????????????????????? ?????????????? ???? ?????????????????????????? ?????????? ?????? ?????????????????????? ???????????????????? ?? ?????????????????? ??????????????
                    </div>
                </div>
                @endif
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route('aboutAssociation')}}" class="btn my-btn-outline-info mx-auto">{!! __('front.btn_more_ass') !!}</a>
            </div>
        </div>
{{--        <img src="images/right_logo.png" class="my-auto" alt="Right Logo">--}}
    </section>
    <!--End section activity-->

    <!--Start section partners-->
    <section id="partners" class="py-5">
        <div class="container my-container">
            <div class="d-flex">
                <h4>{{__('front.partners')}}</h4>
                <div class="ms-md-5 d-flex">
                    <span class="me-2"><a class="previous">&#10094;</a></span>
                    <span class="ms-2"><a class="next">&#10095;</a></span>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper sw my-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @if($partners)
                        @foreach($partners as $partner)
                            <div class="swiper-slide">
                                <div class="swiper-in-slide" style='background: url("{{$partner->getFile('image')}}") no-repeat center; background-size: contain;margin: auto'></div>
                            </div>
                        @endforeach
                    @else
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-in-slide" style="background: url('images/1.png') no-repeat center; background-size: contain;"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-slide" style="background: url('images/2.png') no-repeat center; background-size: contain;"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-slide" style="background: url('images/3.png') no-repeat center; background-size: contain;"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-slide" style="background: url('images/4.png') no-repeat center; background-size: contain;"></div>
                    </div>
                        @endif
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>


    </section>
    <!--End section partners-->

    <!--Start management-->
    <section id="management" class="py-5">
        <div style="background: url('images/left_logo.png') no-repeat left; background-size: contain; width: calc(100vw*0.12); height: 100%; position: absolute; top: 0;left: 0"></div>
{{--        <img src="images/left_logo.png" class="my-auto" alt="Left Logo">--}}
        <div class="container my-container">
            <div class="d-flex">
                <h4 class="me-2">{{__('front.management')}}</h4>
                <div class="ms-md-5 d-flex">
                    <span class="me-2"><a class="previous2">&#10094;</a></span>
                    <span class="ms-2"><a class="next2">&#10095;</a></span>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper sw2 my-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @if($teams)
                        @foreach($teams as $team)
                            <div class="swiper-slide">
                                <div class="swiper-in-management">
                                    <div class="management-img" style='background: url("{{$team->team->getFile('image')}}") no-repeat center;background-size: contain'></div>
                                    <div class="management-content mt-3">
                                        <h5 style="font-size: 1.2rem">{!! $team->team->name !!}</h5>
                                        <p class="mt-3">{!! $team->team->position !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-in-management">
                            <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                            <div class="management-content mt-3">
                                <h5>?????????? ??????????????</h5>
                                <p>???????????????????????? <br> ????????????????????</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-management">
                            <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                            <div class="management-content mt-3">
                                <h5>?????????? ??????????????</h5>
                                <p>???????????????????????? <br> ????????????????????</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-management">
                            <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                            <div class="management-content mt-3">
                                <h5>?????????? ??????????????</h5>
                                <p>???????????????????????? <br> ????????????????????</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-in-management">
                            <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                            <div class="management-content mt-3">
                                <h5>?????????? ??????????????</h5>
                                <p>???????????????????????? <br> ????????????????????</p>
                            </div>
                        </div>
                    </div>
                        @endif
                </div>

            </div>

        </div>
    </section>
    <!--End management-->

    <!--Start journal-->
    <section id="journal" class="py-5">
        <div class="container my-container">
            <div class="d-flex">
                <h4>{{__('front.journal')}}</h4>
                <div class="ms-md-5 d-flex">
                    <span class="me-2"><a class="previous3">&#10094;</a></span>
                    <span class="ms-2"><a class="next3">&#10095;</a></span>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper sw3 py-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    @if($journals)
                        @foreach($journals as $journal)
                            <div class="swiper-slide">
                                <div class="m-auto">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                                        <div class="swiper-in-journal" style='background: url("{{$journal->getFile('image_ru')}}") no-repeat center; background-size: contain;'></div>
                                        <p class="mt-3 text-center"><a class="border-0" target="_blank" href="{{$journal->getFile('file_ru')}}" download>{{$journal->title}}</a></p>
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'kz')
                                        <div class="swiper-in-journal" style='background: url("{{$journal->getFile('image_kz')}}") no-repeat center; background-size: contain;'></div>
                                        <p class="mt-3 text-center"><a class="border-0" target="_blank" href="{{$journal->getFile('file_kz')}}" download>{{$journal->title}}</a></p>
                                    @else
                                        <div class="swiper-in-journal" style='background: url("{{$journal->getFile('image_en')}}") no-repeat center; background-size: contain;'></div>
                                        <p class="mt-3 text-center"><a class="border-0" target="_blank" href="{{$journal->getFile('file_en')}}" download>{{$journal->title}}</a></p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div>
                            <div class="swiper-in-journal" style="background: url('images/journal3.png') no-repeat center; background-size: contain;"></div>
                            <p class="mt-3 text-center">???????????????? 1</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="swiper-in-journal" style="background: url('images/journal2.png') no-repeat center; background-size: contain;"></div>
                            <p class="mt-3 text-center">???????????????? 2</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="swiper-in-journal" style="background: url('images/journal3.png') no-repeat center; background-size: contain;"></div>
                            <p class="mt-3 text-center">???????????????? 3</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="swiper-in-journal" style="background: url('images/journal2.png') no-repeat center; background-size: contain;"></div>
                            <p class="mt-3 text-center">???????????????? 4</p>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!--End journal-->

    <!--Start association-->
    <section id="association" class="py-5">
        <div style="background: url('images/right_logo.png') no-repeat right; background-size: contain; width: calc(100vw*0.1); height: 100%; position: absolute; top: 0; right: 0"></div>
        <div class="container my-container">
            <h4>{{__('front.join_to_association')}}</h4>
            <div class="row mt-4 py-4">
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex association-block">
                        <div>1</div>
                        <div>{!! __('front.join_message_1') !!}</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex association-block">
                        <div>2</div>
                        <div>{{__('front.join_message_2')}}</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex association-block">
                        <div>3</div>
                        <div>{{__('front.join_message_3')}}</div>
                    </div>
                </div>
            </div>
        </div>
{{--        <img src="images/right_logo.png" class="my-auto" alt="Right Logo">--}}
    </section>
    <!--End association-->
@endsection
