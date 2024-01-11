@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style="border-radius: 10px; box-shadow: 3px 3px 3px #888888;background:rgb(248, 128, 7)">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> List of All Books / <span><a style="text-decoration: none;" href="/library/issuebook/list">View Books Issued</a></span>  <a href="/library/add-books" style="position: absolute;right:20px;text-decoration:none;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i>  Add New Book</a></h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Title
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                           Author
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Subject
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Rack Number
                          </th>
                       
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            ISBN Number
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Price
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                           Quantity
                          </th>

                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Issued
                           </th>

                           <th  style="background-color:rgb(237, 105, 57);color:white">
                            Available
                           </th>

                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Action
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($books as $book)
                        <tr  class="alert alert-wrning">
                        
                          <td>
                            {{$book->title}}
                          </td>
                          <td>
                            {{$book->author}}
                          </td>
                          <td>
                            {{$book->subject}}
                          </td>
                          <td>
                            {{$book->rackNumber}}
                          </td>
                          <td>
                            {{$book->isbnNumber}}
                          </td>
                          <td>
                            {{$book->price}}
                          </td>
                          <td>
                            {{$book->quantity}}
                          </td>

                          <td>
                            {{$book->issued}}
                          </td>

                          <td>
                            {{$book->available}}
                          </td>
                         
                           <td>
                            <div class="btn-group">
                              <button class="btn btn-sm btn-dark"><a>Edit</a></button>
                              <button class="btn btn-sm btn-danger"><a>Delete</a></button>
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
  
