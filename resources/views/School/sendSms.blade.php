@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" style="background:rgb(237, 105, 57);padding:10px;border-radius:20px;color:white; ">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>Send Sms Page</strong></li>
  </ol>
 </nav>
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7);height:76vh">
            <div class="col-12 grid-margin" >
              <div class="card">
                <div class="card-body">
                 

                  <div class="form-sample" action="{{route('/transport/addbus')}}" method="POST">
                    @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                    @endif
              
                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif
              
                    @csrf
                    <!-- Card -->
 <div class="card mb-4">
  <!-- Card Header -->
  <div class="card-header" style="background-color:rgb(237, 105, 57);">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Send SMS To Parents</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">
        <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select Class</strong>
            </label>
            <select id="class" name="class" class="form-select" style='border:1px solid  rgb(237, 105, 57);' required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select Class</option>
              @foreach($classes as $value)
              <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
             @endforeach
            </select>
          </div>
          
          <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select recipient</strong>
            </label>
            <select id="recipientTarget" name="recipientTarget" class="form-select" style='border:1px solid  rgb(237, 105, 57);' required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select recipient</option>
              <option value="Class">Whole Class</option>
              <option value="Individuals">Selected Individuals</option>
            </select>
          </div>

          <div class="mb-2 col-12 col-md-4" style="display:none" id="StudentDiv">
            <label class="form-label" for="Students">
              <span class="text-danger">*</span> <strong>Select Student</strong>
            </label>
            <select id="student" name="student" class="form-select" style='border:1px solid  rgb(237, 105, 57);' multiple required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select Student</option>

            </select>
          </div>

      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Message Body</strong></label>
        <textarea id="messageBody" name="messageBody" class="form-control" placeholder="type your message here" style='border:1px solid  rgb(237, 105, 57);' required></textarea>
      </div>
    
    </div>
  

<div class="row justify-content-between">
  <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous" style="background-color:black;border:1px sold black;color:white">Previous</button></div>
  <div class="col-auto">
    
    <button type="btn" class="btn btn-primary" style="background-color:rgb(237, 105, 57);color:white;border:rgb(237, 105, 57)" id="SendMessageBtn"><b><i class='bx bx-save' ></i>Send SMS</b></button>
  </div>
</div>

</div>
  </div>
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

  <script>
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
            const myparent_id  = data.students[i].myparent_id ;

            var option = document.createElement("option");
            option.text = name;
            option.value = myparent_id ;
            student.appendChild(option);
         }
        
      },
      
       error: function(error){
        console.log(error)
       }
      });
    })


    document.getElementById('recipientTarget').addEventListener('input', function(e){
        const value = e.target.value
        if(value === 'Individuals'){
            document.getElementById('StudentDiv').style.display = ''
        }else{
            document.getElementById('StudentDiv').style.display = 'none'   
        }
    })


    document.getElementById('SendMessageBtn').addEventListener('click', function(e){
        e.preventDefault()
        
        const recipientTarget = document.getElementById('recipientTarget').value;
        const selectElement = document.getElementById('student')
        const studentlist = []
        const messageBody = document.getElementById('messageBody').value
        const className = document.getElementById('class').value

          for (let i = 0; i < selectElement.options.length; i++) {
            const option = selectElement.options[i];
            if (option.selected) {
              studentlist.push(option.value);
          }
        } 

        let Data 
        if(recipientTarget === 'Individuals'){
         
          Data = {studentlist:studentlist, messageBody:messageBody}
          
              $.ajax({
              type: 'POST',
              url: '/school/send-sms-post',
              ContentType: 'application/json',
              data: Data,

              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              success: function(data) {
                console.log(data)
                alert('Message is arranged to be sent..')
              },
              
              error: function(error){
                console.log(error)
              }
              });
        }else{
          Data = {className:className, messageBody:messageBody};
          console.log(Data)
          
              $.ajax({
              type: 'POST',
              url: '/school/send-sms-class-post',
              ContentType: 'application/json',
              data: Data,

              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              success: function(data) {
                console.log(data)
                alert('Message is arranged to be sent..')
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
  
</html>
