<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "product";

    protected $id;
    protected $name;
    protected $description;
    protected $img;

    protected $category_id;
    protected $supplier_id;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->BelongsTo(Supplier::class);
    }

    public function promos(): HasMany
    {
        return $this->hasMany(Promo::class, 'product_id');
    }

    public function unit(): HasOne
    {
        return $this->hasOne(Unit::class, "product_id");
    }
}
