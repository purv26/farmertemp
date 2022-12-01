<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'farmer_register';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'lastname',
        'phonenumber',
        'emailid',
        'address',
        'village',
        'district',
        'pincode',
        'state',
        'sfgname',
        'adharnumber',
        'username',
        'password',
    ];
}
