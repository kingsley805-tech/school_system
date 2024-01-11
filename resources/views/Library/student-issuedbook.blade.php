@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"style='background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem'>Library book management <a href="" style="position: absolute;right:20px;text-decoration:none;"><i class='bx bxs-user-plus' >Make Payment</i> </a></h4>
                  @if (Session::has('success'))
                  <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif
        
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                  @endif
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
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              student
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                             student ID
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              class
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Book Title
                            </th>
                         
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              author
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Date Issued
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                             Return Date
                            </th>
  
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Quanitity
                             </th>
  
                            <th style="background-color:rgb(237, 105, 57);color:white">
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
        url: '/library/issuebooks/student/list',
        ContentType: 'application/json',
        data: {IndexNumber:IndexNumber},

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
           alert(4)
           console.log(data)
            const subjects = data.issuedBooks
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
                let cell9 = TRows.insertCell(9) 
                let cell10 = TRows.insertCell(10) 

                Cell0.innerHTML = subjects[x].student
                Cell1.innerHTML = subjects[x].IndexNumber
                Cell2.innerHTML = subjects[x].class
                Cell3.innerHTML = subjects[x].title
                Cell4.innerHTML = subjects[x].author
                Cell5.innerHTML = subjects[x].dateIssued
                cell6.innerHTML = subjects[x].returnDate
                cell7.innerHTML = subjects[x].quantity
                cell8.innerHTML = subjects[x].bookID
                cell9.innerHTML = subjects[x].id

                cell8.style.display = 'none'
                cell9.style.display = 'none'
                  // Creating a button element
                const button = document.createElement('button');
                
                // Adding text to the button
                button.textContent = 'return';
                
                // Applying styles to the button
                button.style.backgroundColor = 'orange';
                button.style.color = 'white';
                button.style.padding = '10px 20px';
                button.style.border = 'none';
                button.style.borderRadius = '5px';
                button.style.cursor = 'pointer';

                cell10.appendChild(button)

                button.onclick = function(){
                    let bookID = $(this).closest('tr').find('td:eq(8)').text();
                    let id = $(this).closest('tr').find('td:eq(9)').text()
                   window.location = `/library/issuebook/return/${bookID}/${id}`
                }
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
