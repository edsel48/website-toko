<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table_name = "cart";
    public $timestamps = false;

    protected $user_id;
    protected $product_id;

    protected $qty;
}
