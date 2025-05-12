<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthenticatableBase;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Customer extends AuthenticatableBase
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'agreement_status',
    ];

    protected $hidden = [
        'password',
    ];
}
