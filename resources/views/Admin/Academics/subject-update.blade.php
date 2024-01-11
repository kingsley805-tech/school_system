@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">

              <div style="position: relative;" class="mb-5 flex space-x-80">
                <h4 class="card-title" style="background:rgb(9, 9, 9);color:white;padding:30px;border-radius:10px;width:22rem;margin:0 0 0 40px;height:10px">Subject | Academics </h4>
                <a href="/admin/academics/class-create-page"style='text-decoration:none;'><h4 class="card-title  " style="background:rgb(232, 80, 25);color:white;padding:20px;border-radius:10px;width:22rem;text-decoration: none;"><i class='bx bxs-user-plus' ></i><span style="text-decoration: none">Add New Subject</span></h4></a>
      
              </div>

                <div class="row">
                    <div class="col-9">
                        <div class="auth-form-light text-left py-5 pl-2 px-sm-5">

                            <h4 style="background:rgb(245, 85, 4);color:white;padding:10px;border-radius:10px;width:22rem">Update {{$subject->name}}</h4>

                            <form class="pt-3" action="{{route('update_subject', $subject->id)}}" method="POST">
                            @csrf
                            @if (Session::has('success'))
                                <span style="background-color: rgb(0, 255, 106); color:black; padding:5px;border-radius:10px;margin:-30px 0 0 0;">{{Session::get('success')}}</span>
                            @endif

                            @if (Session::has('fail'))
                                <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                            @endif

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="name" value="{{$subject->name}}"style='border:1px solid rgb(255, 68, 0);'>
                                <span style="color: red">@error('name') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="subject_code" name="subject_code" placeholder="subject_code" value="{{$subject->subject_code}}" style='border:1px solid rgb(255, 68, 0);' hidden>
                                <span style="color: red">@error('subject_code') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <select class="form-control form-control-lg"  name="subject_type" id="subject_type"style='border:1px solid rgb(255, 68, 0);'>
                                    <option value="">Subject Type</option>
                                    <option value="Praticals" @if ($subject->subject_type=="Praticals") {{"selected"}}@endif>Practicals</option>
                                    <option value="Subjective" @if ($subject->subject_type=="Subjective") {{"selected"}}@endif>Subjective</option>
                                    <option value="Objective" @if ($subject->subject_type=="Objective") {{"selected"}}@endif>Objective</option>
                                </select>
                                <span style="color: red">@error('subject_type') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <select class="form-control form-control-lg"  name="classroom" id="classroom"style='border:1px solid rgb(255, 68, 0);' required>
                                    <option value="">Assign Class</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{$classroom->id}}" @if ($classroom->id==$subject->classroom_id) {{"selected"}}@endif>{{$classroom->name}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('classroom') {{$message}} @enderror</span>
                            </div>
                            {{-- {{ (collect()->contains($subject->teachers)) ? 'selected':'' }} --}}
                            <div class="form-group">
                                <select class="form-control form-control-lg"  name="class_teachers[]" id="class_teachers"style='border:1px solid rgb(255, 68, 0);' multiple required>
                                    <option value="">Assign Class Teachers</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{$teacher->id}}" >{{$teacher->Name}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('class_teachers') {{$message}} @enderror</span>
                            </div>

                            <div class="mt-3">
                                <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >UPDATE</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mt-24 mr-5">
                            <div style="background-color: rgb(8, 7, 7); padding: 10px; margin:0 0 0 0;border-radius:10px;color:white">Assigned Teachers</div>
                            @if (count($subject->teachers) >=1)
                                @foreach ($subject->teachers as $teach)
                                    <div style="margin-bottom: 5px;background-color: rgb(243, 64, 10); padding: 5px; margin:20px 0 0 0;border-radius:10px;color:white">{{$teach->Name}}</div>
                                @endforeach
                            @else
                                <div style="color: rgb(245, 16, 16);">No teacher assigned</div>
                            @endif
                        </div>
                    </div>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 20px 30px; border-radius: 20px; width: 10%; margin: 10px auto; background-color: rgb(213, 87, 87); color: white; cursor: pointer;"><i class='bx bxs-trash' ></i> DELETE SUBJECT</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 style="background: rgb(242, 8, 8)" class="modal-title fs-5 uppercase" id="exampleModalLabel">DELETE SUBJECT {{$subject->name}} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div>Are you sure you want to delete this subject?</div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button  type="button" class="btn btn-danger" href="/admin/academics/class-delete/{{$subject->id}}">DELETE </button>
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
