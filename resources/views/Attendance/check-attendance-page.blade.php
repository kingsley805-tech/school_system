@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Attendance</strong></li>
            <li style="position: absolute;right:20px;margin-top:-10px "><button class="btn btn-sm "> <b><a href="/attendance/take/page"style="width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: 0 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;padding:0 0 0 0"><i class='bx bxs-user-plus' ></i>Take Attendance</a></b></button></li>
        
          </ol>
        </nav>


        <div class="content-wrapper">
          <div>
            @if (Session::has('success'))
            <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif
  
            @if (Session::has('fail'))
                <span style="background-color: rgb(226, 42, 42); color:black">{{Session::get('fail')}}</span>
            @endif
  
            @csrf
      <br>
      <br>
        

          <div class="tab-content py-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="step1">
            
              <h2>Check Attendance</h2>
           
              <div class="row g-3 "style='margin:auto 0'>
                <div class="col-12">
                  <label for="class"><b>Class:</b></label>
                  <select style="border: 1px solid rgb(255, 72, 0);border-radius:7px;color:black;font-weight:900"  id="ClassID" name="classID" class="form-control" aria-label="Default select example" required>
                    <option value="">Select Class</option>
                    @foreach($class as $value)
                    <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
                   @endforeach
                  </select>
                </div>

           </div> 

               
              
            </div>
          
           
          </div>
           <!--Button for the next page -->
          <div class="row justify-content-between">
            <div class="col-auto bg-gray-800"><button type="button" class="text-white " data-enchanter="previous"style="background:black;border-radius:7px;color:black;font-weight:900;width:8rem;height:3rem">Previous</button></div>
            <div class="col-auto">
              
              <button style="background:rgb(255, 72, 0);border-radius:7px;color:rgb(247, 242, 242);font-weight:900;width:10rem;height:3rem" type="button" class="" id="AttendanceBtn"><b><i class='bx bx-save' ></i>Check Attendance</b></button>
            </div>
          </div>
        </div>
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
   <script>

   document.getElementById('AttendanceBtn').addEventListener('click', function(e){
        e.preventDefault()
        const id = document.getElementById('ClassID').value
        if(id === ''){
            alert('Select class')
        }else{
            window.location.href = `/attendance/check/list/${id}`
        }
    })
    
   </script>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

