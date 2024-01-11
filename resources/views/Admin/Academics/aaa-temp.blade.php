@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Subjects | Academics
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute;right:20px;text-decoration:none;"><i class='bx bxs-user-plus' ></i> Add New Subject</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalLabel">Add New Subject</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label"> Subject Name:</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Subject Code:</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">* Subject Type:</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Theory</option>
                            <option value="2">Praticals</option>
                            <option value="3">Subjective</option>
                            <option value="3">Objective</option>
                          </select>
                        </div>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save </button>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="table-responsive pt-6">
                <table id="example" class="table table-sm table-striped table-bordered">
                  <thead style="background-color: aliceblue;">
                    <tr>
                      <th>
                        Subject Name
                      </th>
                      <th>
                        Subject Code
                      </th>
                      <th>
                        Subject Type
                      </th>
                      <th>
                        Class
                      </th>
                      <th>
                        Teacher
                      </th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-danger">
                      <td>
                        Mathematics
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
                       <a style="color:black" href="">Assign Teachers</a>
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

@endsection
