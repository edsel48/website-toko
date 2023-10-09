<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory\Cart;
use App\Models\Inventory\Product;

class CartController extends Controller
{
    private function getIds(Request $request){
        if(!$request->session()->has("user_logged")){
            return redirect(route("login.index"));
        }

        return $request->session()->get("user_logged")->id;
    }

    function checkProduct(Request $request){
        $user_id = $this->getIds($request);

        $data = Cart::all()->where("user_id", $user_id)->where("product_id", $request->product_id);

        if(count($data) == 1){
            return $data[0]->id;
        }

        return -1;
    }

    function addProduct(Request $request){

        $user_id = $this->getIds($request);
        $ids = $this->checkProduct($request);

        if($ids == -1){
            $cart = new Cart;

            $cart->user_id = $user_id;
            $cart->product_id = $request->product_id;
            $cart->qty = $request->qty;

            $cart->save();

            return redirect(route("index"));
        }

        $cart = Cart::find($ids);

        $cart->user_id = $user_id;
        $cart->product_id = $request->product_id;
        $cart->qty += $request->qty;

        $cart->save();

        return redirect(route("index"));
    }



    function myCart(Request $request){
        $user_id = $this->getIds($request);

        $carts = Cart::all()->where("user_id", $user_id);

        $products = [];

        foreach($carts as $cart){
            $products[] = [Product::find($cart->product_id), $cart->qty];
        }

        return view("user.carts", compact("products"));
    }
}
