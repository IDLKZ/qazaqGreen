@extends('layouts.default')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .text-align-justify > p {text-align: justify}
    </style>
@endpush
@section('content')
    <div class="container my-container py-4">
        <div class="under-title">
            <h1>{{$info->title}}</h1>
        </div>

        <div class="my-5 text-align-justify">
            {!! $info->description !!}
        </div>

        <h3>{{__('front.documents')}}</h3>

        <div class="row py-5">
            @if($documents)
                @foreach($documents as $document)
                    <div class="col-md-6 col-sm-12 my-3">
                        <div class="document">
                            <div class="col-10 d-flex align-items-center">
                                {{$document->document->title}}
                            </div>
                            <div class="col-2 p-0">
                                <a download href="{{$document->document->getFile('file')}}"><i class="bi bi-file-earmark-pdf"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>

    <!--Start management-->
    <section id="management" class="py-5">
        <div style="background: url('images/left_logo.png') no-repeat left; background-size: contain; width: calc(100vw*0.12); height: 100%; position: absolute; top: 0;left: 0"></div>
        <div class="container my-container">
            <div class="d-flex">
                <h4>{{__('front.board_of_director')}}</h4>
                <div class="ms-5 d-flex">
                    <span class="me-2"><a class="previous">&#10094;</a></span>
                    <span class="ms-2"><a class="next">&#10095;</a></span>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper sw my-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @if($teams)
                        @foreach($teams as $team)
                            <div class="swiper-slide">
                                <div class="swiper-in-management">
                                    <div class="management-img" style='background: url("{{$team->team->getFile('image')}}") no-repeat center;background-size: contain'></div>
                                    <div class="management-content mt-3 w-75">
                                        <h5>{{$team->team->name}}</h5>
                                        <p>{{$team->team->position}}</p>
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
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>

        </div>
{{--        <img src="images/left_logo.png" class="my-auto" alt="Left Logo">--}}
    </section>
    <!--End management-->

    <!--Start journal-->
    <section id="journal" class="py-5 position-relative">
        <div style="background: url('images/right_logo.png') no-repeat right; background-size: contain; width: calc(100vw*0.1); height: 100%; position: absolute; top: 0; right: 0"></div>
        <div class="container my-container">
            <div class="d-flex">
                <h4>{{__('front.board_of_trust')}}</h4>
                <div class="ms-5 d-flex">
                    <span class="me-2"><a class="previous2">&#10094;</a></span>
                    <span class="ms-2"><a class="next2">&#10095;</a></span>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper sw2 my-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @if($teams2)
                        @foreach($teams2 as $team)
                            <div class="swiper-slide">
                                <div class="swiper-in-management">
                                    <div class="management-img" style='background: url("{{$team->team->getFile('image')}}") no-repeat center;background-size: contain'></div>
                                    <div class="management-content mt-3 w-75">
                                        <h5>{{$team->team->name}}</h5>
                                        <p>{{$team->team->position}}</p>
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
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-in-management">
                                <div class="management-img" style="background: url('images/management.png') no-repeat center;background-size: contain"></div>
                                <div class="management-content mt-3">
                                    <h5>Арман Арманов</h5>
                                    <p>Руководитель <br> Ассоциации</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>

        </div>
    </section>
    <!--End journal-->
@endsection
