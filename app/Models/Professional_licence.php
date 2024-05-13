<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional_licence extends Model
{
    use HasFactory;

    protected $fillable = [
        "doctor_id" , "syndicate_card" , "graduation_certificate" , "status" , "verificated_at","id"
    ];


    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
