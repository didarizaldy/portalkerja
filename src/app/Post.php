<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'categories',
        'author',
        'companies',
        'editby',
        'token',
        'graduate',
        'experience',
        'skills',
        'position',
        'work_type',
        'worksite',
        'salary',
        'quota',
        'jobdesk',
        'expireddate',
    ];

    public function author()
    {
        return $this->belongsTo('App\User', 'author');
    }

    public function editby()
    {
        return $this->belongsTo('App\User', 'editby');
    }

    public function applications()
    {
        return $this->hasMany('App\PostApplicant');
    }
}
