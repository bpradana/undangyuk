@extends('layouts.main', ['title' => $title])

@section('content')

@auth
    <h2>Welcome back, {{ auth()->user()->name }}</h2>
@else
    <h2>Welcome to UndangYuk!</h2>
@endauth

@endsection