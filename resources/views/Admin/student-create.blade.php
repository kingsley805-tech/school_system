<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo">
            <img src="images/rap.png" alt="logo">
        </div>
        <h4>Rapid School Management System</h4>
        <h6 class="font-weight-light">Student</h6>
        <form class="pt-3" action="{{route('new_student')}}" method="POST">
          @csrf
          @if (Session::has('success'))
             <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif

        @if (Session::has('fail'))
            <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
        @endif
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="FirstName" name="FirstName" placeholder="FirstName" value="{{old('FirstName')}}">
            <span style="color: red">@error('FirstName') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="LastName" name="LastName" placeholder="LastName" value="{{old('LastName')}}">
            <span style="color: red">@error('LastName') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="StudentNumber" name="StudentNumber" placeholder="StudentNumber" value="{{old('StudentNumber')}}">
            <span style="color: red">@error('StudentNumber') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="StudentEmail" name="StudentEmail" placeholder="StudentEmail" value="{{old('StudentEmail')}}">
            <span style="color: red">@error('StudentEmail') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="DateOFBirth" name="DateOFBirth" placeholder="DateOFBirth" value="{{old('DateOFBirth')}}">
            <span style="color: red">@error('DateOFBirth') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="StudentAddress" name="StudentAddress" placeholder="StudentAddress" value="{{old('StudentAddress')}}">
            <span style="color: red">@error('StudentAddress') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="Gender" name="Gender" placeholder="Gender" value="{{old('Gender')}}">
            <span style="color: red">@error('Gender') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="BloodGroup" name="BloodGroup" placeholder="BloodGroup" value="{{old('BloodGroup')}}">
            <span style="color: red">@error('BloodGroup') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="City" name="City" placeholder="City" value="{{old('City')}}">
            <span style="color: red">@error('City') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="class_id" name="class_id" placeholder="class_id" value="{{old('class_id')}}">
            <span style="color: red">@error('class_id') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="parent_code" name="parent_code" placeholder="parent_code" value="{{old('parent_code')}}">
            <span style="color: red">@error('parent_code') {{$message}} @enderror</span>
          </div>

          <div class="mt-3">
            <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
          </div>
        </form>
    </div>
</body>
</html>
