@extends('layouts.app')
@section('title', 'Add Doctor')
@section('content')

<div class="main p-3">
    <div class="">
        <span>Add Doctor</span>
    </div>
    <div class="border border-dark"></div>
    <div class="row mt-3">
        <div class="card p-3 border border-dark">
            <form method="POST" action="{{ route('StoreDoctor') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row mt-2">
                    <h1>Doctor Profile</h1>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <label for="imageUpload" class="upload-box" id="drop-area">
                            <img id="imagePreview" src="{{ asset('images/default-profile.png') }}" alt="Upload Profile" width="100" height="auto">
                        </label>
                        <input type="file" class="form-control mt-2" accept="image/*" name="file_image" id="imageUpload" onchange="previewImage(event)">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <h1>Doctor Details</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control mt-2" name="firstname" id="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control mt-2" name="lastname" id="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="col-md-3">
                        <label for="age">Age</label>
                        <input type="number" class="form-control mt-2" name="age" id="age" placeholder="Age" required>
                    </div>
                    <div class="col-md-3">
                        <Label for="gender">Gender</Label>
                        <select name="gender" class="form-control mt-2" id="gender" required>
                            <option value="" selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="contact">Contact No.</label>
                        <input type="text" class="form-control mt-2" name="contact" id="contact" placeholder="Contact No." required>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control mt-2" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="marital">Marital Status</label>
                        <select name="marital" class="form-control mt-2" id="marital">
                            <option value="" selected disabled>Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="street">Street</label>
                        <input type="text" class="form-control mt-2" name="street" id="street" placeholder="Street">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control mt-2" name="city" id="city" placeholder="City">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="country">Country</label>
                        <input type="text" class="form-control mt-2" name="country" id="country" placeholder="Country">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="postal">Postal Code</label>
                        <input type="text" class="form-control mt-2" name="postal" id="postal" placeholder="Postal Code">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="specialization">Specialization</label>
                        <input type="text" class="form-control mt-2" name="specialization" id="specialization" placeholder="Specialization">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="qualification">Qualification</label>
                        <input type="text" class="form-control mt-2" name="qualification" id="qualification" placeholder="Qualification">
                    </div>
                </div>
                <div class="row justify-content-end mt-3 p-2">
                    <div class="col-md-2">
                        <button type="reset" class="btn btn-sm btn-secondary">Clear</button>
                        <button type="submit" class="btn btn-sm btn-primary">Create Doctor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.src = e.target.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "{{ asset('images/default-profile.png') }}"; // Reset to default image if no file is selected
        }
    }
</script>
@endsection
