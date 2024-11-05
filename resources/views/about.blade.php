@extends('layouts.layout')

@section('title')
    @parent - {{ $title }}
@endsection

@section('basic_header')
    @parent
    {{-- <p>Особенная часть шапки сайта только для страницы about</p> --}}
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
@endsection
