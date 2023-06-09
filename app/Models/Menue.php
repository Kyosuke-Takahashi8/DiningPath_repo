<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menue extends Model
{
    use HasFactory;
    
    public function Shop()
    {
        return $this->belongsTo(shop::class);
    }
    
}
