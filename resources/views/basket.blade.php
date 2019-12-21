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
        @foreach($bask as $bas)
        <tr>
            <th scope="row">1</th>
            <td>{{\App\Product::find($bas->product_id)->title}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
@endsection
