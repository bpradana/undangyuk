@extends('layouts.main', ['title' => $title])

@section('content')

@auth
    @if (auth()->user()->is_admin == 1)
        <h1>Welcome Admin {{ auth()->user()->name }}!</h1>
        <form action="/create-message" method="post">
            @csrf
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title"><br>
            <label for="content">Content</label>
            <textarea id="content" name="content" placeholder="Content"></textarea><br>
            <button type="submit">Submit</button>
        </form>
    @endif
@endauth

@endsection