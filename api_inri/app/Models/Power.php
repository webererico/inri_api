<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    use HasFactory;
    public $fillable = [
        'max',
        'min',
        'average',
        'deviation',
        'count',
        'status'
    ];
}
