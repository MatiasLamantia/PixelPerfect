<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function ratings() {
        return $this->hasMany(Rate::class);
    }

    public function author() {
        return $this->belongsTo(User::class,'user_id');
    }
}
