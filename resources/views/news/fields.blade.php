

<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Заголовок на казахском(необязательно):') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Заголовок на английском(необязательно):') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Subtitle Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_ru', 'Подзаголовок на русском:') !!}
    {!! Form::text('subtitle_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Subtitle Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_kz', 'Подзаголовок на казахском (необязательно):') !!}
    {!! Form::text('subtitle_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Subtitle En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle_en', 'Подзаголовок на английском (необязательно):') !!}
    {!! Form::text('subtitle_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Предизображение:') !!}
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Изображение:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Authors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('authors', 'Автор:') !!}
    {!! Form::text('authors', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Description Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    {!! Form::textarea('description_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_kz', 'Описание на казахском(необязательно):') !!}
    {!! Form::textarea('description_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Description En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_en', 'Описание на английском(необязательно):') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>
