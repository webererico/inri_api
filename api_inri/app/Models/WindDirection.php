<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindDirection extends Model
{
    use HasFactory;
    protected $table = 'wind_direction';
    public $fillable = [
        'max',
        'min',
        'average',
        'deviation',
        'count',
        'status'
    ];
}
