<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content\ContentManagementSystem;


class ContentManagementSystemController extends Controller
{
    function update(){
        $id = request()->id;

        $data = ContentManagementSystem::find($id);

        $data->header = request()->header ?? $data->header;
        $data->description = request()->description ?? $data->description;

        $data->img = request()->img ?? $data->img;
        $data->product_id = request()->product_id ?? $data->product_id;

        $data->save();

        return redirect()->back();
    }

    function bulkUpdate(){

    }
}
