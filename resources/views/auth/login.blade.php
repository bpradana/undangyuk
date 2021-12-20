@extends('layouts.main', ['title' => $title])

@section('content')

<form action="/login" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username"><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
<p>Tidak punya akun? <a href="/register">Register</a></p>

@error('loginError')
    <p>{{ $message }}</p>
@enderror

@endsection