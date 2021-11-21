@extends('layouts.main', ['title' => $title])

@section('content')

<a href="/create-design">Create Design</a>
@foreach ($designs as $design)
    <a href="/design/{{ $design->id }}">
        <h2>{{ $design->title }}</h2>
    </a>
    <p>{{ $design->description }}</p>
    <p>by: {{ $design->user->name }}</p>
    <hr>
@endforeach

@endsection