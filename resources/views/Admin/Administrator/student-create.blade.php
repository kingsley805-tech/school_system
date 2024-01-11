@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Students | Administrator </h4>
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h6 class="font-weight-light"> Register New Student</h6>
                <form class="pt-3" action="{{route('new_student')}}" method="POST">
                  @csrf
                  @if (Session::has('success'))
                     <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif

                @if (Session::has('fail'))
                    <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="FirstName" name="FirstName" placeholder="FirstName" value="{{old('FirstName')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('FirstName') {{$message}} @enderror</span>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="LastName" name="LastName" placeholder="LastName" value="{{old('LastName')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('LastName') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="StudentNumber" name="StudentNumber" placeholder="StudentNumber" value="{{old('StudentNumber')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('StudentNumber') {{$message}} @enderror</span>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="StudentEmail" name="StudentEmail" placeholder="StudentEmail" value="{{old('StudentEmail')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('StudentEmail') {{$message}} @enderror</span>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="DateOFBirth" name="DateOFBirth" placeholder="DateOFBirth" value="{{old('DateOFBirth')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('DateOFBirth') {{$message}} @enderror</span>
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="StudentAddress" name="StudentAddress" placeholder="StudentAddress" value="{{old('StudentAddress')}}"style='border:1px solid rgb(248, 128, 7)'>
                            <span style="color: red">@error('StudentAddress') {{$message}} @enderror</span>
                          </div>
                    </div>
                </div>

                  <div class="form-group">
                    <select class="form-control form-control-lg"  id="Gender" name="Gender"style='border:1px solid rgb(248, 128, 7)'>
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    {{-- <input type="text" class="form-control form-control-lg" id="Gender" name="Gender" placeholder="Gender" value="{{old('Gender')}}"> --}}
                    <span style="color: red">@error('Gender') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="BloodGroup" name="BloodGroup" placeholder="BloodGroup" value="{{old('BloodGroup')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('BloodGroup') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="City" name="City" placeholder="City" value="{{old('City')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('City') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <select class="form-control form-control-lg"  name="class_id" id="class_id"style='border:1px solid rgb(248, 128, 7)'>
                        <option value="">Assign Class</option>
                        @foreach ($classes as $classroom)
                            <option value="{{$classroom->id}}">{{$classroom->name}} - Section {{$classroom->section}}</option>
                        @endforeach
                    </select>
                    <span style="color: red">@error('class_id') {{$message}} @enderror</span>
                </div>

                  {{-- <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="class_id" name="class_id" placeholder="class_id" value="{{old('class_id')}}">
                    <span style="color: red">@error('class_id') {{$message}} @enderror</span>
                  </div> --}}

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="parent_code" name="parent_code" placeholder="parent_code" value="{{old('parent_code')}}"style='border:1px solid rgb(248, 128, 7)'>
                    <span style="color: red">@error('parent_code') {{$message}} @enderror</span>
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
