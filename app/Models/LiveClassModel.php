<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveClassModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'ClassID',
        'platform',
        'meetingLink',
        'meetingTopic',
        'meetingCode',
        'meetingPassword',
        'meetingTime',
        'meetingDate',
        'creator',
        'Email',
        'className'

    ];
}
