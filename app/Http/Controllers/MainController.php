<?php

namespace App\Http\Controllers;

use App\Product;
use App\Sale;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $prday = Product::where('prday',true)->get();
        return view('/index' ,compact($prday));
    }

    public function st()
    {
        $use = User::all();
        $stat = Sale::all();
        return view('/stat',compact('stat','use'));
    }

    public function sort(Request $request)
    {

        $stat=Sale::whereBetween('created_at',[$request->from, $request->to])->get();
        $use=User::whereBetween('created_at',[$request->from, $request->to])->get();
        return view('/stat',compact('stat','use'));
    }
}
