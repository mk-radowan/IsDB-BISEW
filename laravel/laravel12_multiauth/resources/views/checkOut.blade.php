@extends('layout')

@section('content')

    <div class="row">
        <p>
            @php
                $total = 0;
            @endphp </p>

        @foreach (session('cart') as $id => $details)
            @php
                $total += $details['price'] * $details['quantity'];
            @endphp
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $details['image'] }}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $details['name'] }}</h5>
                        <p class="card-text">Price: ${{ $details['price'] }}</p>
                        <p class="card-text">Quantity: {{ $details['quantity'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
