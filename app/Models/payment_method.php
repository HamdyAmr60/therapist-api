<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_method extends Model
{
    use HasFactory;

    protected $fillable = [
        "method_name" , "verified_at"  , "owner_name" , "user_id"
    ];


    public function cards(){
        return $this->hasMany(Credit_card::class);
    }

    public function wallet(){
        return $this->has(Electronic_wallet::class);
    }

    public function transaction(){
        return $this->hasMany(Payment_transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
