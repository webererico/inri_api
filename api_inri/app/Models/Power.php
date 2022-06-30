<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    use HasFactory;
    protected $table = 'measured_power';
    public $fillable = [
        'max',
        'min',
        'average',
        'deviation',
        'count',
        'status_id'
    ];
}
