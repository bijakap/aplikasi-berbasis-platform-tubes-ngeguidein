<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password',
        'email',
        'gambar',
        'job',
        'faculty',
        'bio'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
