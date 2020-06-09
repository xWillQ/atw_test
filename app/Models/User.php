<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $hidden = ['position_id', 'adopted_at', 'created_at', 'updated_at', 'password', 'telegram', 'role', 'email_confirmed'];

    protected $fillable = ['name', 'email', 'type', 'github', 'city', 'phone', 'birthday', 'password'];
}
