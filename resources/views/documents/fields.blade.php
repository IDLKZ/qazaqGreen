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

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'Файл:') !!}
    {!! Form::file('file', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Категория:') !!}
    {!! Form::select('category[]',["Категория"=>\App\Models\CategoryDocument::pluck("title_ru","id")->toArray()] ,null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500,"multiple"=>true]) !!}
</div>
