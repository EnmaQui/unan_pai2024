<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoCajaChica extends Model
{
    use HasFactory;

    protected $fillable = [
        'caja_general_id',
        'movimiento_id',
    ];
}
