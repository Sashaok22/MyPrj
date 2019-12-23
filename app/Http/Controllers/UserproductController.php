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
        $baskprod = new BasketProduct();
        $baskprod->basket_id = Basket::find(Auth::id())->id;
        $baskprod->product_id = $request->product_id;
        $baskprod->number = $request->number;
        $baskprod->save();
        \response($request);
    }

    public function delfrombask(Request $request)
    {
            BasketProduct::where('product_id',$request->id)->delete();
            return $request->id;
    }

    public function buyall(Request $request)
    {
//        $sal = new Sale();
//        $sal->user_id= Auth::id();
//        $sal->price=$request->number;
//        $sal->save();
//        $id = Basket::find(Auth::id())->id;
//        $bp = BasketProduct::where('basket_id',$id)->get();
//        foreach ($bp as $b)
//        {
//            $b->delete();
//        }
        $bask = $request->bask;
        $count = $request->number;
        return redirect()->route('sendmail'[$bask],[$count]);
    }





}
