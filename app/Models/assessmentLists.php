<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assessmentLists extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjectTitle',
        'classScore',
        'examScore',
        'seventyPercent',
        'Total',
        'position',
        'remark',
        'Session',
        'examinationNumber',
        'assesmentNumber',
        'IndexNumber'
    ];
}
