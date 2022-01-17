@extends('layouts.default')
@push('css')
    <style>
        .card-body img {width: 100%!important;height: auto!important;margin: auto}
    </style>
@endpush
@section('content')

    <div class="container my-container py-3">
{{--        <h3 class="card-title">{{$new->title}}</h3>--}}
        <div class="card mb-3 border-0">
            <div class="img-fluid rounded-start" style='background: url("{{$new->getFile('image')}}") no-repeat center;background-size: contain;width: 100%;height: 450px'></div>
            <div class="card-body">
                <h5 class="card-title">{{$new->title}}</h5>
                <p class="card-text">
                    {!! $new->description !!}
                </p>
                <p class="card-text"><small class="text-muted">{{$new->created_at->format('d.m.Y')}}</small></p>
            </div>
        </div>
    </div>

    <div class="space"></div>
@endsection
