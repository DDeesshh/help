@extends('layouts.layout')

@section('content')

<div class="ms-4 mt-3">
    <h1>Список фотографий</h1>
    <ul>

        <li>
            <a href="{{ route('photos.show', ['photo' => $photos[0]->id]) }}">{{ $photos[0]->title }}</a>
            <a href="{{ route('photos.edit', ['photo' => $photos[0]->id]) }}">Редактировать</a>

            <form action="{{ route('photos.destroy', ['photo' => $photos[1]->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>

            </form>

        </li>

        <li>
            <a href="{{ route('photos.show', ['photo' => $photos[1]->id]) }}">{{ $photos[1]->title }}</a>
            <a href="{{ route('photos.edit', ['photo' => $photos[1]->id]) }}">Редактировать</a>

            <form action="{{ route('photos.destroy', ['photo' => $photos[1]->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>

            </form>

        </li>

        <li>
            <a href="{{ route('photos.show', ['photo' => $photos[2]->id]) }}">{{ $photos[2]->title }}</a>
            <a href="{{ route('photos.edit', ['photo' => $photos[2]->id]) }}">Редактировать</a>

            <form action="{{ route('photos.destroy', ['photo' => $photos[2]->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>

            </form>

        </li>

    </ul>

</div>

@endsection
