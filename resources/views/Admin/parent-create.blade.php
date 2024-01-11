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
        <h6 class="font-weight-light">Create Page</h6>
        <form class="pt-3" action="{{route('new_parent')}}" method="POST">
          @csrf
          @if (Session::has('success'))
             <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif

        @if (Session::has('fail'))
            <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
        @endif


          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="FatherName" name="FatherName" placeholder="FatherName" value="{{old('FatherName')}}">
            <span style="color: red">@error('FatherName') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="FatherContact" placeholder="FatherContact" value="{{old('FatherContact')}}">
            <span style="color: red">@error('FatherContact') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="FatherOccupation" placeholder="FatherOccupation" value="{{old('FatherOccupation')}}">
            <span style="color: red">@error('FatherOccupation') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="MotherName" placeholder="MotherName" value="{{old('MotherName')}}">
            <span style="color: red">@error('MotherName') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="MotherContact" placeholder="MotherContact" value="{{old('MotherContact')}}">
            <span style="color: red">@error('MotherContact') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="MotherOccupation" placeholder="MotherOccupation" value="{{old('MotherOccupation')}}">
            <span style="color: red">@error('MotherOccupation') {{$message}} @enderror</span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="section" name="Address" placeholder="Address" value="{{old('Address')}}">
            <span style="color: red">@error('Address') {{$message}} @enderror</span>
          </div>

          <div class="mt-3">
            <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
          </div>
        </form>
    </div>
</body>
</html>
