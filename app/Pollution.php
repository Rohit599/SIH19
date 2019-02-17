<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollution extends Model
{
    /**
     * Get the issues of a pollution type.
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
}
