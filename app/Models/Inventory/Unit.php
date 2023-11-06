<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "unit";

    protected $product_id;

    protected $stock;
    protected $price;
    protected $length;
    protected $width;
    protected $height;
    protected $weight;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
