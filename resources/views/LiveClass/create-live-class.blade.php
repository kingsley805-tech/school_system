@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" style="background:rgb(237, 105, 57);padding:10px;border-radius:20px;color:white; ">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>Live Classes</strong></li>
  </ol>
 </nav>
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7);height:76vh">
            <div class="col-12 grid-margin" >
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Schedule New Live Class</strong> 
                    <p style="position: absolute;right:31px">
                    <strong><i class='bx bxs-user-recangle' ></i> 
                      <a href="/liveclass/meeting/page" style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -30px 0 0 0;width:190px; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;"><i class='bx bxs-user-plus' ></i>Live Class</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('/live/class/create')}}" method="POST">
                    @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                    @endif
              
                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
              
                    @csrf
                    <!-- Card -->
 <div class="card mb-4">
  <!-- Card Header -->
  <div class="card-header" style="background-color:rgb(237, 105, 57);">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Live Classess</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">

        <div class="mb-2 col-12 col-md-6">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select Class</strong>
            </label>
            <select style="border: 1px solid rgb(255, 72, 0);border-radius:7px;color:black;font-weight:900"  id="ClassID" name="classID" class="form-control" aria-label="Default select example" required>
                <option value="">Select Class</option>
                @foreach($class as $value)
                <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
               @endforeach
              </select>
          </div>


        <div class="mb-2 col-12 col-md-6">
          <label class="form-label" for="busNumber">
            <span class="text-danger">*</span> <strong>Select the Meeting PlatForm</strong>
          </label>
          <select id="platform" name="platform" class="form-control" required style='border:1px solid  rgb(237, 105, 57);'>
            <option value="">Select Platform</option>
            <option value="Zoom">Zoom Meetings</option>
            <option value="Google">Google Meetings</option>
          </select>
        </div>
        
        <div class="mb-3 col-12 col-md-12">
            <label class="form-label" for="lname"><strong>Active Link</strong></label>
            <input type="text" id="meetingLink" name="meetingLink" class="form-control" placeholder="Meeting Link" style='border:1px solid  rgb(237, 105, 57);' required>
        </div>
      
      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="lname"><strong>Meeting Topic</strong></label>
        <input type="text" id="meetingTopic" name="meetingTopic" class="form-control" placeholder="Meeting Topic" style='border:1px solid  rgb(237, 105, 57);' required>
      </div>

   
      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger"></span>Meeting Code</strong></label>
        <input type="text" id="meetingCode" name="meetingCode" class="form-control" style='border:1px solid  rgb(237, 105, 57);'>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger"></span>Meeting Password</strong></label>
        <input type="text" id="meetingPassword" name="meetingPassword" class="form-control" style='border:1px solid  rgb(237, 105, 57);'>
      </div>


      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Select Date</strong></label>
        <input type="date" id="meetingDate" name="meetingDate" class="form-control" style='border:1px solid  rgb(237, 105, 57);' required>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Select Time</strong></label>
        <input type="time" id="meetingTime" name="meetingTime" class="form-control" style='border:1px solid  rgb(237, 105, 57);' required>
      </div>

    </div>
  

<div class="row justify-content-between">
  <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous" style="background-color:black;border:1px sold black;color:white">Previous</button></div>
  <div class="col-auto">
    
    <button type="submit" class="btn btn-primary" style="background-color:rgb(237, 105, 57);color:white;border:rgb(237, 105, 57)"><b><i class='bx bx-save' ></i>Add Live Meetings</b></button>
  </div>
</div>

</div>
  </div>
</div>

                  </form>
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


  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
</html>
