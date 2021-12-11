<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Наименование на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Наименование на казахском(необязательное поле):') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Наименование на английском (необязательное поле):') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
