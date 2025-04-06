<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/htmx.org@1.9.6"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!-- Corrected path -->
    <title>Dental Clinic Mangement</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    ::after,
    ::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    h1 {
        font-weight: 600;
        font-size: 1.5rem;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }
    .wrapper {
        display: flex;
    }
    
    .main {
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
        transition: all 0.35s ease-in-out;
        background-color: #fafbfe;
    }
    
    #sidebar {
        width: 70px;
        min-width: 70px;
        z-index: 1000;
        transition: all .25s ease-in-out;
        background-color: #0e2238;
        display: flex;
        flex-direction: column;
    }
    
    #sidebar.expand {
        width: 260px;
        min-width: 260px;
    }
    
    .toggle-btn {
        background-color: transparent;
        cursor: pointer;
        border: 0;
        padding: 1rem 1.5rem;
    }
    
    .toggle-btn i {
        font-size: 1.5rem;
        color: #FFF;
    }
    
    .sidebar-logo {
        margin: auto 0;
    }
    
    .sidebar-logo a {
        color: #FFF;
        font-size: 1.15rem;
        font-weight: 600;
    }
    
    #sidebar:not(.expand) .sidebar-logo,
    #sidebar:not(.expand) a.sidebar-link span {
        display: none;
    }
    
    .sidebar-nav {
        padding: 2rem 0;
        flex: 1 1 auto;
    }
    
    a.sidebar-link {
        padding: .625rem 1.625rem;
        color: #FFF;
        display: block;
        font-size: 0.9rem;
        white-space: nowrap;
        border-left: 3px solid transparent;
    }
    
    .sidebar-link i {
        font-size: 1.1rem;
        margin-right: .75rem;
    }
    
    a.sidebar-link:hover {
        background-color: rgba(255, 255, 255, .075);
        border-left: 3px solid #3b7ddd;
    }
    .hover-effect {
        color: black; /* Default color */
        transition: color 0.3s ease-in-out, text-decoration 0.3s ease-in-out;
        }
    
    .hover-effect:hover {
        color: #007bff !important; /* Change text color */
        text-decoration: underline !important; /* Underline on hover */
    }
    
    .sidebar-item {
        position: relative;
    }
    
    #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
        position: absolute;
        top: 0;
        left: 70px;
        background-color: #0e2238;
        padding: 0;
        min-width: 15rem;
        display: none;
    }
    
    #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
        display: block;
        max-height: 15em;
        width: 100%;
        opacity: 1;
    }
    
    #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
        border: solid;
        border-width: 0 .075rem .075rem 0;
        content: "";
        display: inline-block;
        padding: 2px;
        position: absolute;
        right: 1.5rem;
        top: 1.4rem;
        transform: rotate(-135deg);
        transition: all .2s ease-out;
    }
    
    #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
        transform: rotate(45deg);
        transition: all .2s ease-out;
    }

</style>
<body>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button" class="toggle-btn">
                    <i class="ri-layout-grid-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">
                        <span>MediCare</span>
                    </a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ route('mainpage') }}"
                       class="sidebar-link"
                       hx-boost="true"
                       hx-push-url="true">
                        <i class="ri-home-8-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                       data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">
                        <i class="ri-calendar-todo-fill"></i>
                        <span>Appointment</span>
                    </a>
                    <ul id="appointment" class="sidebar-dropdown list-unstyled collapse"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('appointmentlist') }}"
                               class="sidebar-link"
                               hx-boost="true"
                               hx-push-url="true">
                                <i class="ri-notification-2-fill"></i> Appointment List
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('appointmentrecord')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                                <i class="ri-folder-history-fill"></i> Appointment Record
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdwon collapsed"data-bs-toggle="collapse"
                    data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
                    <i class="ri-empathize-fill"></i>
                        <span>Doctor</span>
                    </a>
                    <ul id="doctor" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{route('DoctorList')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-user-shared-line"></i>Doctor List</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('AddDoctor')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-user-add-fill"></i>Add Doctor</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('DoctorRecord')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-id-card-fill"></i>Doctor Record</a>
                        </li>
                    </ul>    
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdwon collapsed"data-bs-toggle="collapse"
                    data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
                    <i class="ri-user-voice-fill"></i>
                        <span>Patient</span>
                    </a>
                    <ul id="patient" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                         <li class="sidebar-item">
                            <a href="{{route('AddPatient')}}"
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-user-add-fill"></i>Add Patient</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('PatientList')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-account-circle-fill"></i>Patient List</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('PatientRecord')}}"
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="PatientRecord">
                            <i class="ri-account-box-line"></i>Patient Record</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('Prescription')}}" 
                    class="sidebar-link"
                    hx-boost="true"
                    hx-push-url="true">
                    <i class="fa-solid fa-file-medical"></i>
                    <span>Prescription</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link has-dropdwon collapsed"data-bs-toggle="collapse"
                    data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                    <i class="ri-shake-hands-line"></i>
                        <span>Transactions</span>
                    </a>
                    <ul id="payment" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                         <li class="sidebar-item">
                            <a href="{{route('TransactionList')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-list-view"></i>Transaction List</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('Payment')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-money-dollar-circle-fill"></i>Payment</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('TransactionRecord')}}" 
                            class="sidebar-link"
                            hx-boost="true"
                            hx-push-url="true">
                            <i class="ri-folder-history-fill"></i>Transaction Records</a>
                        </li>
                    </ul>
                </li>
            </ul> 
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="ri-logout-box-line"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="">
                <h1>Add Doctor</h1>
            </div>
            <div class="border border-dark"></div>
            <div class="row mt-3">
                <div class="card p-3 border border-dark">
                    <form hx-post="{{ route('StoreDoctor') }}" hx-target="body" hx-swap="outerHTML">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row mt-2">
                            <h1>Doctor Profile</h1>
                        </div>
                        <div class="row">
                                <div class="col-md-3 mt-3">
                                    <label for="imageUpload" class="upload-box" id="drop-area" >
                                        <img id="imagePreview"  alt="Upload Profile" width="100" height="auto">
                                    </label>
                                    <input type="file"  class="form-control mt-2" accept="image/*" name="file_image" onchange="previewImage(event)">
                                </div>
                            </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <label for="bio">Bio</label>
                                        <textarea name="bio" id="bio" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="border border-dark mt-3"></div>
                                <div class="row mt-2">
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
                                            <option value="" selected disabled>Status   </option>
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
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</body>
<script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('expand');
    });

    // Define toggleSidebar function
    function toggleSidebar() {
        sidebar.classList.toggle('expand');
    }

    // Initial binding
    toggleSidebar();

    // Rebind after HTMX updates
    document.body.addEventListener('htmx:afterSwap', () => {
        toggleSidebar();
    });

    function previewImage(event) {
        const fileInput = event.target;

        if (fileInput.files.length === 0) return;

        const file = fileInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById("imagePreview");
                preview.src = reader.result;
                preview.style.display = "block"; // Show image preview
                document.getElementById("drop-area").classList.add("has-image");
            };
            reader.readAsDataURL(file);
        }

        fileInput.value = "";
    }
</script>
</html>
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
