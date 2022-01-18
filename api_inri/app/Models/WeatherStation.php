<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherStation extends Model
{
    use HasFactory;
    protected $table = 'weather_station_status';

    public $fillable = [
        'status'
    ];

    protected $hidden = ['id'];

}
