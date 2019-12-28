@extends('layouts.app')
@section('content')
<h1 style="margin-left: 43%">Home page</h1>
    <div style="margin:0 14% 0 14%;position: relative;float: top">
        <br>
        <br>
        <h2>Discounts:</h2>
        @foreach(\App\Product::all() as $product)
            @if($product->discount>0)
            <div class="spis" style="position: relative;float: left">
                <div class="card" style="width: 18rem; margin: 1rem">
                    <img class="card-img-top" src="{{asset('/storage/'.$product->imgpath)}}" alt="Card image cap">
                    <div class="card-body" style="height: 200px">
                        <div>
                            <div>
                                <a href="{{ route('product',[$product->type_id,$product]) }}" class="card-link">
                                    <h5 class="card-title">{{$product->title}}</h5>
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="card-title" style="margin:0 2rem;float: left;">Discount: {{$product->discount}}%</p>
                            <p class="card-title" style="margin:0 2rem;float: left;text-decoration: line-through">Old price: {{$product->price}} rub</p>
                            <p class="card-title" style="margin:0 2rem;float: left;">New price: {{$product->price*(1-$product->discount/100)}} rub</p>

                        </div>
                        <br>
                        <div>
                            <p class="card-text" style="margin:0 2rem;float: left">Weight: {{$product->weight}}</p>
                        </div>
                        <br>
                        <div>
                            <p class="card-title" style="margin:0 2rem;float: left">Type: {{App\Type::find($product->type_id)->title}}</p>
                        </div>
                    </div>
                    <div style="height: 150px">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            ingredient: @foreach($product->ingredients()->get() as $ingredient){{$ingredient->title}} @endforeach</li>
                    </ul>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        <div style="padding-top: 5%; position: relative;float: left">
            <br>
            <br>
            <h2 style="width: 100%">Product of the day:</h2>
            @foreach(\App\Product::all() as $product)
                @if($product->prday==true)
                    <div class="spis" style="position: relative;float: left">
                        <div class="card" style="width: 18rem; margin: 1rem">
                            <img class="card-img-top" src="{{asset('/storage/'.$product->imgpath)}}" alt="Card image cap">
                            <div class="card-body" style="height: 200px">
                                <div>
                                    <div>
                                        <a href="{{ route('product',[$product->type_id,$product]) }}" class="card-link">
                                            <h5 class="card-title">{{$product->title}}</h5>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    @if($product->discount>0)
                                        <p class="card-title" style="margin:0 2rem;float: left;">Discount: {{$product->discount}}%</p>
                                        <p class="card-title" style="margin:0 2rem;float: left;text-decoration: line-through">Old price: {{\App\Product::where('id',$product->id)->get()->first()->price}} rub</p>
                                        <p class="card-title" style="margin:0 2rem;float: left;">New price: {{\App\Product::where('id',$product->id)->get()->first()->price*(1-$product->discount/100)}} rub</p>
                                    @endif()
                                    @if($product->discount==0)
                                        <p class="card-title" style="margin:0 2rem;float: left;">Price: {{\App\Product::where('id',$product->id)->get()->first()->price}} rub</p>
                                    @endif
                                </div>
                                <br>
                                <div>
                                    <p class="card-text" style="margin:0 2rem;float: left">Weight: {{$product->weight}}</p>
                                </div>
                                <br>
                                <div>
                                    <p class="card-title" style="margin:0 2rem;float: left">Type: {{App\Type::find($product->type_id)->title}}</p>
                                </div>
                            </div>
                            <div style="height: 150px">
                            <ul  class="list-group list-group-flush">
                                <li class="list-group-item">
                                    ingredient: @foreach($product->ingredients()->get() as $ingredient){{$ingredient->title}} @endforeach</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection



