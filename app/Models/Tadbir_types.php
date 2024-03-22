<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tadbir_types extends Model
{
    use HasFactory;
    public function tadbir()
    {
        return $this->belongsTo(Tadbir::class);
    }
}
