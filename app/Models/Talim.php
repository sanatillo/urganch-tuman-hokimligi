<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talim extends Model
{
    use HasFactory;
    public function talim_type()
    {
        return $this->hasMany(Talim_type::class);
    }
}
