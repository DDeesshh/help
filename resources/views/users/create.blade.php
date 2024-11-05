@extends('layouts.layout')

@section('content')

    <div class="container mt-5">

        <h1>Регистрация нового пользователя</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
{{-- 
        <form action="{{ route('users.store') }}" method="post" class="mt-3 ms-5">
            @csrf

            <label for="name" class="form-label">Введите имя</label><br>
            <input type="text" name="name" value="{{ old('name') }}"><br>

            <label for="e-mail" class="form-label">Введите e-mail</label><br>
            <input type="email" name="email" value="{{ old('email') }}"><br>

            <label for="password" class="form-label">Введите пароль</label><br>
            <input type="password" name="password" value="{{ old('password') }}"><br>

            <label for="password" class="form-label">Повторите пароль</label><br>
            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"><br>

            <button type="submit" class="mt-2">Зарегистрироваться</button>

        </form> --}}

        <form action="{{ route('users.store') }}" method="post" class="mt-3 ms-5">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Введите имя</label>
                <input type="text" name="name" class="form-control" id="exampleInputText1" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="e-mail" class="form-label">Введите e-mail</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Введите пароль</label>
                <input type="password"  name="password" class="form-control" id="exampleInputPassword1" value="{{ old('password') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Повторите пароль</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                    value="{{ old('password_confirmation') }}">
            </div>

            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>

        </form>

        {{-- <p class="mt-5">Перейдите на <a href="{{ route('home') }}">главную страницу</a></p> --}}

    @endsection
