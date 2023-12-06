<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/index.blade.php -->
                    
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li> { { $product->name } } </li>
        @endforeach
    </ul>
</div>
@endsection
</body>
</html>

