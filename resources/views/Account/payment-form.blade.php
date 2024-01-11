@extends('layouts.admin')
@section('content')
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting - Fee Invoice</strong></li>
            <li style="position: absolute;right:20px;margin-top:-10px"><button class="btn btn-sm btn-secondary"><i class='bx bx-printer' ></i> <b>Fee Structure</b></button></li>
        
          </ol>
        </nav>
        <div class="content-wrapper">
       
         
      <form class="row g-3" action="{{route('/payment/invoices/create')}}" method="POST">
            @if (Session::has('success'))
               <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif

            @if (Session::has('fail'))
               <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
            @endif

            @csrf

            <div class="col-12">
              <label for="staticEmail2" class="visually"><b>Reason:</b></label>
              <input type="text"  class="form-control" id="Description" name="Description"  value="{{$invoice->Description}}" readonly>
              <span style="color: red">@error('Description') {{$message}} @enderror</span>
            </div>

        <div class="col-4">
          <label for="staticEmail2" class="visually"><b></b>Balance Due</label>
          <input type="text"  class="form-control" id="AmountPayable" name="AmountPayable"  value="{{$invoice->AmountLeft}}" readonly>
          <span style="color: red">@error('FeeType') {{$message}} @enderror</span>
        </div>
          <div class="col-4">
            <label for="inputPassword2"><b>Amount been Paid</b></label>
            <input type="number" class="form-control" id="payingAmount" name="payingAmount" value="{{old('payingAmount')}}">
            <span style="color: red">@error('amount') {{$message}} @enderror</span>
          </div>

          <div class="col-4">
            <label for="inputPassword2"><b>Amount Left</b></label>
            <input type="number" class="form-control" id="amountLeft" name="amountLeft" value="{{$invoice->AmountLeft}}" readonly>
            <span style="color: red">@error('amount') {{$message}} @enderror</span>
          </div>

          
          <div class="col-4">
            <label for="inputPassword2"><b>Amount Left</b></label>
            <input type="date" class="form-control" id="PaymentDate" name="PaymentDate" required>
            <span style="color: red">@error('amount') {{$message}} @enderror</span>
          </div>

          <div class="col-4">
            <label for="staticEmail2" class="visually">Student Name<b></b></label>
            <input type="text"  class="form-control" id="StudentName" name="StudentName" value="{{$invoice->StudentName}}" readonly>
            <span style="color: red">@error('StudentName') {{$message}} @enderror</span>
          </div>

            <div class="col-4">
              <label for="inputPassword2"><b>Student ID</b></label>
              <input type="text" class="form-control" id="IndexNumber" name="IndexNumber" value="{{$invoice->IndexNumber}}" readonly>
              <span style="color: red">@error('IndexNumber') {{$message}} @enderror</span>
            </div>
  
            <div class="col-4" style="display: none">
              <label for="inputPassword2"><b>Classroom ID</b></label>
              <input type="text" class="form-control" id="classroom_id" name="classroom_id" value="{{$invoice->classroom_id}}" readonly>
              <span style="color: red">@error('classroom_id') {{$message}} @enderror</span>
            </div>

            <div class="col-4" style="display:none">
              <label for="inputPassword2"><b>InvoiceID</b></label>
              <input type="text" class="form-control" id="InvoiceID" name="InvoiceID" value="{{$invoice->InvoiceID}}" readonly>
              <span style="color: red">@error('InvoiceID') {{$message}} @enderror</span>
            </div>

            <div class="col-4" style="display:none">
              <label for="inputPassword2"><b>InvoiceNumber</b></label>
              <input type="text" class="form-control" id="InvoiceNumber" name="InvoiceNumber" value="{{$invoice->InvoiceNumber}}" readonly>
              <span style="color: red">@error('InvoiceNumber') {{$message}} @enderror</span>
            </div>


           <br>
           <br>
          <div class="row justify-content-end">
            <div class="col-auto">
                
                <button type="submit" class="btn btn-primary" data-enchanter="finish"><b><i class='bx bx-save' ></i> Add Payment</b></button>
            </div>
            </div>
       
      </form>

    <!--Button for the next page -->
  
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
 
  <script>
      document.getElementById('payingAmount').addEventListener('input', function(e){
        e.preventDefault()
         let payingAmount = Number(e.target.value);
         let Balance = Number(document.getElementById('AmountPayable').value)
          document.getElementById('amountLeft').value = Balance -payingAmount
      })
  </script>
@endsection
</html>

