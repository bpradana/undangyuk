@extends('layouts.main', ['title' => $title])

@section('content')
  
@foreach ($messages as $message)
    <a href="/message/{{ $message->id }}">
        <h2>{{ $message->title }}</h2>
    </a>
    <p>From: {{ $message->user->name }}</p>
    <p>Created at: {{ $message->created_at }}</p>
    <hr>
@endforeach

@endsection