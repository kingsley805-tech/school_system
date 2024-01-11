@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting</strong></li>
            
            
            
          </ol>
        </nav>
        @if (Session::has('success'))
        <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
      @endif

      @if (Session::has('fail'))
          <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
      @endif
        <div class="content-wrapper">
          <div class="row" >

            <div class="grid  gap-2 md:grid-cols-5 md:gap-4 m-auto ">
           
              <div class="p-3 scale-100 bg-white rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
                <div class="flex  mt-3">
                 <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                  
                  
                 </a>
     
                   <a href="/transport/bus/list">
                       <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Manage Busses</h5>
                   </a>
                </div>
                  
                   <a href="/transport/bus/list" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       manage Busses
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
              <div class="p-3 scale-100 bg-white rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
                <div class="flex space-x-3 mt-3">
                 <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
                 </a>
     
                   <a href="/transport/addbus">
                       <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Add Bus</h5>
                   </a>
                </div>
                  
                   <a href="/transport/addbus" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       Add Bus
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
              
            
              <div class="p-3 scale-100 bg-white rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
                <div class="flex space-x-3 mt-3">
                 <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                  </svg>
                  
                  
                  
                 </a>
     
                   <a href="/transport/routes/create">
                       <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Add New Route</h5>
                   </a>
                </div>
                  
                   <a href="/transport/routes/create" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       Add New Route
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
            
              <div class="p-3 scale-100 bg-white rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
                <div class="flex space-x-3 mt-3">
                 <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                  </svg>
                  
                  
                 </a>
     
                   <a href="/transport/routes/lists">
                       <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Route List</h5>
                   </a>
                </div>
                  
                   <a href="/transport/routes/lists" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       Add Route
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
               </div>
            
              <div class="p-3 scale-100 bg-white rounded-md hover:bg-gray-500 h-40 shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-40  hover:scale-90">
                <div class="flex space-x-3 mt-3">
                 <a href=""class='text-orange-600'style='color:rgb(237, 105, 57)'>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                  </svg>
                  
                  
                  
                 </a>
     
                   <a href="/transport/routes/assign-student">
                       <h5 class=" text-xl font-bold tracking-tight  text-gray-900 dark:text-white">Students Routes</h5>
                   </a>
                </div>
                  
                   <a href="/transport/routes/assign-student" class="inline-flex w-52 items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       Students Routes..
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                       </svg>
                   </a>
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

    </div>
    <!-- main-panel ends -->
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
  </html>


