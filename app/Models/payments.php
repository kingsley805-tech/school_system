<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;


    protected $fillable = [
        'Description',
        'payingAmount' ,
        'PaymentDate',
        'dateNumber',
        'receiver',
        'receiverRole',
        'InvoiceNumber',
        'InvoiceID',
        'IndexNumber',
        'classroom_id',
        'classroom',
        'StudentName',
         'session',
         
    ];
}
