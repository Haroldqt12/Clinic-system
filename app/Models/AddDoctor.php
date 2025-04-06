<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
=======
        'id',
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
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
<<<<<<< HEAD

    public function doctorAvailability(){
        return $this->hasMany(DoctorAvailability::class);
    }
    
=======
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
}
