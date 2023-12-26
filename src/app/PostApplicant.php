<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostApplicant extends Model
{
    protected $fillable = [
        'id_user',
        'id_post',
        'confirmed',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
