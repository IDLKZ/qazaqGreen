@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="under-title">
            <h1>{{__('front.menu_event')}}</h1>
        </div>

        <div class="row my-5">
            @if($news)
                @foreach($news as $new)
                    <div class="col-md-3 col-sm-12">
                        <div class="news-img" style='background: url("{{$new->getFile('image')}}") no-repeat center; background-size: cover'></div>

                        <div class="news-title my-3">
                            <a href="{{route('front-single-event', $new->slug)}}">{{\Illuminate\Support\Str::limit($new->title, 50)}}</a>
                        </div>

                        <div>Опубликовано: {{$new->created_at->format('d-m-Y')}}</div>

                        <div class="news-description my-3">
                            {!! \Illuminate\Support\Str::limit($new->description, 140) !!}
                        </div>
                    </div>
                @endforeach
                {!! $news->links() !!}
            @else
                <div class="col-md-3 col-sm-12">
                    <div class="news-img" style='background: url("images/news-1.png") no-repeat center; background-size: cover'></div>

                    <div class="news-title my-3">
                        Ассоциация «Qazaq Green»
                        провела встречу с Центром зеленых финансов МФЦА
                    </div>

                    <div>Опубликовано: 15 ноября 2021</div>

                    <div class="news-description my-3">
                        13 ноября 2021 года Генеральный директор Центра зеленых финансов Айдар Казыбаев провел встречу с Председателем Совета Директоров Ассоциации «Qazaq Green» Нурланом Капеновым.
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="news-img" style='background: url("images/news-1.png") no-repeat center; background-size: cover'></div>

                    <div class="news-title my-3">
                        Ассоциация «Qazaq Green»
                        провела встречу с Центром зеленых финансов МФЦА
                    </div>

                    <div>Опубликовано: 15 ноября 2021</div>

                    <div class="news-description my-3">
                        13 ноября 2021 года Генеральный директор Центра зеленых финансов Айдар Казыбаев провел встречу с Председателем Совета Директоров Ассоциации «Qazaq Green» Нурланом Капеновым.
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="news-img" style='background: url("images/news-1.png") no-repeat center; background-size: cover'></div>

                    <div class="news-title my-3">
                        Ассоциация «Qazaq Green»
                        провела встречу с Центром зеленых финансов МФЦА
                    </div>

                    <div>Опубликовано: 15 ноября 2021</div>

                    <div class="news-description my-3">
                        13 ноября 2021 года Генеральный директор Центра зеленых финансов Айдар Казыбаев провел встречу с Председателем Совета Директоров Ассоциации «Qazaq Green» Нурланом Капеновым.
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="news-img" style='background: url("images/news-1.png") no-repeat center; background-size: cover'></div>

                    <div class="news-title my-3">
                        Ассоциация «Qazaq Green»
                        провела встречу с Центром зеленых финансов МФЦА
                    </div>

                    <div>Опубликовано: 15 ноября 2021</div>

                    <div class="news-description my-3">
                        13 ноября 2021 года Генеральный директор Центра зеленых финансов Айдар Казыбаев провел встречу с Председателем Совета Директоров Ассоциации «Qazaq Green» Нурланом Капеновым.
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
