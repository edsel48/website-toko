<?php

namespace App\Models\Inventory;

use App\Models\Inventory\Size;
use App\Models\Inventory\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "unit";

    protected $product_id;

    protected $unit_name;
    protected $price;
    protected $quantity;
    protected $level;


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function size(): HasOne
    {
        return $this->hasOne(Size::class, 'unit_id');
    }

}
