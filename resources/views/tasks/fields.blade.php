<!-- Order Field -->
<div class="form-group col-sm-12">
    {!! Form::label('order', '№ задачи:') !!}
    {!! Form::number('order', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Ru Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_ru', 'Описание на русском:') !!}
    {!! Form::textarea('title_ru', null, ['class' => 'form-control', 'id' => 'titleRU']) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_kz', 'Описание на казахском:') !!}
    {!! Form::textarea('title_kz', null, ['class' => 'form-control', 'id' => 'titleKZ']) !!}
</div>

<!-- Title En Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_en', 'Описание на английском:') !!}
    {!! Form::textarea('title_en', null, ['class' => 'form-control', 'id' => 'titleEN']) !!}
</div>
