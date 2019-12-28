<?php

namespace App\Http\Controllers;

use App\Basket;
use App\BasketProduct;
use App\Product;
use App\sale;
use App\type;
use App\User;
use Illuminate\Contracts\Cache\Store;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Response;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class UserproductController extends Controller
{
    public function buy(Request $request)
    {
        if(Auth::check()) {
            $baskprod = new BasketProduct();
            $baskprod->basket_id = Basket::find(Auth::id())->id;
            $baskprod->product_id = $request->product_id;
            $baskprod->number = $request->number;
            $baskprod->save();
            \response($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function delfrombask(Request $request)
    {
            BasketProduct::where('product_id',$request->id)->delete();
            return $request->id;
    }
}
