@extends('layouts.app')
@section('content')

<div class="wrapper">
    <div class="main_block">

        <div class="container">

            <div class="menu_list row">
                @foreach($produc as $product)
                <div class="item col-md-6" id="bx_1847241719_4">
                    <div class="inner">
                        <a title="{{$product->title}}" href="{{route('products',[$product])}}">
                            <div class="photo">
                                <img alt="{{$product->title}}" src="/upload/iblock/1b7/1b7579e4f4a89849374228c3a63b4267.jpg">
                            </div>
                            <div class="title">{{$product->title}}</div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
