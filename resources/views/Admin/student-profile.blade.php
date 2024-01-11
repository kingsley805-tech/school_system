<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="background:#fe6106;border-radius:17px">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body" style="background-color:#0d0d0d;height:50px;">
                  <h4 class="card-title" style="color:white"><strong>Students Profile </strong><a href="#" style="position: absolute;right:20px;text-decoration:none;color:aliceblue;margin-top:-20px;background:#fe6106;border-radius:20px;padding:8px"><i  data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 25px;" class='bx bxs-user-plus' ><b>EDIT STUDENT PROFILE</b></i></a></h4>
                
                
                </div>
                <!-- card -->
  <div class="card">
    <!-- Card Body -->
    <div class="card-body" style="background-color: white;">
       <div class="d-flex align-items-center" >
          <div class="position-relative">
             <img src="./images/user.png" width="75px" alt="" class="rounded-circle avatar-xl">
             <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verifed">
             
             </a>
          </div>
          <div class="ms-4">
             <h5 ><strong>{{$StudentInfo->FirstName}} {{$StudentInfo->LastName}}</strong> <i data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute;right:80px;font-size:25px" class='bx bx-edit' ></i> <i style="position: absolute;right:50px;font-size:25px" class='bx bxs-printer' ></i> <i data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="position: absolute;right:20px;font-size:25px" class='bx bx-trash' ></i></h5>
             <br>
             <p class="mb-1" style="font-size: 15px;"> <span style="font-size: 15px;color:#fe6106"> Admission No:</span><span  style="font-size: 15px;">{{$StudentInfo->IdentityNumber}}</span>  <span style="margin-left:30px;font-size:15px"><span style="font-size: 15px;color:#fe6106"> Date of birth: </span>{{$StudentInfo->DateOFBirth}}</span>   <span style="margin-left:30px;font-size:15px"><span style="font-size: 15px;color:#fe6106"> Home Address: </span>{{$StudentInfo->StudentAddress}}</span>  <span style="margin-left:30px;font-size:15px"> <span style="font-size: 15px;color:#fe6106">Email:</span>{{$StudentInfo->StudentEmail}}</span>
              <span style="margin-left:30px;font-size:15px"> <span style="font-size: 15px;color:#fe6106"> Gender:</span> {{$StudentInfo->Gender}}</span> <span style="position:absolute;right:20px"><span style="font-size: 15px;color:#fe6106;margin:0 -8px 0 0">  B.Group:</span> {{$StudentInfo->BloodGroup}}</span>
            </p>


            <hr style="color:gray; border: 1px gray solid">
             <span class=""  style="font-size: 15px;"> <span style="font-size: 15px;color:#fe6106"> Student tel:</span><span  style="font-size: 15px;">{{$StudentInfo->StudentNumber}}</span> <span style="margin-left:22px;font-size:15px"> <span style="font-size: 15px;color:#fe6106"> Roll number:</span>{{$StudentInfo->RollNumber}}</span></span> <span style="position:absolute;right:600px;"><span style="font-size: 15px;color:#fe6106"> Father's Phone:</span>{{$StudentInfo->FatherContact}}</span>  <span style="position:absolute;right:300px;"><span style="font-size: 15px;color:#fe6106"> Father's Name:</span>{{$StudentInfo->FatherName}}</span> <span style="position:absolute;right:170px;"><span style="font-size: 15px;color:#fe6106"> Type:</span>{{$StudentInfo->StudentType}}</span>  <span style="position:absolute;right:20px"><span style="font-size: 15px;color:#f56d05"> Status:</span> <span class="badge rounded-pill "style='background:#0ae515'>Active</span></span>  
          </div>
       </div>
      
       <br>
       <div class="flex space-x-5 ml-32">
       
       
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 mt-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
            </svg>
            
            </svg>
            
            
            
           </a>
  
             <div style="margin:20px 0 0 25px">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">CLASS</h5>
                 <span>{{$StudentInfo->Class}}</span>
             </div>
          </div>
            
         </div>
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 mt-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
            
            
            
            
           </a>
  
             <div style="margin:20px 0 0 25px">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">SESSION</h5>
                 
                 <span>{{$StudentInfo->Session}}</span>
             </div>
          </div>
            
         </div>
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 mt-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 0 1-2.031.352 5.988 5.988 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971Zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 0 1-2.031.352 5.989 5.989 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971Z" />
            </svg>
            
            
            
            
           </a>
  
             <div style="margin:20px 0 0 25px">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">FEE BALANCE</h5>
                 <span>GHS 250.00</span>
             </div>
          </div>
            
         </div>
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 mt-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            
            
            
            
           </a>
  
             <div style="margin:20px 0 0 25px">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">PAID FEE</h5>
                 
                 <span class="">GHS 349.00</span>
             </div>
          </div>
            
         </div>
        
        </div>
      
    </div>
 <br>
    <div class="col-xl-12 col-lg-12 col-md-12 col-12" style="margin-right:20px;">
      <div class="card" id="courseAccordion" style="border: none;margin-right:20px">
      <!-- List group -->
      <ul class="list-group list-group-flush">
      <li class="list-group-item p-0 bg-transparent" style="border: 1px solid gray;">
      <!-- Toggle -->
      <a style="background-color: white;" class="d-flex align-items-center text-inherit text-decoration-none py-3 px-4" data-bs-toggle="collapse" href="#courseTwo" role="button" aria-expanded="false" aria-controls="courseTwo">
      <div class="me-auto">
        <h6 class="mb-0" style="color:#1961c6;"><i style="font-size: 18px;" class='bx bxs-color'></i> <strong style="color:#fe6106;">Session Records</strong></h6>
       
      </div>
      <!-- Chevron -->
      <span class="chevron-arrow ms-4">
        <i class='bx bx-chevron-down fs-4' ></i>
    
      </span>
      </a>
      <!-- / .row -->
      <!-- Collapse -->
      <div class="collapse" id="courseTwo" data-bs-parent="#courseAccordion">
      <!-- List group -->
      <ul class="list-group list-group-flush">
        <li class="list-group-item " style="background:#fe6106;color:white">
           <span style="color: white;"><strong>Session: 2022:2023</strong> <i style="position: absolute;right:20px;font-size:25px"></i></span>
        </li>
        <li class="list-group-item" >
          <span>Student Number: {{$StudentInfo->IndexNumber}}</span>
       </li>
       
       <li class="list-group-item">
        <span>Student Identity: {{$StudentInfo->IdentityNumber}}</span>
     </li>
    
    
       
       
      
        
      </ul>
      </div>
      </li>
      
      
      <li class="list-group-item p-0" style="border: 1px solid gray;">
      <!-- Toggle -->
      <a class="d-flex align-items-center text-inherit text-decoration-none py-3 px-4" data-bs-toggle="collapse" href="#courseFour" role="button" aria-expanded="false" aria-controls="courseFour">
      <div class="me-auto">
        <!-- Title -->
        <h6  style="color:#1961c6;" class="mb-0"><i style="font-size:18px;" class='bx bx-money'></i> <strong  style="color:#fe6106;"> Fee Stucture</strong></h6>
       
      </div>
      <!-- Chevron -->
      <span class="chevron-arrow ms-4">
         <i class='bx bx-chevron-down fs-4' ></i>
      </span>
      </a>
      <!-- / .row -->
      <!-- Collapse -->
      <div class="collapse" id="courseFour" data-bs-parent="#courseAccordion">
      <!-- List group -->
    
      <br>
      <br>

      <ul class="list-group list-group-flush">
         
         <table class="table table-sm table-striped table-bordered">
            <thead class="bg-primary">
              <tr>
                <th scope="col-3"style="background:#fe6106;color: white;">Fee Type</th>
                <th scope="col-3"style="background:#fe6106;color: white;">Amount</th>
                <th scope="col-3"style="background:#fe6106;color: white;">Period</th>
               
              </tr>
            </thead>
            <tbody>
              @foreach ($fees as $fee)
              <tr>
                <td>{{$fee->feeType}}</td>
                <td>GHS {{$fee->amount}}</td>
                <td>{{$fee->period}}</td>
                
              </tr>
              @endforeach
           
            </tbody>
          </table>
       
   
      </ul>
      </div>
      </li>


      <li class="list-group-item p-0" style="border: 1px solid gray;">
        <!-- Toggle -->
        <a class="d-flex align-items-center text-inherit text-decoration-none py-3 px-4" data-bs-toggle="collapse" href="#Invoices" role="button" aria-expanded="false" aria-controls="courseFour">
        <div class="me-auto">
          <!-- Title -->
          <h6  style="color:#1961c6;" class="mb-0"><i style="font-size:18px;" class='bx bx-money'></i> <strong  style="color:#fe6106;"> Created Invoices</strong></h6>
         
        </div>
        <!-- Chevron -->
        <span class="chevron-arrow ms-4">
           <i class='bx bx-chevron-down fs-4' ></i>
        </span>
        </a>
        <!-- / .row -->
        <!-- Collapse -->
        <div class="collapse" id="Invoices" data-bs-parent="#courseAccordion">
        <!-- List group -->
       
        <br>
        <br>
  
        <ul class="list-group list-group-flush">
           
           <table class="table table-sm table-striped table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th scope="col-3"style="background:#fe6106;color:white">Description</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Amount</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Discount</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Payable</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Paid</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Left</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Date</th>

                  <th scope="col-3"style="background:#fe6106;color:white">Due Date</th>
                  <th scope="col-3"style="background:#fe6106;color:white">View</th>
                  <th scope="col-3"style="background:#fe6106;color:white">Pay</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($invoices as $invoice)
                <tr>
                  <td>{{$invoice->Description}}</td>
                  <td>GHS {{$invoice->TotalAmount}}</td>
                  <td>GHS {{$invoice->Discount}}</td>
                  <td>GHS {{$invoice->PayableAmount}}</td>
                  <td>GHS {{$invoice->AmountPaid}}</td>

                  <td>GHS {{$invoice->AmountLeft}}</td>
                  <td>{{$invoice->DateIssued}}</td>
                  <td>{{$invoice->DateDue}}</td>
                  
                  <td><button class="btn btn-sm "style="background:#fe6106;color:#0ae515;">
                    <a href="/account/invoice/show/{{$invoice->InvoiceNumber}}/{{$invoice->InvoiceID}}">View</a>
                 </button></td>
                 
                  <td>
                    <button class="btn btn-sm "style="background:black;color:white">Pay</button>
                  </td>

                 
                </tr>
                @endforeach
             
              </tbody>
            </table>
         
     
        </ul>
        </div>
        </li>
      
      </ul>
      </div>
      </div>
 </div>

 
              </div>
              
            </div>
          </div>
          
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
           <div class="modal-content" >
             <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student Information</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Card -->
 <div class="card mb-4">
   <!-- Card Header -->
   <div class="card-header" style="background-color: #fe6106;"> 
     <h5 style="color: white;">Personal Information</h5>
   </div>
   <!-- Card Body -->
   <div class="card-body">
     <!-- Form -->
     <form class="row">
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="fname">Full Name</label>
         <input style="border:1px solid #fe6106;"type="text" id="fname" class="form-control" placeholder="First Name" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="lname">Date of Birth</label>
         <input  style="border:1px solid #fe6106;" type="date" id="lname" class="form-control" placeholder="Last Name" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="phone">Phone Number</label>
         <input  style="border:1px solid #fe6106;"type="number" id="phone" class="form-control" placeholder="Phone" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="phone">Admission No.</label>
         <input style="border:1px solid #fe6106;" type="number" id="admission number" class="form-control" placeholder="admission number"  required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address1">Address</label>
         <input style="border:1px solid #fe6106;" type="text" id="address1" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">Email Address</label>
         <input  style="border:1px solid #fe6106;" type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">father's Name</label>
         <input  style="border:1px solid #fe6106;" type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">father's Phone</label>
         <input  style="border:1px solid #fe6106;" type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Status</label>
         <select  style="border:1px solid #fe6106;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Status</option>
           <option value="1">Active</option>
           <option value="2">Inative</option>
          
         </select>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Blood Type</label>
         <select style="border:1px solid #fe6106;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Blood Type</option>
           <option value="">O+</option>
           <option value="UK">AB</option>
           <option value="USA">AB-</option>
         </select>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Student  Type</label>
         <select style="border:1px solid #fe6106;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Type</option>
           <option value="">Regular</option>
           <option value="UK">AB</option>
           <option value="USA">AB-</option>
         </select>
       </div>
      
      
     </form>
   </div>
</div>
<span style="color: #2b2724;"><strong><span style='color:#fe6106'>Note</span>: Student Number and Admission Number for students cannot be edited.</strong></span>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-secondar" data-bs-dismiss="modal"style='background:black;color:white;border-radius:10px'>Close</button>
               <button type="button" class="btn btn-sm btn-prima"style='background:#fe6106;color:white;border-radius:10px'>Save changes</button>
             </div>
           </div>
         </div>
       </div>



       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header" style="background-color:rgb(223, 77, 77)">
               <h5 style="color: white;" class="modal-title" id="staticBackdropLabel">Delete Student</h5>
               <button type="button" style="color: aliceblue;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <!-- Card -->
 <div class="card mb-4 ">
   <!-- Card Header -->
   <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-0">Deleting alert</h4>
      
   </div>
   <!-- Card Body -->
   <div class="card-body">
  <img src="../assets/images/brand/paypal.svg" alt="" class="mb-2">
  <p class="mb-4">Enter student name to confirm the action.
  </p>
  <!-- Form -->
  <form>
     <div class="mb-3">
        <label for="paypalEmail" class="form-label"><strong>Student Name</strong>
        </label>
  <input class="form-control" id="paypalEmail" placeholder="student name" type="email" required="">
</div>

 </form>
</div>
</div>
<small><b>Note: This action is not reversable !</b></small>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-sm btn-danger">Delete Student</button>
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
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  @endsection
</body>

</html>
