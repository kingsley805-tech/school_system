<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResultModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentName',
        'indexNumber',
        'class',
        'classroom_id',
        'subjectName',
        'subjectType',
        'maximumMark',
        'paperCode',
        'markObtained',
        'remark',
        'teacherRemark',
        'schoolRemark',
        'examSubjectID',
        'examinationNumber',
        'Session'
    ];
}
