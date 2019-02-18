<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the issues created by user.
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }

    /**
     * Get the blog posts created by user.
     */
    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }

    /**
     * Get the comments created by user.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get issues which are voted by an user.
     */
    public function votes()
    {
        return $this->belongsToMany('App\Issue', 'issue_vote');
    }

    /**
     * Get issues which are signed by an user.
     */
    public function signs()
    {
        return $this->belongsToMany('App\Issue', 'issue_sign');
    }
}
