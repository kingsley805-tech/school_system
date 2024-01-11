<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'Description',
        'TotalAmount',
        'Discount',
        'Discount_Percent',
        'PayableAmount',
        'AmountLeft',
        'AmountPaid',
        'DateIssued',
        'DateDue',
        'InvoiceID',
        'InvoiceNumber',
        'IndexNumber',
        'StudentNumber',
        'Parent_id',
        'StudentName',
        'classroom_id',
        'PaymentStatus'
    ];
}
