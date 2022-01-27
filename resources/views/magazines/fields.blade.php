
<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Наименование на казахском (необязательно):') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Наименование на английском (необязательно):') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
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

<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image', 'Изображение (Ru):') !!}
    {!! Form::file('image_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image', 'Изображение (Kz) (необязательно):') !!}
    {!! Form::file('image_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image', 'Изображение (En) (необязательно):') !!}
    {!! Form::file('image_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-12">
    {!! Form::label('file_ru', 'Документ (Ru):') !!}
    {!! Form::file('file_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<!-- File Field -->
<div class="form-group col-sm-12">
    {!! Form::label('file_kz', 'Документ (Kz) (необязательно):') !!}
    {!! Form::file('file_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
<!-- File Field -->
<div class="form-group col-sm-12">
    {!! Form::label('file_en', 'Документ (En) (необязательно):') !!}
    {!! Form::file('file_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
