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
                <a href="/admin/academics/class-create-page"style="position: absolute;right:20px; text-decoration:none; color:rgb(249, 246, 245);background:rgb(237, 105, 57);padding:10px;margin:-50px 0 0 0;border-radius:30px"><i class='bx bxs-user-plus' style="color: white"></i> Add New Class</a>
              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New Subject</a> --}}

                @if (Session::has('delete'))
                    <span style="background-color: rgb(255, 59, 59); color:black;">{{Session::get('delete')}}</span>
                @endif
              <div class="table-responsive pt-6">
                <table id="example" class="table table-sm table-striped table-bordered">
                  <thead style="background-color: rgb(237, 105, 57);">
                    <tr>
                      <th style="background-color:rgb(237, 105, 57);">
                        Class
                      </th>
                      <th style="background-color: rgb(237, 105, 57);">
                        Section
                      </th>
                      <th style="background-color:rgb(237, 105, 57);">
                        Total Students
                      </th>
                      <th style="background-color: rgb(237, 105, 57);">
                        Class Teacher
                      </th>
                      <th style="background-color: rgb(237, 105, 57);">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($classess as $class)
                    <tr class=""style="background: white">
                        <td style="background: white">
                          {{$class->name}}
                        </td>
                        <td style="background: white">
                         {{$class->section}}
                        </td>
                        @if (!empty($class->students[0]))
                            <td class="center" style="background: white">
                                {{$class->students[0]->total_student}}
                            </td>
                        @else
                            <td style="background: white">
                                0
                            </td>
                        @endif
                        @if (!empty($class->teachers->Name))
                            <td style="background: white">
                                {{$class->teachers->Name}}
                            </td>
                        @else
                            <td style="background: white">
                                No Teacher Assigned
                            </td>
                        @endif
                        <td style="background: white">
                            <a style="font-size: 2.3vw;" href="/admin/academics/class-update-page/{{$class->id}}"><i class="bx bxs-edit"></i></a>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
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
