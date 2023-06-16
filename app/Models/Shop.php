<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    public function Reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }
    
    public function Menues()
    {
        return $this->hasMany(Menue::class);
    }
    
}
