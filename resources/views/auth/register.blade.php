@extends('layouts.main', ['title' => $title])

@section('content')

<form action="/register" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name"><br>
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username"><br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email"><br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <button type="submit">Register</button>
</form>

@endsection