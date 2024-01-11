<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid School Management System | Admin Dashboard | Fee Types</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    .mb-2{
      font-size: 12px;
      font-weight: 500;
    }
    #icon{
      display: block;
      margin: 0 auto;
    }
    #value{
      text-align: center;
      font-size:20px;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
            <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100" >  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
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
              <img src="images/user.png" alt="profile"/>
              <span class="nav-profile-name" style="color:white"><strong>Teacher</strong></span>
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" sy>
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="index.html">
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
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white" > <b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-school menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM Adminstrator</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
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
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-wallet-alt menu-icon'></i>
              <span class="menu-title">SM Accounting</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Dashboard</a></li>
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
              <i class='bx bx-book-reader menu-icon'></i>
              <span class="menu-title">SM Examination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
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
            <div class="collapse" id="ui-basic5">
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
            <div class="collapse" id="ui-basic6">
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
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting - Fee Invoice</strong></li>
            <li style="position: absolute;right:20px;margin-top:-10px"><button class="btn btn-sm btn-secondary"><i class='bx bx-printer' ></i> <b>Fee Structure</b></button></li>
        
          </ol>
        </nav>
        <div class="content-wrapper">
          <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
              <a style="color: black;" class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1"><i class='bx bx-square'></i> <b>Create Single Invoice</b></a>
              <a style="color: black;" class="nav-link" id="step2-tab" data-toggle="tab" href="#step2"><i class='bx bx-square'></i> <b>Create Bulk Invoice</b></a>
              <a style="color: black;" class="nav-link" id="step3-tab" data-toggle="tab" href="#step3"><i class='bx bx-square'></i> <b>Create Single Invoice According Fee Type</b></a>
            </div>
          </nav>
      <br>
      <br>
          <form class="row g-3">
  <div class="col-3">
    <label for="staticEmail2" class="visually-hidden"><b>Class:</b></label>
    <select class="form-control" aria-label="Default select example">
      <option selected>Select Class</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-3">
    <label for="staticEmail2" class="visually-hidden"><b>Section:</b></label>
    <select class="form-control" aria-label="Default select example">
      <option selected>Select Section</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  
  <div class="col-3">
    <label for="staticEmail2" class="visually-hidden"><b>Student:</b></label>
    <select class="form-control" aria-label="Default select example">
      <option selected>Select Student name</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
</form>

          <div class="tab-content py-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="step1">
              <h5><b>Invoice Detail</b></h5>
              <div class="mb-3">
                <label for="first_name"><b>Invoice Title:</b></label>
                <input type="text" class="form-control" id="first_name" placeholder="Invoice Title" required>
              </div>
              <div class="mb-3">
                <label for="first_name"><b>Description:</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="3"></textarea>
              </div>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Total Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Payable Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Discount Percentage:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Date Issued:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                
              </div>
              <br>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Due Date:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Due Date Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
               
              
                
              </div>
             
            </div>
            <div class="tab-pane fade" id="step2">
              <h4><b>Invoice Details</b></h4>
              <div class="mb-3">
                <label for="first_name"><b>Invoice Title:</b></label>
                <input type="text" class="form-control" id="first_name" placeholder="Invoice Title" required>
              </div>
              <div class="mb-3">
                <label for="first_name"><b>Description:</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="3"></textarea>
              </div>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Total Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Payable Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Discount Percentage:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Date Issued:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                
                
              </div>
              <br>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Due Date:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Due Date Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
               
              
                
              </div>
            </div>
            <div class="tab-pane fade" id="step3">
              <h4>Student Fee Structure</h4>
              <br>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <b>Add Fee</b>
              </button>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <form class="row g-3">
                    <div class="col-4">
                      <label for="staticEmail2" class="visually"><b>Fee Type</b></label>
                      <input type="text"  class="form-control" id="staticEmail2" value="" placeholder="fee type">
                    </div>
                    <div class="col-4">
                      <label for="inputPassword2" class="visually-hidden"><b>Period:</b></label>
                      <input type="text" class="form-control" id="inputPassword2" placeholder="Period">
                    </div>
                    
                    <div class="col-4">
                      <label for="inputPassword2" class="visually-hidden"><b>Amount:</b></label>
                      <input type="number" class="form-control" id="inputPassword2" placeholder="Amount">
                    </div>
                  </form>
                </div>
              </div>
              <br>
              <br>
              <div class="mb-3">
                <label for="first_name"><b>Invoice Title:</b></label>
                <input type="text" class="form-control" id="first_name" placeholder="Invoice Title" required>
              </div>
              <div class="mb-3">
                <label for="first_name"><b>Description:</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="3"></textarea>
              </div>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Total Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Payable Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Discount Percentage:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Date Issued:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                
                
              </div>
              <br>
              <div class="row g-3">
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Due Date:</strong></label>
                  <input type="date" class="form-control" id="inputPassword2" placeholder="date">
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Due Date Amount:</b></label>
                  <input type="number" class="form-control" id="inputPassword2" placeholder="0.00">
                </div>
               
              
                
              </div>
            </div>
          </div>
           <!--Button for the next page -->
          <div class="row justify-content-between">
            <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div>
            <div class="col-auto">
              
              <button type="submit" class="btn btn-primary" data-enchanter="finish"><b><i class='bx bx-save' ></i> Add New Fee Invoice</b></button>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <!-- container-scroller -->
 


  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/enchanter.js"></script>


  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script>
   
     alert("Fee Invoice Saved");

    const wizard = new Enchanter('form');
    const wizard = new Enchanter('form', {}, {
      onNext: () => {
        // do something
      },
      onPrevious: () => {
        // do something
      },
      onFinish: () => {
        // do something
      },
    });

  </script>
  <!-- End custom js for this page-->
</body>

</html>

