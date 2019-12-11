<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Post as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title' , 'content', 'owner_id', 'post_image'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
