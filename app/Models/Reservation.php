<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function Times()
    {
        return $this->hasMany(Time::clsss);
    }
    
    public function Shops()
    {
        return $this->belongsToMany(Shop::class);
    }
    
}
