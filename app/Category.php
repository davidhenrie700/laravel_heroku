<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_categories', 'category', 'post');
    }
}
