<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName',
        'LastName',
        'StudentNumber',
        'StudentEmail',
        'DateOFBirth',
        'StudentAddress',
        'Gender',
        'BloodGroup',
        'City',
        'State',
        'Country',
        'IdentityNumber',
        'AdmissionDate',
        'IndexNumber',
        'classroom_id',
        'myparent_id',
        'ExtraNote',
        'StudentType',
        'routeID'
    ];

    public function classrooms() {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function myparents() {
        return $this->belongsTo(Myparent::class,'myparent_id');
    }
}
