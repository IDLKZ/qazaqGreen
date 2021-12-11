<!-- Phone Text Field -->
<div class="col-sm-12">
    {!! Form::label('phone_text', 'Телефон для:') !!}
    <p>{{ $contact->phone_text }}</p>
</div>

<!-- Email Text Field -->
<div class="col-sm-12">
    {!! Form::label('email_text', 'Email для:') !!}
    <p>{{ $contact->email_text }}</p>
</div>

<!-- Address Text Field -->
<div class="col-sm-12">
    {!! Form::label('address_text', 'Адрес:') !!}
    <p>{{ $contact->address_text }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Телефон:') !!}
    <p>{{ $contact->phone }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contact->email }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Адрес:') !!}
    <p>{{ $contact->address }}</p>
</div>

