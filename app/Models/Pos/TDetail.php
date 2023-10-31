<?php

namespace App\Models\Pos;

use App\Models\Auth\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "t_detail";
    protected $primary_key = "id";

    protected $t_header_id;
    protected $product_id;
    protected $qty;
    protected $subtotal;

    public function header(): BelongsTo
    {
        return $this->BelongsTo(THeader::class);
    }

}
