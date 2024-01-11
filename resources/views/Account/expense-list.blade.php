@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:#ea5f02">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List of Expenses</h4>
                  @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif
     
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                  @endif
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-bordered">
                      <thead style="background-color: rgb(36, 38, 37);color:white">
                        <tr>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Title
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Category
                          </th>
                      
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Amount
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            invoiceNumber
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Date
                          </th>
                         
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Note
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Action
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Action 2
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($expenses as $value)
                        <tr class="table-dangr">
                          <td>
                            {{$value->Title}} {{$value->LastName}}
                          </td>
                          <td>
                            {{$value->Category}}
                          </td>
                       
                          <td>
                            {{number_format($value->Amount, 2, '.', '')}}
                          </td>
                          <td>
                             {{$value->invoiceNumber}}
                          </td>
                          <td>
                            {{$value->stringDate}}
                          </td>
                         

                          <td>
                            {{$value->Note}}
                          </td>

                          <td>
                            <a style="text-decoration: none;color:white" href="/account/expense/edit/{{$value->id}}"><button class="btn btn-sm "style=" color: white; font-size: 16px; background-color:green;" onmouseover="this.style.color='green'; this.style.backgroundColor='rgb(31, 169, 0)';" onmouseout="this.style.color=''; this.style.backgroundColor='rgb(31, 169, 59)';">Edit</button></a>
                            
                           </td>

                           <td>
                            <a style="text-decoration: none;color:white" href="/account/expense/delete/{{$value->id}}"><button class="btn btn-sm "style="background: color: blue; font-size: 16px; background-color:red;" onmouseover="this.style.color='red'; this.style.backgroundColor='pink';" onmouseout="this.style.color=''; this.style.backgroundColor='red';">Delete</button></a>
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
  @endsection
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
