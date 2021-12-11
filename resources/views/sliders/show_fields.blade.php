<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображение:') !!}
    <img src="{{ $slider->getFile("image") }}" width="200px"/>
</div>

<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    <p>{{ $slider->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Заголовок на казахском:') !!}
    <p>{{ $slider->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Заголовок на казахском:') !!}
    <p>{{ $slider->title_en }}</p>
</div>

<!-- Description Ru Field -->
<div class="col-sm-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    <p>{{ $slider->description_ru }}</p>
</div>

<!-- Description Kz Field -->
<div class="col-sm-12">
    {!! Form::label('description_kz', 'Описание на казахском:') !!}
    <p>{{ $slider->description_kz }}</p>
</div>

<!-- Description En Field -->
<div class="col-sm-12">
    {!! Form::label('description_en', 'Описание на английском:') !!}
    <p>{{ $slider->description_en }}</p>
</div>

<!-- Order Field -->
<div class="col-sm-12">
    {!! Form::label('order', 'Порядок слайдера (от меньшего к большему):') !!}
    <p>{{ $slider->order }}</p>
</div>

