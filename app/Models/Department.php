<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function positions() {
        return $this->hasMany('App\Models\Position');
    }
}
