<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "phone",
        "status",
        "email_verified_at",
        "verification_code",
        "birth_date",
        "gender",
        "last_name",
        "type",
        "remember_token"
    ];

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }

    public function transaction(){
        return $this->hasMany(Payment_transaction::class);
    }

    public function method(){
        return $this->hasMany(payment_method::class);
    }


    public function patient(){
        return $this->hasMany(Patient::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
