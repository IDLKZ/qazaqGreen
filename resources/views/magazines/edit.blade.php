@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Изменить журнал</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($magazine, ['route' => ['magazines.update', $magazine->id], 'method' => 'patch',"files"=>true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('magazines.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('magazines.index') }}" class="btn btn-default">Отмена</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
