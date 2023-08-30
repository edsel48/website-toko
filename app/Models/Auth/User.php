<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table_name = "user";
    protected $primary_key = "id";

    protected $username;
    protected $password;
    protected $email;
    protected $phone_int;
    protected $type;
    protected $deleted;

    public $timestamps = true;
}
