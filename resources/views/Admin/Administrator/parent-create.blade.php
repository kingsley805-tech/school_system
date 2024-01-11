@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Parent | Administrator </h4>

              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h6 class="font-weight-light">Register New Parent</h6>
                <form class="pt-3" action="{{route('new_parent')}}" method="POST">
                  @csrf
                  @if (Session::has('success'))
                     <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif

                @if (Session::has('fail'))
                    <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                @endif


                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="FatherName" name="FatherName" placeholder="FatherName" value="{{old('FatherName')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('FatherName') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="FatherContact" placeholder="FatherContact" value="{{old('FatherContact')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('FatherContact') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="FatherOccupation" placeholder="FatherOccupation" value="{{old('FatherOccupation')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('FatherOccupation') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="MotherName" placeholder="MotherName" value="{{old('MotherName')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('MotherName') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="MotherContact" placeholder="MotherContact" value="{{old('MotherContact')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('MotherContact') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="MotherOccupation" placeholder="MotherOccupation" value="{{old('MotherOccupation')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('MotherOccupation') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="section" name="Address" placeholder="Address" value="{{old('Address')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('Address') {{$message}} @enderror</span>
                  </div>

                  <div class="mt-3">
                    <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >Create</button>
                  </div>
                </form>
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






@endsection
