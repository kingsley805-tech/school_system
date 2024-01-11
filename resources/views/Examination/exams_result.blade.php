@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"style="background:rgb(9, 9, 9);color:white;padding:10px;border-radius:10px;width:17rem">List Of Examinations <a href="/examinations/add-exams" style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -10px 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;""><i class='bx bxs-user-plus' ></i>  Add New Exams</a></h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: rgb(67, 69, 71);color:white">
                        <tr>
                        
                          <th  style="background-color:rgb(48, 45, 43);color:white">
                            Exam Title
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Class
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            Exam Center
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                           Start Date
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            End Date
                          </th>
                          <th  style="background-color:rgb(237, 105, 57);color:white">
                            examID
                           </th>

                          <th  style="background-color:rgb(237, 105, 57);color:white">
                           Exam Result
                         
                          </th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($exams as $value)
                        <tr class="table-anger">
                      
                          <td>
                            {{$value->examTitle}}
                          </td>
                          <td>
                            {{$value->class}}
                          </td>
                          <td>
                            {{$value->examCenter}}
                          </td>
                          <td>
                            {{$value->startDate}}
                          </td>
                          <td>
                            {{$value->endDate}}
                          </td>

                          <td>
                            {{$value->examinationNumber}}
                          </td>

                         
                          <td>
                            <button  class="btn btn-sm "><a href="/examinations/results/{{$value->examinationNumber}}" style="text-decoration: none;background:rgb(19, 16, 16);color:white;padding:10px;border-radius:20px;">Enter Result</a></button>
                           </td>
                          <td>
                          
                          
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
  <!-- container-scroller -->
  <!-- plugins:js -->


@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
