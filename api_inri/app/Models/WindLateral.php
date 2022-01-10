<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindLateral extends Model
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
