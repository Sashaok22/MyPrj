<?php

namespace App\Http\Controllers;

use App\Basket;
use App\BasketProduct;
use App\Product;
use App\type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Response;

class UserproductController extends Controller
{
    public function buy(Request $request)
    {
        $baskprod = new BasketProduct();
        $baskprod->basket_id = Basket::find(Auth::id())->id;
        $baskprod->product_id = $request->product_id;
        $baskprod->number = $request->number;
        $baskprod->save();
        \response($request);
    }



}
