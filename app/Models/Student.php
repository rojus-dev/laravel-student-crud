<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'asmens_kodas',
        'gim_data',
        'address',
        'phone',
        'city_id',
        'grupe_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function grupe()
    {
        return $this->belongsTo(Grupe::class);
    }
}