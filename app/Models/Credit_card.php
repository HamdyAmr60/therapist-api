<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit_card extends Model
{
    use HasFactory;


    protected $fillable = [
        "payment_method_id" , "card_number" , "cvv" , "type" , "expiration_date"
    ];

    public function payment(){
        return $this->belongsTo(payment_method::class);
    }
}
