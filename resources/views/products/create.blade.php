@extends('layouts.app')

@section('title')
Add new Product
@endsection

@section('content')

<div class="container py-5">
    <h1>Market database</h1>
    <h2>Add a new product on database</h2>

    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" name="code" id="code" class="form-control" placeholder="product code here "
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="product name here "
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="product price here "
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="product description here " aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Img</label>
            <input type="text" name="img" id="img" class="form-control" placeholder="product img here "
                aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add product</button>
    </form>
</div>

@endsection