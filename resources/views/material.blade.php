@extends('layouts.default')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@endpush
@section('content')
    <div class="container my-container py-5">
        <div class="under-title">
            <h1>Материалы</h1>
        </div>

        <div class="row py-5">
            @if($documents)
                @foreach($documents as $document)
                    <div class="col-md-6 col-sm-12 my-3">
                        <div class="document">
                            <div class="col-10 d-flex align-items-center">
                                {{$document->document->title}}
                            </div>
                            <div class="col-2 p-0">
                                <a download href="{{$document->document->getFile('file')}}"><i class="bi bi-file-earmark-pdf"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $documents->links() !!}
            @else
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="document">
                        <div class="col-10 d-flex align-items-center">
                            Закон РК “О поддержке ВИЭ”
                        </div>
                        <div class="col-2 p-0">
                            <i class="bi bi-file-earmark-pdf"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="space"></div>
@endsection
