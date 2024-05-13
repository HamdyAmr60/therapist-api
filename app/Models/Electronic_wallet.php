<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronic_wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        "payment_method_id" , "wallet_name" , "account"
    ];

    public function payment(){
        return $this->belongsTo(payment_method::class);
    }
}
