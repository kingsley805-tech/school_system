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
        <form action="{{route('/assessment/create')}}" method="POST">
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
                <li style="position: absolute;right:20px;margin:0 40px 0 0; padding:15px;background:rgb(255, 42, 0);border-radius:10px;"><button class="btn btn-sm btn-prmary"> <b><a style="color:white" href="\resources\views\Examination\grade">Add Grade Criteria</a></b></button></li>
                <h5 style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem;margin:0 0 60px 0">Create The Assessment Page</h5>
                
                <div class="row g-3">
                     <div class="col-6">
                        <label for="examcenter" ><b>Select Exams</b></label>
                        <select id="examinationNumber" name="examinationNumber" class="form-control"style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900"required>
                            <option value="">Select a Exams</option>
                            @foreach($exams as $exam)
                            <option value="{{$exam->examinationNumber}}">{{$exam->examTitle}}</option>
                            @endforeach
                            <!-- Add more <option> elements as needed -->
                          </select>
                      </div>

                      <div class="col-2">
                        <label for="examcenter" ><b>Session</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="Session" name="session" placeholder="Session" required readonly>
                      </div>

                      
                      <div class="col-2">
                        <label for="examcenter" ><b>Exam Start Date</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required readonly>
                      </div>

                      <div class="col-2">
                        <label for="examcenter" ><b>Exams End Date</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900"type="text" class="form-control" id="endDate" name="endDate" placeholder="end Date" required readonly>
                      </div>


                      <div class="col-4">
                        <label for="examcenter" ><b>Select Student</b></label>
                        <select id="student" name="IndexNumber" class="form-control"style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" required>
                            <option value="">Select Student</option>
        
                          </select>
                      </div>

                      <div class="col-4">
                        <label for="examcenter" ><b>Class</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="class" name="class" placeholder="Class" required readonly>
                      </div>

                      
                      <div class="col-4">
                        <label for="examcenter" ><b>Student ID</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="StudentID" name="StudentID" placeholder="Student ID" required readonly>
                      </div>

                      <div class="col-4">
                        <label for="examcenter" ><b>attendance</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="attendance" name="attendance" value="0" placeholder="Student ID" required readonly>
                      </div>

                      <div class="col-4">
                        <label for="examcenter" ><b>Academic Year</b></label>
                        <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900"type="text" class="form-control" id="year" name="year" placeholder="Academic Year" required>
                      </div>

                  <div class="col-4">
                    <label for="examcenter" ><b>Academic Term</b></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="term" name="term" placeholder="Academic Term" required>
                  </div>
                  <div class="col-4">
                    <label for="center" class="visually"><b>Next Term Beginning Date</b></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" class="form-control" id="nextTermBegins" name="nextTermBegins" placeholder="Next Term Beginning Date">
                  </div>
                  <div class="col-4">
                    <label for="inputPassword2" class=""><b>Student Position</b></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text" class="form-control" id="position" name="position" placeholder="Position">
                  </div>
                  <div class="col-4">
                    <label for="inputPassword2"><strong>Student Promoted To</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text"  class="form-control" id="promotedTo" name="promotedTo" placeholder="Student Promoted To">
                  </div>
                
                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2"><strong>Student Conduct:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text"  class="form-control" id="conduct" name="conduct" placeholder="conduct">
                  </div>

                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2" ><strong>Student attitude:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900"type="text"  class="form-control" id="attitude" name="attitude" placeholder="Attitude">
                  </div>
                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2" ><strong>Student Interest:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="text"  class="form-control" id="interest" name="interest" placeholder="Student Interests">
                  </div>

                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2"><strong>PTA Fees:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="number"  class="form-control" id="PTAFees" name="PTAFees" value="0" placeholder="PTA Fees">
                  </div>
                
                  
                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2"><strong>Printing Cost:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="number"  class="form-control" id="printingCost" name="printingCost" value="0" placeholder="Printing Cost">
                  </div>

                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2"><strong>sport and game fees:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900" type="number"  class="form-control" id="sportAndGameFees" name="sportAndGameFees" value="0" placeholder="sport and game fees">
                  </div>

                  <div class="col-4" style="margin-top: 10px;">
                    <label for="inputPassword2"><strong>Next term fees:</strong></label>
                    <input style="border: 1px solid rgb(255, 42, 0);color:black;font-weight:900"type="number"  class="form-control" id="nextTermFees" name="nextTermFees" value="0" placeholder="Next term fees">
                  </div>
  
                </div>
              </div>
              
             
            </div>
             <!--Button for the next page -->
            <div class="row justify-content-between">
              <div class="col-auto"><a href="/examinations/dashboard"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></a></div>
              <div class="col-auto">
                
                <button type="submit" class="btn btn-primary" ><b>Create Assesment</b></button>
              </div>
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

  <script>
    const student = document.getElementById('student')
     
    document.getElementById('examinationNumber').addEventListener('input', function(e){
      e.preventDefault()
      let examinationNumber = (e.target.value).trim()
      
      $.ajax({
      type: 'POST',
      url: '/examinations/get-examination-details',
      ContentType: 'application/json',
      data: {examinationNumber:examinationNumber},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         console.log(data)
         for (let i = 0; i < data.students.length; i++) {
            const LastName = data.students[i].LastName;
            const FirstName = data.students[i].FirstName;
            const name = `${FirstName} ${LastName}`
            const IndexNumber = data.students[i].IndexNumber;

            var option = document.createElement("option");
            option.text = name;
            option.value = IndexNumber;
            student.appendChild(option);
         }
        
         document.getElementById('Session').value = data.exam.Session
         document.getElementById('startDate').value = data.exam.startDate
         document.getElementById('endDate').value = data.exam.endDate

         document.getElementById('class').value = data.class.name

      },
      
       error: function(error){
        console.log(error)
       }
      });
    })


    document.getElementById('student').addEventListener('input', function(e){
        e.preventDefault()
        let IndexNumber = (e.target.value).trim()
      document.getElementById('StudentID').value = IndexNumber
    })
    

 </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  @endsection
  
  

