@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Class Timetable | Academics </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/admin/academics/class-create-page"><i class='bx bxs-user-plus' ></i> Add New Class</a>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" onclick="printdiv();">Print Timetable</button>

              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New Subject</a> --}}

                @if (Session::has('delete'))
                    <span style="background-color: rgb(255, 59, 59); color:black;">{{Session::get('delete')}}</span>
                @endif
              <div id="printdiv">
                <div>
                    <span>Class Timetable: {{$classroom->name}}</span>
                </div>
                <div class="table-responsive pt-6">
                    <table id="example" class="table table-sm table-striped table-bordered">
                      {{-- <thead style="background-color: aliceblue;">

                      </thead> --}}
                      <tbody>
                        <tr>
                            <th>
                              Monday
                            </th>
                            @if (!empty($routines['Monday']))
                              @foreach ($routines['Monday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Tuesday
                            </th>
                            @if (!empty($routines['Tuesday']))
                              @foreach ($routines['Tuesday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Wednesday
                            </th>
                            @if (!empty($routines['Wednesday']))
                              @foreach ($routines['Wednesday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Thursday
                            </th>
                            @if (!empty($routines['Thursday']))
                              @foreach ($routines['Thursday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Friday
                            </th>
                            @if (!empty($routines['Friday']))
                              @foreach ($routines['Friday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Saturday
                            </th>
                            @if (!empty($routines['Saturday']))
                              @foreach ($routines['Saturday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                          <tr>
                            <th>
                              Sunday
                            </th>
                            @if (!empty($routines['Sunday']))
                              @foreach ($routines['Sunday'] as $day)
                                <td>
                                  <div>{{$day->subjects->Name}}</div>
                                  <div>{{$day->start_time}} - {{$day->end_time}}</div>
                                  <div>{{$day->room_number}}</div>
                                </td>
                              @endforeach
                            @endif
                          </tr>

                      </tbody>
                    </table>
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

  <script>
    function printdiv(e) {
        // e.preventDefault();
        var headstr = "<html><head><title>Rapid School</title></head><body>";
        var footstr = "</body>";
        var newstr = document.getElementById("printdiv").innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr+newstr+footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
  </script>

@endsection
