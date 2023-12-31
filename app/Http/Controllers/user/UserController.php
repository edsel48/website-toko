<?php

namespace App\Http\Controllers\user;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Models\Inventory\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Content\ContentManagementSystem;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [];
        $data = ContentManagementSystem::all()->where("place", "PRODUCT");

        foreach($data as $d){
            $products[] = $d->product;
        }

        $header = ContentManagementSystem::where("place", "HEADER")->first();
        $review = ContentManagementSystem::where("place", "REVIEW")->first();
        $qualities = ContentManagementSystem::all()->where("place", "QUALITY");
        $instagram = ContentManagementSystem::all()->where("place", "INSTAGRAM");

        return view("User.index", compact("products", "header", "review", "qualities", "instagram"));
    }

    public function login()
    {
        return view("AUTH.login");
    }

    public function process()
    {

        $user = User::all()->where("email", request()->email)->where("password", request()->password);

        if(count($user) == 0){
            return redirect()->back();

        }

        $user = $user->first();
        $user_logged = $user;
        request()->session()->put('user_logged', $user_logged);

        if($user->type == 0){
            return redirect(route("admin-rework.index"));
        }

        return redirect(route("user.index"));
    }

    public function logout()
    {
        request()->session()->forget("user_logged");

        return redirect(route("user.index"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // this is for deleting session for logout
        $request->session()->forget('user_logged');
        session()->forget("product_details");

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view("admin-rework.user.update", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect(route("admin-rework.user"));
    }
}
