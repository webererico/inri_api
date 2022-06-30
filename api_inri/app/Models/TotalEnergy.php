<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalEnergy extends Model
{
    use HasFactory;
    protected $table = 'total_energy';
    public $fillable = [
        'value',
        'status'
    ];
}
