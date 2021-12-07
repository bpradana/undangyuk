@extends('layouts.main', ['title' => $title])

@section('content')

    @auth
    <h1 class="center"><b>Selamat datang, {{ auth()->user()->name }}</b></h1>
    @else
    <h1 class="center"><b>Selamat datang di UndangYuk!</b></h1>
    @endauth
    <h1 class="center"><b>UndangYuk!</b></h1>
    <!-- Header -->
    <div class="container">
    <br>
    <br>
    
    <div class="row center">
        <h5>Undang banyak orang tanpa ribet!</h5>
    </div>
    <div class="row center">
        <a href="/designs" class="waves-effect waves-light btn-large pink center">Lihat desain</a>
    </div>
    <br>
    <br>
    </div>

    <!-- Desain pilihan -->
    <div class="section">
    <h3>Desain pilihan</h3>
    <div class="row">

        <div class="col s12 m4 l4">
        <!-- Your content here -->
        <div class="card medium">
            <div class="card-image">
            <img src="https://picsum.photos/200" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
            <a href="#" class="pink-text">This is a link</a>
            </div>
        </div>
        </div><div class="col s12 m4 l4">
        <!-- Your content here -->
        <div class="card medium">
            <div class="card-image">
            <img src="https://picsum.photos/200" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
            <a href="#" class="pink-text">This is a link</a>
            </div>
        </div>
        </div><div class="col s12 m4 l4">
        <!-- Your content here -->
        <div class="card medium">
            <div class="card-image">
            <img src="https://picsum.photos/200" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
            <a href="#" class="pink-text">This is a link</a>
            </div>
        </div>
        </div>

    </div>
    </div>

@endsection