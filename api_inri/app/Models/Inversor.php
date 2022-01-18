<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inversor extends Model
{
    use HasFactory;
    protected $table = 'inversor_status';
    public $fillable = [
        'description',
        'id',
        'status_id'
    ];

    protected $hidden = array('id');

}
