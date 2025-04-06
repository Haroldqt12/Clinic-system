<?php

<<<<<<< HEAD
use App\Models\AddDoctor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\DoctorAvailabilityController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login page by default
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('mainpage');
    })->name('mainpage');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('/appointmentlist', function () {
        return view('appointment_list');
    })->name('appointmentlist');

    Route::get('/appointmentrecord', function () {
        return view('appointment_record');
    })->name('appointmentrecord');

    // for doctors
    Route::get('/AddDoctor', function () {
        return view('doctor_add');      
    })->name('AddDoctor');

    Route::post('/AddDoctor', [AddDoctorController::class, 'store'])->name('StoreDoctor');

    Route::get('/DoctorList', [AddDoctorController::class, 'list'])->name('DoctorList');     

    Route::get('/DoctorRecord', [AddDoctorController::class, 'show'])->name('DoctorRecord');
    

    Route::post('/doctor-availability/store', [DoctorAvailabilityController::class, 'store'])->name('DoctorAvailability.store');
    Route::get('/doctor-availability/{DoctorId}', [DoctorAvailabilityController::class, 'create'])->name('Availability');
    

    // for patient
    Route::get('/PatientList', function () {
        return view('patient_list'); 
    })->name('PatientList');    

    Route::get('/PatientRecord', function () {
        return view('patient_record'); 
    })->name('PatientRecord');

    Route::get('/AddPatient', function () {
        return view('patient_add'); 
    })->name('AddPatient');

    //Adding Patients
Route::post('/AddPatient',[PatientController::class, 'store'])->name('StoredPatient');
Route::get('/patients', [PatientController::class, 'index'])->name('PatientList');
Route::get('/patients/search', [PatientController::class, 'search'])->name('patients.search');
    

//Patient Edit Update Delete and Show
Route::get('/patients/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');
Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
Route::get('/patients/{id}', [PatientController::class, 'show'])->name('patients.show');


    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
=======
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');


//for appointment
Route::get('/appointmentlist', function () {
    return view('appointment_list');
})->name('appointmentlist');

Route::get('/appointmentrecord', function () {
    return view('appointment_record');
})->name('appointmentrecord');



//for doctors
Route::get('/AddDoctor', function () {
    return view('doctor_add'); 
})->name('AddDoctor');

Route::post('/AddDoctor', [App\Http\Controllers\AddDoctorController::class, 'store'])->name('StoreDoctor');

Route::get('/DoctorList', function () {
    return view('doctor_list'); 
})->name('DoctorList');

Route::get('/DoctorRecord', function () {
    return view('doctor_record'); 
})->name('DoctorRecord');


// for patient 
Route::get('/PatientList', function () {
    return view('patient_list'); 
})->name('PatientList');

Route::get('/PatientRecord', function () {
    return view('patient_record'); 
})->name('PatientRecord');

Route::get('/AddPatient', function () {
    return view('patient_add'); 
})->name('AddPatient');


Route::get('/Prescription', function () {
    return view('prescription'); 
})->name('Prescription');

Route::get('/Services', function () {
    return view('services'); 
})->name('Services');


//start here
Route::get('/Payment', function () {
    return view('payment'); 
})->name('Payment');

Route::get('/TransactionList', function () {
    return view('transaction_list'); 
})->name('TransactionList');

Route::get('/TransactionRecord', function () {
    return view('transaction_record'); 
})->name('TransactionRecord');




>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
