@extends('layouts.app')

@section('title')
Edit Product
@endsection

@section('content')

<div class="container py-5">
    <h1>Market database</h1>
    <h2>Edit product</h2>

    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" name="code" id="code" class="form-control" aria-describedby="helpId"
                value="{{$product->code}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" aria-describedby="helpId"
                value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" aria-describedby="helpId"
                value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId"
                value="{{$product->description}}">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Img</label>
            <input type="text" name="img" id="img" class="form-control" aria-describedby="helpId"
                value="{{$product->img}}">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Edit product</button>
    </form>
</div>

@endsection