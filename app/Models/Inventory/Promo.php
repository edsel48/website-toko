<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promo extends Model
{
    use HasFactory;

    protected $table_name = "promo";
    public $timestamps = false;

    protected $id;
    protected $product_id;
    protected $start_date;
    protected $end_date;
    protected $discount;
    protected $min_purchase;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
