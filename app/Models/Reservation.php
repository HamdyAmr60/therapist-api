<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "session_started_at", "session_ended_at","price" , "type" , "patient_id","doctor_id"
    ];


    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function review(){
        return $this->has(Review::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function payment(){
        return $this->has(Payment_transaction::class);
    }

    public function answer(){
        return $this->hasMany(Answer::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }

}
