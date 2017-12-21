<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'posts_tags');
    }
}
