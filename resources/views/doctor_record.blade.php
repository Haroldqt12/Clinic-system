<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                        <span>Dental Clinic</span>
                    </a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" hx-get="/mainpage" hx-target=".main" hx-swap="innerHTML">
                        <i class="ri-home-8-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdwon collapsed" data-bs-toggle="collapse"
                     data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">
                     <i class="ri-calendar-todo-fill"></i>
                        <span>Appointment</span>
                    </a> 
                    <ul id="appointment" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/appointmentlist" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-notification-2-fill"></i>Appointment List
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/appointmentrecord" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-folder-history-fill"></i>Appointment Record
                            </a>
                        </li>
                    </ul> 
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdwon collapsed" data-bs-toggle="collapse"
                    data-bs-target="#doctor" aria-expanded="false" aria-controls="doctor">
                    <i class="ri-empathize-fill"></i>
                        <span>Doctor</span>
                    </a>
                    <ul id="doctor" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/DoctorList" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-user-shared-line"></i>Doctor List
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/AddDoctor" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-user-add-fill"></i>Add Doctor
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/DoctorRecord" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-id-card-fill"></i>Doctor Record
                            </a>
                        </li>
                    </ul>    
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdwon collapsed" data-bs-toggle="collapse"
                    data-bs-target="#patient" aria-expanded="false" aria-controls="patient">
                    <i class="ri-user-voice-fill"></i>
                        <span>Patient</span>
                    </a>
                    <ul id="patient" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                         <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/AddPatient" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-user-add-fill"></i>Add Patient
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/PatientList" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-account-circle-fill"></i>Patient List
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/PatientRecord" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-account-box-line"></i>Patient Record
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" hx-get="/Services" hx-target=".main" hx-swap="innerHTML">
                        <i class="ri-tooth-line"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" hx-get="/Prescription" hx-target=".main" hx-swap="innerHTML">
                        <i class="fa-solid fa-file-medical"></i>
                        <span>Prescription</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdwon collapsed" data-bs-toggle="collapse"
                    data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                    <i class="ri-shake-hands-line"></i>
                        <span>Transactions</span>
                    </a>
                    <ul id="payment" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                         <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/TransactionList" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-list-view"></i>Transaction List
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/Payment" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-money-dollar-circle-fill"></i>Payment
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/TransactionRecord" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-folder-history-fill"></i>Transaction Records
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdwon collapsed" data-bs-toggle="collapse"
                    data-bs-target="#report" aria-expanded="false" aria-controls="report">
                    <i class="ri-file-list-3-fill"></i>
                        <span>Daily Inventory</span>
                    </a>
                    <ul id="report" class="sidebar-dropdown list-unstyled collapse"
                         data-bs-parent="#sidebar">
                         <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/Equipment" hx-target=".main" hx-swap="innerHTML">
                                <i class="fa-solid fa-magnifying-glass"></i>Equipments
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/AddStocks" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-function-add-fill"></i>Add Stocks
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" hx-get="/InventoryRecord" hx-target=".main" hx-swap="innerHTML">
                                <i class="ri-folder-chart-line"></i>Inventory Records
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> 
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link" hx-get="/logout" hx-target=".main" hx-swap="innerHTML">
                    <i class="ri-logout-box-line"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <h1>Doctor Record</h1>
        </div>
    </div>  
</body>
<script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('expand');
    });
</script>
</html>
