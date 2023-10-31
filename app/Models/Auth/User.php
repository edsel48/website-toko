<?php

namespace App\Models\Auth;

use App\Models\Pos\THeader;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table_name = "user";
    protected $primary_key = "id";

    protected $username;
    protected $password;
    protected $email;
    protected $phone;
    protected $type;
    protected $deleted;

    public $timestamps = true;

    public function transaction(): HasMany
    {
        return $this->hasMany(THeader::class, 'user_id');
    }
}
