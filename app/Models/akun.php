<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'email',
        'job',
        'faculty',
        'bio'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
