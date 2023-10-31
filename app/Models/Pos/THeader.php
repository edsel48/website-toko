<?php

namespace App\Models\Pos;

use App\Models\Auth\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class THeader extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "t_header";
    protected $primary_key = "id";

    protected $user_id;
    protected $status;

    public function details(): HasMany
    {
        return $this->hasMany(TDetail::class, 't_header_id');
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
