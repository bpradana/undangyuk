@extends('layouts.main', ['title' => $title])

@section('content')

<form action="/edit-design/{{ $design->id }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Title" value="{{ $design->title }}"><br>
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Description">{{ $design->description }}</textarea><br>
    <label for="price">Price</label>
    <input type="number" id="price" name="price" placeholder="Price" value="{{ $design->price }}"><br>
    <button class="btn pink accent-4" type="submit">Submit</button>
</form>

@endsection