<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRouteModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'routeName',
        'fare',
        'busNumber',
        'routeID',    
    ];
}
