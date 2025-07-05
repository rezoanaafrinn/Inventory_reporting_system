@extends('layouts.app')

@section('content')
    <h2>Add New Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name of the product" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="purchase_price" class="form-label">Purchase Price (TK):</label>
            <input type="number" class="form-control" id="purchase_price" name="purchase_price" step="0.01" value="{{ old('purchase_price') }}" required>
        </div>

        <div class="mb-3">
            <label for="sell_price" class="form-label">Sell Price (TK):</label>
            <input type="number" class="form-control" id="sell_price" name="sell_price" step="0.01" value="{{ old('sell_price') }}" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Opening Stock:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Add Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
