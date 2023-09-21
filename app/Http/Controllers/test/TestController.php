<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TestController extends Controller
{

    private function predictData($data){

        $dataMap = [
            "sold_data" => $data,
            "start" => "1",
            "end" => "50",
        ];

        $test_data = [
            "name" => "fals",
        ];

        $request = Http::post("http://127.0.0.1:5000/test", $test_data);

        dd($request->json());

        if($request->ok()) return $request->json();

        return [
            "status" => "failed",
            "request" => $request
        ];
    }

    private function testGet(){
        $request = Http::get("http://127.0.0.1:5000");

        if($request->ok()) return [
            "data" => $request->json(),
        ];


        return [
            "status" => "failed",
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        $data = array();

        for($i = 0; $i < 100; $i++){
            array_push($data, $i);
        }

        dd($this->predictData($data));

        return view("User.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view("User.product-detail", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
