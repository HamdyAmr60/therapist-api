<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        "num_of_reservation" , "image" , "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function diaries(){
        return $this->hasMany(Diary::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

}
