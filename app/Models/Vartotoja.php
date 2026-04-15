<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vartotoja extends Model
{
    protected $table = 'vartotojas';

    protected $fillable = [
        'vardas',
        'pavarde',
        'telefonas',
        'gim_data'
    ];
}