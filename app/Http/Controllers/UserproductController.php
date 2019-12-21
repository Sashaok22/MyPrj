<?php

namespace App\Http\Controllers;

use App\Basket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Response;

class UserproductController extends Controller
{
    public function buy(Request $request)
    {
        $basket = new Basket();
        $basket->number = $request->number;
        $basket->user_id = Auth::id();
        $basket->product_id = $request->product_id;
        $basket->save();
        return redirect()->back();
    }

}
