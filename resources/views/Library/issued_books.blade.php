<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid | Books Issued</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
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
    .form-control{
      border: 1px blue solid;
    }
    th{
      font-size: 10px;
      background-color: whitesmoke;
      color: white;
      font-weight: 800;
    }
    thead{
      font-size: 12px;
    }
    td{
      font-weight: 900;
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
    <li class="nav-item nav-search d-none d-lg-block w-100">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="search">
            <i class="mdi mdi-magnify"></i>
          </span>
        </div>
        <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
      </div>
    </li>
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
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM School</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white" ><b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
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
          <div class="row">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> List of All Books Issued Out / <span><a style="text-decoration: none;" href="/library/issuebook/list">View All Books </a></span>  <a href="" style="position: absolute;right:20px;text-decoration:none;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> Issue A Book</a></h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color:#F3732F;">
                        <tr>
                          <th>
                           Book Title
                          </th>
                          <th>
                           Issued To
                          </th>
                          <th>
                           Enrolllment Number
                          </th>
                          <th>
                            Class
                          </th>
                          <th>
                           Section
                          </th>
                          <th>
                            Issued Quanitity
                          </th>
                          <th>
                            Date Issued
                          </th>
                          <th>
                          Return Date
                          </th>
                          <th>
                           Status
                          </th>
                          <th>
                            Author
                           </th>
                           <th>
                           Subject
                           </th>
                           <th>
                            Rack Number
                           </th>
                           <th>
                            Book Number
                           </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr  class="alert alert-warning">
                          <td>
                            <input class="" type="checkbox" value="" id="flexCheckDefault">
                          </td>
                          <td>
                            Odoi Benjamin
                          </td>
                          <td>
                            IYE37393900
                          </td>
                          <td>
                            Regular
                          </td>
                          <td>
                            05637377388
                          </td>
                          <td>
                            ofruio@gmail.com
                          </td>
                          <td>
                            2023-MAY
                          </td>
                          <td>
                            Basic Six A
                          </td>
                          
                          <td>
                            Basic Six A
                           </td>
                           <td>
                            Basic Six A
                           </td>
                           <td>
                            Basic Six A
                           </td>
                           <td>
                            Basic Six A
                           </td>
                           <td>
                            Basic Six A
                           </td>
                        </tr>
                       
                        
                       
                      </tbody>
                    </table>
                  </div>
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
