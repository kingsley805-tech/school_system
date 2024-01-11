@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card alert-primary"style='margin:0 0 10px 0' >
            <div class="card-body">
              <span><strong style="background:rgb(9, 9, 9);color:white;padding:16px;border-radius:10px;width:22rem"> <i style="font-size: 27px;" class='bx bx-book-reader menu-icon'></i> Exam Details</strong><br><br><span><strong>Exam Title</strong>:<span style='color:rgb(255, 68, 0);'>:{{$exam->examTitle}}</span></span><span style="margin-left: 10px;"><strong>Exam Center</strong><span style='color:rgb(255, 68, 0);'>:{{$exam->examCenter}}</span></span><span style="margin-left: 10px;"><strong>Start Date:</strong><span style='color:rgb(255, 68, 0);'>{{$exam->startDate}}</span></span><span style="margin-left: 10px;"><strong>End Date:</strong><span style='color:rgb(255, 68, 0);'>{{$exam->endDate}}</span> </span>
              <span style="margin-left: 10px;"><strong>Exam ID:</strong> <span id="examinationNumber"><span style='color:rgb(255, 68, 0);'>{{$exam->examinationNumber}}</span></span> </span>
              </span>
              
            </div>

          </div>
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
         
              <div class="card">
              <div> 
                  
              </div>

                <br>
                <div class="card-body">
                  <h4 class="card-title">Select Student:<br>
                   
                    <br>
                    <select class="form-select" aria-label="Default select example" id="IndexNumber"style='border:1px solid rgb(255, 68, 0);'>
                        <option selected>Select Student</option>
                        @foreach($students as $student)
                        <option value="{{$student->IndexNumber}}">{{$student->FirstName}} {{$student->LastName}}</option>
                        @endforeach
                      </select>
                <br>
                <br>
                <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                        
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Subject/Paper
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            Paper code
                          </th>
                          <th style='background: rgb(255, 68, 0);color:white'>
                            Class
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            Max Marks
                          </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                             Exam Score
                           </th>

                          <th style='background: rgb(255, 68, 0);color:white'>
                            remarks
                         
                          </th>
                        </tr>
                      </thead>
                      <tbody id="ExamResultTable">
                      
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


 <script>
    const ExamResultTable = document.getElementById('ExamResultTable')
    const examinationNumber = document.getElementById('examinationNumber').textContent
 

    document.getElementById('IndexNumber').addEventListener('input', function(e){
      e.preventDefault()
      const indexNumber = (e.target.value)
      document.getElementById('ExamResultTable').innerHTML = ''
      $.ajax({
      type: 'POST',
      url: '/examinations/fetch-student-result',
      ContentType: 'application/json',
      data: {indexNumber:indexNumber, examinationNumber:examinationNumber},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         console.log(data)

         const results = data.results
         const Subject = data.subject

         for(var x = 0; x < results.length; x++){
               let TRows = ExamResultTable.insertRow(x)
               let Cell0 = TRows.insertCell(0)
               let Cell1 = TRows.insertCell(1)
               let Cell2 = TRows.insertCell(2)
               let Cell3 = TRows.insertCell(3) 
               let Cell4 = TRows.insertCell(4) 
               let Cell5 = TRows.insertCell(5) 
            
               Cell0.innerHTML = results[x].subjectName
               Cell1.innerHTML = results[x].paperCode
               Cell2.innerHTML = results[x].class
               Cell3.innerHTML = results[x].maximumMark
               Cell4.innerHTML = results[x].markObtained
               Cell5.innerHTML = results[x].remark
           }
           
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
