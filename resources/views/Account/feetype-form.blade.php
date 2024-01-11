@extends('layouts.admin')
@section('content')
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong></strong></li>
          
        
          </ol>
        </nav>
        <div class="content-wrapper">
          <li style="position: absolute;right:76px;margin-top:-20px"><button class="btn btn-sm btn-secondary"><i class='' ></i> <b>Accounting - Fee Invoice</b></button></li>
         
      <form class="row g-3" action="{{route('fee-structure-post')}}" method="POST">
            @if (Session::has('success'))
               <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif

            @if (Session::has('fail'))
               <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
            @endif

            @csrf
        <div class="col-6">
          <label for="staticEmail2" class="visually"><b>Fee Type</b></label>
          <input type="text"  class="form-control" id="FeeType" name="feeType" value="" placeholder="fee type" value="{{old('LastName')}}"style='border:1px solid rgb(255, 68, 0);'>
          <span style="color: red">@error('FeeType') {{$message}} @enderror</span>
        </div>

        <div class="col-6">
            <label for="staticEmail2"><b>Select Class </b></label>
            <select class="form-select" id="" data-placeholder="Choose anything" multiple name="classroom[]"style='border:1px solid rgb(255, 68, 0);'>
                <option>Select Class</option>
                @foreach($class as $value)
                <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
               @endforeach
             
            </select>
            <span style="color: red">@error('Class') {{$message}} @enderror</span>
          </div>
        
          <div class="col-6">
            <label for="inputPassword2"><b>Amount:</b></label>
            <input type="number" class="form-control" id="inputPassword2" placeholder="Amount" name="amount" value="{{old('LastName')}}"style='border:1px solid rgb(255, 68, 0);'>
            <span style="color: red">@error('amount') {{$message}} @enderror</span>
          </div>


          <div class="col-6">
            <label for="staticEmail2"><b>Period </b></label>
            <select class="form-select" id="" data-placeholder="Choose anything" name="period"style='border:1px solid rgb(255, 68, 0);'>
                <option value="">Select Period</option>
                 <option value="Quaterly">Quaterly (3 months)</option>
                 <option value="Quadrimester">Quadrimester (4 months)</option>
                 <option value="Half Yearly">Half Yearly (6 months)</option>
                 <option value="Annualy">Annualy (12 months)</option>
            </select>

            <span style="color: red">@error('Period') {{$message}} @enderror</span>
          </div>

          <div class="row justify-content-end">
            <div class="col-auto">
                
                <button type="submit" class="btn btn-primar"style='background:rgb(255, 68, 0);color:white' data-enchanter="finish"><b><i class='bx bx-save' ></i> Add New Fee Invoice</b></button>
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
 
@endsection
</html>

