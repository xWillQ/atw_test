<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $hidden = ['department_id', 'created_at', 'updated_at'];

    public function department() {
        return $this->belongsTo('App\Models\Department');
    }
}
