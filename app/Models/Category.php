<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    public function blogPosts()
    {
        return $this->hasMany(Blogpost::class, 'category_id', 'category_id');
    }
}
