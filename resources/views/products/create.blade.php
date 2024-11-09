@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="text" name="product_id" class="form-control" value="{{ old('product_id') }}" required>
            @error('product_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" value="{{ old('image') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection
