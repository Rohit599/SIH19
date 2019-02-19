<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The user who created blog post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Gest tags of the blog post.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'blog_tag');
    }
}
