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
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> Promotional Page <span><a style="text-decoration: none;" href="">Class: {{$class}}</a></span>  <a href="/promotion/page " style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -10px 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;"><i class='bx bxs-user-plus' ></i>Promotion</a></h4>

                  
              <div class="row g-3 "style='margin:auto 0'>
                <div class="col-12">
                  <label for="class"><b>Promoted Class:</b></label>
                  <select style="border: 1px solid rgb(255, 72, 0);border-radius:7px;color:black;font-weight:900"  id="ClassID" name="classID" class="form-control" aria-label="Default select example" required>
                    <option value="">Select Class</option>
                    @foreach($classes as $value)
                    <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
                   @endforeach
                  </select>
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
                            Student ID
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white">
                            Status
                          </th>
                          <th style="background-color:rgb(237, 105, 57);color:white">
                             Action
                          </th>

                          <th style="background-color:rgb(237, 105, 57);color:white; display:none">
                            Action
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
                            Promoted
                          </td>
                         
                           <td>
                            <div class="btn-group">
                              <button class="btn btn-sm btn-danger MarkActionBtn"><a style="color:white ">Repeat</a></button>

                            </div>
                          </td>

                          <td style="display:none">
                            <div class="btn-group">
                              <button class="btn btn-sm btn-primary MarkActionAsAbsent"><a style="color:white ">Promote</a></button>

                            </div>
                          </td>

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
                    </table>

                    <div class="btn-group">
                        <button class="btn btn-sm btn" style="background: rgb(237, 105, 57)" id="SaveAttendanceBtn"><a style="color:white ">Save Promotion</a></button>
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
        $(this).closest('tr').find('td:eq(3)').text('Repeated');
    });
   });

   $(document).ready(function() {
    $('.MarkActionAsAbsent').click(function() {
        const presentDiv = $(this).closest('tr').find('td:eq(4)');
        const absentDiv = $(this).closest('tr').find('td:eq(5)');
        presentDiv.show(); // jQuery function to hide element
        absentDiv.hide(); // jQuery function to show element
        $(this).closest('tr').find('td:eq(3)').text('Promoted');

    });
   });


   document.getElementById('SaveAttendanceBtn').addEventListener('click', function(e){
    e.preventDefault();
    const dataArray = [];
    for(let i = 0; i < TableBodyDiv.rows.length; i++){
        const tableRow = TableBodyDiv.rows[i]
        const student = (tableRow.cells[0].innerText).trim()
        const IndexNumber = (tableRow.cells[1].innerText).trim()
        const valNumber = (tableRow.cells[3].innerText).trim()
    
        if(valNumber === 'Promoted'){
            const data = {student:student, IndexNumber:IndexNumber};
            dataArray.push(data)
        }
    }

 
    const classID = (document.getElementById('ClassID').value).trim()

    if(classID === ''){
        alert('Please fill out all required field')
    }else{
       if(dataArray.length === 0){
        alert('Student selected to be promoted cannot be zero')
       }else{
        const infoData = { classID:classID, dataArray:JSON.stringify(dataArray)};
        console.log(infoData)
            $.ajax({
            type: 'POST',
            url: '/promotion/make/post',
            ContentType: 'application/json',
            data: infoData,

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                alert('Students promoted successfully') ;
                console.log(data)
            },
            
            error: function(error){
                console.log(error)
            }
            });
       }
    }
   })


  </script>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
