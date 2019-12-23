<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailSettings extends Controller
{
    public function sendmail(Request $request)
    {

        Mail::to(\App\User::find(Auth::id())->email)->send(new MailClass());
        MailSettings::buyall($request);
        return view('message');
    }

    public function buyall(Request $request)
    {
//        $sal = new \App\Sale();
//        $sal->user_id= Auth::id();
//        $sal->price=$request->number;
//        $sal->save();
//        $id = \App\Basket::find(Auth::id())->id;
//        $bp = \App\BasketProduct::where('basket_id',$id)->get();
//        foreach ($bp as $b)
//        {
//            $b->delete();
//        }

    }
}
