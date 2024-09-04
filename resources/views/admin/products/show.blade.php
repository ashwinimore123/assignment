<!-- resources/views/admin/products/show.blade.php -->
@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>View Product</h2>
    <div class="card">
        <div class="card-header">
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Amount:</strong> {{ $product->amount }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            @if($product->image)
                <p><strong>Image:</strong></p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
            @endif
        </div>
    </div>
</div>
@endsection
