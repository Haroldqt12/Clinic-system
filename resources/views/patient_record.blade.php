@extends('layouts.app')

@section('title', 'Patient Records')
@section('content')

<div class="main p-3">
    <h1>Patient Records</h1>
    <div class="border border-dark"></div>
        <div class="row mt-4">
            <div class="col">
                <div class="card p-4">
                    <p><strong>Name:</strong> {{ $patient->firstname }} {{ $patient->lastname }}</p>
                    <p><strong>Age:</strong> {{ $patient->age }}</p>
                    <p><strong>Gender:</strong> {{ ucfirst($patient->gender) }}</p>
                    <p><strong>Contact No.:</strong> {{ $patient->contact }}</p>
                    <p><strong>Email:</strong> {{ $patient->email }}</p>
                    <p><strong>Marital Status:</strong> {{ ucfirst($patient->marital) }}</p>
                    <a href="{{ route('PatientList') }}" class="btn btn-primary">Back to Patient List</a>
                </div>
            </div>
        </div>
</div>
@endsection