@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Создать задачу</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'tasks.store', 'files'=>true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('tasks.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('tasks.index') }}" class="btn btn-default">Отмена</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>


@endsection

