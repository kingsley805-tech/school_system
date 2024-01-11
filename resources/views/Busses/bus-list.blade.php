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
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> List of All Books / <span><a style="text-decoration: none;" href="/transport/routes/lists">View Added Bus</a></span>  <a href="/transport/addbus" style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -10px 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;"><i class='bx bxs-user-plus' ></i>Add New Bus</a></h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Bus Number
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Bus Model
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Driver
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Contact
                          </th>
                       
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            inCharge
                          </th>
                          
                        
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Action
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($buses as $book)
                        <tr  class="alert alert-war[ning">
                        
                          <td>
                            {{$book->busNumber}}
                          </td>
                          <td>
                            {{$book->busModel}}
                          </td>
                          <td>
                            {{$book->driverName}}
                          </td>
                          <td>
                            {{$book->driverNumber}}
                          </td>
                          <td>
                            {{$book->inCharge}}
                          </td>
                          
                         
                           <td>
                            <div class="btn-group">
                              <button class="btn btn-sm btn-dark"><a href="/transport/bus/edit/{{$book->id}}" style="color:white ">Edit</a></button>
                              <button class="btn btn-sm btn-danger"><a href="/transport/bus/delete/{{$book->id}}"style="color:white ">Delete</a></button>
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
  
