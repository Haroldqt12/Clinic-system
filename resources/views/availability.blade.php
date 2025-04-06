@extends('layouts.app')
@section('content')
<div class="main p-3">
    <div class="">
       <a class="btn btn-sm btn-primary rounded" href="{{route("DoctorList")}}"><i class="ri-arrow-go-back-fill"></i></a><span class="ms-2">Doctor Availability</span>
    </div>
    <div class="border border-dark mt-1"></div>
    <div class="row mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card p-3">
            <div class="row mt-3">
                <div class="col-md-3">
                    <form action="{{ route('DoctorAvailability.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="DoctorId" value="{{ $DoctorId }}">
    
                        <div class="form-group">
                            <label for="day">Select Day</label>
                            <select name="day" id="day" class="form-control" required>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>  
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="morning_from">Morning From</label>
                                <input type="time" name="morning_from" id="morning_from" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="morning_to">Morning To</label>
                                <input type="time" name="morning_to" id="morning_to" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="afternoon_from">Afternoon From</label>
                                <input type="time" name="afternoon_from" id="afternoon_from" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="afternoon_to">Afternoon To</label>
                                <input type="time" name="afternoon_to" id="afternoon_to" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-end">
                        <div class="col-md-2">
                            <button type="reset" class="btn btn-sm btn-secondary">Clear</button>
                            <button type="submit" class="btn btn-primary btn-sm" style="width: 120px;">Save</button>
                        </div>
                    </div>
                </form>
        </div>
    </div> 
    <div class="row mt-3">
        <div class="col">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 bg-white  table-striped mt-4">
                        <thead class="bg-light">
                            <tr>
                                <th><i class="ri-collapse-vertical-line"></i>Day</th>
                                <th><i class="ri-collapse-vertical-line"></i>Morning From</th>
                                <th><i class="ri-collapse-vertical-line"></i>Morning To</th>
                                <th><i class="ri-collapse-vertical-line"></i>Afternoon From</th>
                                <th><i class="ri-collapse-vertical-line"></i>Afternoon To</th>
                                <th><i class="ri-collapse-vertical-line"></i>Status</th>
                                <th><i class="ri-collapse-vertical-line"></i>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($availabilities as $availability)
                                <tr>
                                    <td>
                                        <p class="fw-bold mb-1">{{ $availability->day }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold mb-1">{{ $availability->morning_from }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold mb-1">{{ $availability->morning_to }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold mb-1">{{ $availability->afternoon_from }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-bold mb-1">{{ $availability->afternoon_to }}</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-success rounded-pill d-inline">Available</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm rounded-fill" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="ri-edit-fill"></i></button>
                                        <button class="btn btn-sm btn-danger rounded"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Time Schedule</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <span>Monday</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="">Morning From</label>
                        <input type="time" id="" name="" class="form-control" placeholder="Morning">
                    </div>
                    <div class="col-md-6">
                        <label for="">Morning To</label>
                        <input type="time" id="" name="" class="form-control" placeholder="Morning">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="">Afternoon From</label>
                        <input type="time" id="" name="" class="form-control" placeholder="Afternoon">
                    </div>
                    <div class="col-md-6">
                        <label for="">Afternoon To</label>
                        <input type="time" id="" name="" class="form-control" placeholder="Afternoon">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection