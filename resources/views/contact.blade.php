@extends('layouts.layout')

@section('content')
    <div class="ms-4 mt-3">

        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="submit" value="Отправить">

        </form>

        <p>Перейдите на <a href="{{ route('home') }}">главную страницу</a></p>

    </div>
    
@endsection
