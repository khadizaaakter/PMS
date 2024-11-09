@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $product->name }}</h1>

    <div class="mb-3">
        <strong>Product ID:</strong> {{ $product->product_id }}
    </div>

    <div class="mb-3">
        <strong>Description:</strong> {{ $product->description }}
    </div>

    <div class="mb-3">
        <strong>Price:</strong> ${{ $product->price }}
    </div>

    <div class="mb-3">
        <strong>Stock:</strong> {{ $product->stock }}
    </div>

    <div class="mb-3">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Product List</a>
@endsection
