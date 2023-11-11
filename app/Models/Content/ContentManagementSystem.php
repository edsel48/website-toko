<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentManagementSystem extends Model
{
    use HasFactory;
    use SoftDeletes;

    // this is when the image is not from the product
    protected $img;

    // protected header name
    protected $header;

    // this is when the things needed description
    protected $description;

    // this is for the product
    protected $product_id;

    // this is the checker for the cms
    protected $place;
}
