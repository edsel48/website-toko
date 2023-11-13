<?php

namespace App\Models\Content;

use App\Models\Inventory\Product;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
