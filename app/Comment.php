<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The user of had commented.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The issue on which comment is done.
     */
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }
}
