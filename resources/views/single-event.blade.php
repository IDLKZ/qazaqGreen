@extends('layouts.default')
@section('content')

    <div class="container py-3">
        <h3 class="card-title">{{$new->title}}</h3>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="img-fluid rounded-start" style='background: url("{{$new->getFile('image')}}") no-repeat center;background-size: cover;width: 100%;height: 300px'></div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$new->title}}</h5>
                        <p class="card-text">
                            {!! $new->description !!}
                        </p>
                        <p class="card-text"><small class="text-muted">{{$new->created_at->diffForHumans()}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space"></div>
@endsection
