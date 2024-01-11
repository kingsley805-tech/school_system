<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'Email',
        'School',
        'FirstName',
        'LastName',
        'Telephone',
        'usertype',
        'password',
        'Sch_ID'
    ];

    // /**
    //  * Always encrypt the password when it is updated.
    //  *
    //  * @param $value
    // * @return string
    // */
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
