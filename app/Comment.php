<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the owner of the comment.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
