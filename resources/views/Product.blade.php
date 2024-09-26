@extends('layouts.main')
@section('container')
<h1>Products in {{ $category->name }}</h1>
@if ($product->isEmpty())
    <p>No products found in this category.</p>
@else
    <ul>
        @foreach ($product as $item)
            <li>{{ $item->name }} - {{ $item->price }}</li>
        @endforeach
    </ul>
@endif
@endsection