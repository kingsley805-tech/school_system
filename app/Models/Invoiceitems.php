<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoiceitems extends Model
{
    use HasFactory;

    protected $fillable = [
        'Description',
        'UnitCost',
        'Price',
        'Total',
        'InvoiceID',
        'InvoiceNumber',
    ];
}
