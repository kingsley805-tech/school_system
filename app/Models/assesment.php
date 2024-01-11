<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assesment extends Model
{
    use HasFactory;

    protected $fillable = [
        'session',
        'term',
        'year',
        'position',
        'nextTermBegins',
        'attendance',
        'conduct',
        'promotedTo',
        'attitude',
        'interest',
        'PTAFees',
        'printingCost', 
        'sportAndGameFees',
        'nextTermFees',
        'examinationNumber',
        'class',
        'IndexNumber',
        'assesmentNumber'
    ];
}
