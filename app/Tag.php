<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Get the blog posts with tag.
     */
    public $timestamps = false;
    public function blogs()
    {
        return $this->belongsToMany('App\Blog', 'blog_tag');
    }
}
