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
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\If_;
use SebastianBergmann\Comparator\TypeComparator;
use function Sodium\compare;

class ProductController extends Controller
{

        public function insertshow(Request $request)
        {
            if(Product::find($request->product_id)) {
                $req = Product::find($request->product_id);
            }
            else
            {
                $req = new Product();
                $req->imgpath = ' ';
                $req->title = ' ';
                $req->weight = ' ';
                $req->price = ' ';
                $req->type_id=' ';
                $req->discount=0;
                $req->prday=false;
            }
            $ings = type::all();
            return view('insertproduct',compact('ings','req'));
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
        $prod=0;
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
        $one=0;
        $two=100000;
        $tp = $categ;
        $products = Type::find($categ)->products;
        return view('product', compact('products','tp','one','two'));
    }

        public function insert(Request $request)
        {
            if(empty($request->id)) {
                $product = new Product();
            }
            else
            {
                $product = Product::find($request->id);
                $in = IngredientProduct::where("product_id",$request->id)->get();
                foreach ($in as $i){
                    $i->delete();
                }
            }
            if(!empty($request->file('image')))
            {
                $path = $request->file('image')->store('uploads','public');
                $product->imgpath = $path;
            }
            $product->title = $request->title;
            $product->weight = $request->weight;
            $product->price = $request->price;
            $product->type_id=$request->type;
            $product->discount=$request->discount;
            $product->prday=$request->prday;
            $product->save();
            if ($request->ingredients) {
                $ings = explode(' ', $request->ingredients);
                foreach ($ings as $ing) {
                    if (ingredient::where('title', trim($ing))->get()->first()) {
                        If(!(IngredientProduct::find($product->id)))
                        {
                            $ipr = new IngredientProduct();
                            $ipr->product_id = $product->id;
                            $ipr->ingredient_id = ingredient::where('title', trim($ing))->get()->first()->id;
                            $ipr->save();
                        }
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
            return redirect()->route('product',[$request->type,$product->id]);
        }

        function delprod(Request $request)
        {
            Product::find($request->product_id)->delete();
            return redirect()->route('products',[$request->type]);
        }

        function sort(Request $request)
        {
            $one=$request->one;
            $two=$request->two;
            $tp = $request->type;
            $products1 = Type::find($request->type)->products;
            foreach($products1 as $prod)
            {
                $prod->price=$prod->price*(1-($prod->discount/100));
            }
            $products2=$products1->whereBetween('price', [$request->one, $request->two]);
            if($request->disk==1) {
                $products3 = $products2->whereBetween('discount', [1, 100]);
            }
            else
            {
                $products3=$products2;
            }
            if($request->prday==1) {
                $product4=$products3->where('prday',true);
            }
            else
            {
                $product4=$products3;
            }
            if($request->grad == 'Ascending') {
                $products=$product4->sortBy('price');
            }
            else
            {
                $products=$product4->sortByDesc('price');
            }
            return view('product', compact('products','tp','one','two'));
        }
}
