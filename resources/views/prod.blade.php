@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="border-bottom border-dark">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <h1>Title: {{$product->title}}</h1>
                </div>
                <div class="col-auto">
                    Price: {{$product->price}}
                </div>
            </div>
            <div class="row">
{{--                <div class="col-1">--}}
{{--                    <form action="{{route('buyProduct')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" name="product_id" value="{{$product->id}}">--}}
{{--                        <button type="submit">Купить</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>

            <div class="row">
                Tags: @foreach($product->ingredients()->get() as $ing)
                    {{$ing->title}}
                @endforeach
            </div>
        </div>
@endsection
