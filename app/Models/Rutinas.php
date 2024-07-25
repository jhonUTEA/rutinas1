<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutinas extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descripcion_rutina',
        'Vence_rutina',
    ];
}
