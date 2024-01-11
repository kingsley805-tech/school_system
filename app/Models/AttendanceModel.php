<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'student',
        'IndexNumber',
        'className',
        'valNumber',
        'classID',
        'Month',
        'stringDate',
        'WeeK',
        'Day',
        'session'
    ];
}
