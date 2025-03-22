<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'file_image',
        'bio',
        'firstname',
        'lastname',
        'age',
        'gender',
        'contact',
        'email',
        'marital',
        'street',
        'city',
        'country',
        'postal',
        'specialization',
        'qualification',
    ];
}
