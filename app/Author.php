<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'DOB',
        'gender',
        'image',
        'details',
    ];
}
