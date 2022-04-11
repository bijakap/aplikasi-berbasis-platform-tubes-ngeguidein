<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_step',
        'titik_x',
        'titik_y',
        'src',
    ];

    public function step_destinasi() {
        return $this->hasMany(Step_destinasi::class);
    }

}
