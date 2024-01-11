<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid Register</title>
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
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @foreach ($errors as $item)
                    <span style="background-color: rgb(255, 0, 0); color:black">{{$item}}</span> <br>
                @endforeach
                @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span> <br>
                @endif

                @if (Session::has('fail'))
                    <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span> <br>
                @endif
                @csrf


                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="School" name="School" placeholder="School Name" value="{{old('School')}}">
                  <span style="color: red">@error('School') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="FirstName" name="FirstName" placeholder="First Name" value="{{old('FirstName')}}">
                  <span style="color: red">@error('FirstName') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="LastName" name="LastName" placeholder="Last Name" value="{{old('FirstName')}}">
                  <span style="color: red">@error('LastName') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email" value="{{old('Email')}}">
                  <span style="color: red">@error('Email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Telephone"  name="Telephone" placeholder="Telephone" value="{{old('Telephone')}}">
                  <span style="color: red">@error('Telephone') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" id="usertype" name="usertype">
                    <option>Role</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Student">Student</option>
                  </select>

                  <span style="color: red">@error('usertype') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">

                  <span style="color: red">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">

                  <span style="color: red">@error('password_confirmation') {{$message}} @enderror</span>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{url('/')}}" class="text-primary">Login</a>
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
  <script src="{{ URL::asset('js/off-canvas.js'); }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('jjs/template.js'); }}"></script>
</body>

</html>






















{{--







@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
