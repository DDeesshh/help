@extends('layouts.layout')

@section('content')
    <div class="container mt-5">

        <h1>Войти в свой аккаунт</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('login') }}" method="post" class="mt-3 ms-5">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Введите email</label>
                <input type="email" class="form-control" id="email" placeholder="name@mail.com" name="email">
            </div>

            <div class="mb-3">
                <label for="pasword" class="form-label">Введите пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Boйти</button>

        </form>

    </div>
@endsection
