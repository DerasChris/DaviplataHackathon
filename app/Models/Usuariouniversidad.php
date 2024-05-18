<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuariouniversidad extends Authenticatable 
{


    protected $table = 'usuarios_universidad';

    protected $fillable = [
        'carnet', 'password', 'universidad',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}