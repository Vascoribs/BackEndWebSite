<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cars extends Model
{

    use HasFactory;

    protected $table = 'Cars';

    protected $fillable = [
        'Plate',
        'Brand',
        'Model',
        'cars_specID'
    ];
}
