@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7)">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="background:rgb(9, 9, 9);color:white;padding:10px;border-radius:10px;width:22rem">Parents | Administrator </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/admin/administrator/parent-create-page" style="max-width: 300px; position: absolute; right: 20px; text-decoration: none; color: rgb(249, 246, 245); background: rgb(237, 105, 57); padding: 10px; margin: -50px 0 0 0; border-radius: 30px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;""><i class='bx bxs-user-plus' ></i> Add New Parent</a>
              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New Subject</a> --}}


              <div class="table-responsive pt-6">
                <table id="example" class="table table-lg table-striped table-bordered">
                  <thead style="background-color: aliceblue;">
                    <tr>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                        Parent Code
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                        Father Name
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                        Mother Name
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                       Address
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                       Contact
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                        No. Students
                      </th>
                      <th style="background-color:rgb(237, 105, 57);color:white">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($parents as $parent)
                    <tr class="table-dange">
                        <td>
                            {{$parent->ParentCode}}
                          </td>
                        <td>
                          {{$parent->FatherName}}
                        </td>
                        <td>
                            {{$parent->MotherName}}
                          </td>
                        <td>
                         {{$parent->Address}}
                        </td>
                        <td>
                          {{$parent->FatherContact}}
                        </td>
                        @if (count($parent->students)>0)
                            <td>
                                {{count($parent->students)}}
                            </td>
                        @else
                            <td>
                                0
                            </td>
                        @endif

                        <td>
                            <a style="font-size: 2.3vw;" href="/admin/academics/class-update-page/{{$parent->id}}"><i class="bx bxs-edit"></i></a>
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
