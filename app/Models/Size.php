<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function fashions()
    {
        return $this->belongsToMany(Fashion::class)->withPivot('quantity');
    }
}
