<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Rapid School Management System | Admin Dashboard</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  {{-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png'); }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
crossorigin="anonymous" />

  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .mdi {
      color:white;
    }
    .nav-link{
      color:white;
    }
    .menu-title{
      font-family: 'Comfortaa', cursive;
    }
    .nav-link:hover{
        color: #FF5733 !important;
    }

    .sidebar .nav.sub-menu .nav-item .nav-link.active{
        color: #FF5733 !important;
    }
    
  </style>
</head>
<body >
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
            <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100" >
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ URL::to('/') }}/images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ URL::to('/') }}/images/rap.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #FF5733 ;">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100" >

              <span><b style="color:white">Rapid School Management System</b></span>

          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ URL::to('/') }}/images/user.png" alt="profile"/>
              <span class="nav-profile-name" style="color:white"><strong>{{$data->FirstName}} {{$data->LastName}}</strong></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{url('logout')}}">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->



      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="margin: 0 0 0 -0.8rem">
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="/">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-graduation menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM School</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
              
                <li class="nav-item"> <a class="nav-link" href="/admin/administrator/staff" style="color:white">Staff</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/administrator/students" style="color:white">Students</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/administrator/parents" style="color:white">Parents</a></li>
                <li class="nav-item"> <a class="nav-link" href="/school/sent-sms" style="color:white">Send SMS</a></li>
                <li class="nav-item"> <a class="nav-link" href="/school/sent-email" style="color:white">Send Emails</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Academics</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/dashboard">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/class-section">Class & Sections</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/subject">Subject</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/routine">Class Timetable</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/studymaterials">Study Materials</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/homework">Home Work</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/noticeboard">Noticeboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/promotion/page">Promotions</a></li>
                <li class="nav-item"> <a class="nav-link" href="/attendance/take/page">Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="/liveclass/meeting/page">Live Classess</a></li>

              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-admin" aria-expanded="false" aria-controls="ui-admin">
              <i class='bx bxs-school menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM Adminstrator</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-admin">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/administrator/dashboard" style="color:white">Dashboard</a></li>

                <li class="nav-item"> <a class="nav-link" href="/admininistration/create-login-page" style="color:white">Parent Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admininistration/create-login-page" style="color:white">Student Login</a></li>               
                <li class="nav-item"> <a class="nav-link" href="/admin/administrator/parents" style="color:white">Leave Request</a></li>
                
              </ul>
            </div>
          </li>


          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <i class='bx bxs-graduation menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM Accounting</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/account/admin-page">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/show-income-list">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/expense-list">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/invoices">Bulk Invoice</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/payment/invoices/student">Student Invoice</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/feetype">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/payment/page">Make Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/payment/history/all">All Payment History</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/payment/history/class">Class Payment History</a></li>
                <li class="nav-item"> <a class="nav-link" href="/account/payment/history/student">Student Payment History</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-book-reader menu-icon'></i>
              <span class="menu-title">SM Examination</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/examinations/dashboard">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/add-exams">Add Exams</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/manage-examination">Manage Exams</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/results">Add Exams Result</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/view-results">View Exams Result</a></li>

                <li class="nav-item"> <a class="nav-link" href="/examinations/create-assessment/page">Create Assessment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/enter-assessment/page">Enter Assessment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/examinations/assessment/view/page">View Assessment</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Transport</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/transport/dashboard">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/transport/addbus">Add Bus</a></li>
                <li class="nav-item"> <a class="nav-link" href="/transport/bus/list">Manage Busses</a></li>
                <li class="nav-item"> <a class="nav-link" href="/transport/routes/create">Add Bus Route</a></li>
                <li class="nav-item"> <a class="nav-link" href="/transport/routes/lists">Bus Route</a></li>
                <li class="nav-item"> <a class="nav-link" href="/transport/routes/assign-student">Assign Route</a></li>
              </ul>
            </div>
          </li>

          {{-- <li class="nav-item"style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic6">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Administration</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic10">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/dashboard">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/academics/class-section">Staffs</a></li>
              </ul>
            </div>
          </li> --}}


          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-book-reader menu-icon'></i>
              <span class="menu-title">SM Library</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/library/dashboard">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="/library/dashboard">Add Book</a></li>
                <li class="nav-item"> <a class="nav-link" href="/library/add-books">Manage Books</a></li>
                <li class="nav-item"> <a class="nav-link" href="/library/books/new-issuance">Issue New Book</a></li>
                <li class="nav-item"> <a class="nav-link" href="/library/issuebook/list">Issued Book</a></li>
                <li class="nav-item"> <a class="nav-link" href="/library/issuebook/student">Student Issued Books</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/settings/users/create"> Create User </a></li>
                <li class="nav-item"> <a class="nav-link" href="/settings/users/create"> Users List</a></li>
               
              </ul>
            </div>
          </li>

        </ul>
      </nav>
      <!-- partial -->
        @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ URL::asset('vendors/base/vendor.bundle.base.js'); }}"></script>
  <!-- endinject -->
  @if (Request::path()=='admin/academics/class-section'
            || Request::path()=='admin/administrator/staff'
            || Request::path()=='admin/academics/subject'
            || Request::path()=='admin/academics/routine'
            || Request::path()=='admin/academics/studymaterials'
            || Request::path()=='admin/academics/homework'
            || Request::path()=='admin/academics/noticeboard'
            || Request::path()=='admin/administrator/parents'
            || Request::path()=='admin/administrator/students')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
          $('#example').DataTable();
      });
      </script>
    <script src="{{ URL::asset('js/off-canvas.js'); }}"></script>
    <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
    <script src="{{ URL::asset('js/template.js'); }}"></script>
  @else
  
  @endif

</body>

</html>
