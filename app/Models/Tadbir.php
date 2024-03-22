<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tadbir extends Model
{
    use HasFactory;
    public function images_url()
    {
        return $this->hasMany(Images_url::class);
    }
    public function tadbir_type()
    {
        return $this->hasMany(Tadbir_types::class);
    }

}
