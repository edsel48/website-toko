<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "supplier";
    protected $primary_key = "id";
    public $timestamps = false;

    protected $name;


    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'supplier_id');
    }
}
