@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem">Enter Assessment for Student <a href="/examinations/create-assessment/page" style="position: absolute;right:20px;text-decoration:none;background:rgb(250, 81, 3);color:white;padding:20px;border-radius:10px;width:22rem;font-weigth:30px;margin:-20px 30px 0 0"><i class='bx bxs-user-plus' >Assessment Creation</i> </a></h4>

                  <div class="row g-3">
                    <div class="col-6">
                       <label for="examcenter" ><b>Select Class</b></label>
                       <select id="class" name="class" class="form-control"style='border:1px solid rgb(255, 68, 0);' required>
                           <option value="">Select a Class</option>
                           @foreach($classes as $class)
                           <option value="{{$class->id}}">{{$class->name}}</option>
                           @endforeach
                           <!-- Add more <option> elements as needed -->
                         </select>
                     </div>

                     <div class="col-6">
                        <label for="examcenter" ><b>Select Student</b></label>
                        <select id="student" name="IndexNumber" class="form-control"style='border:1px solid rgb(255, 68, 0);' required>
                            <option value="">Select Student</option>
        
                          </select>
                      </div>
                  </div>

                  <br>
                  <br>

                 
                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                        
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Name
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Student ID
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Examination
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Session
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Year
                          </th>
                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Class
                           </th>

                           <th style="display: none">
                            Assessment ID
                           </th>

                           <th style="display: none">
                            Assessment ID
                           </th>


                          <th  style='background: rgb(255, 68, 0);color:white'>
                            Action
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

  const timeTableView = document.getElementById('timeTableView')
  const student = document.getElementById('student')
     
    document.getElementById('class').addEventListener('input', function(e){
      e.preventDefault()
      let classID = (e.target.value).trim()
      
     // student.innerHTML = ''
      $.ajax({
      type: 'POST',
      url: '/examinations/assessment/fetchStudentByClass',
      ContentType: 'application/json',
      data: {classID: classID},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         //console.log(data)
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
        
      },
      
       error: function(error){
        console.log(error)
       }
      });
    })


    document.getElementById('student').addEventListener('input', function(e){
        e.preventDefault()
        const IndexNumber = (e.target.value).trim()
        document.getElementById('timeTableView').innerHTML  = ''
        $.ajax({
        type: 'POST',
        url: '/examinations/assessment/student/fetch',
        ContentType: 'application/json',
        data: {IndexNumber:IndexNumber},

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            alert(4)
            console.log(data)
            const subjects = data.assessments
            for(var x = 0; x < subjects.length; x++){
                let TRows = timeTableView.insertRow(x)
                let Cell0 = TRows.insertCell(0)
                let Cell1 = TRows.insertCell(1)
                let Cell2 = TRows.insertCell(2)
                let Cell3 = TRows.insertCell(3) 
                let Cell4 = TRows.insertCell(4) 
                let Cell5 = TRows.insertCell(5) 
                let cell6 = TRows.insertCell(6) 
                let cell7 = TRows.insertCell(7) 
                let cell8 = TRows.insertCell(8) 

                Cell0.innerHTML = subjects[x].Name
                Cell1.innerHTML = subjects[x].IndexNumber
                Cell2.innerHTML = subjects[x].examTitle
                Cell3.innerHTML = subjects[x].session
                Cell4.innerHTML = subjects[x].year
                Cell5.innerHTML = subjects[x].class
                cell6.innerHTML = subjects[x].assesmentNumber
                cell7.innerHTML = subjects[x].examinationNumber

                cell6.style.display = 'none'
                cell7.style.display = 'none'
                  // Creating a button element
                const button = document.createElement('button');
                
                // Adding text to the button
                button.textContent = 'Enter';
                
                // Applying styles to the button
                button.style.backgroundColor = 'orange';
                button.style.color = 'white';
                button.style.padding = '10px 20px';
                button.style.border = 'none';
                button.style.borderRadius = '5px';
                button.style.cursor = 'pointer';

                cell8.appendChild(button)

                button.onclick = function(){
                    let assesmentNumber = $(this).closest('tr').find('td:eq(6)').text();
                    let examinationNumber = $(this).closest('tr').find('td:eq(7)').text()
                     window.location = `/examinations/enter-assessment/enter-assesment/${examinationNumber}/${assesmentNumber}`
                }
            }
        },

        error: function(error){
            console.log(error)
        }
        });
    })



//   for (let i = 0; i < tableClass.length; i++) {
//   tableClass[i].addEventListener('click', function (e) {
//     let examinationNumber = $(this).closest('tr').find('td:eq(5)').text()
   
//     document.getElementById('timeTableView').innerHTML  = ''
//     $.ajax({
//       type: 'POST',
//       url: '/examinations/veiwtimetable',
//       ContentType: 'application/json',
//       data: {examinationNumber:examinationNumber},

//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//       success: function(data) {
  
//         let payload = data
       
//         let exam = data.exam
//         let subjects = data.subjects
//         console.log(exam)

//         document.getElementById('examTitleyy').textContent = exam.examTitle;
//         document.getElementById('examDate').textContent = exam.startDate+' '+'-'+' '+exam.endDate;
//         document.getElementById('Class').textContent = exam.class;
          
//            for(var x = 0; x < subjects.length; x++){
//                let TRows = timeTableView.insertRow(x)
//                let Cell0 = TRows.insertCell(0)
//                let Cell1 = TRows.insertCell(1)
//                let Cell2 = TRows.insertCell(2)
//                let Cell3 = TRows.insertCell(3) 
//                let Cell4 = TRows.insertCell(4) 

//                Cell0.innerHTML = subjects[x].subjectName
//                Cell1.innerHTML = subjects[x].paperCode
//                Cell2.innerHTML = subjects[x].paperDate
//                Cell3.innerHTML = subjects[x].startTime+' '+'-'+' '+subjects[x].endTime
//                Cell4.innerHTML = subjects[x].roomNumber
//            }
//       },

//       error: function(error){
//         console.log(error)
//       }
//     });
  
//   });
// }




</script>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
