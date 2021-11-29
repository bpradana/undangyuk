@extends('layouts.main', ['title' => $title])

@section('content')


@auth
<h1>{{ $message->title }}</h1>
<p>{{ $message->content }}</p>
<p>By: {{ $message->user->name }}</[]>
<p>Created at: {{ $message->created_at }}</p>
@endauth

@endsection