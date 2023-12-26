<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'npm',
        'faculty',
        'roles',
        'password',
        'api_token',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'api_token',
        'password',
        'remember_token'
    ];

    public function author()
    {
        return $this->hasMany('App\Post', 'author');
    }

    public function editby()
    {
        return $this->hasMany('App\Post', 'editby');
    }
}
