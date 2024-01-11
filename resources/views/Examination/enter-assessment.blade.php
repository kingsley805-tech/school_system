@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Add To Assessment</strong></li>
            <li style="position: absolute;right:20px;margin-top:-10px"><button class="btn btn-sm btn-warning"> <b><a href="">Add To Assessment</a></b></button></li>
        
          </ol>
        </nav>


        <div class="content-wrapper">
          <form action="{{route('/assessment/assessment/list')}}" method="POST">
            @if (Session::has('success'))
            <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif
  
            @if (Session::has('fail'))
                <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
            @endif
  
            @csrf
      <br>
      <br>
        

          <div class="tab-content py-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="step1">
            
           
              <div class="row g-3">
               
                    <div class="col-6">
                      <label for="class"><b>Select Subjects:</b></label>
                      <select id="subjectID" name="subjectID" class="form-control" aria-label="Default select example" required>
                        <option selected>Select Class</option>
                        @foreach($subjects as $value)
                       <option value="{{$value->examSubjectID}}"><strong>{{$value->subjectName}}</strong></option>
                       @endforeach
                      </select>
                    </div>
   
                    <div class="col-6" style="display:none">
                        <label for="examcenter" ><b>Exam Subject:</b></label>
                        <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text" class="form-control" id="subjectTitle" name="subjectTitle" placeholder="" readonly>
                     </div>
                   
                <div class="col-3">
                  <label for="examcenter" ><b>Exam score:</b></label>
                  <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="number" class="form-control" id="examScore" name="examScore" placeholder="" readonly>
                </div>
                <div class="col-3">
                  <label for="center" class="visually"><b>Exam Percentage:(70%)</b></label>
                  <input type="number" style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" class="form-control" id="seventyPercent" name="seventyPercent" placeholder="" required>
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><b>Class Score:</b></label>
                  <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900"  type="number" class="form-control" id="classScore" name="classScore" placeholder="" required>
                </div>
                <div class="col-3">
                  <label for="inputPassword2" class="visually-hidden"><strong>Total:</strong></label>
                  <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="number"  class="form-control" id="Total" name="Total" placeholder="" required readonly>
                </div>

                <div class="col-3">
                    <label for="inputPassword2" class="visually-hidden"><strong>Position:</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text"  class="form-control" id="position" name="position" placeholder="">
                  </div>

                  <div class="col-3">
                    <label for="inputPassword2" class="visually-hidden"><strong>Remark:</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text"  class="form-control" id="remark" name="remark" placeholder="remark" required>
                  </div>

                  <div class="col-3" style="">
                    <label for="inputPassword2" class="visually-hidden"><strong>examinationNumber</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" value="{{$assessment->examinationNumber}}" type="text"  class="form-control" id="examinationNumber" name="examinationNumber" readonly>
                  </div>

                  <div class="col-3" style="">
                    <label for="inputPassword2" class="visually-hidden"><strong>assesmentNumber:</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text" value="{{$assessment->assesmentNumber}}"  class="form-control" id="assesmentNumber" name="assesmentNumber" placeholder="" readonly>
                  </div>

                  <div class="col-3" style="">
                    <label for="inputPassword2" class="visually-hidden"><strong>IndexNumber:</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text"  class="form-control" value="{{$assessment->IndexNumber}}" id="IndexNumber" name="IndexNumber" placeholder="" readonly>
                  </div>

                  <div class="col-3" style="">
                    <label for="inputPassword2" class="visually-hidden"><strong>session:</strong></label>
                    <input style="border: 1px solid rgb(255, 55, 0); color:white;font-weight:900" type="text"  class="form-control" id="session" name="session" value="{{$assessment->session}}" placeholder="" readonly>
                  </div>
                
              </div>
              <hr>
            
              
            </div>
          
           
          </div>
           <!--Button for the next page -->
          <div class="row justify-content-between">
            <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div>
            <div class="col-auto">
              
              <button type="submit" class="btn btn-primary" ><b><i class='bx bx-save' ></i> Add Exam</b></button>
            </div>
          </div>
        </form>
        </div>
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
   document.getElementById('subjectID').addEventListener('input', function(e){

        e.preventDefault()
        const subjectID = (e.target.value).trim()
        $.ajax({
        type: 'POST',
        url: '/examinations/assessment/examsresult/student',
        ContentType: 'application/json',
        data: {subjectID:subjectID},

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
           console.log(data)
           const mark = Number(data.assessments.markObtained)
           document.getElementById('subjectTitle').value = data.assessments.subjectName
           document.getElementById('examScore').value = data.assessments.markObtained
           document.getElementById('seventyPercent').value = (mark/100)*70
           document.getElementById('remark').value = data.assessments.remark

        },

        error: function(error){
            console.log(error)
        }
        });
    })

   document.getElementById('classScore').addEventListener('input', function(e){
     let classScore = Number(e.target.value)
     let seventyPercent = Number(document.getElementById('seventyPercent').value)
     let Total = classScore+seventyPercent

     if(Total <= 100){
      document.getElementById('Total').value = Total
     }else{
      alert('The total mark is you are entering is greater than 100')
      document.getElementById('Total').value = 0
     }

    
   })

   document.getElementById('seventyPercent').addEventListener('input', function(e){
     let seventyPercent = Number(e.target.value)
     let classScore = Number(document.getElementById('classScore').value)
     let Total = classScore+seventyPercent

     if(Total <= 100){
      document.getElementById('Total').value = Total
     }else{
      alert('The total mark is you are entering is greater than 100')
      document.getElementById('Total').value = 0
     }
   })
  </script>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

