<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step_destinasi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_tempat',
        'deskripsi',
    ];
    
    public function destinasi() {
        return $this->belongsTo(Destinasi::class);
    }
}
