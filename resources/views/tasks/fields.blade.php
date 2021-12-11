<!-- Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order', '№ задачи:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Описание на русском:') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_kz', 'Описание на казахском:') !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_en', 'Описание на английском:') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>
