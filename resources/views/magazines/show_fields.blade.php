<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $magazine->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $magazine->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $magazine->title_en }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{!! $magazine->description_ru !!} </p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{!! $magazine->description_kz !!} </p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{!!$magazine->description_en  !!} </p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src ="{{ $magazine->getFile("image") }}" width="200px"/>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', 'File:') !!}
    <a href="{{ $magazine->getFile("file") }}">Скачать</a>
</div>

