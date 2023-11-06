<?php

namespace App\Http\Controllers\test;

use App\Models\Auth\User;
use App\Models\Pos\THeader;
use Illuminate\Http\Request;
use App\Models\Inventory\Unit;
use App\Models\Inventory\Promo;
use App\Models\Inventory\Product;
use App\Models\Inventory\Category;
use App\Models\Inventory\Supplier;
use App\Http\Controllers\Controller;

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
            ["POS", "money-bill"],
            ["Unit", "barcode"],
            ["User", "user"],
        ]);

        request()->session()->put('active', "dashboard");

        $product = count(Product::all());
        $category = count(Category::all());
        $promo = count(Promo::all());
        $supplier = count(Supplier::all());
        $transaction = count(THeader::all());
        $user = count(User::all());
        $unit = count(Unit::all());


        return view("admin-rework.dashboard",
        compact("product", "category", "promo", "supplier", "transaction", "user", "unit"));
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
        $products = Product::all();

        if(request()->query){
            $data = request()->query("search");
            $products = Product::where("name", "like", "%".$data."%")->get();
        }

        return view(".admin-rework.product.index", compact("products"));
    }

    function pos(){
        request()->session()->put('active', "pos");
        $transaction = THeader::all();

        if(request()->query){
            $data = request()->query("search");
            $transaction = THeader::where("status", "like", "%".$data."%")->get();
        }

        return view(".admin-rework.transaction.index", compact("transaction"));
    }

    function unit(){
        request()->session()->put('active', "unit");
        $unit = Unit::all();

        return view(".admin-rework.unit.index", compact("unit"));
    }

    function user(){
        request()->session()->put("active", "user");
        $users = User::all();

        if(request()->query){
            $data = request()->query("search");
            $users = User::where("username", "like", "%".$data."%")->get();
        }

        return view("admin-rework.user.index", compact("users"));
    }

    function upgrade(){
        $user = User::find(request()->id);
        if($user->type == 0) $user->type = 1;
        elseif ($user->type == 1) $user->type = 0;


        $user->save();

        return redirect(route("admin-rework.user"));
    }
}
