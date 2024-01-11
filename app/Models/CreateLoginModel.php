<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateLoginModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'IndexNumber',
        'userName',
         'role',
        'password',
     
    ];
}
