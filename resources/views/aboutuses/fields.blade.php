<!-- Source Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('source_ru', 'Источник на русском:') !!}
    {!! Form::text('source_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Source Kz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('source_kz', 'Источник на казахском(необязательно):') !!}
    {!! Form::text('source_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Source En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('source_en', 'Источник на английском(необязательно):') !!}
    {!! Form::text('source_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Ссылка на источник:') !!}
    {!! Form::text('url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Опубликовано:') !!}
    {!! Form::text('published', null, ['class' => 'form-control date-start','maxlength' => 255,'maxlength' => 255]) !!}
</div>
