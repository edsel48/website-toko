<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Category;
use App\Models\Inventory\Promo;
use App\Models\Inventory\Product;
use App\Models\Inventory\Supplier;
use Illuminate\Http\Request;

class AdminTestController extends Controller
{
    function landing(){
        return redirect(route("admin-rework.dashboard"));
    }

    function index(){
        request()->session()->put('items', [
            ["Dashboard", "dashboard"],
            ["Product", "box"],
            ["Category", "folder"],
            ["Promo", "tag"],
            ["Supplier", "truck-field"],
            ["Cart", "shopping-cart"],
            ["User", "user"]
        ]);

        request()->session()->put('active', "dashboard");

        $product = count(Product::where("deleted", "!=", 1)->get());
        $category = count(Category::all());
        $promo = count(Promo::all());
        $supplier = count(Supplier::all());


        return view("admin-rework.dashboard", compact("product", "category", "promo", "supplier"));
    }

    function category(){
        request()->session()->put('active', "category");

        $categories = Category::all();

        if(request()->query){
            $data = request()->query("search");
            $categories = Category::where("name", "like", "%".$data."%")->get();
        }


        return view("./admin-rework/category/index", compact("categories"));
    }

    function supplier(){
        request()->session()->put('active', "supplier");
        $suppliers = Supplier::all();

        if(request()->query){
            $data = request()->query("search");
            $suppliers = Supplier::where("name", "like", "%".$data."%")->get();
        }

        return view(".admin-rework.supplier.index", compact("suppliers"));
    }

    function promo(){
        request()->session()->put('active', "promo");
        $promos = Promo::all();

        if(request()->query){
            $data = request()->query("search");
            $promos = Promo::where("name", "like", "%".$data."%")->get();
        }

        return view(".admin-rework.promo.index", compact("promos"));
    }

    function product(){
        request()->session()->put('active', "product");
        $products = Product::where("deleted", "!=", 1);

        if(request()->query){
            $data = request()->query("search");
            $products = Product::where("name", "like", "%".$data."%")->where("deleted", "!=", 1)->get();
        }

        return view(".admin-rework.product.index", compact("products"));
    }
}
