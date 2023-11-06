<?php

namespace App\Http\Controllers\Transaction;

use App\Models\Auth\User;
use App\Models\Pos\THeader;

use Illuminate\Http\Request;
use App\Models\Inventory\Product;
use App\Http\Controllers\Controller;

class THeaderController extends Controller
{
    public function calculate_total(){
        $data = session()->get("product_details") ?? [];

        $sum = 0;
        foreach ($data as $d) {
            $qty = $d["qty"];
            $p_price = $d["product"]["price"];

            $sum += $p_price * $qty;
        }

        return $sum;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin-rework.transaction.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        $admins = User::all()->where("type", "==", 1);
        $users = User::all()->where("type", "==", 0);

        $product_details = session()->get("product_details") ?? [];

        // the expected outcome from the products are as follow :
        // 1. Product should be listed based on the session right now probably ?

        if(request()->query){
            $data = request()->query("search");
            $products = Product::where("name", "like", "%".$data."%")->get();
        }

        $total = $this->calculate_total();

        return view("admin-rework.transaction.insert", compact("products", "admins", "users", "product_details", "total"));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = new THeader;
        $header->user_id = $request->user_id;
        $header->status = "Draft";

        $header->save();

        return redirect(route("admin-rework.transaction"));
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
        $header = THeader::find($id);

        return view("admin-rework.transaction.update", compact("header"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = THeader::find($id);

        $details = $header->details();

        return view("admin-rework.transaction.update", compact("header"));
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
        $header = new THeader;
        $header->user_id = $request->user_id;
        $header->status = $request->status;

        $header->save();

        return redirect(route("admin-rework.transaction"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        THeader::find($id)->delete();

        return redirect(route("admin-rework.transaction"));
    }
}
