@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style='background:rgb(255, 68, 0);border-radius:20px;'>
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"style="background:rgb(9, 9, 9);color:white;padding:10px;border-radius:10px;width:22rem;margin:0 0 0 45px">Study Materials | Academics </h4>

                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <h4 style="background:rgb(250, 92, 7);color:white;padding:10px;border-radius:10px;width:22rem;">Create a New Home Work</h4>

                    <form class="pt-3" action="{{route('new_homework')}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black;">{{Session::get('success')}}</span>
                    @endif

                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select onchange="query();" class="form-control form-control-lg"  name="classroom_id" id="classroom"style='border:1px solid rgb(255, 68, 0);' required>
                                    <option value="">Class</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{$classroom->id}}">{{$classroom->name}} - Section {{$classroom->section}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('classroom_id') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="subject_id" id="subject"style='border:1px solid rgb(255, 68, 0);'>
                                    <option value="">Subject</option>
                                </select>
                                <span style="color: red">@error('subject') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="label">Title</label>
                                <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="title" value="{{old('title')}}"style='border:1px solid rgb(255, 68, 0);'>
                                <span style="color: red">@error('title') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description" class="label">Description</label>
                                <textarea class="form-control form-control-lg" id="description" name="description" placeholder="description" value="{{old('description')}}" rows="10"style='border:1px solid rgb(255, 68, 0);'>{{old('description')}}</textarea>
                                <span style="color: red">@error('description') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="url" class="label">Url</label>
                                <input type="text" class="form-control form-control-lg" id="url" name="url" placeholder="url" value="{{old('url')}}"style='border:1px solid rgb(255, 68, 0);'>
                                <span style="color: red">@error('url') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="checkbox" class="" id="downloadable" name="downloadable"style='border:1px solid rgb(255, 68, 0);' required>
                                <label for="downloadable" class="label">Make study material downloadable in application.</label>
                                <span style="color: red">@error('downloadable') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="url" class="label">Files</label>
                                <input type="file" class="form-control form-control-lg" multiple name="files[]"style='border:1px solid rgb(255, 68, 0);' required/>
                                <span style="color: red">@error('files') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" style="background-color: rgb(19, 18, 18);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
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
    function query() {
        var classroom_id = document.getElementById("classroom").value;
        if (classroom_id) {
            var xhttp = new XMLHttpRequest();
            xhttp.responseType = 'json';
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var selectElement = document.getElementById("subject");
                    selectElement.innerText = null;
                    var option_ = document.createElement("option");
                    option_.value = "";
                    option_.text = "Subject";
                    selectElement.appendChild(option_);
                    // console.log(this.response.subjects)
                    this.response.subjects.forEach(element => {
                        var option = document.createElement("option");
                        option.value = element['id'];
                        option.text = element['name'];
                        selectElement.appendChild(option);
                    });
                }
            };
            xhttp.open("GET", "/admin/academics/class_subjects/" + classroom_id, true);
            xhttp.send();
        }
    }
</script>
