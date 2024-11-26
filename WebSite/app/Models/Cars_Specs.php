<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
