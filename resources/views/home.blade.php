@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h2 class="mb-4 text-center">Nosso Cardápio</h2>

<div class="card-container">
    @foreach($sandwiches as $s)
        <div class="card">
            <img src="{{ asset('images/' . $s['image']) }}" alt="{{ $s['name'] }}">
            <h5> {{ $s['name'] }}</h5>
            <p>{{ $s['description'] }}</p>
            <p>Price: ${{ $s['price'] }}</p>
            <button>Pedir</button>
        </div>
    @endforeach
</div>
@endsection
