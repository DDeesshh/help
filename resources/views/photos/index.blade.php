@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <h1>Список фотографий</h1>

        {{-- <ul>

            <li>
                <a href="{{ route('photos.show', ['photo' => $photos[0]->id]) }}">{{ $photos[0]->title }}</a>
                <a href="{{ route('photos.edit', ['photo' => $photos[0]->id]) }}">Редактировать</a>

                <form action="{{ route('photos.destroy', ['photo' => $photos[0]->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary my-2">Удалить</button>

                </form>

            </li>

        </ul> --}}

        <ol class="list-group list-group-numbered">

            @foreach ($photos as $photo)
                <li class="list-group-item d-flex justify-content-between align-items-start">

                    <div class="ms-2 me-auto">
                        <div class="fw-bold"> <a
                                href="{{ route('photos.show', ['photo' => $photo->id]) }}">{{ $photo->title }}</a>
                        </div>
                        <a href="{{ route('photos.edit', ['photo' => $photo->id]) }}">Редактировать</a>
                    </div>

                    <span class="badge bg-primary rounded-pill">

                        <form action="{{ route('photos.destroy', ['photo' => $photo->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Удалить</button>

                        </form>

                    </span>

                </li>

            @endforeach

        </ol>

        {{-- <li class="list-group-item d-flex justify-content-between align-items-start">

                <div class="ms-2 me-auto">
                    <div class="fw-bold"> <a
                            href="{{ route('photos.show', ['photo' => $photos[1]->id]) }}">{{ $photos[1]->title }}</a></div>
                    <a href="{{ route('photos.edit', ['photo' => $photos[1]->id]) }}">Редактировать</a>
                </div>

                <span class="badge bg-primary rounded-pill">

                    <form action="{{ route('photos.destroy', ['photo' => $photos[1]->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Удалить</button>

                    </form>

                </span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-start">

                <div class="ms-2 me-auto">
                    <div class="fw-bold"> <a
                            href="{{ route('photos.show', ['photo' => $photos[2]->id]) }}">{{ $photos[2]->title }}</a></div>
                    <a href="{{ route('photos.edit', ['photo' => $photos[2]->id]) }}">Редактировать</a>
                </div>

                <span class="badge bg-primary rounded-pill">

                    <form action="{{ route('photos.destroy', ['photo' => $photos[2]->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Удалить</button>

                    </form>

                </span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-start">

                <div class="ms-2 me-auto">
                    <div class="fw-bold"> <a
                            href="{{ route('photos.show', ['photo' => $photos[3]->id]) }}">{{ $photos[3]->title }}</a></div>
                    <a href="{{ route('photos.edit', ['photo' => $photos[3]->id]) }}">Редактировать</a>
                </div>

                <span class="badge bg-primary rounded-pill">

                    <form action="{{ route('photos.destroy', ['photo' => $photos[3]->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Удалить</button>

                    </form>

                </span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-start">

                <div class="ms-2 me-auto">
                    <div class="fw-bold"> <a
                            href="{{ route('photos.show', ['photo' => $photos[4]->id]) }}">{{ $photos[4]->title }}</a></div>
                    <a href="{{ route('photos.edit', ['photo' => $photos[4]->id]) }}">Редактировать</a>
                </div>

                <span class="badge bg-primary rounded-pill">

                    <form action="{{ route('photos.destroy', ['photo' => $photos[4]->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Удалить</button>

                    </form>

                </span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-start">

                <div class="ms-2 me-auto">
                    <div class="fw-bold"> <a
                            href="{{ route('photos.show', ['photo' => $photos[5]->id]) }}">{{ $photos[5]->title }}</a></div>
                    <a href="{{ route('photos.edit', ['photo' => $photos[5]->id]) }}">Редактировать</a>
                </div>

                <span class="badge bg-primary rounded-pill">

                    <form action="{{ route('photos.destroy', ['photo' => $photos[5]->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Удалить</button>

                    </form>

                </span>

            </li> --}}

        </ol>

        <a href="{{ route('photos.create') }}" class="btn btn-primary my-2 mt-5">Добавить новую фотографию</a>

        {{-- <p>Перейдите на <a href="{{ route('home') }}">главную страницу</a></p> --}}

    </div>
@endsection
