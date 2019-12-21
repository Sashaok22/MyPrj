@extends('layouts.app')
@section('content')

<div class="wrapper">
    <div class="main_block">

        <div class="container">

            <div class="menu_list row">
                @foreach($produc as $product)
                <div class="item col-md-6" id="bx_1847241719_4">
                    <div class="inner">
                        <a title="{{$product->type}}" href="{{route('products',[$product->type])}}">
                            <div class="photo">
                                <img alt="{{$product->type}}" src="/upload/iblock/1b7/1b7579e4f4a89849374228c3a63b4267.jpg">
                            </div>
                            <div class="title">{{$product->type}}</div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
