<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на руском:') !!}
    <p>{{ $partner->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $partner->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $partner->title_en }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Логотип:') !!}
    <img src="{{ $partner->getFile("image") }}" width="200px"/>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Ссылка на членов ассоциации и партнера:') !!}
    <p>{{ $partner->url }}</p>
</div>

