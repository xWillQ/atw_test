<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use TCG\Voyager\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $hidden = ['position_id', 'adopted_at', 'created_at', 'updated_at', 'password', 'telegram', 'role_id', 'email_verified'];

    protected $fillable = ['name', 'email', 'type', 'github', 'city', 'phone', 'birthday', 'password'];

    public function role() {
        return $this->belongsTo('TCG\Voyager\Models\Role');
    }

    public function position() {
        return $this->belongsTo('App\Models\Position');
    }
}
