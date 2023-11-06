<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Product;
use App\Models\Inventory\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all();

        return view("admin-rework.promo.index", compact("promos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view("admin-rework.promo.insert", compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo;
        $promo->name = $request->name;
        $promo->product_id = $request->product_id;
        $promo->start_date = $request->start_date;
        $promo->end_date = $request->end_date;
        $promo->discount = $request->discount;
        $promo->min_purchase = $request->min_purchase;

        $promo->save();

        return redirect(route("admin-rework.promo"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Promo::find($id);
        $products = Product::all();

        return view("admin-rework.promo.update", compact("cat", "products"));

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
        $promo = Promo::find($id);

        $promo->name = $request->name;
        $promo->product_id = $request->product_id;
        $promo->start_date = $request->start_date;
        $promo->end_date = $request->end_date;
        $promo->discount = $request->discount;
        $promo->min_purchase = $request->min_purchase;

        $promo->save();

        return redirect(route("admin-rework.promo"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promo::find($id)->delete();

        return redirect(route("admin-rework.promo"));
    }
}
