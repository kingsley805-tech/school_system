<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@extends('layouts.admin')
@section('content')
<div class="main-panel">

  <div class="content-wrapper">

    <h3 class="text-center text-3xl text-slate-800 mb-2.5 scale-100 hover:scale-110 transition-transform">Academics</h3>

    <div class="grid grid-col items-center justify-center md:grid-cols-3 gap-4">
   
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
        <a href="#">
        
        <div class="p-3 scale-100 ">
          <div class="flex space-x-3">
            <a href="#" class="text-orange-600"style='color: #FF5E0E;'>
              <svg width="45" height="45" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                  <path d="M17.1532 18.9348C17.407 18.9587 17.6638 18.9709 17.9231 18.9709C18.9983 18.9709 20.0306 18.7613 20.9902 18.3759C20.9967 18.2828 21 18.1887 21 18.0937C21 16.1558 19.6224 14.5849 17.9231 14.5849C17.2793 14.5849 16.6818 14.8103 16.1878 15.1957M17.1532 18.9348C17.1532 18.9468 17.1532 18.9589 17.1532 18.9709C17.1532 19.2341 17.1405 19.4938 17.1158 19.7495C15.314 20.9284 13.2257 21.6025 10.9993 21.6025C8.77298 21.6025 6.6847 20.9284 4.88288 19.7495C4.85814 19.4938 4.84543 19.2341 4.84543 18.9709C4.84543 18.9589 4.84546 18.9469 4.84551 18.9349M17.1532 18.9348C17.1471 17.5587 16.7937 16.2763 16.1878 15.1957M16.1878 15.1957C15.0946 13.2459 13.1793 11.9533 10.9993 11.9533C8.81961 11.9533 6.90458 13.2456 5.81128 15.195M5.81128 15.195C5.31747 14.81 4.72026 14.5849 4.07695 14.5849C2.3776 14.5849 1 16.1558 1 18.0937C1 18.1887 1.00331 18.2828 1.00981 18.3759C1.96944 18.7613 3.00172 18.9709 4.07695 18.9709C4.33576 18.9709 4.59209 18.9588 4.84551 18.9349M5.81128 15.195C5.20514 16.2757 4.85157 17.5585 4.84551 18.9349M14.0763 4.93559C14.0763 6.87346 12.6987 8.44442 10.9993 8.44442C9.29998 8.44442 7.92238 6.87346 7.92238 4.93559C7.92238 2.99772 9.29998 1.42676 10.9993 1.42676C12.6987 1.42676 14.0763 2.99772 14.0763 4.93559ZM20.2302 8.44442C20.2302 9.89783 19.197 11.076 17.9225 11.076C16.648 11.076 15.6148 9.89783 15.6148 8.44442C15.6148 6.99102 16.648 5.8128 17.9225 5.8128C19.197 5.8128 20.2302 6.99102 20.2302 8.44442ZM6.38391 8.44442C6.38391 9.89783 5.35071 11.076 4.0762 11.076C2.80168 11.076 1.76849 9.89783 1.76849 8.44442C1.76849 6.99102 2.80168 5.8128 4.0762 5.8128C5.35071 5.8128 6.38391 6.99102 6.38391 8.44442Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </a>
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attendance</h5>
          </a>
          
          </a>
          </div>
            
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"As a school, attendance is paramount, ensuring every student's presence daily to foster a vibrant learning community and success."</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
      <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-3 scale-100 ">
         <div class="flex space-x-3">
          <a href=""class='text-orange-600'style='color: #FF5E0E;'>
            <svg width="45" height="45" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 4.16526C9.23081 2.42706 6.89451 1.37012 4.33333 1.37012C3.16455 1.37012 2.0426 1.59023 1 1.99474V19.3754C2.0426 18.9709 3.16455 18.7507 4.33333 18.7507C6.89451 18.7507 9.23081 19.8077 11 21.5459M11 4.16526C12.7692 2.42706 15.1055 1.37012 17.6667 1.37012C18.8355 1.37012 19.9574 1.59023 21 1.99474V19.3754C19.9574 18.9709 18.8355 18.7507 17.6667 18.7507C15.1055 18.7507 12.7692 19.8077 11 21.5459M11 4.16526V21.5459" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </a>

            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Subjects</h5>
            </a>
         </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">As a school, we empower minds with knowledge, foster creativity, nurture future leaders through education and inspiration.</p>
            <a href="/admin/academics/subject" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
      
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
        
        <div class="p-3 ">
         <div class="flex space-x-3">
          <a href="#"class='text-orange-600'style='color: #FF5E0E;'>
            <svg width="45" height="45" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 5.42872V4.14036C5 2.317 6.34315 0.838867 8 0.838867H18C19.6569 0.838867 21 2.317 21 4.14036V5.42872M5 5.42872C5.31278 5.30706 5.64936 5.24086 6 5.24086H20C20.3506 5.24086 20.6872 5.30706 21 5.42872M5 5.42872C3.83481 5.88194 3 7.10486 3 8.54235V9.83071M21 5.42872C22.1652 5.88194 23 7.10486 23 8.54235V9.83071M23 9.83071C22.6872 9.70904 22.3506 9.64284 22 9.64284H4C3.64936 9.64284 3.31278 9.70904 3 9.83071M23 9.83071C24.1652 10.2839 25 11.5068 25 12.9443V21.7483C25 23.5717 23.6569 25.0498 22 25.0498H4C2.34315 25.0498 1 23.5717 1 21.7483V12.9443C1 11.5068 1.83481 10.2839 3 9.83071" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </a>
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Study Materials</h5>
            </a>
         </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"School provides essential study materials and growth while shaping future leaders through education and opportunities."</p>
            <a href="/admin/academics/studymaterials" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
      
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
        
        <div class="p-3 scale-100">
          <div class="flex space-x-3">
            <a href=""class='text-orange-600'style='color: #FF5E0E;'> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
              </svg>
              
            </a>
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Class Section</h5>
              </a>
          </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">In our school's class section, we interactive lessons, fostering a love for learning through education and opportunities.</p>
            <a href="/admin/academics/class-section" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
       <div class="">
        
       </div>
        <div class="p-3 ">
          <div class="flex space-x-3 py-1.5">
            <a href=""class='text-orange-600'style='color: #FF5E0E;'>
              <svg width="45" height="45" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.7858 3.66749L17.5858 1.85168C18.3668 1.06376 19.6332 1.06376 20.4142 1.85168C21.1953 2.63959 21.1953 3.91705 20.4142 4.70497L9.08766 16.1311C8.52374 16.6999 7.8282 17.1181 7.06388 17.3478L4.2 18.2084L5.0531 15.3194C5.28077 14.5483 5.6953 13.8467 6.25922 13.2778L15.7858 3.66749ZM15.7858 3.66749L18.6 6.50644M17 13.9042V19.0154C17 20.3526 15.9255 21.4365 14.6 21.4365H3.4C2.07452 21.4365 1 20.3526 1 19.0154V7.71699C1 6.37985 2.07452 5.29589 3.4 5.29589H8.46667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Assignments</h5>
              </a>
          </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Home Work: Nurturing minds, fostering growth.Lifelong learning begins through education and opportunities."</p>
            <a href="/admin/academics/homework" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
      <div  class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
       
        <div class="p-3 scale-100 ">
          <div class="flex space-x-3 py-1.5 ">
            <a href=""class='text-orange-600'style='color:#FF5E0E;'>
              <svg width="45" height="45" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.8876 3.37726C15.5322 2.39934 14.3739 1.68262 13 1.68262H9C7.62605 1.68262 6.46783 2.39934 6.11235 3.37726M15.8876 3.37726C15.9608 3.57863 16 3.79106 16 4.01059V4.01059C16 4.43916 15.6526 4.78658 15.224 4.78658H6.77599C6.34742 4.78658 6 4.43916 6 4.01059V4.01059C6 3.79106 6.03916 3.57863 6.11235 3.37726M15.8876 3.37726C16.7492 3.42775 17.606 3.49148 18.4578 3.56818C19.9252 3.70034 21 4.68208 21 5.82847V19.5304C21 20.8161 19.6569 21.8584 18 21.8584H4C2.34315 21.8584 1 20.8161 1 19.5304V5.82847C1 4.68208 2.07477 3.70034 3.54224 3.56818C4.39396 3.49148 5.25077 3.42775 6.11235 3.37726" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Notice Board</h5>
              </a>
          </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">" Stay informed with announcements. Connect, engage, and thrive in our vibrant learning community."</p>
            <a href="/admin/academics/noticeboard" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                View more
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
      <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-support' ></i> <b class="text-orange-600 hover:text-orange-800">Contact Support</b></span>
    </div>
  </footer>
  <!-- partial -->
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
