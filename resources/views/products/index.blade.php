@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success">+ Add New Product</a>
    </div>

    @if($products->count() > 0)
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Purchase Price (TK)</th>
                <th>Sell Price (TK)</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->purchase_price, 2) }}</td>
                <td>{{ number_format($product->sell_price, 2) }}</td>
                <td>{{ $product->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No products available.</p>
    @endif
@endsection
