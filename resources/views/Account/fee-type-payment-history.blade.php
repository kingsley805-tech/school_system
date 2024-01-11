@extends('layouts.admin')
@section('content')

    <!-- partial:partials/_navbar.html -->
    
      <!-- partial -->
      <div class="main-panel"  style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting - Payment History</strong></li>
            
            
          </ol>
        </nav>
        <div class="content-wrapper">
         
      
          <div class="row" style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:#ea5f02">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $feetype}} - Session: 2022-2023 <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute;right:20px;text-decoration:none;"><i style="font-size: 20px;" class='bx bxs-user-plus' ></i> All Payment History</a></h4>
                  
                    <div class="table-responsive pt-6">
                      <table id="example" class="table table-sm table-striped table-bordered">
                        <thead style="background-color: rgb(36, 38, 37);color:white">
                          <tr>
                            
                            <th style="background-color:rgb(237, 105, 57);color:white">
                                Student
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                                Student ID
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Class
                            </th>

                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Description
                             </th>

                             <th style="background-color:rgb(237, 105, 57);color:white">
                               Amount
                               </th>

                               <th style="background-color:rgb(237, 105, 57);color:white">
                                 Date
                                </th>
                                <th style="background-color:rgb(237, 105, 57);color:white">
                                    Receiver
                                   </th>
                            

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($payments as $fee)                      
                          <tr class="table-dange"style='background:'>
                            <td>
                              {{$fee->StudentName}}
                            </td>
                            <td>
                              {{$fee->IndexNumber}}
                            </td>

                            <td>
                                {{$fee->classroom}}
                              </td>
                              <td>
                                {{$fee->Description}}
                              </td>

                            <td>
                              {{ number_format($fee->payingAmount, 2, '.', '') }}
                            </td>

                            <td>
                                {{$fee->PaymentDate}}
                              </td>
                          
                            <td>
                              {{$fee->receiver}}
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
        <!-- partial:partials/_footer.html -->
        @include('../Includes/footer');
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@endsection

 

