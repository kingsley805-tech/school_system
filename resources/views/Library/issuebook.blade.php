@extends('layouts.admin')
@section('content')
   <style>
    /* Style the select elements */
        .form-select {
        width: 200px; /* Adjust the width as needed */
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 20px; /* Add some spacing between selects */
        }

        /* Style the card title */
        .card-title {
        font-size: 18px;
        margin-bottom: 10px;
        }

        /* Align select elements in line */
        .select-container {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
        }

   </style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card alert-primary" style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;margin:5px 0 8px 0">
            <div class="card-body" >
              <span><strong style="color:rgb(248, 128, 7)"> <i style="font-size: 27px;" class='bx bx-book-reader menu-icon'></i> Book Details</strong><br><br><span><strong  style="color:rgb(248, 128, 7)">Book Title</strong>:{{$book->title}}</span><span style="margin-left: 10px;"><strong  style="color:rgb(248, 128, 7)">Book Author</strong>:{{$book->author}}</span><span style="margin-left: 10px;"><strong  style="color:rgb(248, 128, 7)">Subject:</strong>{{$book->subject}}</span><span style="margin-left: 10px;"><strong  style="color:rgb(248, 128, 7)">Rack Number:</strong> {{$book->rackNumber}}</span>
              <span style="margin-left: 10px;"><strong  style="color:rgb(248, 128, 7)">Isbn Number:</strong> <span id="examinationNumber">{{$book->isbnNumber}}</span> </span>
              
            </div>
          </div>
          <div class="row" style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7);">
          <div class="col-lg-12 stretch-card">
         
              <div class="card">
                
                <br>
                <div class="card-body">
                    <div class="select-container">
                        
                        <select class="form-select" aria-label="Default select example" id="class" style="border:rgb(248, 128, 7)">
                          <option selected>Select Class</option>
                          @foreach($classes as $class)
                          <option value="{{$class->id}}">{{$class->name}}</option>
                          @endforeach
                        </select>
                      
                     
                        <select class="form-select" aria-label="Default select example" id="student"style="border:rgb(248, 128, 7)">
                          <option selected>select Student</option>
                        </select>
                      </div>

                <div>
                  @if (Session::has('success'))
                  <span style="background-color: rgb(255, 123, 0); color:black">{{Session::get('success')}}</span>
                  @endif
        
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                  @endif
        
                  @csrf
                  
                  <div class="content-wrapper">
                  
                 
                    <div class="tab-content py-4" id="nav-tabContent" >
                      <div class="tab-pane fade show active" id="step1">
                      
                        <h5 style="color:rgb(248, 128, 7)">Issue Book</h5>
                        
                        <div class="row g-3">
                          <div class="col-4">
                            <label for="examcenter" ><b>Quantity</b></label>
                            <input style="border: 1px solid rgb(255, 106, 0); color:black;font-weight:900" type="number" class="form-control" id="quantity" name="quantity" value="1" required readonly>
                          </div>
                          <div class="col-4">
                            <label for="center" class="visually"><b>Date Issued:</b></label>
                            <input type="date" style="border: 1px solid rgb(255, 106, 0);color:black;font-weight:900" class="form-control" id="dateIssued" name="dateIssued">
                          </div>
                          <div class="col-4">
                            <label for="inputPassword2" class="visually-hidde"><b>Return Date</b></label>
                            <input style="border: 1px solid rgb(255, 106, 0);;color:black;font-weight:900;margin: 0 0 0;"  type="date" class="form-control" id="returnDate" name="returnDate" placeholder="" >
                          </div>

                          <div class="col-4" style="display: none">
                            <label for="inputPassword2" class="visually-hidden"><b>BookID</b></label>
                            <input style="border: 1px solid rgb(255, 106, 0);;color:black;font-weight:900"  type="text" class="form-control" id="id" name="id" value="{{$book->id}}" readonly>
                          </div>
                         
                        </div>
                      </div>
                      
                     
                    </div>
                     <!--Button for the next page -->
                    <div class="row justify-content-between">
                      <div class="col-auto"style='background:rgb('><a href="/library/books/new-issuance"><button type="button" class="btn btn-secondary" data-enchanter="previous"style='background:black;'>Previous</button></a></div>
                      <div class="col-auto">
                        
                        <button id="IssueBookButton" class="btn btn-primary"style='background:rgb(255, 106, 0);border:rgb(255, 106, 0)' ><b>Issue Book</b></button>
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
  <!-- container-scroller -->
  <!-- plugins:js -->


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


    document.getElementById('IssueBookButton').addEventListener('click', function(e){
        alert('click')
        e.preventDefault()
        let classID = (document.getElementById('class').value).trim()
        let IndexNumber = (document.getElementById('student').value).trim()
        let quantity = (document.getElementById('quantity').value).trim()
        let dateIssued = (document.getElementById('dateIssued').value).trim()
        let returnDate = (document.getElementById('returnDate').value).trim()
        let id = (document.getElementById('id').value).trim()

        let Data = {classID, IndexNumber, quantity, dateIssued, returnDate, id, bookID:id}

        if(classID === '' || IndexNumber === '' || dateIssued === '' || returnDate === ''){
          alert('Please select all required field')
        }else{
          $.ajax({
        type: 'POST',
        url: '/library/book/issue/post',
        ContentType: 'application/json',
        data: Data,

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         console.log(data)
          alert(data.message)
          if(data.success === true){
            window.location.reload()
          }
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
