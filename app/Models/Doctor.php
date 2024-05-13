<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id" , "specially" , "activity_status" , "image" , "code" , "rate" , "connection_status" , "licence_status"
    ];
public function user(){
    return $this->belongsTo(User::class);
}

public function image(){
    return $this->hasMany(Doctor_image::class);
}

public function prof(){
    return $this->has(Professional_licence::class);
}

public function review(){
    return $this->hasMany(Review::class);
}

public function appointment(){
    return $this->hasMany(Doctors_appointment::class);
}

public function reservation(){
    return $this->hasMany(Reservation::class);
}

public function questions(){
    return $this->hasMany(Question::class);
}

}
