<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpostshaslikes extends Model
{
    use HasFactory;

    protected $table = 'blogpostshaslikes';
    protected $primaryKey = 'blog_post_has_likes_id';

    protected $fillable = [
        'blog_post_id',
        'user_id'
    ];
}
