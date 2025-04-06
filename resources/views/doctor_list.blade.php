@extends('layouts.app')

@section('title', 'Doctor List')
@section('content')

<div class="main p-3">
    <span>Doctor List</span>
    <div class="border border-secondary"></div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="row mt-2 justify-content-between">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill border-secondary" placeholder="Search Doctors">
                            <button class="btn btn-primary rounded-pill px-3">
                                <i class="ri-search-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <a href="{{route('AddDoctor')}}" class="btn btn-primary"><i class="ri-add-line"></i>Add Doctor</a>
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach($Doctorlist as $Doctor)
                    <div class="col-md-4 mt-2">
                        <div class="card p-2">
                            <img src="{{ $Doctor->image_path ? asset('storage/' . $Doctor->image_path) : asset('default-image.png') }}" alt="Doctor Image" width="100" height="auto" class="mb-2">
                            <span>Name: Dr. {{ $Doctor->firstname }} {{ $Doctor->lastname }}</span>
                            <br>
                            <p>Specialization: {{ $Doctor->specialization ?? 'N/A' }}</p>
                            <div class="row align-content-end">
                                <div class="col d-flex justify-content-end">
                                    <a href="" class="btn btn-sm btn-secondary rounded-pill me-1 text-white">
                                        <i class="ri-pencil-fill"></i>
                                    </a>
                                    <a href="{{ route('Availability', ['DoctorId' => $Doctor->DoctorId]) }}" 
                                       class="btn btn-sm btn-success rounded-pill me-1">
                                       <i class="ri-calendar-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div> 
            </div> 
            <div class="col-md-4 mt-3">
                <div class="card p-3">
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <span>Schedules</span>
                            <i class="ri-arrow-right-fill"></i>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
@endsection
