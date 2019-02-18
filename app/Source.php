<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * Get the issues of a source.
     */
    public function issues()
    {
        return $this->belongsToMany('App\Issue', 'issue_source');
    }
}
