{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>

    <form action="{{ route('photos.store') }}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="description">
        <button type="submit">Создать</button>
    </form>

</body>

</html> --}}

@extends('layouts.layout')



@section('content')

    <div class="container mt-5">

        <h1>Добавь в альбом новую фотографию</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- <form action="{{ route('photos.store') }}" method="post" class="ms-5">
                @csrf

                <label for="title" class="form-label">Название фотографии</label><br>
                <input type="text" name="title" value="{{ old('title') }}"><br>

                <label for="description" class="form-label">Описание фотографии</label><br>
                <input type="text" name="description" value="{{ old('description') }}"><br>

                <label for="path" class="form-label">Путь к фотографии</label><br>
                <input type="text" name="path" value="{{ old('path') }}"><br>

                <button type="submit" class="mt-2">Добавить фото</button>
            </form> --}}

        {{-- <form action="{{ route('photos.create') }}" method="post" class="mt-3 ms-5">
            @csrf
            <input type="text" name="title" id="" value="{{ old('title')}}">
            <input type="text" name="description" id="" value="{{ old('description')}}">
            <input type="submit" value="Сохранить фото">
        </form> --}}

        <form action="{{ route('photos.store') }}" method="post" class="mt-3 ms-5">
            @csrf

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Название фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Описание фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ old('description') }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Путь к фотографии</label>
                <input type="text" class="form-control" id="exampleInputText1" value="{{ old('path') }}">
            </div>

            <button type="submit" class="btn btn-primary">Добавить фотографию</button>

        </form>

        {{-- <p class="mt-5">Перейдите на <a href="{{ route('home') }}">главную страницу</a></p> --}}

    </div>

    </div>

@endsection
