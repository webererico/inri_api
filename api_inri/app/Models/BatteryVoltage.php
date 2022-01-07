<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatteryVoltage extends Model
{
    use HasFactory;
    public $fillable = [
        'max',
        'min',
        'average',
        'standard',
        'count',
    ];
}
