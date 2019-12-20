@extends('layouts.app')
@section('content')
    <div>
        @foreach($products as $product)
            <div>
            <a href="{{ route('product',[$product]) }}" class="card-link">
            <div class="card" style="width: 18rem; margin: 1rem">
                {{--        <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">--}}
                <div class="card-body">
                    <div style="display: flex; flex-wrap: nowrap">
                        <div style="display:flex; flex-direction: row">
                            <a href="{{ route('product',[$product]) }}" class="card-link">
                                <h5 class="card-title">{{$product->title}}</h5>
                            </a>
                        </div>
                        <div style="display:flex; flex-direction: row-reverse">
                            <p class="card-title" style="margin:0 2rem">{{$product->price}}</p>
                        </div>
                    </div>
                    <p class="card-text">{{$product->weight}}</p>
                    <div style="display:flex; flex-direction: row-reverse">
                        <p class="card-title" style="margin:0 2rem">{{$product->type}}</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        ingredient:@foreach($product->ingredients()->get() as $ingredient){{$ingredient->title}} @endforeach</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
