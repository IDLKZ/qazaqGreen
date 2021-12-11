<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $news->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $news->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $news->title_en }}</p>
</div>

<!-- Subtitle Ru Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_ru', 'Подзаголовок на русском:') !!}
    <p>{{ $news->subtitle_ru }}</p>
</div>

<!-- Subtitle Kz Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_kz', 'Подзаголовок на казахском:') !!}
    <p>{{ $news->subtitle_kz }}</p>
</div>

<!-- Subtitle En Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_en', 'Подзаголовок на английском:') !!}
    <p>{{ $news->subtitle_en }}</p>
</div>

<!-- Thumbnail Field -->
<div class="col-sm-12">
    {!! Form::label('thumbnail', 'Предпросмотр изображения:') !!}
    <img src="{{ $news->getFile("thumbnail") }}" width="200px"/>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $news->getFile("image") }}" width="200px"/>
</div>

<!-- Authors Field -->
<div class="col-sm-12">
    {!! Form::label('authors', 'Авторы:') !!}
    <p>{{ $news->authors }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{!!$news->description_ru !!}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{!! $news->description_kz !!}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на анлийском:') !!}
    <p>{!! $news->description_en !!} </p>
</div>

