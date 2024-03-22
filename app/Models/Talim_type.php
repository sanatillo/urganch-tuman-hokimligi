<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talim_type extends Model
{
    use HasFactory;
    public function talim()
    {
        return $this->belongsTo(Talim::class);
    }
}
