<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #hk
        {
            font-size: 130%;
        }
    </style>
</head>
<body>
<?$sum=0 ?>
<strong>Thank you for your purchase</strong>
<p id="hk">Sales receipt:</p>
<div id="chek">
@foreach(\App\Basket::where('user_id',Auth::id())->get()->first()->products()->get() as $prod)
<p>{{$loop->index+1}}. Product: {{$prod->title}}, Count:{{$prod->pivot->number}}, Price:{{$prod->price}}, Sum:{{$prod->price*$prod->pivot->number}}</p>
<input hidden value="{{$sum+=$prod->price*$prod->pivot->number}}">
@endforeach
</div>
<Strong style="font-size: 20px">Total: {{$sum}}</Strong>
</body>
</html>
