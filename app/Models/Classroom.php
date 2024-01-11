<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'section',
        'class_teacher'
    ];

    /**
     * Get the students that owns the Class
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'class_teacher', 'id');
    }

    public function routines()
    {
        return $this->hasMany(Routine::class);
    }

    public function studymaterials()
    {
        return $this->hasMany(StudyMaterial::class);
    }
}
