<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <title>
        @section('title')Example site @show
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom css -->
    <link rel="stylesheet" href="/css/style.css">

    <meta name="theme-color" content="#7952b3">

</head>

<body>

    <header>

        @section('basic_header')

            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">Ваш альбом фотографий</h4>
                            <p class="text-muted">Добавьте немного информации об альбоме ниже, авторе или любом другом
                                фоновом контексте. Напишите несколько предложений, чтобы люди могли получить
                                некоторые информативные кусочки о фотографиях. Затем свяжите их с некоторыми сайтами
                                социальных сетей или
                                контактной информацией.
                            </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Страницы</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}" class="text-white">Главная</a></li>
                                <li><a href="{{ route('about') }}" class="text-white">О нас</a></li>


                                {{-- <li class="pt-4"><a href="{{ route('users.create') }}" class="text-white">Регистрация</a></li>
                                <li><a href="{{ route('login') }}" class="text-white">Авторизация</a></li> --}}

                                @auth
                                <li ><a href="#">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{route('logout')}}">Выйти</а></1i>
                                @endauth

                                @guest
                                <li class="pt-4"><a href="{{route('users.create')}}">Регистрация</а></1i>
                                <li><a href="{{route('loginform') }}">Авторизация</a></1i>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                        <strong>ФотоАльбом</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

        @show

    </header>

    <main>

        @yield('content')

    </main>

    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
