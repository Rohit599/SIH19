<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The issue of an image.
     */
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }
}
