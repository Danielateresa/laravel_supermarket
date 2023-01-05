@extends('layouts.app')

@section('title')
Welcome
@endsection

@section('content')

<div class="container">
    <h1>Market database</h1>

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>{{session('message')}}</strong>
    </div>
    @endif

    <div class="d-flex">
        <a class="btn btn-primary my-3 ms-auto" href="{{route('products.create')}}">Add new Product</a>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">code</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">img</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr class="">
                    <td scope="row">{{$product->id}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td><img class="w-50" src="{{$product->img}}" alt="{{$product->name}}"></td>
                    <td><a class="btn btn-secondary w-75" href="{{route('products.show', $product->id)}}">Show</a>
                        <a class=" btn btn-warning my-1  w-75" href="{{route('products.edit', $product->id)}}">Edit</a>
                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>

                @empty
                No products on database yet
                @endforelse

            </tbody>
        </table>
    </div>


</div>

@endsection