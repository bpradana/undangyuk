@extends('layouts.main', ['title' => $title])

@section('content')

<h1>{{ $design->title }}</h1>
<h2>Price: {{ $design->price }}</h2>
<h2>Rating: {{ $design->rating }}</h2>
<p>{{ $design->description }}</p>
<p>By: {{ $design->user->name }}</p>
<p>Created at: {{ $design->created_at }}</p>

@auth
@if ($design->user->id == auth()->user()->id)
    <a href="/edit-design/{{ $design->id }}">Edit</a>
    <form action="/delete-design/{{ $design->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@else
    <a href="/create-transaction/{{ $design->id }}">Buy</a>
@endif
@endauth

<h2>Comments:</h2>

@auth
<form action="/create-comment/{{ $design->id }}" method="post">
    @csrf
    <input type="text" id="title" name="title" placeholder="Title"><br>
    <textarea id="body" name="body" placeholder="Comment"></textarea><br>
    <input type="number" id="rating" name="rating" placeholder="Rating" min=0 max=5><br>
    <button type="submit">Submit</button>
</form>
@endauth

@foreach ($design->comments as $comment)
    <h3>{{ $comment->title }}</h3>
    <h4>Rating: {{ $comment->rating }}</h4>
    <p>{{ $comment->body }}</p>
    <p>By: {{ $comment->user->name }}</p>
    <p>Created at: {{ $comment->created_at }}</p>
    @auth
    @if ($comment->user_id == auth()->user()->id)
        <form action="/delete-comment/{{ $comment->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endif
    @endauth
    <hr>
@endforeach

@endsection