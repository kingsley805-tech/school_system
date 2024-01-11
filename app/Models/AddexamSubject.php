<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddexamSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjectName',
        'subjectType',
        'maximumMark',
        'paperCode',
        'paperDate',
        'startTime',
        'endTime',
        'roomNumber',
        'examinationNumber',
        'examSubjectID',
        'Session' 
    ];
}
