@extends('layouts.app')

@section('content')
    <h2>Create New Sale</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="" method="POST">
        @csrf

        <table class="table table-bordered mb-4">
            <thead class="table-light">
                <tr>
                    <th>Select</th>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <input type="checkbox" name="items[{{ $product->id }}][product_id]" value="{{ $product->id }}">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->sell_price, 2) }} TK</td>
                    <td>
                        <input type="number" name="items[{{ $product->id }}][quantity]" value="0" min="0" class="form-control">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Discount (TK)</label>
                <input type="number" name="discount" class="form-control" value="0" min="0">
            </div>

            <div class="col-md-4">
                <label>Customer Paid (TK)</label>
                <input type="number" name="paid_amount" class="form-control" value="0" min="0">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Submit Sale</button>
    </form>
@endsection
