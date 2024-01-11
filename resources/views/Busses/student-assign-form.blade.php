@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>School Transport</strong></li>
  </ol>
 </nav>
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
          
          
           
           
            
            <div class="col-12 grid-margin"  style="overflow: scroll">
              <div class="card">
                <div class="card-body">
                
                    <p style="position: absolute;right:31px">
                    <strong><i class='bx bxs-user-rectngle' ></i> 
                      <a  style="max-width: 300px; position: relative;Z-index:10px; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(7, 7, 7); padding: 14px; margin: 0 0 0 0;width:190px; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;"href='/transport/routes/lists'><i class='bx bxs-user-plus' ></i>Transport List</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('/route/post')}}" method="POST">
                    @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                    @endif
              
                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif
              
                    @csrf
                    <!-- Card -->
 <div class="card mb-4"style='margin:50px 0 0 0'>
  <!-- Card Header -->
  <div class="card-header" style="background-color:#F3732F;">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>ADD NEW ROUTE</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">
        <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="class">
              <span class="text-danger">*</span> <strong>Select Class</strong>
            </label>
            <select class="form-control" aria-label="Default select example" id="class" style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900">
                <option selected>Select Class</option>
                @foreach($classes as $class)
                <option value="{{$class->id}}">{{$class->name}}</option>
                @endforeach
              </select>
          </div>


          <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select Student</strong>
            </label>
            <select id="student" name="student" class="form-control"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
              
                <option selected>Select Student</option>
              <!-- Add more <option> elements as needed -->
            </select>
          </div>

        
          
        <div class="mb-3 col-12 col-md-4">
            <label class="form-label" for="lname"><strong>Date</strong></label>
            <input type="date" id="assignDate" name="assignDate" class="form-control" placeholder="assignDate"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
        </div>


        <div class="mb-3 col-12 col-md-12">
            <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Fare</strong></label>
            <input type="text" id="routeID" name="routeID" value="{{$routeID}}" class="form-control" placeholder="routeID" style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required readonly>
        </div>

    
    </div>
  

    <div class="row justify-content-between">
      <div class="col-auto"><a href="/transport/routes/assign-student"><button type="button" class="btn btn-secondary" data-enchanter="previous" style="border: 1px solid rgb(255, 72, 0);background:#e65608">Previous</button></a></div>
      <div class="col-auto">
        
        <button type="submit" class="btn btn-primary"style="border: 1px solid black;background:black" ><b><i class='bx bx-save' ></i>ADD BUS</b></button>
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


  <script>
    const student = document.getElementById('student')
     
    document.getElementById('class').addEventListener('input', function(e){
      e.preventDefault()
      let id = (e.target.value).trim()
      
      $.ajax({
      type: 'POST',
      url: '/library/fetch-classlist',
      ContentType: 'application/json',
      data: {class:id},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         console.log(data)
         for (let i = 0; i < data.length; i++) {
            const LastName = data[i].LastName;
            const FirstName = data[i].FirstName;
            const name = `${FirstName} ${LastName}`
            const IndexNumber = data[i].IndexNumber;

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


    

 </script>

  @endsection

 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


  
</html>
