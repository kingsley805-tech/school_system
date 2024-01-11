@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Examination</strong></li>
            
            
            
          </ol>
        </nav>
        @if (Session::has('success'))
        <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
      @endif

      @if (Session::has('fail'))
          <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
      @endif
      <div class="grid  gap-2 md:grid-cols-4 md:gap-4 m-auto ">
           
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href="/examinations/add-exams" class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
           </a>

             <a href="/examinations/manage-examination">
                 <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Manage Exams</h5>
             </a>
          </div>
            
             <a href="/examinations/manage-examination" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 manage Exams
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>



        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
           </a>
             <a href="/examinations/add-exams">
                 <h5 class=" text-xl font-bold tracking-tight mt-1 text-gray-900 dark:text-white">Add Exams</h5>
             </a>
          </div>
            
             <a href="/examinations/add-exams" class="inline-flex w-52 items-center mt-11  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Add Exams
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>


        
        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
            </svg>
           </a>

             <a href="/examinations/results">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Add Exam Result</h5>
             </a>
          </div>
            
             <a href="/examinations/results" class="inline-flex w-52 items-center mt-5  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Add Exam Result
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>


        <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href="/examinations/view-results"class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
            </svg>
            
            
           </a>

             <a href="/examinations/view-results">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Exams Result</h5>
             </a>
          </div>
            
             <a href="/examinations/view-results" class="inline-flex w-52 items-center mt-5  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              View Exams Result
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>
        

         <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href="/examinations/create-assessment/page"class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
            </svg>
            
            
           </a>

             <a href="/examinations/create-assessment/page">
                 <h6 class=" text-xl font-bold tracking-tight text-gray-600 dark:text-white">Create Assessment</h6>
             </a>
          </div>
            
             <a href="/examinations/create-assessment/page" class="inline-flex w-52 items-center mt-4  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Create                   <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>


         <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
            </svg>
           </a>

             <a href="/examinations/enter-assessment/page">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">Enter Assessment</h5>
             </a>
          </div>

            
             <a href="/examinations/enter-assessment/page" class="inline-flex w-52 items-center mt-4  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Enter Assessment
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>


         <div class="p-3 scale-100 bg-white my-6 rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
          <div class="flex space-x-3 mt-3">
           <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
            </svg>
           </a>

             <a href="/examinations/assessment/view/page">
                 <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white">View Assessment</h5>
             </a>
          </div>
            
             <a href="/examinations/assessment/view/page" class="inline-flex w-52 items-center mt-5  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              View Assessment
                  <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                 </svg>
             </a>
         </div>
      
       
        </div>
      


     
        <div class="content-wrapper">
          <div class="row" >
            

           


            

            
 
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

        @endsection
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        
    

