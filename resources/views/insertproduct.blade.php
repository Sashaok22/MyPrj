@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 style="position: center">New product</h1>
    <div class="content">
        <div class="container">
            <form method="POST" action="{{route('insertProduct')}}" enctype="multipart/form-data">
                <div class="form-group">
                    Choose image for product:
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="form-group">
                    @csrf
                    Enter the title:
                    <textarea class="form-control" id="text" name="title"></textarea>
                </div>
                <div class="form-group">
                    Enter weight:
                    <textarea class="form-control" id="text" name="weight"></textarea>
                </div>
                <div class="form-group">
                    Enter price:
                    <input class="form-control" type="text" name="price">
                </div>
                <div class="form-group">
                    Enter type:
                    <select name="type" class="form-control">
                        @foreach($ings as $ing)
                            <option value={{$ing->id}}>{{$ing->title}}</option>
                        @endforeach;
                    </select>
                </div>
                <div class="form-group">
                    Enter ingredients:
                    <input class="form-control" type="text" name="ingredients">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>

    </div>

@endsection
