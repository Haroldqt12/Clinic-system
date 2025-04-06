@extends('layouts.app')

@section('title', 'Main Page')

@section('content')
<div class="main p-3">
    <div class="">
        <h1>Welcome to our Clinic</h1>
    </div>
    <div class="border border-dark"></div>
    <div class="row mt-2">
        <div class="col-md-8">
        <div class="card p-3 ">
            <h2>Dashboard</h2>
            <p>Dashboard content</p>
            <div class="border border-dark"></div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card p-3">
                        <span>Doctors</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 ">
                        <span>Appointments</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 ">
                        <span>Patients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>   
</div>
@endsection
