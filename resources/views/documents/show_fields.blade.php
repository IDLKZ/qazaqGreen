<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    <p>{{ $document->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наименование на казахском:') !!}
    <p>{{ $document->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наименование на английском:') !!}
    <p>{{ $document->title_en }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', 'File:') !!}
    <a href="{{ $document->getFile("file") }}" download="">Скачать</a>
</div>

