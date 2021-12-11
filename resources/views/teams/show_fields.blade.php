

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'ФИО:') !!}
    <p>{{ $team->name }}</p>
</div>

<!-- Position Field -->
<div class="col-sm-12">
    {!! Form::label('position', 'Позиция:') !!}
    <p>{{ $team->position }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Изображения:') !!}
    <p><img src="{{ $team->getFile("image") }}" width="200px"></p>
</div>

<!-- About Field -->
<div class="col-sm-12">
    {!! Form::label('about', 'О себе:') !!}
    <p>{!! $team->about !!} </p>
</div>

<!-- Instagram Field -->
<div class="col-sm-12">
    {!! Form::label('instagram', 'Instagram:') !!}
    <p>{{ $team->instagram }}</p>
</div>

<!-- Facebook Field -->
<div class="col-sm-12">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p>{{ $team->facebook }}</p>
</div>

<!-- Vk Field -->
<div class="col-sm-12">
    {!! Form::label('vk', 'Vk:') !!}
    <p>{{ $team->vk }}</p>
</div>

<!-- Linkedin Field -->
<div class="col-sm-12">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    <p>{{ $team->linkedin }}</p>
</div>

<!-- Twitter Field -->
<div class="col-sm-12">
    {!! Form::label('twitter', 'Twitter:') !!}
    <p>{{ $team->twitter }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $team->email }}</p>
</div>

<!-- Website Field -->
<div class="col-sm-12">
    {!! Form::label('website', 'Website:') !!}
    <p>{{ $team->website }}</p>
</div>

<div class="col-sm-12">
    Позиции
    <ul>
        @if($team->positionTeams)
            @foreach($team->positionTeams as $position)

                <li>{{$position->position->title_ru}}</li>

            @endforeach

        @endif
    </ul>
</div>
