<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentManagementSystem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "cms";

    // this is when the image is not from the product
    protected $img;

    // this is for the product
    protected $product_id;

    // this is the checker for the cms
    protected $place;
}
