<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerGrid extends Model
{
    use HasFactory;
    protected $table = 'power_grid_status';

    public $fillable = [
        'status'
    ];

    protected $hidden = ['id'];

}
