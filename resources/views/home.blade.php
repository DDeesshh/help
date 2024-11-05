@extends('layouts.layout')

@section('title')
    @parent - {{ $title }}
@endsection


@section('basic_header')
    @parent
    {{-- <p>Особенная часть шапки сайта только для страницы home</p> --}}
@endsection


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Мой Альбом</h1>
                <p class="lead text-muted">Фотографии тех мест, которые я хочу посетить за жизнь. Буду на фотки смотреть и
                    плакать, что я не там...</p>
                <p>
                    <a href="{{ route('photos.create') }}" class="btn btn-primary my-2">Добавить новую фотографию</a>
                    <a href="{{ route('photos.index') }}" class="btn btn-primary my-2">Посмотреть свои фотографии</a>
                </p>
            </div>
        </div>

    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($allPhotos as $photo)
                    <div class="col">
                        <div class="card shadow-sm">

                            <img src="{{ $photo->path }}" target="_blank" class="bd-placeholder-img card-img-top"
                                width="100%" height="225" xmlns="" role="img">

                            <title>Placeholder</title>

                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em"></text>

                            <div class="card-body">
                                <h5 class="card-text">{{ $photo->title }}</h5>
                                <p class="card-text">{{ $photo->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary">Редактировать</button>
                                    </div>
                                    <small class="text-muted">{{ $photo->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
