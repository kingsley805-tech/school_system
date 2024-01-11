<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myparent extends Model
{
    use HasFactory;

    protected $fillable = [
        'FatherName',
        'FatherContact',
        'FatherOccupation',
        'MotherName',
        'MotherContact',
        'MotherOccupation',
        'Address',
        'ParentCode'
    ];

    public function students() {
        return $this->hasMany(Student::class);
    }
}
