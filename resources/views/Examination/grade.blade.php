@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card alert-primary" >
            <div class="card-body">
              <span><strong style="color:"> <i style="font-size: 27px;color:rgb(238, 75, 15)" class='bx bx-book-reader menu-icon'></i> Exam Details</strong><br><br><span><strong style="color:rgb(238, 75, 15)">Exam Title</strong>:{{$exam->examTitle}}</span><span style="margin-left: 10px;"><strong style="color:rgb(238, 75, 15)" >Exam Center</strong>:{{$exam->examCenter}}</span><span style="margin-left: 10px;color:rgb(238, 75, 15)"><strong>Start Date:</strong>{{$exam->startDate}}</span><span style="margin-left: 10px;color:rgb(238, 75, 15)"><strong>End Date:</strong> {{$exam->endDate}}</span>
              <span style="margin-left: 10px;"><strong style="color:rgb(238, 75, 15)">Exam ID:</strong> <span id="examinationNumber">{{$exam->examinationNumber}}</span> </span>
              </span>
              
            </div>

          </div>
          <div class="row">
          <div class="col-lg-12 stretch-card">
         
              <div class="card">
              <div> 
                  
              </div>

                <br>
                <div class="card-body">
                  <h4 class="card-title"style="background-color:rgb(237, 105, 57);color:white">Select Subjects:<br>
                   
                    <br>
                    <select class="form-select" aria-label="Default select example" id="examSubjectID"style="background-color:rgb(237, 105, 57);color:white">
                      <option selected>Select Subject</option>
                      @foreach($subjects as $subject)
                      <option value="{{$subject->examSubjectID}}">{{$subject->subjectName}}</option>
                      @endforeach
                    </select>
                <br>
                <br>
                <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                        
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Student
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                           Student ID
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Class
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            subject/Paper
                          </th>
                    
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Max Marks
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                             Exam Score
                           </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
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
 

    document.getElementById('examSubjectID').addEventListener('input', function(e){
      e.preventDefault()
      const examSubjectID = (e.target.value)
      document.getElementById('ExamResultTable').innerHTML = ''
      $.ajax({
      type: 'POST',
      url: '/examinations/fetch-class-result',
      ContentType: 'application/json',
      data: {examSubjectID:examSubjectID, examinationNumber:examinationNumber},

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
               let Cell6 = TRows.insertCell(6) 

               Cell0.innerHTML = results[x].studentName
               Cell1.innerHTML = results[x].indexNumber
               Cell2.innerHTML = results[x].class
               Cell3.innerHTML = results[x].subjectName
               Cell4.innerHTML = results[x].maximumMark
               Cell5.innerHTML = results[x].markObtained
               Cell6.innerHTML = results[x].remark
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
