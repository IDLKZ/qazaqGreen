
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name_kz', 'ФИО (kz):') !!}
    {!! Form::textarea('name_kz', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name_ru', 'ФИО (ru):') !!}
    {!! Form::textarea('name_ru', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name_en', 'ФИО (en):') !!}
    {!! Form::textarea('name_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position_kz', 'Должность (kz):') !!}
    {!! Form::textarea('position_kz', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position_ru', 'Должность (ru):') !!}
    {!! Form::textarea('position_ru', null, ['class' => 'form-control']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position_en', 'Должность (en):') !!}
    {!! Form::textarea('position_en', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('team', 'Позиция:') !!}
    {!! Form::select('team[]',["Позиция"=>\App\Models\Position::pluck("title_ru","id")->toArray()] ,null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500,"multiple"=>true]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Изображение:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- About Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about', 'О себе(необязательно):') !!}
    {!! Form::textarea('about', null, ['class' => 'form-control']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram(необязательно):') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook(необязательно):') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Vk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vk', 'Vk(необязательно):') !!}
    {!! Form::text('vk', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkedin', 'Linkedin(необязательно):') !!}
    {!! Form::text('linkedin', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter(необязательно):') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email(необязательно):') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Сайт(необязательно):') !!}
    {!! Form::text('website', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

