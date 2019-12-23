<?php

namespace App\Http\Controllers;

use App\BasketProduct;
use App\ingredient;
use App\ingredientProduct;
use App\Product;
use App\ProductTag;
use App\Tag;
use App\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Comparator\TypeComparator;

class ProductController extends Controller
{

        public function insertshow()
        {
            $ings = type::all();
            return view('insertproduct',compact('ings'));
        }

        public function  showbasket()
    {
        $sum = 0;
        $flag = 0;
        $test =0;
        $bask = \App\Basket::where('user_id',Auth::id())->get()->first();
        foreach ($bask->products()->get() as $prod)
        {
            $test = $prod->price;
        }
        if($test>0)
        {
            $flag=1;
        }
        if($flag==1) {
            return view('basket', compact('bask', 'sum'));
        }
        else
        {
            return view('noprod');
        }
    }


    public function show($type,$id)
    {
        $prod= true;
        $product = Product::where('id', $id)->first();
        return view('prod', compact('product','prod'));
    }

    public function cat()
    {
        $produc = Type::all()->sortByDesc('created_at');
        return view('Categ', compact('produc'));
    }

    public function get($categ)
    {
        $products = Type::find($categ)->products;
        return view('product', compact('products'));
    }

        public function insert(Request $request)
        {
            $path = $request->file('image')->store('uploads','public');
            $product = new Product();
            $product->imgpath = $path;
            $product->title = $request->title;
            $product->weight = $request->weight;
            $product->price = $request->price;
            $product->type_id=$request->type;
            $product->save();
            if ($request->ingredients) {
                $ings = explode(' ', $request->ingredients);
                foreach ($ings as $ing) {
                    if (ingredient::where('title', trim($ing))->get()->first()) {
                        $ipr = new IngredientProduct();
                        $ipr->product_id = $product->id;
                        $ipr->ingredient_id = ingredient::where('title', trim($ing))->get()->first()->id;
                        $ipr->save();
                    } else {
                        $ingr = new ingredient();
                        $ingr->title = trim($ing);
                        $ingr->save();
                        $ipr = new IngredientProduct();
                        $ipr->product_id = $product->id;
                        $ipr->ingredient_id = ingredient::where('title', trim($ing))->get()->first()->id;
                        $ipr->save();
                    }
                }
            }
            return redirect()->route('product');
        }
}
