@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card alert-primary" style="border:1px solid rgb(237, 105, 57)">
            <div class="card-body">
              <span><strong> <i style="font-size: 27px;" class='bx bx-book-reader menu-icon' style="color: rgb(237, 105, 57)"></i> Exam Details</strong><br><br><span><strong style="color: rgb(237, 105, 57)">Exam Title</strong>:{{$exam->examTitle}}</span><span style="margin-left: 10px;"><strong style="color: rgb(237, 105, 57)">Exam Center</strong>:{{$exam->examCenter}}</span><span style="margin-left: 10px;"><strong style="color: rgb(237, 105, 57)">Start Date:</strong>{{$exam->startDate}}</span><span style="margin-left: 10px;"><strong style="color: rgb(237, 105, 57)">End Date:</strong> {{$exam->endDate}}</span>
              <span style="margin-left: 10px;"><strong style="color: rgb(237, 105, 57)">Exam ID:</strong> <span id="examinationNumber">{{$exam->examinationNumber}}</span> </span>
              
            </div>
          </div>
          <div class="row">
          <div class="col-lg-12 stretch-card">
         
              <div class="card">
                
                <br>
                <div class="card-body">
                  <h4 class="card-title">Select Student:<br>
                     </h4>
                     <select class="form-select" aria-label="Default select example" id="IndexNumber"style='border:1px solid rgb(237, 105, 57)'>
                      <option selected>Select Student</option>
                      @foreach($students as $student)
                      <option value="{{$student->IndexNumber}}">{{$student->FirstName}} {{$student->LastName}}</option>
                      @endforeach
                    </select>

                    <br>
                    <br>
                    <select class="form-select" aria-label="Default select example" id="examSubjectID"style='border:1px solid rgb(237, 105, 57)'>
                      <option selected>Select Student</option>
                      @foreach($subjects as $subject)
                      <option value="{{$subject->examSubjectID}}">{{$subject->subjectName}}</option>
                      @endforeach
                    </select>
                <br>
                <br>
                <form action="{{route('postresults')}}" method="POST">
                  @if (Session::has('success'))
                  <span style="background-color: rgb(0, 255, 106); color:rgb(184, 179, 179)">{{Session::get('success')}}</span>
                  @endif
        
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(225, 52, 52); color:rgb(244, 236, 236)">{{Session::get('fail')}}</span>
                  @endif
        
                  @csrf
                  
                  <div class="content-wrapper">
                  
                 
                    <div class="tab-content py-4" id="nav-tabContent" >
                      <div class="tab-pane fade show active" id="step1">
                      
                        <h5>Add Exam Papers</h5>
                        
                        <div class="row g-3">
                          <div class="col-3">
                            <label for="examcenter" ><b>Student Name</b></label>
                            <input style="border: 1px solid rgb(255, 72, 0); color:black;font-weight:900" type="text" class="form-control" id="studentName" name="studentName" required readonly>
                          </div>
                          <div class="col-3">
                            <label for="center" class="visually"><b>IndexNumber Number:</b></label>
                            <input type="text" style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" class="form-control" id="indexNumber" name="indexNumber" readonly>
                          </div>
                          <div class="col-3">
                            <label for="inputPassword2" class="visuallyhidden"><b>Paper Code/Subject Code</b></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900"  type="text" class="form-control" id="paperCode" name="paperCode" placeholder="0.00" readonly>
                          </div>
                          <div class="col-3">
                            <label for="inputPassword2" class="visually-hdden"><strong>Subject Name:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="subjectName" name="subjectName" placeholder="" readonly>
                          </div>
                        
                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Subject Type:</strong></label>
                            <input style="border:1px solid rgb(237, 105, 57);color:black;font-weight:900" type="text"  class="form-control" id="subjectType" name="subjectType" readonly>
                          </div>
                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Maximum Mark:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="maximumMark" name="maximumMark" readonly>
                          </div>
                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hiden"><strong>Subject ID:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="examSubjectIDTwo" name="examSubjectID" readonly>
                          </div>
                        
          
                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Mark Obtained:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="markObtained" name="markObtained" placeholder="">
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visuallyhidden"><strong>Remark:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="remark" name="remark" placeholder="">
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Teacher's Remark:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="teacherRemark" name="teacherRemark" placeholder="">
                          </div>

                          
                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hiden"><strong>School Remark:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="schoolRemark" name="schoolRemark" placeholder="">
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Class:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="class" name="class" value="{{$exam->class}}" readonly>
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hiden"><strong>Class ID:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="classroom_id" name="classroom_id" value="{{$exam->classroom_id}}" readonly>
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hiden"><strong>Class ID:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="Session" name="Session" value="{{$exam->Session}}" readonly>
                          </div>

                          <div class="col-3" style="margin-top: 10px;">
                            <label for="inputPassword2" class="visually-hdden"><strong>Exams ID:</strong></label>
                            <input style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" type="text"  class="form-control" id="examinationNumber" name="examinationNumber" value="{{$exam->examinationNumber}}" readonly>
                          </div>

                        </div>
                      </div>
                      
                     
                    </div>
                     <!--Button for the next page -->
                    <div class="row justify-content-between">
                      <div class="col-auto"><button type="button" class="" data-enchanter="previous" style="background-color:rgb(14, 13, 12);color:white;border:rgb(237, 105, 57);padding:10px;border-radius:10px;">Previous</button></div>
                      <div class="col-auto">
                        
                        <button type="submit" class="btn btn-primary" style="background-color:rgb(237, 105, 57);color:white;border:1px solid rgb(237, 105, 57)"><b> Add Paper</b></button>
                      </div>
                    </div>
                    
                  </div>
                </form>
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


 <script>
    const examinationNumber = document.getElementById('examinationNumber').textContent

    document.getElementById('IndexNumber').addEventListener('input', function(e){
      e.preventDefault()
      const IndexNumber = (e.target.value).trim()
      $.ajax({
      type: 'POST',
      url: '/examinations/fetch-student-detail',
      ContentType: 'application/json',
      data: {IndexNumber:IndexNumber},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
        // console.log(data)
         document.getElementById('studentName').value = `${data.FirstName} ${data.LastName}`
         document.getElementById('indexNumber').value = data.IndexNumber
       

      },
      
       error: function(error){
        console.log(error)
       }
      });
    })


    document.getElementById('examSubjectID').addEventListener('input', function(e){
      e.preventDefault()
      const examSubjectID = (e.target.value)
      $.ajax({
      type: 'POST',
      url: '/examinations/fetch-subject-detail',
      ContentType: 'application/json',
      data: {examSubjectID:examSubjectID, examinationNumber:examinationNumber},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         console.log(data)
         document.getElementById('paperCode').value = data.paperCode
         document.getElementById('subjectName').value = data.subjectName

         document.getElementById('subjectType').value = data.subjectType
         document.getElementById('maximumMark').value = data.maximumMark
         document.getElementById('examSubjectIDTwo').value = data.examSubjectID
         
      },

       error: function(error){
        console.log(error)
       }
      });
    })
 </script>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
