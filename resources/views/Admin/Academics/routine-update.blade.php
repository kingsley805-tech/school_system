@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
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
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="name" value="{{$classes->name}}">
                        <span style="color: red">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control form-control-lg" id="section" name="section" placeholder="section" value="{{$classes->section}}">
                        <span style="color: red">@error('section') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">

                        <select class="form-control form-control-lg"  name="class_teacher" id="class_teacher">
                            <option value="">Assign Class Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}" @if ($teacher->id==$classes->class_teacher) {{"selected"}}@endif>{{$teacher->Name}}</option>
                            @endforeach
                        </select>
                        <span style="color: red">@error('class_teacher') {{$message}} @enderror</span>
                    </div>
                    <div class="mt-3">
                        <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
                    </div>
                    </form>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 20px 30px; border-radius: 20px; width: 10%; margin: 10px auto; background-color: rgb(243, 71, 71); color: white; cursor: pointer;"><i class='bx bxs-trash' ></i> DELETE CLASS</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalLabel">DELETE CLASS {{$classes->name}} - SECTION {{$classes->section}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div>Are you sure you want to delete this class?</div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" href="/admin/academics/class-delete/{{$classes->id}}">DELETE </button>
                      </div>
                    </div>
                  </div>
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
