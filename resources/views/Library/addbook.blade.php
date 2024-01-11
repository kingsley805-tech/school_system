@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>School Library</strong></li>
  </ol>
 </nav>
          <div class="row">
          
          
           
           
            
            <div class="col-12 grid-margin"  style="border-radius: 10px; box-shadow: 3px 3px 3px #888888;background: rgb(255, 73, 1)">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i><a href="/library/add-books"></a> <strong>ADDD NEW BOOK</strong> 
                    <p style="position: absolute;right:31px">
                    <strong style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem"><i class='bx bxs-user-rectangle' ></i> 
                      <a style="color:#f5f3f3;text-decoration:none;text-transform: capitalize; " href="/library/books">Book List</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('post-book')}}" method="POST">
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
  <div class="card-header"  style="background-color:rgb(237, 105, 57);color:white">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>ADD NEW BOOK</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">
      <div class="mb-2 col-12 col-md-6">
        <label class="form-label" for="fname"> <span class="text-danger">*</span> <strong>Title</strong></label>
        <input style="border: 1px solid rgb(255, 73, 1);border-radius:8px"  type="text" id="title" name="Title" class="form-control" placeholder="Book Title" required>
      </div>
      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="lname"><strong>Author</strong></label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="text" id="author" name="author" class="form-control" placeholder="Book Author" required>
      </div>
      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span> Subject</strong></label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="text" id="book_subject" name="subject" class="form-control" placeholder="Subject" required>
      </div>

      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="address1"><span class="text-danger">*</span> <strong>Price</strong></label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="number" id="price" name="price" class="form-control" placeholder="Price" required>
      </div>
      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="address2">Quanitity</label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="number" id="quantity" name="quantity" class="form-control" placeholder="Quanitity" required>
      </div>
      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="address2">Rack Number</label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="text" id="rack_number" name="rackNumber" class="form-control" placeholder="Rack Number" required>
      </div>
      <div class="mb-3 col-12 col-md-3">
        <label class="form-label" for="address2"><strong>ISBN Number</strong></label>
        <input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" type="text" id="isbn_number" name="isbnNumber" class="form-control" placeholder="ISBN Number" required>
      </div>
       
     <div class="mb-3 mb-4  col-12 col-md-12">
      <label for="siteName" class="form-label">Book Description

</label>
<input style="border: 1px solid rgb(255, 72, 0);border-radius:8px" class="form-control" id="description" name="description" placeholder="Extra Note" type="text" required="">

</div>
    </div>
  
 


<div class="row justify-content-between">
  <div class="col-auto"><a href="/library/books"><button type="button" class="btn btn-secndary"style='background:black;color:white' data-enchanter="previous">Previous</button></a></div>
  <div class="col-auto">
    
    <button style="background:rgb(255, 72, 0);border-radius:8px;border:1px solid #dd8553" type="submit" class="btn btn-primary" ><b><i class='bx bx-save' ></i> Add Exam</b></button>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 style="font-size: small;" class="modal-title fs-5" id="exampleModalLabel">Import Students From CSV File</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <small><strong>Select class and section, click "Import Sample CSV", fill student details in the file, choose the CSV file with student details and click "Bulk Import".</strong></small>
             <br>
             <br>
 <div class="card " style="border: none;">
  <!-- Card Header -->
  <div class="card-header" style="border: none;background-color:#dd8553;">
    <h6 style="color: white;" class="mb-0"><i style="color: white;" class='bx bx-up-arrow-alt'></i> <strong>Class:</strong></h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    <div>
      <select style=" border: 1px gray solid;"   class="selectpicker form-control" data-width="100%">
        <option value="">Select</option>
        <option value="English">CLASS ONE</option>
        <option value="German">CLASS TWO</option>
        <option value="Spanish">CLASS THREE</option>
        <option value="Hindi">CLASS FOUR</option>
      </select>
      
     
    </div>
  </div>
</div>

<div class="card " style="border: none;">
  <!-- Card Header -->
  <div class="card-header" style="border: none;background-color:#dd8553;">
    <h6 style="color: white;" class="mb-0"><i style="color: white;" class='bx bx-up-arrow-alt'></i> <strong>Session:</strong></h6>
  </div>
  <!-- Card Body -->
  <div class="card-body" style="border: none;">
    <div>
      <select style=" border: 1px gray solid;"   class="selectpicker form-control" data-width="100%">
        <option value="">Select</option>
        <option value="English">English</option>
        <option value="German">German</option>
        <option value="Spanish">Spanish</option>
        <option value="Hindi">Hindi</option>
      </select>
     
     
    </div>
  </div>
  <div class="mb-3">
        
    <div class="input-group mb-1">
  <input type="file" class="form-control" id="inputfavicon">
  
      </div>
</div>
</div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-sm btn-outline-primary"><i style="font-size: 10px;" class='bx bx-import' ></i> import</button>
        </div>
      </div>
    </div>
  </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
</html>
