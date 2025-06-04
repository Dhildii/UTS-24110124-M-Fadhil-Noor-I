@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Masuk</button>
    </form>
    <div class="text-center mt-2">
        <a href="{{ route('password.request') }}">Lupa Password?</a>
    </div>
</div>
@endsection
