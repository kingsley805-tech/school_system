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
        <h6 class="font-weight-light">Update</h6>
        <form class="pt-3" action="{{route('update_class', $classes->id)}}" method="POST">
            @csrf

          @if (Session::has('success'))
             <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
          @endif

        @if (Session::has('fail'))
            <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
        @endif


          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="name" value="{{$classes->name}}">
            <span style="color: red">@error('name') {{$message}} @enderror</span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control form-control-lg" id="section" name="section" placeholder="section" value="{{$classes->section}}">
            <span style="color: red">@error('section') {{$message}} @enderror</span>
          </div>
          <div class="mt-3">
            <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
          </div>


          <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="{{url('/register')}}" class="text-primary">Create</a>
          </div>
        </form>
    </div>
</body>
</html>
