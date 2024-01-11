@extends('layouts.admin')
@section('content')

<div class="main-panel">
  <nav style="" aria-label="breadcrumb">
  <div class="flex flex-row items-center justify-center text-2xl mb-1  hover:scale-90 transition-transform" style="margin: 20px 0 40px 0">
    
    <span class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></span>
    <span class="breadcrumb-item active" aria-current="page"><strong>Accounting</strong></span>
  </div>
      <ol class="breadcrumb"style='margin:25px 0 20px 0'>
        <div class=" flex flex-row m-auto space-x-32"style='margin:25px 0 20px 0'>
          

         
          
          <div  style="background-color:rgb(237, 105, 57);color:whte;onmouseover="this.style.color='coral'; this.style.backgroundColor='coral';" onmouseout="this.style.color='blue'; this.style.backgroundColor='rgb(64, 64, 64)'" class="relative w-40 inline-block  rounded-lg bg-orange-600 hover:bg-gray-800    focus:ring-indigo-300 border focus:ring " >
            <button class="px-4 py-2 flex space-x-3 text-white font-bold   " id="dropdown-button" aria-haspopup="true" aria-controls="dropdown-menu">
              Invoices<span class="ml-2 mt-0.5 text-white"style='font-size:3px;'>⮟</span>
            </button>
            <di v class="origin-top-right absolute z-10 -right-20 mt-2 w-56 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
              <div class="py-1 tracking-tight" role="none">
                <span><a class="dropdown-item" href="/account/create-invoice-form"><strong class="tracking-tighter text-sm"><i class='bx bx-low-vision' ></i> Add Fee Invoice</strong></a></span>
                <span><a class="dropdown-item" href="/account/invoices"><strong class="tracking-tighter text-sm"><i class='bx bx-edit' ></i> Fee Invoice</strong></a></span>
                <span><a class="dropdown-item" href="/account/payment/invoices/student"><strong class="tracking-tighter text-sm"
                  ><i class='bx bx-wallet-alt' ></i>Student Invoice </strong></a></span>
              </div>
            </di>
          </div>
          <div  style="background-color:rgb(237, 105, 57);color:whit;onmouseover="this.style.color='coral'; this.style.backgroundColor='coral';" onmouseout="this.style.color='blue'; this.style.backgroundColor='rgb(64, 64, 64)'" class="relative w-40 inline-block  rounded-lg bg-orange-600 hover:bg-gray-800    focus:ring-indigo-300 border focus:ring " >
            <button class="px-4 py-2 flex space-x-3 text-white font-bold   " id="dropdown-button2" aria-haspopup="true" aria-controls="dropdown-menu">
              Fee Types<span class="ml-2 mt-0.5 text-white"style='font-size:3px;'>⮟</span>
            </button>
            <div class="origin-top-right absolute z-10 -right-20 mt-2 w-56 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
              <div class="py-1" role="none">
                
          <li><a class="dropdown-item " href="/account/feetype"><strong><i class='bx bx-low-vision ' ></i> View fee types</strong></a></li>
          <li><a class="dropdown-item " href="/account/feetype-form"><strong><i class='bx bx-edit' ></i> Add New fee type</strong></a></li>
              </div>
            </div>
          </div>
          
          <div  style="background-color:rgb(237, 105, 57);color:whit;onmouseover="this.style.color='coral'; this.style.backgroundColor='coral';" onmouseout="this.style.color='blue'; this.style.backgroundColor='rgb(64, 64, 64)'" class="relative w-40 inline-block  rounded-lg bg-orange-600 hover:bg-gray-800    focus:ring-indigo-300 border focus:ring " >
            <button class="px-4 py-2 flex space-x-3 text-white font-bold   " id="dropdown-button3" aria-haspopup="true" aria-controls="dropdown-menu">
              Expenses<span class="ml-2 mt-0.5 text-white"style='font-size:3px;'>⮟</span>
            </button>
            <div class="origin-top-right absolute z-10 -right-20 mt-2 w-56 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu3" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
              <div class="py-1" role="none">
                <li><a class="dropdown-item" href="/account/expense-list"><strong><i class='bx bx-low-vision' ></i> View Expenses</strong></a></li>
                <li><a class="dropdown-item" href="/account/create-expenses"><strong><i class='bx bx-edit' ></i> Add New Expense</strong></a></li>
              </div>
            </div>
          </div>
          <div  style="background-color:rgb(237, 105, 57);color:whit;onmouseover="this.style.color='coral'; this.style.backgroundColor='coral';" onmouseout="this.style.color='blue'; this.style.backgroundColor='rgb(64, 64, 64)'" class="relative w-40 inline-block  rounded-lg bg-orange-600 hover:bg-gray-800    focus:ring-indigo-300 border focus:ring " >
            <button class="px-4 py-2 flex space-x-3 text-white font-bold   " id="dropdown-button4" aria-haspopup="true" aria-controls="dropdown-menu">
              Income<span class="ml-2 mt-0.5 text-white"style='font-size:3px;'>⮟</span>
            </button>
            <div class="origin-top-right absolute z-10 -right-5 mt-2 w-48 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu4" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
              <div class="py-1" role="none">
                
                <li><a class="dropdown-item" href="/account/show-income-list"><strong><i class='bx bx-low-vision' ></i> View Income</strong></a></li>
                <li><a class="dropdown-item" href="/account/create-income"><strong><i class='bx bx-edit' ></i> Add New Income</strong></a></li>
              </div>
            </div>
          </div>
                      
      
         
                      
      
    
      
    </div>
    </ol>

  </nav>
  <div class="content-wrapper">
    
    <br>
    <div class="grid md:grid-cols-5 gap-4 mb-5">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
      <div class="p-5 ">
       <div class="flex space-x-3">
        <a href="/account/invoice/paid/list"class='text-orange-600'style="color:rgb(237, 105, 57);">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
          <a href="/account/invoice/paid/list">
              <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style="font-size: ; font-weight:800;">Paid Invoice</h5>
          </a>
       </div>
       <p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="CountPaidInvoice">0</span> / GHS <span id="SumPaidInvoice">0.00</span></p>
      </div>
    </div>


    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
      <div class="p-5 ">
       <div class="flex space-x-3">
        <a href="/account/invoice/unpaid/list"class='text-orange-600'style='color:rgb(237, 105, 57);'>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6-6m0 0l6 6m-6-6v12a6 6 0 01-12 0v-3" />
          </svg>
          
        </a>
          <a href="/account/invoice/unpaid/list">
              <h5 class="mb-2 text-xl font-bold    text-gray-900 dark:text-white"style=" font-weight:00;">Unpaid Invoice</h5>
          </a>
       </div>
       <p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="CountUnPaidInvoice">0</span> / GHS <span id="SumUnPaidInvoiceOne">0.00</span></p>
      </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
      <div class="p-5 ">
       <div class="flex space-x-3">
        <a href="/invoice/started/list"class='text-orange-600'style='color:rgb(237, 105, 57);'>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
          </svg>
          
        </a>
          <a href="/account/invoice/started/list">
              <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style=" font-weight:800;">Partially Paid</h5>
          </a>
       </div>
       <p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="CountPartiallyPaidInvoice">0</span> / GHS <span id="SumPartiallyPaidInvoiceTwofive">0.00</span></p>
      </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
      <div class="p-5 ">
       <div class="flex space-x-3">
        <a href="/account/payment/history/all"class='text-orange-600'style='color:rgb(237, 105, 57);'>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
          </svg>
          
        </a>
          <a href="/account/payment/history/all">
              <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style="font-weight:800;">Payment Recieved</h5>
          </a>
       </div>
       <p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="totalPayments">0</span> / GHS <span id="SumtotalPayments">0.00</span></p>
      </div>
    </div>
    <div class="max-w-sm bg-white  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
      <div class="p-5 ">
       <div class="flex space-x-3">
        <a href="/account/invoices"class='text-orange-600'style='color:rgb(237, 105, 57);'>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          
        </a>
          <a href="/account/invoices">
              <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style=" font-weight:800;">Total Invoice</h5>
          </a>
       </div>
       <p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="totalInvoice">0</span> / GHS <span id="SumtotalInvoice">0.00</span></p>
      </div>
    </div>
    
  </div>

<div class="grid md:grid-cols-5 gap-4 mb-10">

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
<div class="p-5 ">
<div class="flex space-x-3">
<a href="/account/show-income-list"class='text-orange-600'style='color:rgb(237, 105, 57);'>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
  </svg>
  
</a>
  <a href="/account/show-income-list">
      <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style=" font-weight:800;">Income</h5>
  </a>
</div>
<p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="totalIncome">0</span> / GHS <span id="SumtotalIncome">0.00</span></p>
</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 scale-100 hover:scale-90 transition-transform hover:bg-orange-200">
    
<div class="p-5 ">
<div class="flex space-x-3">
<a href="/account/expense-list"class='text-orange-600'style='color:rgb(237, 105, 57);'>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
  </svg>
  
</a>
  <a href="/account/expense-list">
      <h5 class="mb-2 text-xl font-bold  text-gray-900 dark:text-white"style=" font-weight:800;">Expenses</h5>
  </a>
</div>
<p class="card-text font-bold text-orange-600 mt-5 text-md" id="value"><span id="totalExpenses">0</span> / GHS <span id="SumtotalExpenses">0.00</span></p>
</div>
</div>

</div>

   
   
    
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer" style="background-color:WHITE;">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
<span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
<span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-lock-alt'></i> <b>All-In-One School Management System</b></span>
</div>
</footer>;
  <!-- partial -->
</div>

<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
  <!-- container-scroller -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
//display query
$(document).ready(function() {
  $('#dropdown-button').click(function() {
    $('#dropdown-menu').toggle();
  });

  // Close the dropdown when clicking outside of it
  $(document).click(function(event) {
    if (!$(event.target).closest('#dropdown-button').length && !$(event.target).closest('#dropdown-menu').length) {
      $('#dropdown-menu').hide();
    }
  });
  $('#dropdown-button2').click(function() {
    $('#dropdown-menu2').toggle();
  });

  // Close the dropdown when clicking outside of it
  $(document).click(function(event) {
    if (!$(event.target).closest('#dropdown-button2').length && !$(event.target).closest('#dropdown-menu2').length) {
      $('#dropdown-menu2').hide();
    }
  });
  $('#dropdown-button3').click(function() {
    $('#dropdown-menu3').toggle();
  });

  // Close the dropdown when clicking outside of it
  $(document).click(function(event) {
    if (!$(event.target).closest('#dropdown-button3').length && !$(event.target).closest('#dropdown-menu3').length) {
      $('#dropdown-menu3').hide();
    }
  });
  $('#dropdown-button4').click(function() {
    $('#dropdown-menu4').toggle();
  });

  // Close the dropdown when clicking outside of it
  $(document).click(function(event) {
    if (!$(event.target).closest('#dropdown-button4').length && !$(event.target).closest('#dropdown-menu4').length) {
      $('#dropdown-menu4').hide();
    }
  });
});

//old
     $.ajax({
          type: 'POST',
          url: '/account/summary/first-line',
          ContentType: 'application/json',
          data: {Ben:'Ben'},
  
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
            
              document.getElementById('CountPaidInvoice').textContent = data.paidInvoice
              document.getElementById('SumPaidInvoice').textContent = data.sumPaidInvoice.toFixed(2)

              document.getElementById('CountUnPaidInvoice').textContent = data.unPaidInvoice
              document.getElementById('SumUnPaidInvoiceOne').textContent = data.sumUnPaidInvoice.toFixed(2)


              document.getElementById('CountPartiallyPaidInvoice').textContent = data.partiallyPaidInvoice
              document.getElementById('SumPartiallyPaidInvoiceTwofive').textContent = data.sumPartiallyPaidInvoice.toFixed(2)

              
              document.getElementById('totalInvoice').textContent = data.totalInvoice
              document.getElementById('SumtotalInvoice').textContent = data.sumTotalInvoice.toFixed(2)

              document.getElementById('totalPayments').textContent = data.totalPayments
              document.getElementById('SumtotalPayments').textContent = data.sumtotalPayments.toFixed(2)

              document.getElementById('totalExpenses').textContent = data.totalExpenses
              document.getElementById('SumtotalExpenses').textContent = data.sumtotalExpenses.toFixed(2)

              document.getElementById('totalIncome').textContent = data.totalIncome
              document.getElementById('SumtotalIncome').textContent = data.sumtotalIncomme.toFixed(2)

              
          },
  
          error: function(error){
              console.log(error)
          }
          });
  
  
  </script>
  @endsection
 


