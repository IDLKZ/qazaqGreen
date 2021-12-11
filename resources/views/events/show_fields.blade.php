<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $event->getFile("image") }}" width="200px"/>
</div>


<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Наменование на русском:') !!}
    <p>{{ $event->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Наменование на казахском:') !!}
    <p>{{ $event->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Наменование на английском:') !!}
    <p>{{ $event->title_en }}</p>
</div>

<!-- Subtitle Ru Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_ru', 'Подзаголовок на русском:') !!}
    <p>{{ $event->subtitle_ru }}</p>
</div>

<!-- Subtitle Kz Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_kz', 'Подзаголовок на казахском:') !!}
    <p>{{ $event->subtitle_kz }}</p>
</div>

<!-- Subtitle En Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_en', 'Подзаголовок на английском:') !!}
    <p>{{ $event->subtitle_en }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{!! $event->description_ru !!} </p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{!!  $event->description_kz !!} </p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{!! $event->description_en !!}  </p>
</div>

<!-- Date Start Field -->
<div class="col-sm-12">
    {!! Form::label('date_start', 'Дата начала:') !!}
    <p>{{ $event->date_start }}</p>
</div>

<!-- Date End Field -->
<div class="col-sm-12">
    {!! Form::label('date_end', 'Дата окончания:') !!}
    <p>{{ $event->date_end }}</p>
</div>

