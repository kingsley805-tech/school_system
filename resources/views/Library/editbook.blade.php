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
          
          
           
           
            
            <div class="col-12 grid-margin"  style="overflow: scroll">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>EDIT NEW BOOK</strong> 
                    <p style="position: absolute;right:31px">
                    <strong><i class='bx bxs-user-rectangle' ></i> 
                      <a style="color:black;text-decoration:none;text-transform: capitalize;" href="/library/books">Book List</a></strong>
                  </p>
                  </h4>

                  <form class="form-sample" action="{{route('/book/edit/post')}}" method="POST">
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
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>EDIT BOOK</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
    
      <div class="row">
      <div class="mb-2 col-12 col-md-8">
        <label class="form-label" for="fname"> <span class="text-danger">*</span> <strong>Title</strong></label>
        <input type="text" id="title" name="Title" value="{{$book->title}}" value class="form-control" value='{{$book->title}}' required>
      </div>
      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="lname"><strong>Author</strong></label>
        <input type="text" id="author" name="author" value="{{$book->author}}" class="form-control" value="{{$book->author}}" placeholder="Book Author" required>
      </div>
      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="phone"><strong><span class="text-danger">*</span> Subject</strong></label>
        <input type="text" id="book_subject" name="subject" value="{{$book->subject}}" class="form-control" placeholder="Subject" required>
      </div>

      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="address1"><span class="text-danger">*</span> <strong>Price</strong></label>
        <input type="number" id="price" name="price"  value="{{$book->price}}" class="form-control" placeholder="Price" required>
      </div>
      <div class="mb-3 col-12 col-md-4">
        <label class="form-label" for="address2">Quanitity</label>
        <input type="number" id="quantity" name="quantity" value="{{$book->quantity}}" class="form-control" placeholder="Quanitity" required>
      </div>
      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="address2">Rack Number</label>
        <input type="text" id="rack_number" name="rackNumber"  value="{{$book->rackNumber}}" class="form-control" placeholder="Rack Number" required>
      </div>

      <div class="mb-3 col-12 col-md-6">
        <label class="form-label" for="address2"><strong>ISBN Number</strong></label>
        <input type="text" id="isbn_number" name="isbnNumber" class="form-control" value="{{$book->isbnNumber}}"  placeholder="ISBN Number" required>
      </div>

      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="address2"><strong>id</strong></label>
        <input type="text" id="id" name="id" class="form-control" value="{{$book->id}}"  placeholder="ISBN Number" required readonly>
      </div>
    </div>

    <div class="row justify-content-between">
      <div class="col-auto">
        
        <button type="submit" class="btn btn-primary" ><b><i class='bx bx-save' ></i>Save Changes</b></button>
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
      </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
