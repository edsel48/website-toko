<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "cart";
    protected $primary_key = "id";
    public $timestamps = false;

    protected $user_id;
    protected $product_id;

    protected $qty;
}
