<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_image extends Model
{
    use HasFactory;

    protected $fillable = [
        "verifing_image" , "personal_image" , "doctor_id"
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
