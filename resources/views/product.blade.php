@extends('layouts.app')
@section('content')
        @foreach($products as $product)
            <div class="spis">
            <div class="card" style="width: 18rem; margin: 1rem">
                <img class="card-img-top" src="{{asset('/storage/'.$product->imgpath)}}" alt="Card image cap">
                <div class="card-body">
                    <div style="display: flex; flex-wrap: nowrap">
                        <div style="display:flex; flex-direction: row">
                            <a href="{{ route('product',[$product->type_id,$product]) }}" class="card-link">
                                <h5 class="card-title">{{$product->title}}</h5>
                            </a>
                        </div>
                        <div style="display:flex; flex-direction: row-reverse">
                            <p class="card-title" style="margin:0 2rem">{{$product->price}}</p>
                        </div>
                    </div>
                    <p class="card-text">{{$product->weight}}</p>
                    <div style="display:flex; flex-direction: row-reverse">
                        <p class="card-title" style="margin:0 2rem">{{App\Type::find($product->type_id)->title}}</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        ingredient:@foreach($product->ingredients()->get() as $ingredient){{$ingredient->title}} @endforeach</li>
                </ul>
            </div>
            </div>
        @endforeach
@endsection
