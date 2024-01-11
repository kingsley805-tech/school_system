@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Study Materials | Academics </h4>

                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <h4>Update {{$studymaterial->title}}</h4>

                    <form class="pt-3" action="{{route('update_studymaterials', $studymaterial->id)}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black;">{{Session::get('success')}}</span>
                    @endif

                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif

                    @if (Session::has('delete'))
                        <span style="background-color: rgb(196, 250, 109); color:black">{{Session::get('delete')}}</span>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select onchange="query();" class="form-control form-control-lg"  name="classroom_id" id="classroom" required>
                                    <option value="">Class</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{$classroom->id}}"  @if ($classroom->id==$studymaterial->classroom_id) {{"selected"}}@endif>{{$classroom->name}} - Section {{$classroom->section}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('classroom_id') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="subject_id" id="subject">
                                    <option value="">Subject</option>
                                    <option value="{{$studymaterial->subjects->id}}" selected>{{$studymaterial->subjects->name}}</option>
                                </select>
                                <span style="color: red">@error('subject') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="label">Title</label>
                                <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="title" value="{{$studymaterial->title}}">
                                <span style="color: red">@error('title') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description" class="label">Description</label>
                                <textarea class="form-control form-control-lg" id="description" name="description" placeholder="description" value="{{$studymaterial->description}}" rows="10">{{$studymaterial->description}}</textarea>
                                <span style="color: red">@error('description') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="url" class="label">Url</label>
                                <input type="text" class="form-control form-control-lg" id="url" name="url" placeholder="url" value="{{$studymaterial->url}}">
                                <span style="color: red">@error('url') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="checkbox" class="" id="downloadable" name="downloadable" @if ($studymaterial->downloadable=='true') {{"checked"}}@endif>
                                <label for="downloadable" class="label" >Make study material downloadable in application.</label>
                                <span style="color: red">@error('downloadable') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="url" class="label">Files</label>
                                <div>
                                    @foreach($studymaterial->myfiles as $file)
                                        <a href={{ ($studymaterial->downloadable=='true')?"/admin/academics/download/$file->url" : "#"}}>{{$file->name}}</a> <a href="/admin/academics/studymaterials-delete-file/{{$file->id}}" style="color: red; cursor: pointer;"><i class="bx bxs-trash"></i></a><br>
                                    @endforeach
                                </div>
                                <input type="file" class="form-control form-control-lg" multiple name="files[]"/>
                                <span style="color: red">@error('files') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >UPDATE</button>
                    </div>
                    </form>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 20px 30px; border-radius: 20px; width: 10%; margin: 10px auto; background-color: rgb(243, 71, 71); color: white; cursor: pointer;"><i class='bx bxs-trash' ></i> DELETE MATERIAL</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalLabel">DELETE MATERIAL {{$studymaterial->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div>Are you sure you want to delete this study material?</div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" href="/admin/academics/studymaterials-delete/{{$studymaterial->id}}">DELETE </button>
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
