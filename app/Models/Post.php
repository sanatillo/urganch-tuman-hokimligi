<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function images_url()
    {
        return $this->hasMany(Images_url::class);
    }
}
