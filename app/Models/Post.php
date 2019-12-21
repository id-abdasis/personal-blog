<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'slug',
        'title',
        'artikel',
        'kategori',
        'status',
        'penulis',
        'tag',
        'thumbnail',
    ];
}
