<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'busNumber',
        'busModel',
        'driverName',
        'driverNumber',
        'inCharge',
        'note',     
    ];
}
