<!-- Order Field -->
<div class="col-sm-12">
    {!! Form::label('order', 'Порядковый номер:') !!}
    <p>{{ $task->order }}</p>
</div>

<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', 'Заголовок на русском:') !!}
    <p>{{ $task->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz', 'Заголовок на казахском:') !!}
    <p>{{ $task->title_kz }}</p>
</div>

<!-- Title En Field -->
<div class="col-sm-12">
    {!! Form::label('title_en', 'Заголовок на английском:') !!}
    <p>{{ $task->title_en }}</p>
</div>

