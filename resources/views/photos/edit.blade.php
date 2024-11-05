@extends('layouts.layout')

@section('content')

    <div class="container mt-5">

        <h1>Редактировать фотографию</h1>

        {{-- <form action="{{ route('photos.update', ['photo' => $photo->id]) }}" method="post">
            @csrf
            @method('PUT')

            <label for="title" class="form-label">Название фотографии</label><br>
            <input type="text" name="title" value="{{ $photo->title }}"><br>

            <label for="description" class="form-label">Описание фотографии</label><br>
            <input type="text" name="description" value="{{ $photo->description }}"><br>

            <label for="path" class="form-label">Путь фотографии</label><br>
            <input type="text" name="path" value="{{ $photo->path }}"><br>

            <button type="submit" class="mt-2">Обновить</button>
        </form> --}}

        <form action="{{ route('photos.update', ['photo' => $photo->id]) }}" method="post" class="mt-3 ms-5">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Название фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ $photo->title }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Описание фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ $photo->description }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Путь к фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ $photo->path }}">
            </div>

            <button type="submit" class="btn btn-primary">Обновить</button>

        </form>

        {{-- <p class="mt-5">Перейдите на <a href="{{ route('home') }}">главную страницу</a></p> --}}

    </div>
@endsection
