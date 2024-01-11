<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticeboard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'url',
        'status',
    ];

    public function myfiles() {
        return $this->morphMany(Myfile::class, 'myfileable');
    }

    public function myfile() {
        return $this->morphOne(Myfile::class, 'myfileable');
    }
}
