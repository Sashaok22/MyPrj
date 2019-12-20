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
    <h1>New product</h1>
    <div class="content">
        <div class="container">
            <form method="POST" action="{{route('insertProduct')}}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    Введите название:
                    <textarea class="form-control" id="text" name="title"></textarea>
                </div>
                <div class="form-group">
                    Введите вес:
                    <textarea class="form-control" id="text" name="weight"></textarea>
                </div>
                <div class="form-group">
                    Введите цену:
                    <input class="form-control" type="text" name="price">
                </div>
                <div class="form-group">
                    Выберите тип:
                    <select name="type" class="form-control">
                        @foreach($ings as $ing)
                            <option value={{$ing->title}}>{{$ing->title}}</option>
                        @endforeach;
                    </select>
                </div>
                <div class="form-group">
                    Выберите ингредиенты:
                    <input class="form-control" type="text" name="ingredients">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>

    </div>

@endsection
