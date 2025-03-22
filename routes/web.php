<?php

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




