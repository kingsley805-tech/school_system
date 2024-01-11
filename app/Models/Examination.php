<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;
    protected $fillable = [
        'examTitle',
        'examCenter',
        'startDate',
        'endDate',
        'class',
        'classroom_id',
        'examinationNumber',
        'Name',
        'Session'
    ];
}
