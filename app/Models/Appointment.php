<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

protected $fillable=[
    "starts_at","ends_at"
];
    public function app(){
        return $this->belongsTo(Doctors_appointment::class);
    }
}
