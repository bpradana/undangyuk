@extends('layouts.main', ['title' => $title])

@section('content')

<h1>{{ $design->title }}</h1>
<h2>Price: {{ $design->price }}</h2>
<h2>Rating: {{ $design->rating }}</h2>
<p>{{ $design->description }}</p>
<p>By: {{ $design->user->name }}</p>
<p>Created at: {{ $design->created_at }}</p>

<h2>Comments:</h2>
@foreach ($design->comments as $comment)
    <h3>{{ $comment->title }}</h3>
    <h4>Rating: {{ $comment->rating }}</h4>
    <p>{{ $comment->body }}</p>
    <p>By: {{ $comment->user->name }}</p>
    <p>Created at: {{ $comment->created_at }}</p>
    <hr>
@endforeach

@endsection