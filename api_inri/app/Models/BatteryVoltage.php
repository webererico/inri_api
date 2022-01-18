<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatteryVoltage extends Model
{
    use HasFactory;
    protected $table = 'battery_voltage';
    public $fillable = [
        'max',
        'min',
        'average',
        'deviation',
        'count',
        'status',
        'created_at'
    ];
}
