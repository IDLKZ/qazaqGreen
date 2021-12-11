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

<!-- Description Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_ru', 'Описание на русском:') !!}
    {!! Form::textarea('description_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Kz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_kz', 'Описание на казахском(необятельно):') !!}
    {!! Form::textarea('description_kz', null, ['class' => 'form-control']) !!}
</div>

<!-- Description En Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description_en', 'Описание на английском(необятельно):') !!}
    {!! Form::textarea('description_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Готов к публикации:', ['class' => 'form-check-label']) !!}
    </div>
</div>
