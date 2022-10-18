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

    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }

    public function blogPosts()
    {
        return $this->hasMany(Blogpost::class, 'blog_post_id', 'blog_post_id');
    }
}
