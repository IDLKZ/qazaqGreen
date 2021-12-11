<!-- Phone Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_text', 'Телефон для:') !!}
    {!! Form::text('phone_text', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_text', 'Email для:') !!}
    {!! Form::text('email_text', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_text', 'Адрес:') !!}
    {!! Form::text('address_text', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефон:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Адрес:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>
