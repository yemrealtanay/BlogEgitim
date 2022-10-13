<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    protected $table = 'blogposts';
    protected $primaryKey = 'blog_post_id';

    protected $fillable = [
        'title',
        'content',
        'image_url',
        'category_id',
        'user_id'
    ];
}
