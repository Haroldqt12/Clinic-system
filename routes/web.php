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
});


//for appointment
Route::get('/appointmentlist', function () {
    return view('appointment_list');
});

Route::get('/appointmentrecord', function () {
    return view('appointment_record');
});



//for doctors
Route::get('/AddDoctor', function () {
    return view('doctor_add'); 
});

Route::get('/DoctorList', function () {
    return view('doctor_list'); 
});

Route::get('/DoctorRecord', function () {
    return view('doctor_record'); 
});


// for patient 
Route::get('/PatientList', function () {
    return view('patient_list'); 
});

Route::get('/PatientRecord', function () {
    return view('patient_record'); 
});

Route::get('/AddPatient', function () {
    return view('patient_add'); 
});


Route::get('/Prescription', function () {
    return view('prescription'); 
});

Route::get('/Services', function () {
    return view('services'); 
});


//start here
Route::get('/Payment', function () {
    return view('payment'); 
});

Route::get('/TransactionList', function () {
    return view('transaction_list'); 
});

Route::get('/TransactionRecord', function () {
    return view('transaction_record'); 
});

Route::get('/Equipment', function () {
    return view('equipments'); 
});

Route::get('/AddStocks', function () {
    return view('stocks_add'); 
});


Route::get('/InventoryRecord', function () {
    return view('inventory_record'); 
});



