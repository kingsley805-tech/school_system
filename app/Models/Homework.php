<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'homeworks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'classroom_id',
        'subject_id',
        'title',
        'description',
        'url',
        'downloadable',
    ];

    public function myfiles() {
        return $this->morphMany(Myfile::class, 'myfileable');
    }

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

}
