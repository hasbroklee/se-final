<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_post', 'id');
    }
}
