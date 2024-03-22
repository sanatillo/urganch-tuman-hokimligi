<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images_url extends Model
{
    use HasFactory;
    public function apparat()
    {
        return $this->belongsTo(Apparat::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function tadbir()
    {
        return $this->belongsTo(Tadbir::class);
    }
    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
