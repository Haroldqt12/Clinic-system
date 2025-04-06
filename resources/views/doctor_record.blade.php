@extends('layouts.app')

@section('title', 'Doctor Records')
@section('content')

<div class="main p-3">
    <span>Doctor Records</span>
     <div class="border border-dark"></div>
     <div class="row mt-3">
         <div class="col-md-5">
             <div class="input-group">
                 <input type="search" id="form1" class="form-control rounded-pill px-3" placeholder="Search">
                 <button type="button" class="btn btn-primary rounded-pill px-4">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </div>
     <div class="row mt-5">
         <div class="table-responsive">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                        <th>Profile</th>
                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Gender</th>
                         <th>Email</th>
                         <th>Specialization</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse($DoctorRecord as $record)
                     <tr>
                         <td>
                             @if($record->image_path)
                                 <img src="{{ asset('storage/' . $record->image_path) }}" alt="Profile Image" width="50" height="50" class="rounded-circle">
                             @else
                                 <span>No Image</span>
                             @endif
                         </td>
                         <td>{{ $record->firstname }}</td>
                         <td>{{ $record->lastname }}</td>
                         <td>{{ $record->gender }}</td>
                         <td>{{ $record->email }}</td>
                         <td>{{ $record->specialization }}</td>
                         <td>
                            <a href="" class="btn btn-sm btn-secondary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
                         </td>
                     </tr>
                     @empty
                     <tr>
                         <td colspan="7">No availability records found for this doctor.</td>
                     </tr>
                     @endforelse
                 </tbody>
             </table>
         </div>
     </div>
 </div>
@endsection
