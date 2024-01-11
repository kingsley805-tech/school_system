@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Administration</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>Create student login</strong></li>
  </ol>
 </nav>
          <div class="row">
          
          
           
           
            
            <div class="col-12 grid-margin"  style="overflow: scroll">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Create Student Login</strong> 
                    <p style="position: absolute;right:31px">
                    <strong><i class='bx bxs-user-rectangle' ></i> 
                      <a style="color:black;text-decoration:none;text-transform: capitalize;" href="books.html">Administration</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('/create/login/post')}}" method="POST">
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
  <div class="card-header" style="background-color:#F3732F;">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Create Login For Student</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
      <div class="row">
      <div class="mb-2 col-12 col-md-6">
        <label class="form-label" for="fname"> <span class="text-danger">*</span> <strong>Student Name</strong></label>
        <input type="text" id="Name" name="Name" class="form-control" placeholder="Name" value="{{$Student->FirstName}} {{$Student->LastName}}" required readonly>
      </div>
      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="lname"><strong></strong>StudentID</label>
        <input type="text" id="IndexNumber" name="IndexNumber" class="form-control" placeholder="IndexNumber" value="{{$Student->IndexNumber}}" required readonly>
      </div>


      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span>UserName</strong></label>
        <input type="text" id="userName" name="userName" class="form-control" placeholder="User Name" required>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Role</strong></label>
        <input type="text" id="role" name="role" class="form-control" placeholder="" value="student" required readonly>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="address1"><span class="text-danger">*</span> <strong>Password</strong></label>
        <input type="text" id="password" name="password" class="form-control" placeholder="password" required>
      </div>
    
    
    </div>
 
</div>


<div class="row justify-content-between">
  <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button></div>
  <div class="col-auto">
    
    <button type="submit" class="btn btn-primary" ><b><i class='bx bx-save' ></i>Create</b></button>
  </div>
</div>

</div>
  </div>
</div>

        </div>
        
      </div>
    </div>
  </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
</html>
