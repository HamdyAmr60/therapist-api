<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors_appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        "doctor_id" , "appointment_id" , "status"
    ];

    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
