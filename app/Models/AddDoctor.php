<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
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

    public function doctorAvailability(){
        return $this->hasMany(DoctorAvailability::class);
    }
    
}
