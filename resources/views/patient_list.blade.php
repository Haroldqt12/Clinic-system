@extends('layouts.app')

@section('title', 'Patient List')
@section('content')

<div class="main p-3">
    <h1 class="mb-3">Patient List</h1>
    <div class="border border-dark"></div>
    <div class="container p-3">
        <form action="{{ route('patients.search') }}" method="GET" class=" mb-3 d-flex justify-content-end">
            <input type="text" name="search" class="form-control form-control-sm w-25 me-2" placeholder="Search patients..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary btn-sm">Search</button>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                        <th>Marital Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->firstname }}</td>
                            <td>{{ $patient->lastname }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ ($patient->gender) }}</td>
                            <td>{{ $patient->contact }}</td>
                            <td>{{ $patient->email }}</td>      
                            <td>{{ ($patient->marital) }}</td>
                            <td class="d-flex align-items-center gap-1">
                                <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-sm" style="background-color: white; color: black; border-color: green;" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a> 
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this patient?');"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm" style="background-color: white; color: black; border-color: red;">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-sm" style="background-color: white; color: black; border-color: blue;" >
                                    <i class="fa-solid fa-eye"></i>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3">
                {{ $patients->links() }}
            </div>
        </div>
    </div>
</div>
@endsection