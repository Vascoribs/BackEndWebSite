<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cars_Specs extends Model
{
    use HasFactory;

    protected $fillable = [
        'Horsepower',
        'Fuel',
        'Color',
        'Gearbox',
        'Engine',
        'No_Doors',
        'Year'
    ];
}
