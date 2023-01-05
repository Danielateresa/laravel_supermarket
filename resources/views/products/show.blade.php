@extends('layouts.app')

@section('title')
Product detail
@endsection

@section('content')

<div class="container py-5">
    <h1>Market database</h1>
    <h2>Product details</h2>

    <div class="details d-flex pt-4">

        <img class="w-50" src="{{$product->img}}" alt="{{$product->name}}">

        <div class="text_details ps-5">
            <h4>Product code: <span class="fw-normal fs-5">{{$product->code}}</span></h4>
            <h4>Product name: <span class="fw-normal fs-5">{{$product->name}}</span></h4>
            <h4>Product price: <span class="fw-normal fs-5">{{$product->price}}</span></h4>
            <h4>Product description: <span class="fw-normal fs-5">{{$product->description}}</span></h4>
        </div>
    </div>
</div>

@endsection