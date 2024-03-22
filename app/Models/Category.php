<?php

namespace App\Models;

use Database\Seeders\PostSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private function Posts()
    {
        return $this->belongsTo(Post::class);
    }
    
}
