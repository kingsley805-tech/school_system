<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'subject',
        'rackNumber',
        'price',
        'quantity',
        'available',
        'issued',
        'isbnNumber',
        'description',
        'bookID',
    ];
}
