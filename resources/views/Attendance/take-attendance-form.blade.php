@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @if (Session::has('success'))
          <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif
    
          @if (Session::has('fail'))
              <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
          @endif
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> Attendance Sheet <span><a style="text-decoration: none;" href="">Class: {{$class}}</a></span>  <a href=" " style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -10px 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;"><i class='bx bxs-user-plus' ></i>Attendance</a></h4>

                  <div class="row g-3">
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="address2">Month</label>
                        <input type="month" id="Month" name="Month" class="form-control" placeholder="Month" style='border:1px solid  rgb(237, 105, 57);' required>
                      </div>

                      <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="address2">Date</label>
                        <input type="date" id="stringDate" name="stringDate" class="form-control" placeholder="stringDate" style='border:1px solid  rgb(237, 105, 57);' required>
                      </div>

                    <div class="col-6">
                       <label for="examcenter" ><b>Select Week Number</b></label>
                       <select id="Week" name="Week" class="form-control" required style='border:1px solid  rgb(237, 105, 57);'>
                           <option value="">Select Week Number</option>
                           <option value="Week 1">Week 1</option>
                           <option value="Week 2">Week 2</option>
                           <option value="Week 3">Week 3</option>

                           <option value="Week 4">Week 4</option>
                           <option value="Week 5">Week 5</option>
                           <option value="Week 6">Week 6</option>

                           <option value="Week 7">Week 7</option>
                           <option value="Week 8">Week 8</option>
                           <option value="Week 9">Week 9</option>

                           <option value="Week 10">Week 10</option>
                           <option value="Week 11">Week 11</option>
                           <option value="Week 12">Week 12</option>

                           <option value="Week 13">Week 13</option>
                           <option value="Week 14">Week 14</option>
                           <option value="Week 15">Week 15</option>

                           <option value="Week 16">Week 16</option>
                           <option value="Week 17">Week 17</option>
                           <option value="Week 18">Week 18</option>
                            
                         </select>
                     </div>

                     <div class="col-6">
                        <label for="examcenter" ><b>Select the day</b></label>
                        <select id="Day" name="Day" class="form-control" required style='border:1px solid  rgb(237, 105, 57);'>
                            <option value="">Select the day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                          </select>
                      </div>

                      <div style="display: none">
                          <p id="ClassID">{{$classID}}</p>
                      </div>
                  </div>

                
                  <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      <thead style="background-color: aliceblue;">
                        <tr>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                             Student Name
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Student ID
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Class
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Attendance Value
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                             Action
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white; display:none">
                            Action
                         </th>
                         <th style="background-color:rgb(237, 105, 57);color:white; display:none">
                            id
                         </th>
                       
                          
                        </tr>
                      </thead>
                      <tbody id="TableBodyDiv">
                        @foreach($students as $value)
                        <tr  class="alert alert-war[ning">
                        
                          <td>
                            {{$value->FirstName}}   {{$value->LastName}}
                          </td>
                          <td>
                            {{$value->IndexNumber}}
                          </td>
                          <td>
                            {{$class}}
                          </td>
                          <td>
                            1
                          </td>
                         
                           <td>
                            <div class="btn-group">
                              <button class="btn btn-sm btn-primary MarkActionBtn"><a style="color:white ">Present</a></button>

                            </div>
                          </td>

                          <td style="display:none">
                            <div class="btn-group">
                              <button class="btn btn-sm btn-danger MarkActionAsAbsent"><a style="color:white ">Absent</a></button>

                            </div>
                          </td>

                          <td style="display: none">
                           {{$classID}}
                          </td>
                        </tr>
                       
                        @endforeach
                       
                      </tbody>
                    </table>

                    <div class="btn-group">
                        <button class="btn btn-sm btn" style="background: rgb(237, 105, 57)" id="SaveAttendanceBtn"><a style="color:white ">Save Attendance</a></button>
                    </div>

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
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    const MarkActionBtn = document.getElementsByClassName('MarkActionBtn');

    const MarkActionAsAbsent = document.getElementsByClassName('MarkActionAsAbsent');

    const TableBodyDiv = document.getElementById('TableBodyDiv')

    $(document).ready(function() {
    $('.MarkActionBtn').click(function() {
        const presentDiv = $(this).closest('tr').find('td:eq(4)');
        const absentDiv = $(this).closest('tr').find('td:eq(5)');
        presentDiv.hide(); // jQuery function to hide element
        absentDiv.show(); // jQuery function to show element
        $(this).closest('tr').find('td:eq(3)').text('0');
    });
   });

   $(document).ready(function() {
    $('.MarkActionAsAbsent').click(function() {
        const presentDiv = $(this).closest('tr').find('td:eq(4)');
        const absentDiv = $(this).closest('tr').find('td:eq(5)');
        presentDiv.show(); // jQuery function to hide element
        absentDiv.hide(); // jQuery function to show element
        $(this).closest('tr').find('td:eq(3)').text('1');

    });
   });


   document.getElementById('SaveAttendanceBtn').addEventListener('click', function(e){
    e.preventDefault();
    const dataArray = [];
    for(let i = 0; i < TableBodyDiv.rows.length; i++){
        const tableRow = TableBodyDiv.rows[i]
        const student = (tableRow.cells[0].innerText).trim()
        const IndexNumber = (tableRow.cells[1].innerText).trim()
        const className = (tableRow.cells[2].innerText).trim()
        const valNumber = (tableRow.cells[3].innerText).trim()
        const classID = (tableRow.cells[6].innerText).trim()

        const data = {student:student, IndexNumber:IndexNumber, className:className, valNumber:valNumber, classID:classID};
        dataArray.push(data)
    }

    const Month = document.getElementById('Month').value;
    const stringDate = document.getElementById('stringDate').value
    const Week = document.getElementById('Week').value
    const Day = document.getElementById('Day').value
    const classID = (document.getElementById('ClassID').textContent).trim()

    if(Month === '' || stringDate === '' || Week === '' || Day === ''){
        alert('Please fill out all required field')
    }else{
        const infoData = {Month:Month, stringDate:stringDate, WeeK:Week, Day:Day, classID:classID, dataArray:JSON.stringify(dataArray)};
       // console.log(infoData)

            // student.innerHTML = ''
            $.ajax({
            type: 'POST',
            url: '/attendance/take/post',
            ContentType: 'application/json',
            data: infoData,

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                alert('returned') ;
                console.log(data)
            },
            
            error: function(error){
                console.log(error)
            }
            });
    }

    
   
   })


  </script>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
