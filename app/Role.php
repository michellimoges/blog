<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}
