@extends('layouts.default')

@section('content')
    <div class="container my-container py-3">
        <div class="under-title">
            <h1>{{__('front.menu_news_smi')}}</h1>
        </div>

        <div class="row my-5">
            @if($news)
                @foreach($news as $new)
                    <div class="row my-2">
                        <div class="col-md-3 col-sm-6">
                            <p><b>{{__('front.title_journals')}}</b></p>
                            <p>{{__('front.published')}}: {{$new->published}} </p>
                        </div>
                        <div class="col-md-9 col-sm-6">
                            <a href="{{$new->url}}" target="_blank">
                                {{\Illuminate\Support\Str::limit($new->source, 90)}}
                            </a>
                        </div>
                    </div>
                @endforeach
                {!! $news->links() !!}
            @else

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <p><b>{{__('front.title_journals')}}</b></p>
                        <p>{{__('front.published')}}: 15 ноября 2021 </p>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <a href="#">ВИЭ в настоящем и будущем России. Интервью с главой Ассоциации развития возобновляемой энергетики</a>
                    </div>
                </div>

            @endif
        </div>
    </div>
    <div class="space"></div>
@endsection
