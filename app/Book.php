<?php

namespace DemoLaravel;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'isbn',
        'description',
        'author',
        'year',
        'pages',
        'publisher',
        'image'
    ];
}
