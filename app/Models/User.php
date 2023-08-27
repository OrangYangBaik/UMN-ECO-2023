<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $fillable = ['nama','nim','email','password'];
    protected $hidden = [
        'credit',
        'point',
        'password',
        'remember_token',
    ];

    public function kupon(){
        return $this->hasMany(Kupon::class);
    }
}
