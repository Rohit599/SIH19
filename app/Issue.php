<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    /**
     * The pollution type of an issue.
     */
    public function pollution()
    {
        return $this->belongsTo('App\Pollution');
    }

    /**
     * The user who created an issue.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the sources of an issue.
     */
    public function sources()
    {
        return $this->belongsToMany('App\Source', 'issue_source');
    }

    /**
     * Get the comments of an issue.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get users who voted for an issue.
     */
    public function votes()
    {
        return $this->belongsToMany('App\User', 'issue_vote');
    }

    /**
     * Get users who sign for an issue.
     */
    public function signs()
    {
        return $this->belongsToMany('App\User', 'issue_sign');
    }
}
