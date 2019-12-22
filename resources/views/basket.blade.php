@extends('layouts.app')
@section('content')

    <div class="container" style="border: solid black">
        <div class="border-bottom border-dark">
            <div class="row justify-content-md-center">

    <table class="table table-sm">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Count</th>
            <th scope="col">Price</th>
            <th scope="col">Sum</th>
            <th scope="col">Button</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bask->products()->get() as $prod)
        <tr id="objtodel{{$prod->id}}">
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$prod->title}}</td>
            <td>{{$prod->pivot->number}}x</td>
            <td>{{$prod->price}}</td>
            <td>{{$prod->price*$prod->pivot->number}}</td>
            <td>
                <form method="post" id="delk"  style="width: 100%">
                    <button  type="submit" class="btn btn-primary" >Remove</button>
                    <input name="delka" value="{{$prod->id}}" hidden>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('#delk').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '{{route('delfrombasket')}}',
                    data: $('#delk').serialize(),
                    success: function (data) {
                        var o=document.getElementById('objtodel'+data);
                        alert(a);
                        //alert('objtodel'+data);
                        //o.remove();
                    },
                });
            });
        });
    </script>
@endsection
