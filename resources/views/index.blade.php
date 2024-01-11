<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid Login</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png'); }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/rap.png" alt="logo">
              </div>
              <h4>Rapid School Management System</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="{{route('login')}}" method="POST">
                @csrf
                @if (Session::has('success'))
                   <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                @endif

              @if (Session::has('fail'))
                  <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
              @endif


                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email" value="{{old('Email')}}">
                  <span style="color: red">@error('Email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                  <span style="color: red">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="mt-3">
                  <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                </div>


                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{url('/register')}}" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <script src="{{ URL::asset('vendors/base/vendor.bundle.base.js'); }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('jjs/template.js'); }}"></script>
  <!-- endinject -->
</body>
</html>
