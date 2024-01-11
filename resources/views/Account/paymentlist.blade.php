@include('../Includes/headerCss');
  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .form-control{
      border: 1px blue solid;
    }
  </style>
</head>

<body>
  <div class="container-scroller">

    @include('../Includes/menuBar');
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:18rem">All Payment List</h4>
                  @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif
     
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                  @endif
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-bordered">
                      <thead>
                        <tr>
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Student
                          </th>
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Class
                          </th>
                      
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Amount
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            Description
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            Date
                          </th>
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Receiver
                          </th>
                         
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Role
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($incomes as $value)
                        <tr class="table-danger">
                          <td>
                            {{$value->StudentName}}
                          </td>
                          <td>
                            {{$value->classroom}}
                          </td>
                       
                          <td>
                            {{number_format($value->payingAmount, 2, '.', '')}}
                          </td>

                          <td>
                            {{$value->Description}}
                         </td>

                          <td>
                             {{$value->PaymentDate}}
                          </td>
                          <td>
                            {{$value->receiver}}
                          </td>
                         

                          <td>
                            {{$value->receiverRole}}
                          </td>

                          <td>
                            <a style="text-decoration: none;color:white" href="/account/income/edit/{{$value->id}}"><button class="btn btn-sm btn-primary">Edit</button></a>
                            
                           </td>

                           <td>
                            <a style="text-decoration: none;color:white" href="/account/income/delete/{{$value->id}}"><button class="btn btn-sm btn-primary">Delete</button></a>
                           </td>
                        </tr>
                        @endforeach
                       
                       
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
         @include('../Includes/footer');
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ URL::asset('vendors/base/vendor.bundle.base.js'); }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ URL::asset('vendors/chart.js/Chart.min.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js'); }}"></script>
  
  <!-- inject:js -->
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/template.js'); }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('js/dashboard.js'); }}"></script>
  <script src="{{ URL::asset('js/data-table.js'); }}"></script>
  <script src="{{ URL::asset('js/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('js/dataTables.bootstrap4.js'); }}"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
