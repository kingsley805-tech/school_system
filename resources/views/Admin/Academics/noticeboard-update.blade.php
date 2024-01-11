@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Noticeboard | Academics </h4>

                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <h4>{{$noticeboard->title}}</h4>

                    <form class="pt-3" action="{{route('update_noticeboard', $noticeboard->id)}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black;">{{Session::get('success')}}</span>
                    @endif

                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif

                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="title" value="{{$noticeboard->title}}">
                        <span style="color: red">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="description" class="label">Description</label>
                        <textarea class="form-control form-control-lg" id="description" name="description" placeholder="description" rows="10">{{$noticeboard->description}}</textarea>
                        <span style="color: red">@error('description') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="url" name="url" placeholder="url" value="{{$noticeboard->url}}">
                        <span style="color: red">@error('url') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="attachment">Attachment</label>
                        <div>
                            <a href="/admin/academics/download/{{$noticeboard->myfile->url}}">{{$noticeboard->myfile->name}}</a> <a href="/admin/academics/noticeboard-delete-file/{{$noticeboard->myfile->id}}" style="color: red; cursor: pointer;"><i class="bx bxs-trash"></i></a><br>
                        </div>
                        <input type="file" class="form-control form-control-lg" id="attachment" name="attachment" placeholder="attachment" value="{{old('attachment')}}">
                        <span style="color: red">@error('attachment') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label><br>
                        <input style="color: greenyellow;" type="radio" id="status" name="status" value="Active" @if ($noticeboard->status == "active") {{"checked"}} @endif> Active
                        <input style="color: red;" type="radio" id="status" name="status" value="Inactive" @if ($noticeboard->status == "inactive") {{"checked"}} @endif> Inactive
                        <span style="color: red">@error('url') {{$message}} @enderror</span>
                    </div>
                    <div class="mt-3">
                        <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >UPDATE</button>
                    </div>
                    </form>
                </div>

                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 20px 30px; border-radius: 20px; width: 10%; margin: 10px auto; background-color: rgb(243, 71, 71); color: white; cursor: pointer;"><i class='bx bxs-trash' ></i> DELETE NOTICE</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalLabel">DELETE MATERIAL {{$noticeboard->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div>Are you sure you want to delete this note?</div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" href="/admin/academics/noticeboard-delete/{{$noticeboard->id}}">DELETE </button>
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
