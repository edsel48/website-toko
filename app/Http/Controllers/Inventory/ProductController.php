<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Category;
use App\Models\Inventory\Product;
use App\Models\Inventory\Unit;
use App\Models\Inventory\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("admin-rework.product.index", [
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view("admin-rework.product.insert", compact("categories", "suppliers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->img = "";
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;

        $product->save();

        $unit = new Unit;
        $unit->product_id = $product->id;
        $unit->stock = $request->stock;
        $unit->price = $request->price;
        $unit->length = 0;
        $unit->width = 0;
        $unit->height = 0;
        $unit->weight = 0;

        $unit->save();

        return redirect(route("unit.edit", $unit->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //tbd
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view("admin-rework.product.update", compact("categories", "suppliers", "product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->img = "";
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;

        $product->unit->price = $request->price;
        $product->unit->stock = $request->stock;
        $product->unit->save();

        $product->save();

        return redirect(route("admin-rework.product"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->unit->delete();
        Product::find($id)->delete();



        return redirect(route("admin-rework.product"));
    }
}
