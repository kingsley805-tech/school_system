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
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>EDIT NEW BUS</strong> 
                    <p style="position: absolute;right:31px">
                    <strong ><i class='bx bxs-user-rectangle' ></i> 
                      <a  href="">Transport List</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('/bus/edit/post')}}" method="POST">
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
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>ADD NEW BUS</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">
      <div class="mb-2 col-12 col-md-4">
        <label class="form-label" for="fname"> <span class="text-danger">*</span> <strong>Bus Number</strong></label>
        <input type="text" id="busNumber" name="busNumber" value="{{$bus->busNumber}}" class="form-control" placeholder="Bus Number"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required readonly>
      </div>
      
      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="lname"><strong>Bus Model</strong></label>
        <input type="text" id="busModel" name="busModel" value="{{$bus->busModel}}" class="form-control" placeholder="Bus Model"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
      </div>
      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span> Driver Name</strong></label>
        <input type="text" id="driverName" name="driverName" value="{{$bus->driverName}}" class="form-control" placeholder="Driver Name"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span> Driver Number</strong></label>
        <input type="text" id="driverNumber" name="driverNumber" value="{{$bus->driverNumber}}" class="form-control" placeholder="Driver Number"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="address2">In Charge</label>
        <input type="text" id="inCharge" name="inCharge" value="{{$bus->inCharge}}"  class="form-control" placeholder="inCharge" style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
      </div>

      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="address2">Note </label>
        <input type="text" id="note" name="note" value="{{$bus->note}}" class="form-control" placeholder="note"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required>
      </div>

      <div class="mb-3 col-12 col-md-12" style="display: none">
        <label class="form-label" for="address2">Note </label>
        <input type="text" id="id" name="id" value="{{$bus->id}}" class="form-control" placeholder="note"  style="border: 1px solid rgb(255, 72, 0);color:black;font-weight:900" required readonly>
      </div>
    
    </div>
  

<div class="row justify-content-between">
  <div class="col-auto"><a href="/transport/bus/list"><button type="button" class="btn btn-secondary" data-enchanter="previous"style="background-color:black;color:white;border:1px solid black">Previous</button></a></div>
  <div class="col-auto">
    
    <button type="submit" class="btn btn-primary"style="background-color:rgb(237, 105, 57);color:white;border:1px solid rgb(237, 105, 57)" ><b><i class='bx bx-save' ></i>SAVE CHANGES</b></button>
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
