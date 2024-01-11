@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem">List Of Examinations <a href="/examinations/add-exams" style="position: absolute;right:20px;text-decoration:none;padding:20px;color:white;border-radius:10px;background:rgb(244, 68, 3);margin:-20px 0 0 0"><i class='bx bxs-user-plus' ></i> Add New Exams</a></h4>
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                        
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Exam Title
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Class
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Exam Center
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                           Start Date
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            End Date
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            examID
                           </th>

                           
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Time Table
                         
                           </th>

                          <th  style='background: rgb(255, 68, 0);color:white'>
                           Add exam papers
                        
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                           Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($exams as $value)
                        <tr class="table-dangr">
                      
                          <td style='background: rgb(250, 249, 249);color:rgb(19, 18, 18)'>
                            {{$value->examTitle}}
                          </td>
                          <td style='background: rgb(252, 251, 251);color:rgb(19, 18, 18)'>
                            {{$value->class}}
                          </td>
                          <td style='background: rgb(244, 244, 244);color:rgb(19, 18, 18)'>
                            {{$value->examCenter}}
                          </td>
                          <td style='background: rgb(252, 249, 249);color:rgb(19, 18, 18)'>
                            {{$value->startDate}}
                          </td>
                          <td style='background: rgb(250, 249, 249);color:rgb(19, 18, 18)'>
                            {{$value->endDate}}
                          </td>

                          <td style='background: rgb(248, 246, 246);color:rgb(19, 18, 18)'>
                            {{$value->examinationNumber}}
                          </td>

                          <td>
                            <button style='color:white;background:rgb(249, 73, 4)' data-bs-toggle="modal" data-bs-target="#exampleModal" class="ViewTimeTable btn btn-sm btn-pimary"><a style="text-decoration: none;color:white;background:" >View</a></button>
                          </td>

                           <td>
                            <button style="color:white;background:rgb(9, 9, 9)"  class="btn btn-sm bt-primary"><a href="/examinations/add-exam-paper/{{$value->examinationNumber}}" style="text-decoration: none;color:white;">Add papers</a></button>
                           </td>
                        
                          <td>
                            <span class="badge rounded-pill text-bg-sucess"style='background:rgb(4, 247, 25);'><strong>Active</strong></span>
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
  <!-- container-scroller -->
  <!-- plugins:js -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"style='background:rgba(225, 213, 213, 0.829);border-radius:20px;'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="font-weight: 900px;background:rgb(255, 68, 0);color:white;padding:20px;border-radius:10px;width:16rem;margin:0 0 0 18px" class="modal-title fs-5" id="exampleModalLabel"><strong>Exam Times Table</strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="" style="display: block;margin:0 auto;">
          <div  class="alert alert-primry" >
            <h5 style="text-align: center;color:white;font-weight: 900px;background:black;padding:20px;margin:0 0 30px 0;border-radius:10px;"><strong style="background: back;coloe:white"><span id="examTitleyy"></span> (<span id="examDate"></strong>)</h5>
          </div>
          <p style="text-align: center;color:black;font-weight: 900px;">Class: <span id="Class"></span></p>
          <button style="display: block;margin:0 auto;background:rgb(255, 68, 0);color:white" onclick="window.print()" type="button" class="btn btn-sm btn-sucess"><strong>Print Times Table</strong></button>
        </div>
        <br>
          <div class="school_area">
            <h4 style="text-align: center;" id="school_name"><strong>{{$data->School}}</strong></h4>
            <p style="text-align: center;" id="email"><strong>Email: {{$data->Email}}</strong></p>
            <p style="text-align: center;" id="telephone">Tel: {{$data->Telephone}}</p>

          </div>

        <br>
         <div class="print_area">
          <div class="table-responsive pt-6">
            <table id="example" class="table table-sm table-striped table-bordered">
              <thead style="background-color: aliceblue;">
                <tr>
               
                  <th style='background: rgb(255, 68, 0);color:white'>
                    Exam Title
                  </th>
                  <th style='background: rgb(255, 68, 0);color:white'>
                    Paper Code
                  </th>
                  <th style='background: rgb(255, 68, 0);color:white'>
                    Date
                  </th>
                
                  <th style='background: rgb(255, 68, 0);color:white'>
                   Timing
                  </th>
                 
                  <th style='background: rgb(255, 68, 0);color:white'>
                    Center
                   </th>
                 
                </tr>
              </thead>
              <tbody id="timeTableView">
               
              </tbody>
            </table>
          </div>
         </div>

      </div>
     
    </div>
  </div>
</div>

<script>

  const tableClass = document.getElementsByClassName('ViewTimeTable')
  const timeTableView = document.getElementById('timeTableView')


  for (let i = 0; i < tableClass.length; i++) {
  tableClass[i].addEventListener('click', function (e) {
    let examinationNumber = $(this).closest('tr').find('td:eq(5)').text()
   
    document.getElementById('timeTableView').innerHTML  = ''
    $.ajax({
      type: 'POST',
      url: '/examinations/veiwtimetable',
      ContentType: 'application/json',
      data: {examinationNumber:examinationNumber},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
  
        let payload = data
       
        let exam = data.exam
        let subjects = data.subjects
        console.log(exam)

        document.getElementById('examTitleyy').textContent = exam.examTitle;
        document.getElementById('examDate').textContent = exam.startDate+' '+'-'+' '+exam.endDate;
        document.getElementById('Class').textContent = exam.class;
          
           for(var x = 0; x < subjects.length; x++){
               let TRows = timeTableView.insertRow(x)
               let Cell0 = TRows.insertCell(0)
               let Cell1 = TRows.insertCell(1)
               let Cell2 = TRows.insertCell(2)
               let Cell3 = TRows.insertCell(3) 
               let Cell4 = TRows.insertCell(4) 

               Cell0.innerHTML = subjects[x].subjectName
               Cell1.innerHTML = subjects[x].paperCode
               Cell2.innerHTML = subjects[x].paperDate
               Cell3.innerHTML = subjects[x].startTime+' '+'-'+' '+subjects[x].endTime
               Cell4.innerHTML = subjects[x].roomNumber
           }
      },

      error: function(error){
        console.log(error)
      }
    });
  
  });
}




</script>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
