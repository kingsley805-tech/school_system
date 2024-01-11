@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if (Session::has('success'))
          <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif
    
          @if (Session::has('fail'))
              <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
          @endif
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> ROUTE LISTINGS / <span><a style="text-decoration: none;" href="/transport/routes/lists">View Route</a></span> </h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Student Name
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Student ID
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Class
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            City
                          </th>
                        
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Action
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $book)
                        <tr  class="alert alert-warning">
                        
                          <td>
                            {{$book->FirstName}}  {{$book->LastName}}
                          </td>
                          <td>
                            {{$book->IndexNumber }}
                          </td>

                          <td>
                            {{$book->classrooms->name }}
                          </td>

                          <td>
                            {{$book->City}},  
                          </td>
                        
                           <td>
                            <div class="btn-group" style="margin: 0 -100 0 0">
                              <button class="btn btn-sm btn-drk" style="background: red;color:white;text-decoration:none"><a href="/transport/routes/remove-student/{{$book->IndexNumber}}"style='color:white;text-decoration:none'>Remove Student</a></button>
                            </div>
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
 
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
