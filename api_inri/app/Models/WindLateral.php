<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindLateral extends Model
{
    use HasFactory;
    protected $table = 'wind_speed_lateral';
    public $fillable = [
        'max',
        'min',
        'average',
        'deviation',
        'count',
        'status'
    ];
}
