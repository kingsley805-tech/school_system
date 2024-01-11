<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckAttendanceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'stringDate',
        'classID',
        'enteredBY',
        'session'
    ];
}
