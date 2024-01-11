@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Classes & Sections | Academics </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/admin/academics/class-create-page" style="position: absolute;right:20px; text-decoration:none;"><i class='bx bxs-user-plus' ></i> Add New Class</a>
              </div>

                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <h4>Update {{$classes->name}}</h4>

                    <form class="pt-3" action="{{route('update_class', $classes->id)}}" method="POST">
                    @csrf
                    @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black;">{{Session::get('success')}}</span>
                    @endif

                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif

                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="name" value="{{$classes->name}}"style='border:1px solid rgb(248, 128, 7)'>
                        <span style="color: red">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control form-control-lg" id="section" name="section" placeholder="section" value="{{$classes->section}}"style='border:1px solid rgb(248, 128, 7)'>
                        <span style="color: red">@error('section') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <select class="form-control form-control-lg"  name="class_teacher" id="class_teacher"style='border:1px solid rgb(248, 128, 7)'>
                            <option value="">Assign Class Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}" @if ($teacher->id==$classes->class_teacher) {{"selected"}}@endif>{{$teacher->name}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">@error('class_teacher') {{$message}} @enderror</span>
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

<script>

</script>
