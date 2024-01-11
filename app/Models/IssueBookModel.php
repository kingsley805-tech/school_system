<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueBookModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'student',
        'IndexNumber',
        'class',
        'status',
        'className',
        'quantity',
        'returnDate',
        'dateIssued',
        'bookID'
    ];
}
