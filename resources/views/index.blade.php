@extends('layouts.home', ['title' => $title])

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
            <img src="{{asset('assets/img/gambar1depan.jpg')}}" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>Jenis desain undangan pernikahan seperti ini dapat menjadi inspirasi Anda. Bahkan, Anda dapat menyesuaikan dengan konsep yang sudah ditentukan. Desain yang dihasilkan juga terbilang elegan dan simple, sehingga dapat menyampaikan informasi dengan lebih lengkap.</p>
            </div>
            <div class="card-action">
            <a href="/design/1" class="pink-text">Lihat</a>
            </div>
        </div>
        </div><div class="col s12 m4 l4">
        <!-- Your content here -->
        <div class="card medium">
            <div class="card-image">
            <img src="{{asset('assets/img/gambar2depan.jpg')}}" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>Anda dapat juga menggunakan undangan pernikahan dengan desain seperti gambar di atas. Menggunakan aksesoris pita dan gambar daun akan menambah kesan natural. Terutama jika Anda mengusung konsep pernikahan fairy tale, desain seperti ini sangat cocok digunakan.</p>
            </div>
            <div class="card-action">
            <a href="/design/2" class="pink-text">Lihat</a>
            </div>
        </div>
        </div><div class="col s12 m4 l4">
        <!-- Your content here -->
        <div class="card medium">
            <div class="card-image">
            <img src="{{asset('assets/img/gambar3depan.jpg')}}" alt=""/>
            <span class="card-title"></span>
            </div>
            <div class="card-content">
            <p>Jika Anda dan pasangan mengusung tema pernikahan seperti keluarga kerajaan, dapat menggunakan desain undangan tersebut. Meski terlihat sederhana dan vintage, tapi tidak kalah elegan dengan desain-desain undangan lainnya.</p>
            </div>
            <div class="card-action">
            <a href="/design/3" class="pink-text">Lihat</a>
            </div>
        </div>
        </div>

    </div>
    </div>

@endsection