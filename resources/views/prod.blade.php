
@extends('layouts.app')
@section('content')
    <div class="container" style="border: solid black">
        <div class="border-bottom border-dark">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <img style="width: 25%" class="card-img-top" src="{{asset('/storage/'.$product->imgpath)}}" alt="Card image cap">
                    <h1>Title: {{$product->title}}</h1>
                </div>
                <div class="col-auto">
                    Price: {{$product->price}}
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <form id="save" method="post">
                        @csrf
                        <div id="norm">
                        <button  type="submit" class="btn btn-primary" >Add to Basket</button>
                        Count
                        <p><input name="number" class="form-control" type="text" value="1"></p>
                            <input name="product_id" class="form-control" type="text" value="{{$product->id}}" hidden>
                        </div>
                        <div id="msg" style="display: none">
                            Product added
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                Ingredients: @foreach($product->ingredients()->get() as $ing)
                    {{$ing->title}}
                @endforeach
            </div>

        </div>
{{--        <form action="{{route('buy')}}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="product_id" value="{{$product->id}}">--}}
{{--            <button type="submit" class="btn btn-primary">Add to Basket</button>--}}
{{--            Count--}}
{{--            <p><input style="width: 5%" class="form-control" type="text" name="number" value="1"></p>--}}
{{--        </form>--}}
    </div>
<script>
    $(document).ready(function () {
        $('#save').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/addtobasket',
                data: $('#save').serialize(),
                success: function (data) {
                    $('#norm').hide();
                    $('#msg').show();
                },
            });
        });
    });
</script>
@endsection


