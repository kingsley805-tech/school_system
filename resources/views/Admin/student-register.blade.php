<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .form-control{
      border: 1px gray solid;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->



    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
  <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
    <a class="navbar-brand brand-logo" href="index.html"><img src="images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-sort-variant"></span>
    </button>
  </div>
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  <ul class="navbar-nav mr-lg-4 w-100">

  </ul>
  <ul class="navbar-nav navbar-nav-right">

    <li class="nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        <img src="images/faces/face5.jpg" alt="profile"/>
        <span class="nav-profile-name">Director</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item">
          <i class="mdi mdi-settings text-primary"></i>
          Settings
        </a>
        <a class="dropdown-item">
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" sy>
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a style=" font-family: 'Comfortaa', cursive;" class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse"  style=" font-family: 'Comfortaa', cursive;" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM School</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style="color:white"> <a  style=" font-family: 'Comfortaa', cursive;"  class="nav-link" href="" style="color:white" ><b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a  style=" font-family: 'Comfortaa', cursive;" class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a  style=" font-family: 'Comfortaa', cursive;" class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a  style=" font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Adminstrator</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Adminstrator</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Accounting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Examination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Transport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Academics</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title"><b>SM Library</b></span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Account</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title"><b>School Manager</b></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class='bx bxs-file-import' ></i> <strong>Bulk Admissions</strong></li>
  </ol>
 </nav>
          <div class="row">





            <div class="col-12 grid-margin"  style="overflow: scroll">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 25px;" class='bx bxs-user-badge' ></i> <strong>New Admission For Session:</strong>
                    <p style="position: absolute;right:31px">
                    <strong><i class='bx bxs-user-rectangle' ></i>
                      <a style="color:black;text-decoration:none;text-transform: capitalize;" href="{{url('/student-list')}}">Student List</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('student-registration')}}" method="POST">
                    <!-- Card -->
 <div class="card mb-4">
  <!-- Card Header -->
  <div class="card-header" style="background-color:#F3732F;">
    <h5 class="mb-0" style="color: white;"><i class='bx bx-user-circle' ></i> <strong>Personal Detail</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="row">
        @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
        @endif

        @if (Session::has('fail'))
            <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
        @endif

        @csrf
      <div class="row">
      <div class="mb-2 col-12 col-md-2">
        <label class="form-label" for="fname"> <span class="text-danger">*</span> <strong>First Name</strong></label>
        <input type="text" id="FirstName" name="FirstName" class="form-control" placeholder="First Name"  value="{{old('FirstName')}}" required>
        <span style="color: red">@error('FirstName') {{$message}} @enderror</span>
      </div>
      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="LastName"><strong>Last Name</strong></label>
        <input type="text" id="LastName"  name="LastName" class="form-control" placeholder="Enter Student Last Name" value="{{old('LastName')}}" required>
        <span style="color: red">@error('LastName') {{$message}} @enderror</span>
      </div>

      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="Student Phone"><strong>Phone</strong></label>
        <input type="text" id="StudentNumber" name="StudentNumber" class="form-control" placeholder="Enter Student Phone Number" value="{{old('StudentNumber')}}" required>
        <span style="color: red">@error('StudentNumber') {{$message}} @enderror</span>
      </div>

      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="Email"><strong><span class="text-danger">*</span> Email</strong></label>
        <input type="email" id="StudentEmail"  name="StudentEmail" class="form-control" placeholder="Enter Student Email Address" value="{{old('StudentEmail')}}" required>
        <span style="color: red">@error('StudentEmail') {{$message}} @enderror</span>
      </div>

      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="address1"><span class="text-danger">*</span> <strong>Date Of Birth</strong></label>
        <input type="date" id="DateOFBirth" name="DateOFBirth" class="form-control" placeholder="dd/mm/yy" value="{{old('DateOFBirth')}}" required>

        <span style="color: red">@error('DateOFBirth') {{$message}} @enderror</span>
      </div>
      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="address2">Address:</label>
        <input type="text" id="StudentAddress" name="StudentAddress" class="form-control" placeholder="Address" value="{{old('StudentAddress')}}" required>
        <span style="color: red">@error('StudentAddress') {{$message}} @enderror</span>
      </div>

    </div>
    <div class="row">
      <div class="mb-3 col-12 col-md-3">
        <label class="form-label"><strong>Gender</strong></label>
        <select style=" border: 1px gray solid;" class="selectpicker form-control" data-width="100%" id="Gender" name="Gender" required>
          <option value="">Select Gender</option>
          <option value="Male"><strong>Male</strong></option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>

        <span style="color: red">@error('Gender') {{$message}} @enderror</span>
      </div>
      <div class="mb-3 col-12 col-md-3">
        <label class="form-label"><span class="text-danger">*</span> <strong>Blood Group</strong></label>
        <select style=" border: 1px gray solid;" class="selectpicker form-control" data-width="100%" id="BloodGroup" name="BloodGroup" required>
          <option value="">Select Blood Group</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
        </select>


        <span style="color: red">@error('BloodGroup') {{$message}} @enderror</span>
      </div>

      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="City"><strong>City</strong></label>
        <input type="text" id="City" name="City" class="form-control" placeholder="City" id required value="{{old('City')}}" >
        <span style="color: red">@error('City') {{$message}} @enderror</span>
      </div>

      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="City"><strong>State</strong></label>
        <input type="text" id="State" name="State" class="form-control" placeholder="State" value="{{old('State')}}" required>
        <span style="color: red">@error('State') {{$message}} @enderror</span>
      </div>
    </div>


     <div class="row">
      <div class="mb-3 col-12 col-md-2">
        <label class="form-label" for="address2">Country:</label>
        <input type="text" id="Country" name="Country" class="form-control" placeholder="Country" value="{{old('Country')}}" required>
        <span style="color: red">@error('Country') {{$message}} @enderror</span>
     </div>

      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="address2"><strong>ID Number</strong></label>
        <input type="number" id="IdentityNumber"  name="IdentityNumber" class="form-control" placeholder="ID Number" value="{{old('IdentityNumber')}}" required>
        <span style="color: red">@error('IdentityNumber') {{$message}} @enderror</span>
      </div>

     </div>
     <div class="mb-3 mb-4">
      <label for="siteName" class="form-label">Extra Note / Detail:
      <small class="text-muted">(Enter Extra Note / Detail for Student)</small>
</label>
<input class="form-control" id="ExtraNote" name="ExtraNote" placeholder="Extra Note" type="text" value="{{old('ExtraNote')}}" required>

</div>
<div class="row">
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Admission Date</strong></label>
    <input type="date" id="AdmissionDate" name="AdmissionDate" class="form-control" placeholder="Admission Date" value="{{old('AdmissionDate')}}" required>
    <span style="color: red">@error('AdmissionDate') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Admission Number</strong></label>
    <input type="number" id="IndexNumber"  name="IndexNumber"  class="form-control" value="{{old('IndexNumber')}}" required >
    <span style="color: red">@error('IndexNumber') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label"><span class="text-danger">*</span> <strong>Class</strong></label>
    <select style=" border: 1px gray solid;" class="selectpicker form-control" data-width="100%" id="Class" name="Class" required>
      <option value="">Select Class</option>
      @foreach($class as $value)
       <option value="{{$value->id}}"><strong>{{$value->name}} - {{$value->section}}</strong></option>
      @endforeach
    </select>
    <span style="color: red">@error('Class') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label"><span class="text-danger">*</span> <strong>Session</strong></label>
    <select style=" border: 1px gray solid;" class="selectpicker form-control" data-width="100%" id="Session" name="Session" required>
      <option value="">Select Session</option>
      <option value="Male"><strong>CLASS ONE</strong></option>
      <option value="Female">CLASS TWO</option>
      <option value="Others">CLASS THREE</option>
    </select>
    <span style="color: red">@error('Session') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Roll Number</strong></label>
    <input type="number" id="RollNumber" name="RollNumber" class="form-control" placeholder="908764443" value="{{old('RollNumber')}}"  required >
    <span style="color: red">@error('RollNumber') {{$message}} @enderror</span>
  </div>

<div class="mb-3 col-12 col-md-3">
  <label class="form-label"><span class="text-danger">*</span> <strong>Student Type</strong></label>
  <select style=" border: 1px gray solid;" class="selectpicker form-control" data-width="100%" id="StudentType" name="StudentType" required>
    <option value="">Select</option>
    <option value="REGULAR"><strong>REGULAR</strong></option>
    <option value="PRIVATE">PRIVATE</option>
    <option value="OTHERS">OTHERS</option>
  </select>
  <span style="color: red">@error('StudentType') {{$message}} @enderror</span>
</div>

</div>
<div class="row">
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Father's Name:</strong></label>
    <input type="text" id="FatherName" name="FatherName" class="form-control" placeholder="Admission Date" value="{{old('FatherName')}}"
    required>
    <span style="color: red">@error('FatherName') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Father's Phone:</strong></label>
    <input type="text" id="FatherContact" name="FatherContact"  class="form-control"  value="{{old('FatherContact')}}"  required >
    <span style="color: red">@error('FatherContact') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Father's Occupation:</strong></label>
    <input type="text" id="FatherOccupation" name="FatherOccupation"  class="form-control" value="{{old('FatherOccupation')}}" required >
    <span style="color: red">@error('FatherOccupation') {{$message}} @enderror</span>
  </div>

  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Mother's Name:</strong></label>
    <input type="text" id="MotherName" name="MotherName"  class="form-control" placeholder="Mother's Name" value="{{old('MotherName')}}"  required >
    <span style="color: red">@error('MotherName') {{$message}} @enderror</span>
  </div>

  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Mother's Phone:</strong></label>
    <input type="text" id="MotherContact" name="MotherContact" class="form-control" placeholder="Mother's Phon" value="{{old('MotherContact')}}"  required  >
    <span style="color: red">@error('MotherContact') {{$message}} @enderror</span>
  </div>
  <div class="mb-3 col-12 col-md-3">
    <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Mother's Occupation:</strong></label>
    <input type="text" id="MotherOccupation" name="MotherOccupation" class="form-control" placeholder="Mother's Occupation" required value="{{old('MotherOccupation')}}" >

    <span style="color: red">@error('MotherOccupation') {{$message}} @enderror</span>
  </div>


</div>

<button type="submit" class="btn btn-sm btn-success"><strong>Save student</strong></button>
    </div>
  </div>
</div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer" style="background-color:WHITE;">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style="font-family: 'Comfortaa', cursive;"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
            <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-support' ></i> <b>Contact Support</b></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 style="font-size: small;" class="modal-title fs-5" id="exampleModalLabel">Import Students From CSV File</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <small><strong>Select class and section, click "Import Sample CSV", fill student details in the file, choose the CSV file with student details and click "Bulk Import".</strong></small>
             <br>
             <br>
 <div class="card " style="border: none;">
  <!-- Card Header -->
  <div class="card-header" style="border: none;background-color:#dd8553;">
    <h6 style="color: white;" class="mb-0"><i style="color: white;" class='bx bx-up-arrow-alt'></i> <strong>Class:</strong></h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    <div>
      <select style=" border: 1px gray solid;"   class="selectpicker form-control" data-width="100%">
        <option value="">Select</option>
        <option value="English">CLASS ONE</option>
        <option value="German">CLASS TWO</option>
        <option value="Spanish">CLASS THREE</option>
        <option value="Hindi">CLASS FOUR</option>
      </select>


    </div>
  </div>
</div>

<div class="card " style="border: none;">
  <!-- Card Header -->
  <div class="card-header" style="border: none;background-color:#dd8553;">
    <h6 style="color: white;" class="mb-0"><i style="color: white;" class='bx bx-up-arrow-alt'></i> <strong>Session:</strong></h6>
  </div>
  <!-- Card Body -->
  <div class="card-body" style="border: none;">
    <div>
      <select style=" border: 1px gray solid;"   class="selectpicker form-control" data-width="100%">
        <option value="">Select</option>
        <option value="English">English</option>
        <option value="German">German</option>
        <option value="Spanish">Spanish</option>
        <option value="Hindi">Hindi</option>
      </select>


    </div>
  </div>
  <div class="mb-3">

    <div class="input-group mb-1">
  <input type="file" class="form-control" id="inputfavicon">

      </div>
</div>
</div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-sm btn-outline-primary"><i style="font-size: 10px;" class='bx bx-import' ></i> import</button>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
