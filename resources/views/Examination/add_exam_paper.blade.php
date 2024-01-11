@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Examinations - Add Exam</strong></li>
          
        
          </ol>
        </nav>
        <form action="{{route('add-exams-papers')}}" method="POST">
          @if (Session::has('success'))
          <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif

          @if (Session::has('fail'))
              <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
          @endif

          @csrf
          
          <div class="content-wrapper">
          
         
            <div class="tab-content py-4" id="nav-tabContent" >
              <div class="tab-pane fade show active" id="step1">
              
                <h5>Add Exam Papers</h5>
                
                <div class="row g-3">
                  <div class="col-3">
                    <label for="examcenter" ><b>Subject Title</b></label>
                    <input style="border: 1px solid rgb(255, 72, 0); color:#ffffff;font-weight:900" type="text" class="form-control" id="subject_title" name="subjectName" placeholder="Enter Exam Center">
                  </div>
                  <div class="col-3">
                    <label for="center" class="visually"><b>Maximum Marks:</b></label>
                    <input type="number" style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" class="form-control" id="maximum_marks" name="maximumMark" placeholder="100">
                  </div>
                  <div class="col-3">
                    <label for="inputPassword2" class="visually-hiddn"><b>Paper Code/Subject Code</b></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900"  type="text" class="form-control" id="paper_code" name="paperCode" placeholder="0.00">
                  </div>
                  <div class="col-3">
                    <label for="inputPassword2" class="visually-hidde"><strong>Paper Date:</strong></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" type="date"  class="form-control" id="paper_date" name="paperDate" placeholder="">
                  </div>
                
                  <div class="col-3" style="margin-top: 10px;">
                    <label for="inputPassword2" class="visually-hiddn"><strong>Start Time:</strong></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" type="time"  class="form-control" id="start_time" name="startTime" placeholder="date">
                  </div>
                  <div class="col-3" style="margin-top: 10px;">
                    <label for="inputPassword2" class="visually-hiden"><strong>End Time:</strong></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" type="time"  class="form-control" id="endtime" name="endTime" placeholder="date">
                  </div>
                  <div class="col-3" style="margin-top: 10px;">
                    <label for="inputPassword2" class="visually-hiden"><strong>Room Number:</strong></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" type="number"  class="form-control" id="room_number" name="roomNumber" placeholder="Room  Number ">
                  </div>
                  <div class="col-3" style="margin-top: 10px;">
                    <label for="class"><b>Subject Type:</b></label>
                    <select style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" id="subject_type" name="subjectType" class="form-control" aria-label="Default select example" required>
                      <option selected>Select subject type</option>
                      <option value="Theory">Theory</option>
                      <option value="Practical">Practical</option>
                   
                    </select>
                  </div>
  
                  <div class="col-3" style="margin-top: 10px;">
                    <label for="inputPassword2" class="visually-hiden"><strong>Examination Number:</strong></label>
                    <input style="border: 1px solid rgb(255, 72, 0);color:white;font-weight:900" type="text"  class="form-control" id="examinationNumber" name="examinationNumber" value="{{$examinationNumber}}" >
                  </div>
                </div>
              </div>
              
             
            </div>
             <!--Button for the next page -->
            <div class="grid-cols-2">
              <a href="/examinations/dashboard"><div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div></a>
              
                
                <button type="submit" class="btn btn-primary"style='background:rgb(255, 72, 0);color:white;border:rgb(255, 72, 0);width:10rem;margin:-2.5rem 0 0 20rem' ><b> Add Paper</b></button>
              
            </div>
            
          </div>
        </form>
        
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
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  

















