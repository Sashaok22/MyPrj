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
        </tr>
        </thead>
        <tbody>
        @foreach($bask->products()->get() as $prod)
        <tr>
            <th scope="row">1</th>
            <td>{{$prod->title}}</td>
            <td>{{$prod->pivot->number}}</td>
            <td>{{$prod->price}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
@endsection
