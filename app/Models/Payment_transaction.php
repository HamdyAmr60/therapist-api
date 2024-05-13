<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "code" , "amount" , "transaction_type" , "source_account" , "destination_account" , "time" , "status", "en_desc" , "ar_desc"
        , "payment_method_id" , "reservation_id" , "user_id"
    ];

    public function method(){
        return $this->belongsTo(payment_method::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

}
