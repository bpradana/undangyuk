@extends('layouts.main', ['title' => $title])

@section('content')
  
@foreach ($transactions as $transaction)
    <a href="/design/{{ $transaction->design->id }}">
        <h2>{{ $transaction->design->title }}</h2>
    </a>
    <p>Price: {{ $transaction->design->price }}</p>
    @if (!$transaction->is_buy)
        <a href="/pay-transaction/{{ $transaction->id }}">Pay</a>
        <form action="/delete-transaction/{{ $transaction->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @else
        <p>Paid</p>
    @endif
    <hr>
@endforeach

@endsection