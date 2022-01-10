<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{
    use HasFactory;
    public $timestamps = true;
    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withPivot('quantity');
    }
}
