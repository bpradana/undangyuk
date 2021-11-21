@extends('layouts.main', ['title' => $title])

@section('content')

<form action="/create-design" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Title"><br>
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Description"></textarea><br>
    <label for="price">Price</label>
    <input type="number" id="price" name="price" placeholder="Price"><br>
    <button type="submit">Submit</button>
</form>

@endsection