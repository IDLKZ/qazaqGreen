<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Изображение:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Наименование на казахском(необязательно):') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Наименование на английском(необязательно):') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_ru', 'Подзаголовок на русском:') !!}
    {!! Form::text('subtitle_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_kz', 'Подзаголовок на казахском(необязательно):') !!}
    {!! Form::text('subtitle_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_en', 'Подзаголовок на английском(необязательно):') !!}
    {!! Form::text('subtitle_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    {!! Form::textarea('description_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_kz', 'Описание на казахском (необязательно):') !!}
    {!! Form::textarea('description_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Description En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_en', 'Описание на английском (необязательно):') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', 'Начало:') !!}
    {!! Form::text('date_start', null, ['class' => 'form-control date-start','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', 'Конец:') !!}
    {!! Form::text('date_end', null, ['class' => 'form-control date-end','maxlength' => 255,'maxlength' => 255]) !!}
</div>
