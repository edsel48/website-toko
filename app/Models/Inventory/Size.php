<?php

namespace App\Models\Inventory;

use App\Models\Inventory\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "size";

    protected $unit_id;
    protected $length;
    protected $width;
    protected $height;
    protected $weight;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

}
